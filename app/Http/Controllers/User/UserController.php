<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\Controller;

class UserController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/index', [
            'layout' => 'side-menu-user'
        ]);
    }
}
