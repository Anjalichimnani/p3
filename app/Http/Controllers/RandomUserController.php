<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;
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


        $contents = Storage::disk('local')->get('libraries\Names.txt');
        $content_array = explode ('<@>',$contents);

        \Debugbar::info($content_array[2]);
        $noOfUsers = $request->input('noOfUsers');
        $withProfile = $request->input('withProfile');
        \Debugbar::info($withProfile);
        return $noOfUsers .' Users Generated';

    }

}

?>
