<?php


namespace App\Classes;

use Illuminate\Http\Request;
use Spatie\WebhookClient\WebhookConfig;
use \Spatie\WebhookClient\SignatureValidator\SignatureValidator as SpatieSignatureValidator;


class SignatureValidator implements SpatieSignatureValidator
{

    public function isValid(Request $request, WebhookConfig $config): bool
    {
        return true;
    }
}