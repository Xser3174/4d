<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/hello', function () {
//     return view ('hello');
// });

// Route::get('/Bello',function(){
//     return view ('Bello');

// });

// Route::get('/user','userController@index');

// Route::get('/user/{id}',function($id){
//     return $id;
// });



// Route::get('/articles/',function(){
//     return 'Aritcle List';
// });


// Route::get('/articles/detail',function(){
//     return 'Aritcle Detail';
// })->name('article.detail');


// /** redirect  **/
// Route::get('/articles/more',function(){
//     //return redirect('Aritcle Detail');
//     return redirect()->route('article.detail');
// });

// //Route::get('/student','userController@index');
// Route::get('/student',function(){
//     return 'Student List';
// });

// Route::get('/student/boy',function(){
//     return 'Student Detail';
// })->name('student.boy');

// Route::get('/student/search/mdy/{id}',function(){
//    //return redirect('/student/boy');
//     return redirect()->route('Student.boy');
// });


//  /product/view/{id}/comments/add

// Route::get('/form','formController@index');
// Route::get('/form/save','formController@save')->name('form.save');
// Route::get('/form/view','formController@view')->name('form.view');
// Route::get('/form/edit','formController@edit')->name('form.edit');

// Route::post('/form',function(){

//     switch ($_REQUEST['action']) {
//         case 'save':
//             // Save model
            
//             //return redirect()->action('formController@save');
//            // return redirect('/form');
//            return redirect()->route('form.save');

//             break;

//         case 'view':
            
//             //return redirect()->action('formController@view');

//             return redirect()->route('form.view');
//             break;

//         case 'edit':
//             // Redirect to advanced edit
//            // return redirect('form.edit');

//            //return redirect()->action('formController@edit');

//            return redirect()->route('form.edit');
//             break;
//     }

// });

// Route::get('/registor',function () {
//         return view ('registor');
//     });

// Route::get('/registor','registorController@index');
// Route::post('/registor','registorController@post')->name('reg_post');

// Route::get('/home', function () {
//     return response('Hello World', 200)
//                   ->header('Content-Type', 'text/plain');
// });


// Route::get('/home', function () {
//     return response($content="zzz..")
//     ->header('Content-Type', $type='text/html')
//             ->header('X-Header-One', 'Header Value')
//             ->header('X-Header-Two', 'Header Value');

//      });

// Route::get('/zzz',function () {
       
//     //    return redirect()->route('reg_post')->back('');
//     return redirect()->away('https://www.google.com');
//     });

//     Route::get('/articles/detail',function(){
//     return 'Aritcle Detail';
// })->name('article.detail');

// Route::get('/emp','EmployeeRegisterController@index');



// Route::post('/emp','EmployeeRegisterController@post')->name('emp_post');

// Route::get('login','loginController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// //Route::get('/int','loginController@index')->middleware('auth');

Route::get('blah', function () {
    return view('lotteryRegister');
});

// Route::resource('intern', 'InternController');
// Route::resource('/hello', 'InternController@show');

Route::resource('intern', 'InternController', [
    'names' => [
        'index' => 'intern',
        'store' => 'intern.store',
        'edit' => 'intern.editer',
        'update' => 'intern.update',
        
    ]
]);