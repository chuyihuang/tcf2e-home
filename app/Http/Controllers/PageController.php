<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Meetup;
use Illuminate\Http\Request;

class PageController extends Controller {

    public function index()
    {
        $meetups = Meetup::latest('published_at')->published()->get();

        return view('home.index', compact('meetups'));
	}

    public function about()
    {
        return view('about.index');
    }

    public function meetups()
    {
        return view('meetups.index');
    }

    public function resources()
    {
        return view('resources.index');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

}
