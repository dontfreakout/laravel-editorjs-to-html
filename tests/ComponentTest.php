<?php

namespace Dontfreakout\LaravelEditorjsToHtml\Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Illuminate\Support\Facades\Config;

class ComponentTest extends TestCase
{
    use InteractsWithViews;

    public function testMissingBlock()
    {
        $data = json_encode([
            'time' => 1630840952427,
            'blocks' => [
                [
                    "id" => "vOBPOAYZeX",
                    "data" => [
                        "text" => "Hey. Meet the new Editor. On this page you can see it in action.",
                    ],
                    "type" => "missingblock",
                ],
            ],
            'version' => '2.22.2',
        ]);

        $view = $this->blade(
            '<x-dfk-editor-to-html :editor-data="$editorJson" />',
            ['editorJson' => $data]
        );

        $view->assertSeeText('Template for block missingblock is missing.');
    }

    public function testFallbackTheme()
    {
        $data = json_encode([
            'time' => 1630840952427,
            'blocks' => [
                [
                    "id" => "vOBPOAYZeX",
                    "data" => [
                        "text" => "Hey. Meet the new Editor. On this page you can see it in action.",
                    ],
                    "type" => "paragraph",
                ],
            ],
            'version' => '2.22.2',
        ]);

        $view = $this->blade(
            '<x-dfk-editor-to-html :editor-data="$editorJson" template="missingtheme" />',
            ['editorJson' => $data]
        );

        $view->assertSee('<p>Hey. Meet the new Editor. On this page you can see it in action.</p>', false);
    }

    public function testDefaultThemeFromConfig()
    {
        $data = json_encode([
            'time' => 1630840952427,
            'blocks' => [
                [
                    "id" => "vOBPOAYZeX",
                    "data" => [
                        "text" => "Hey. Meet the new Editor. On this page you can see it in action.",
                    ],
                    "type" => "paragraph",
                ],
            ],
            'version' => '2.22.2',
        ]);

        Config::set('editorjs-to-html.default-template', 'tailwind');

        $view = $this->blade(
            '<x-dfk-editor-to-html :editor-data="$editorJson" />',
            ['editorJson' => $data]
        );

        $view->assertSee('<p class="mb-4', false);
    }
}
