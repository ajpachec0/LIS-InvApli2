<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    
    protected $addHttpCookie = true;

    protected $except = [
        'http://localhost:8000/libro/store', //This is the url that I dont want Csrf for postman.

        

 ];



}