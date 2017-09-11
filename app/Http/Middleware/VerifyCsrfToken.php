<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'admin/panel/upload-image',
        '400053881:AAE8A8Z0amhX4qt2os7w4WFye1DfV1tnTxg/webhook'
    ];
}
