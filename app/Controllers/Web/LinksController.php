<?php

namespace App\Controllers\Web;

use App\Models\Link;
use Phplite\Http\Request;
use Phplite\Http\Response;
use Phplite\Session\Session;
use Phplite\Validation\Validate;

class LinksController {
    /**
     * Show home page
     *
     * @return \Phplite\Http\Response
     */
    public function store() {
        $validation = Validate::validate([
            'full_url' => 'required|min:2|url',
        ], true);

        if ($validation) {
            return $validation;
        }

        $short_url = unique('links', 'short_url');
        $data = ['full_url' => Request::post('full_url'), 'short_url' => $short_url];
        $data = auth('users') ? array_merge($data, ['user_id' => auth('users')->id]) : $data;

        $link = Link::insert($data);

        $url = url('link/' . $link->short_url);

        return Response::json(['url' => $url]);
    }

    /**
     * Link page
     *
     * @param string $link
     * @return \Phplite\Url\Url
     */
    public function link($link) {
        $link = Link::where('short_url', '=', $link)->first();

        if (! $link) {
            return view('errors.404');
        }
        Link::where('id', '=', $link->id)->update(['click' => ++$link->click]);
        return redirect($link->full_url);
    }

    /**
     * My links
     *
     * @return \Phplite\View\View
     */
    public function myLinks() {
        $title = "My links";
        $links = Link::where('user_id', '=', auth('users')->id)->paginate();

        return view('web.links.index', ['title' => $title, 'links' => $links]);
    }

    /**
     * delete link by the given id
     *
     * @param string $id
     *
     * @return \Phplite\Url\Url
     */
    public function delete($id) {
        $user_id = auth('users')->id;
        $link = Link::where('id', '=', $id)->where('user_id', '=', $user_id)->first();

        if (! $link) {
            Session::set('message', 'The link is not found');
            return redirect(previous());
        }

        Link::where('id', '=', $id)->delete();
        Session::set('message', 'The link is deleted successfully');
        return redirect(previous());
    }
}