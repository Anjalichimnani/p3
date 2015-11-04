<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;
use Illuminate\Http\Request;

class LoremIpsumController extends Controller {

    public function __construct() {
        # Put anything here that should ha  ppen before any of the other actions
    }

    /**
    * Responds to requests to GET /loremipsum/{noOfParas}
    */
    public function getLoremIpsum($noOfParas=2) {

        $generator = new Generator();
        $paragraphs = $generator->getParagraphs ($noOfParas);

        return view('loremipsum.LoremIpsum')->with('title', 'Lorem Ipsum Generator')->with('paragraphs', $paragraphs);
    }

    public function postLoremIpsum(Request $request) {

        $noOfParas = $request->input('noOfParas');
        $generator = new Generator();
        $paragraphs = $generator->getParagraphs ($noOfParas);

        return view('loremipsum.LoremIpsum')->with('title', 'Lorem Ipsum Generator')->with('paragraphs', $paragraphs);
    }

}

?>
