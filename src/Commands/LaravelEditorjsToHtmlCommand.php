<?php

namespace Dontfreakout\LaravelEditorjsToHtml\Commands;

use Illuminate\Console\Command;

class LaravelEditorjsToHtmlCommand extends Command
{
    public $signature = 'laravel-editorjs-to-html';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
