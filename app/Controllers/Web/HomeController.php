<?php

namespace App\Controllers\Web;

class HomeController {
    /**
     * Show home page
     *
     * @return \Phplite\View\View
     */
    public function index() {
        $title = "Home page";

        return view('web.home.index', ['title' => $title]);
    }
}