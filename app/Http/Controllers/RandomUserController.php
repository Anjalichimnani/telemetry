<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow\LoremIpsum\Generator;
use Storage;

class RandomUserController extends Controller {

    public function __construct() {
        # Put anything here that should ha  ppen before any of the other actions
    }

    /**
    * Responds to requests to GET /loremipsum/{noOfParas}
    */
    public function getRandomUser($noOfUsers = 2) {
        return $noOfUsers .' Users Generated';
    }

    public function postRandomUser(Request $request) {

        //Validate that Number of Users is integer
        $this->validate($request, [
            'noOfUsers' => 'required|numeric',
       ]);

        $contents = Storage::get('libraries/Names.txt');
        $content_array = explode ('<@>',$contents);

        $noOfUsers = $request->input('noOfUsers');
        $withProfile = $request->input('withProfile');

        $users = array();

        $content_array_size = sizeof($content_array);
        for ($i = 0; $i < $noOfUsers; $i++) {
            $random = new \Rych\Random\Random();
            $randomNumber = $random->getRandomInteger(0, $content_array_size - 1);

            $name = $content_array[$randomNumber];
            $email = str_replace(" ","_",$name);
            $email = "Email:\n".$email."@webdevelopment.info.com"."\n\n";

            if ($withProfile == 'Yes') {
                $generator = new Generator();
                $profile = $generator->getParagraphs (1);
                $profile = implode('<p>',$profile);

                $email= $email."Profile:\n".$profile;
            }

            $randomNumber = $random->getRandomInteger(1, 5);
            $userPic = 'img\User_'.$randomNumber.'.jpg';

            $users[$name] = array($email,$userPic);
        }

        return view('randomuser.randomUser')->with('title', 'Random User Generator')->with('users', $users);

    }

}

?>
