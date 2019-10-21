<?php

namespace App\Http\Controllers;

use App\Github\ApiData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class TaskController extends Controller
{
    private $api;

    public function __construct(Apidata $api)
    {
        $this->api = $api;
    }

    public function showUserData()
    {
        $login = Auth::user()->name;
        $path = 'users/' . $login;
        $user = $this->api->saveApiData($path);
        $repos = $this->api->saveApiData($path.'/repos');
        return view('Github/home', [
            'user' => $user,
            'repos' => $repos
        ]);
    }

    public function searchUsers(Request $request)
    {
        $login = Auth::user()->name;
        $path = 'users/' . $login;
        $user = $this->api->saveApiData($path);
        $path2 = 'users/' . $request->q;
        $results = $this->api->saveApiData($path2);
        return view('Github/search-results', [
            'results' => $results,
            'user' => $user
        ]);
    }

    public function user(Request $request)
    {
        $login = $request->user;
        $path = 'users/' . $login;
        $user = $this->api->saveApiData($path);
        $repos = $this->api->saveApiData($path.'/repos');
        return view('Github/user', [
                'user' => $user,
                'repos' => $repos
            ]);
    }
}
