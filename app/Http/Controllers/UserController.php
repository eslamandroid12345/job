<?php

namespace App\Http\Controllers;

use App\Jobs\UserStatusJob;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index(){

        UserStatusJob::dispatch()->delay(now()->second(2));

        return "users updated successfully";

    }
}
