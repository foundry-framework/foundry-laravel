<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ApiController extends BaseController
{
    use AuthorizesRequests;

    /**
     * Handles all API Calls
     *
     * @param Request $request
     */
    public function handle(Request $request){

        $uri = substr($request->getRequestUri(),1);

        $uri = substr($uri, strpos($uri, '/', strpos($uri, '/') + 1) + 1);

        return json_encode($uri);

        fndry()->call('','', $request->method(), $request->all());
    }
}
