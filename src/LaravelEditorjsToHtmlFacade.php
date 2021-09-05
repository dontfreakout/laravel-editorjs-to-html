<?php

namespace Dontfreakout\LaravelEditorjsToHtml;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dontfreakout\LaravelEditorjsToHtml\LaravelEditorjsToHtml
 */
class LaravelEditorjsToHtmlFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-editorjs-to-html';
    }
}
