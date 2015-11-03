<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class RandomUserController extends Controller {

    public function __construct() {
        # Put anything here that should ha  ppen before any of the other actions
    }

    /**
    * Responds to requests to GET /loremipsum/{noOfParas}
    */
    public function getRandomUser($noOfUsers) {
        return $noOfUsers .' Users Generated';
    }

}

?>
