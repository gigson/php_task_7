<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $one_to_one_joined = User::join("phones", "user_id", "users.id")->get();
        $one_to_one_joined = json_encode($one_to_one_joined, JSON_PRETTY_PRINT);

        $one_to_one = User::with(["phone"])->get();
        $one_to_one = json_encode($one_to_one, JSON_PRETTY_PRINT);

        $one_to_many_joined = User::leftjoin("comments", "user_id", "users.id")->get();
        $one_to_many_joined = json_encode($one_to_many_joined, JSON_PRETTY_PRINT);

        $one_to_many = User::with(["comments"])->get();
        $one_to_many = json_encode($one_to_many, JSON_PRETTY_PRINT);

        $many_to_one_joined = Comment::rightjoin("users", "users.id", "user_id")->get();
        $many_to_one_joined = json_encode($many_to_one_joined, JSON_PRETTY_PRINT);

        $many_to_one = Comment::with(["user"])->get();
        $many_to_one = json_encode($many_to_one, JSON_PRETTY_PRINT);

        $many_to_many = User::with(["roles"])->get();
        $many_to_many = json_encode($many_to_many, JSON_PRETTY_PRINT);;

        return view('home', [
            "one_to_one_joined" => $one_to_one_joined,
            "one_to_one" => $one_to_one,
            "one_to_many_joined" => $one_to_many_joined,
            "one_to_many" => $one_to_many,
            "many_to_one_joined" => $many_to_one_joined,
            "many_to_one" => $many_to_one,
            "many_to_many" => $many_to_many
        ]);
    }
}
