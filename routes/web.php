<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    return view('welcome');
});
Route::get('contoh_1',function(){
    return view('craft.index');
})->name('contoh1');

Route::get('contoh_2',function(){
    return view('creative-agency.index');
})->name('contoh2');

Route::get('contoh_3',function(){
    return view('expro.index');
})->name('contoh3');

Route::get('contoh_4',function(){
    return view('wexim.index');
})->name('contoh4');

// Route::get('hitung',function(){
//     return view('hitung');
// });
// Route::get('min_max','TestController@minMax');
// Route::get('/', 'TestController@dashboard')->middleware('checkLogin');
// Route::get('login', 'TestController@login');
// Route::post('login/process', 'TestController@loginProcess');
// Route::get('logout', 'TestController@logout');
// Route::get('login/{provider}','TestController@toProvider');
// Route::get('login/{provider}/callback','TestController@callback');
// // Route::get('email',function(){
// //     return view('email');
// // });
// // Route::get('trans','TestController@trans');
// Route::get('knowledge',function(){
//     $ar = [];
//     $ar['title'] = 'Perangana dan pembuatan basis pengetahuan';
//     $ar['arti'] = 'Pemrosesan pengetahuan dari para ahli di bidangnya untuk pengunaan aplikasi basis pengetahuan';
//     $ar['tahapan'] = [
//         'Pengumpulan' => 'pengumpulan pengetahuan termasuk pengumpulan dari ahli, buku, dokumen, sensor atau komputer',
//         'Perepresentasian' => 'pengetahuan yang sudah di kumpulkan akan di atur dan di buatakan peta pikiran untuk di terjemahkan ke aplikasi',
//         'Validasi' => 'pengetahaun akan di validasi dan diverifikasi hingga di anggap memnuhi kriteria bedasarkan penilai',
//         'Inferensi' => '',
//         'Pengamatan dan kebenaran' => ''
//     ];
//     return $ar;
// });