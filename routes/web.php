<?php

use App\contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>  'App\Http\Middleware\Hotels'], function () {
    Route::get('hotels/home', function () {
        // can only access this if type == A
        return view('Hotels/home');
    });

    Route::get('hotels/feedback', function () {
        $user_Id = Auth::user()->id;

        // can only access this if type == A
        $reviewItems = DB::table('feedback')->where('ServiceProviderId','=',$user_Id)->get();
        return view('Hotels/feedback')->with('reviewItems',$reviewItems);
    });


    Route::get('hotels/contact', function () {
        $user_type = Auth::user()->type;
        $user_name=Auth::user()->name;

        $contact = DB::table('contacts')->where('name', $user_name)->where('type',$user_type)->first();
        if($contact!=null){
            return view('Hotels/contact')->with('contact',$contact);

        }
        // can only access this if type == A
        return view('Hotels/contact');
    });

    Route::get('hotels/gallery', function () {
        $user_Id=Auth::user()->id;
        $images = DB::table('images')->where('ServiceProviderId','=',$user_Id)->get();

            return view('Hotels/gallery')->with('images',$images);

     });
    Route::post("/hotels/gallery/image", 'contactController@imageSave');

    Route::post("hotels/contact/save", 'contactController@store');

});