<?php


namespace App\Classes;

use Illuminate\Http\Request;
use Spatie\WebhookClient\WebhookConfig;
use Spatie\WebhookClient\SignatureValidator\SignatureValidator as SpatieSignatureValidator;


class SignatureValidator implements SpatieSignatureValidator
{

    /**
     * @param Request       $request
     * @param WebhookConfig $config
     *
     * @return bool
     */
    public function isValid(Request $request, WebhookConfig $config): bool
    {
        if (!$request->has('secret')) {
            return false;
        }

        return $request->get('secret') == $config->signingSecret;
    }
}