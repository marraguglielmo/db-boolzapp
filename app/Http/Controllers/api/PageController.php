<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;

class PageController extends Controller
{
    public function index()
    {
        $user = User::with('chats')->get();
        return response()->json($user);
    }
}
