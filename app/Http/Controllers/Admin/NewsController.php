<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Route;

class NewsController extends Controller
{
    //
    public function __construct()
    {
        $this->Auth = array(
            'DATABAR', 'DATALOGIC', 'BIXOLON'
        );
    }

    public function index()
    {   
        return dd($this->Auth);
    }
}
