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

class TestController extends Controller
{
    public function login(){
        return view('login');
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
}
