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
    return view('index');
});

Route::get('/add', function () {
    return view('pages.add');
});

// Route::get('/edit', function () {
//     return view('pages.edit');
// });

Route::get('/edit', function () {

    $allPosts = App\Uzdevums::all();
    $singlePost = App\Uzdevums::find(3);
    // dd($singlePost->Virsraksts);
            return view('pages.edit', [
                "posts" => $allPosts,
            ]);
        });
    
   
    
Route::get('/edit/{id}', function ($id) {
    $singlePost = App\Uzdevums::find($id);
        
    return view('pages.edit', [
        'posts' => $singlePost,
    ]);
        
});

// Route::get('/RAUSE', function () {
//     return view('RAUSE');
// });

Route::get('/', function () {

$allPosts = App\Uzdevums::all();
$singlePost = App\Uzdevums::find(3);
// dd($singlePost->Virsraksts);
        return view('index', [
            "posts" => $allPosts,
        ]);
    });



Route::any('/add', function () {
    return view('pages.add');
});
Route::any('/submit-newblogpost', function () {
    $Virsraksts    = Request::post('Virsraksts', null);
    $Apraksts     = Request::post('Apraksts', null);

    $post = new App\Uzdevums;
    $post->Virsraksts   = $Virsraksts;
    $post->Apraksts    = $Apraksts;
    $post->Datums = $Datums;
    
    $post->save();
    // return redirect('/blog');
    //return view('pages.contact'); 
});