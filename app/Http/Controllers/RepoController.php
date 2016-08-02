<?php

namespace App\Http\Controllers;

use App\Build;
use App\Repository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RepoController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = [];
        try {
            $view['lastBuild'] = Build::getlatest();
            $view['repositories'] = Repository::whereActive(1);
        } catch (ModelNotFoundException $e) {
            $view['error'] = $e->getMessage();
        }

        return view('home', $view);
    }

    public function show($id)
    {

    }

    public function install()
    {

    }
}
