<?php

namespace App\Controllers\Admin;

use App\Models\Link;
use App\Models\User;
use Phplite\Http\Request;
use Phplite\Session\Session;

class LinksController {
    /**
     * Show list of links
     *
     * @return \Phplite\View\View
     */
    public function index() {
        $links = Link::get();
        $title = "Links";
        foreach($links as $link) {
            if ($link->user_id != null) {
                $link->user = User::where('id', '=', $link->user_id)->first();
            }
        }

        return view('admin.links.index', ['links' => $links, 'title' => $title]);
    }

    /**
     * Delete existing link
     *
     * @param string $id
     * @return \Phplite\Url\Url
     */
    public function delete($id) {
        $link = Link::where('id', '=', $id)->first();
        if (! $link) {
            Session::set('message', 'The likn is not found');
            return redirect(url('admin-panel/links'));
        }

        Link::where('id', '=', $id)->delete();
        Session::set('message', 'The link is deleted successfully');
        return redirect(url('admin-panel/links'));
    }
}