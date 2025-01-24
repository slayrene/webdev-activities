<?php

use App\Http\Controllers\Blogs2Controller;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function(){
    Route::get('home', function() {
        return view('layout/master');
    })->name('home');
    
    Route::get('user/{id}/{name}', function($id, $name) {
        return "<a href='".route("settingsPage",['id' => $id, 'name' => $name])."'>"."About</a>";
    });
    
    Route::get('about', function() {
        return "About Page";
    })->name("aboutPage");
    
    Route::get('settings/{id}/{name}', function($id, $name) {
        return $id . " " . $name;
    })->name("settingsPage");

    // Activity 2 --------------------- 

    Route::get('activity2', function() {
        return view('layout/activity2');
    })->name("activity2");

    // Activity 3 --------------------- 

    Route::get('homeco', function() {
        return view('common.home');
    })->name("homeco");

    Route::get('aboutco', function() {
        $about = 'This is about page.'; 
        $about2 = 'This is about page.2';
        // return view('common.about',['aboutpage' => $about]);
        return view('common.about', compact ('about' , 'about2'));
    })->name("aboutco");

    Route::get('contact', function() {
        $contact = 'This is contact page.'; 
        return view('common.contact', compact ('contact'));
    })->name("contact");

    // Route::get('blogs', function() {
    //     $blogs = [
    //             [
    //                 'title' => 'Title one',
    //                 'body' => 'This is body',
    //                 'status' => 0,
    //             ],   
    //             [
    //                 'title' => 'Title two',
    //                 'body' => 'This is body two',
    //                 'status' => 1,
    //             ],   
    //             [
    //                 'title' => 'Title three',
    //                 'body' => 'This is body three',
    //                 'status' => 1,
    //             ],   
    //             [
    //                 'title' => 'Title four',
    //                 'body' => 'This is body four',
    //                 'status' => 1,
    //             ],   
    //             [
    //                 'title' => 'Title five',
    //                 'body' => 'This is body five',
    //                 'status' => 1,
    //             ],   
    //             [
    //                 'title' => 'Title six',
    //                 'body' => 'This is body six',
    //                 'status' => 1,
    //             ],   
    //             [
    //                 'title' => 'Title seven',
    //                 'body' => 'This is body seven',
    //                 'status' => 0,
    //             ],   
    //     ];

    //     return view('common.blogs', compact ('blogs'));
    // })->name("blogs");

    // Activity 4
    Route::get('homeco', function() {
        $mains = [
                [
                    'title' => 'Siamese',
                    'body' => 'Known for their striking blue almond-shaped eyes and sleek, short coat, Siamese cats are vocal and social, often forming close bonds with 
                               their owners. They have a slender, graceful body and are highly intelligent.',
                    'image' => 'siamese.jpg',
                ],   
                [
                    'title' => 'British Shorthair',
                    'body' => 'These cats are stocky, with round faces and dense, plush coats. British Shorthairs are known for their calm, easygoing nature and are often 
                               affectionate but not overly demanding of attention.',
                    'image' => 'british.jpg',
                ],   
                [
                    'title' => 'Ragdoll',
                    'body' => 'Ragdolls are large, affectionate cats with soft, semi-long fur and bright blue eyes. They are known for their relaxed temperament and 
                               tendency to go limp when picked up, hence the name "Ragdoll."',
                    'image' => 'ragdoll.jpg',

                ],   
                [
                    'title' => 'Munchkin hihi',
                    'body' => 'Characterized by their short legs due to a genetic mutation, Munchkins are small but energetic and playful. Despite their short legs, 
                               they are quite agile and love to explore.',
                    'image' => 'munchkin.jpg',
                ],   
                [
                    'title' => 'Persian',
                    'body' => 'Persian cats have long, luxurious fur and flat, round faces. They are gentle and quiet, preferring a relaxed environment, making them 
                               great companions for calm households.',
                    'image' => 'persian.jpg',
                ],   
                [
                    'title' => 'Pusang galet',
                    'body' => 'Meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow',
                    'image' => 'act4444.jpg',
                ],   
        ];
        return view('common.home', compact ('mains'));
    })->name("homeco");

    // Activity 5 -------------------

    Route::get('blogs',[BlogsController::class, 'index'])->name("blogs");

    Route::resource('home1', HomeController::class);

    Route::get('login', [LoginController::class, 'index'])->name('login');

    Route::post('login',[LoginController::class, 'loginSubmit'])->name('login.submit');

});

    Route::get('get-blogs', [BlogsController::class, 'getBlogsData'])->name('getBlogs');
    Route::get('insertBlogs', [BlogsController::class, 'insertData'])->name('insertData');
    Route::get('updateBlogs', [BlogsController::class, 'updateBlogs'])->name('updateBlogs');
    Route::get('deleteBlogs', [BlogsController::class, 'deleteBlogs'])->name('deleteBlogs');
    Route::get('retrieveBlogsPerCat', [BlogsController::class, 'retrieveBlogsPerCat'])->name('retrieveBlogs');
    Route::get('getBlogsModel', [BlogsController::class, 'getBlogsModel'])->name('getBlogsModel');
    Route::get('insertUsingModel', [BlogsController::class, 'insertUsingModel'])->name('insertUsingModel');

    
    Route::get('/modelSamples/{id}/{title}', [BlogsController::class, 'modelSamples'])->name('modelSamples');

    // Activity 4!
    Route::get('/blogsPage', [BlogsController::class, 'viewBlogs'])->name('blogsPage');


    // Thursday F2F Model Controller 
    Route::get('/data', [Blogs2Controller::class, 'data'])->name('blog.get');
    Route::post('/blogsPage', [Blogs2Controller::class, 'blogCreate'])->name('blog.create');


Route::fallback(function() {
    // return response()->file(public_path('image1.png'));
    // return "<div style='text-align: center;'> <img src='" . asset('image1.png') . "'>";
    return redirect()->route('home');
}); 