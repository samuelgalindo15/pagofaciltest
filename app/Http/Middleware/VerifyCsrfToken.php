<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * Los URIs que deben ser excluidos de la verificación CSRF
     *
     * @var array
     */
    protected $except = [
        'servicio'
    ];
}
