<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Auth;

class Controller extends BaseController
{
    protected  $Auth_User;
    protected  $Auth_Status;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

}
