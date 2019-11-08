<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function notifications()
    {
        // mark all notifications as read
        auth()->user()->unreadNotifications->markAsRead();

        // display all
        return view('users.notifications', [
            'notifications' => auth()->user()->notifications()->paginate(2)
        ]);
    }
}
