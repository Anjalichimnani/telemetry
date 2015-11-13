<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MainController@getIndex');

Route::get('/loremipsum/{noOfParas?}', 'LoremIpsumController@getLoremIpsum');

Route::post('/loremipsum', 'LoremIpsumController@postLoremIpsum');

Route::get('/randomuser/{noOfUsers?}', 'RandomUserController@getRandomUser');

Route::post('/randomuser', 'RandomUserController@postRandomUser');

//logs
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

//To view functioning of Get and POST
Route::get('/new', function() {

    $view  = '<form method="POST">';
    $view .= csrf_field(); # This will be explained more later
    $view .= 'Title: <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;

});

Route::post('/new', function() {

    $input =  Input::all();
    print_r($input);

});

//Practise Route to see app::environment
Route::get('/practice', function () {
    echo App::environment();

    $data = Array('foo' => 'bar');
    Debugbar::info($data);
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    $random = new Rych\Random\Random();
    return ' ' .$random->getRandomString(8);
});


//Intial Route for Lorem Ipsum
// Route::get('/loremipsum/{noOfParas}', function($noOfParas) {
//     return 'This is loremipsum Page for ' .$noOfParas .' Paragraph(s)';
// });

//Intial Route for Random User
// Route::get('/randomuser/{noOfUsers}', function($noOfUsers) {
//     return $noOfUsers.' Users Generated';
// });
