<?php

namespace App\Controllers\Admin;

class DashboardController {
    /**
     * Admin dashboard
     *
     * @return \Phplite\View\View
     */
    public function index() {
        $title = "Dashboard";
        return view('admin.dashboard.index', ['title' => $title]);
    }
}