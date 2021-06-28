<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Cms\Models\Users;


class UserRole extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
