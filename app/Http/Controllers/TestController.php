<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\BadResponseException;
use App\User;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\LocationModel;
use App\LocationHasil;
use App\Transaction;

class TestController extends Controller
{
    public function minMax(Request $request){
        $ab = LocationModel::orderBy('id','ASC')->get();
        $b = [];
        foreach($ab as $if=> $a){
            $b['harusnys'][$a->id] = explode(' ',$a->name); 
            $ar =  explode(' ',$a->name); 
            $in = array_search('-', $ar);
            if($in != false){
                for($i=0;$i<$in;$i++){
                    $b['province'][$if][] = $ar[$i];
                }
                for($j=$in+1;$j<count($ar);$j++){
                    $b['kota'][$if][] = $ar[$j];
                }
            }else{
                $b['province'][$if] = $ar;
                $b['kota'][$if] = null;
            }
        }
        
        // dd($b['kota']);

        $hasil = [];
        for($l=0;$l<$ab->count();$l++){
            $hasil[$l]['id'] = $ab[$l]->id;
            $hasil[$l]['agency_location_id'] = $ab[$l]->agency_location_id;
            $hasil[$l]['language_id'] = $ab[$l]->language_id;
            $hasil[$l]['name'] = $ab[$l]->name;
            $hasil[$l]['formatted_address'] = $ab[$l]->formatted_address;
            $hasil[$l]['latitude'] = $ab[$l]->latitude;
            $hasil[$l]['longitude'] = $ab[$l]->longitude;
        }
        for($d=0;$d<$ab->count();$d++){
            // dd($b['province'][$d]);
            if($b['province'][$d] == null){
                $hasil[$d]['province'] = null;
            }
            if(count($b['province'][$d]) != 1){
                $hasil[$d]['province'] = implode(' ',$b['province'][$d]);
            }else{
                $hasil[$d]['province'] = $b['province'][$d][0];
            }
        }
        for($g=0;$g<$ab->count();$g++){
            // dd($b['kota'][$g]);
            if($b['kota'][$g] == null){
                $hasil[$g]['city'] = null;
            }else{
                if(count($b['kota'][$g]) != 1){
                    $hasil[$g]['city'] = implode(' ',$b['kota'][$g]);
                }else{
                    $hasil[$g]['city'] = $b['kota'][$g][0];
                }
            }
            
        }
        // dd($hasil);
        foreach($hasil as $h){
            LocationHasil::create($h);
        }
        dd('kelar');
        $nilai = $request->nilai;
        if($nilai != null){
            $min = (int)$nilai[0];
            $max = (int)$nilai[0];
            for($i=0;$i <count($nilai);$i++){
                if((int)$nilai[$i] < $min){
                    $min = (int)$nilai[$i];
                }
                if((int)$nilai[$i] > $max){
                    $max = (int)$nilai[$i];
                }
            }
        }
        return response()->json([
            'min' => (int)$min,
            'max' => (int)$max
        ],200);
    }
    public function login(){
        return view('login');
    }
    public function loginProcess(Request $request){
        $validate = User::where('email',$request->email)->first();
        if($validate){
            $pass = User::where([
                'email' => $request->email,
                'password' => md5($request->password)
            ])->first();
            if($pass){
                if($pass->password == md5('from_api_facebook')){
                    session()->put('error','Akun sudah terhubung ke facebook, silakang login dengan facebook');
                    return redirect('/login');
                }else{
                    session()->put('user',$pass);
                    return redirect('/');   
                }
            }else{
                session()->put('error','Password Salah');
                return redirect('/login');
            }
        }else{
            session()->put('error','Email tidak ditemukan');
            return redirect('/login');
        }
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function toProvider($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider){
        $user = Socialite::driver($provider)->user();
        $response = $this->guzel(null,'GET',$user->token);
        $validate = User::where('email',$response->email)->first();
        if($validate){
            session()->put('user',$validate);
            return redirect('/');
        }else{
            $create = User::create([
                'name' => $response->name,
                'email' => $response->email,
                'picture_url' => $response->picture->data->url,
                'password' => md5('from_api_facebook'),
                'token' => $user->token
            ]);
            Mail::to($create->email)->send(new SendEmail($create));
            // dd($create);
            if($create){
                session()->put('user',$create);
                return redirect('/');
            }else{
                return redirect()->back();
            }
        }
    }
    public function email(){
        return view('email');
    }
    
    public function guzel($req = [],$method = 'GET',$token){

        $field = ['name','email','picture'];
        $uri = 'https://graph.facebook.com/v2.10/me?fields='.implode(',',$field).'&access_token='.$token;
        // dd($request['header']);
        $client = new Client();
        try {
            $response = $client->request($method,$uri);
            $ress = json_decode($response->getBody()->getContents());
            return $ress;
        }catch (GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
        }
        // $response = $client->post($uri,null,$request);    
    }
    public function logout(){
        User::where('id',session()->get('user')->id)->update([
            'last_login' => Carbon::now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s')
        ]);
        session()->flush();
        return redirect('/login');
    }
    public function trans(){
        $data = Transaction::with('tour','car','hotel','plane')->where('status_id',2)->get();
        $ar = [];
        foreach($data as $i=>$dt){
            $ar[$i]['transaction_number'] = $dt->transaction_number;
            $ar[$i]['payment_method'] = $dt->payment_method;
            $ar[$i]['total_price'] = $dt->total_price;
            $ar[$i]['total_paid'] = $dt->total_paid;
            $ar[$i]['tour'] = [];
            $ar[$i]['car'] = [];
            $ar[$i]['hotel'] = [];
            $ar[$i]['flight'] = [];
            foreach($dt->tour as $itr=>$tr){
                $ar[$i]['tour'][$itr]['tour_name'] = $tr->tour_name;
            }  
            foreach($dt->car as $icr=>$cr){
                $ar[$i]['car'][$icr]['agency_name'] = $cr->agency_name;
            }
            foreach($dt->hotel as $iht=>$ht){
                $ar[$i]['hotel'][$iht]['hotel_name'] = $ht->hotel_name;
            }
            foreach($dt->plane as $ifl=>$fl){
                
                $ar[$i]['flight'][$ifl]['provider_name'] = $fl->provider_name;
            }
            
        }
        return response()->json($data);
    }
    public function pub_guzel($req = [],$method = 'GET'){

    }
}
