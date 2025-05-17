<?php

namespace Logicalcrow\ReCaptcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class ReCaptcha
 * @package Logicalcrow\ReCaptcha\Facades
 *
 * @method static string htmlScriptTagJsApi(?array $config = [])
 * @method static string htmlFormButton(?string $button_label = '', ?array $properties = [])
 * @method static string htmlFormSnippet()
 * @method static string getFormId()
 */
class ReCaptcha extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {

        return 'recaptcha';
    }
}
