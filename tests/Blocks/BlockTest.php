<?php

namespace Dontfreakout\LaravelEditorjsToHtml\Tests\Blocks;

use Dontfreakout\LaravelEditorjsToHtml\Tests\TestCase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;

abstract class BlockTest extends TestCase
{
    use InteractsWithViews;

    public function createData(array $block): string
    {
        return json_encode([
            'time' => 1630840952427,
            'blocks' => [
                $block,
            ],
            'version' => '2.22.2',
        ]);
    }

    public function createView(string $data, string $template = null): \Illuminate\Testing\TestView
    {
        return $this->blade(
            '<x-dfk-editor-to-html :editor-data="$editorJson"'.(isset($template) ? " template=\"$template\"" : '').'/>',
            ['editorJson' => $data]
        );
    }
}
