<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //   $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

// pull data
$schedulefile = fopen(public_path("lessonstub.json"), "r") or die("Unable to open file!");
$schedulejson = fread($schedulefile,filesize("lessonstub.json"));
$schedule = json_decode($schedulejson, false);

fclose($schedulefile);
        return view('home', ['schedule' => $schedule]);
    }
}
