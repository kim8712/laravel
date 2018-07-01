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

Route::get('/', function () {
   $posts=App\Post::orderBy('created_at', 'desc')
->limit(3)
   ->get();
    return view('welcome',compact('posts'));
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('text', function () {
    return view('layouts.lay');
});

Route::get('show', function () {
    $tasks=App\Theard::orderBy('created_at', 'desc')->paginate(5);

   return  view('show',compact('tasks','name'));

});


Route::get('/tasks/{task}', function ($id) {
   // $task = DB::table('task')->find($id);

$task = App\Theard::find($id);
    return view('threads.all',compact('task'));

});

Route::post('/task', 'TheardController@create');
Route::delete('task/{task}', 'TheardController@destroy');

Route::get('test', function () {
    $tasks=App\Theard::orderBy('created_at', 'desc')->get();

   return  view('test',compact('tasks','name'));

});

Route::get('/edit/{task}',['middleware' => 'auth', function ($id) {
   // $task = DB::table('task')->find($id);

$task = App\Theard::find($id);
    return view('threads.edit',compact('task'));

}]);
Route::post('/edit/{task}', 'TheardController@update');



/* --------------- ADMIN PANEL -------------------  */

//Route::get('panel', 'PanelController@show') ;

Route::delete('/user/{users}', 'PanelController@destroy');
Route::post('/news', 'PanelController@create');
Route::get('/news/{post}',function ($id) {   

$post = App\Post::find($id); 
$nav=App\Post::orderBy('created_at', 'desc')
->limit(10)
   ->get();
  return view('news.all',compact('post','nav'));

});



/* ---------------Mesenger PANEL -------------------  */

Route::get('message', 'MessageController@index') ;
Route::post('/messages', 'MessageController@create') ;
Route::delete('/message/{id}', 'MessageController@destroy');


/* ---------------Навигация -------------------  */

Route::get('about', 'NavController@about')->name('about');

Route::get('contact', 'NavController@contact')->name('contact');
Route::get('vakancy', 'NavController@vakancy')->name('vakancy');

Route::get('article', 'NavController@article')->name('article');

/* ---------------Верификация-------------------  */
Route::get('verify/{token}', 'VerifyController@verify') ->name('verify');

Route::get('/test', function () {

    return view('admin.usert');
});

/* ---------------ЖК-------------------  */
Route::get('/malinovka', function () {

    return view('gkhouse.maliniki');
});
Route::get('/koshelev', function () {

    return view('gkhouse.koshelev');
});
Route::get('/solnechniy', function () {

    return view('gkhouse.solnechniy');
});
Route::get('/anenki', function () {

    return view('gkhouse.anenki');
});

/* ---------------Правила подачи-------------------  */

Route::get('ruls', function () {

    return view('rules.all');
});

