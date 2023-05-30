<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Jobs\UserExperienceJob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function add(UserRequest $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $user = new User();
        $user->name = $request->input("name");
        $user->lastname = $request->input("lastname");
        $user->email = $request->input("email");

        $user->save();

        return view("home", compact('user'));
    }

    public function getExperience():void
    {
        $user = User::find(1);
        print_r($user->experience);
        UserExperienceJob::dispatch($user);
        print_r($user->experience);
    }
}
