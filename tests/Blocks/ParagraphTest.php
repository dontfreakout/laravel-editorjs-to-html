<?php

namespace Dontfreakout\LaravelEditorjsToHtml\Tests\Blocks;

class ParagraphTest extends BlockTest
{
    /** @test */
    public function it_renders_paragraph()
    {
        $data = $this->createData([
            "id" => "vOBPOAYZeX",
            "data" => [
                "text" => "Hey. Meet the new Editor. On this page you can see it in action.",
            ],
            "type" => "paragraph",
            "tunes" => [
                "textAligment" => [
                    "alignment" => "left",
                ],
            ],
        ]);

        $view_tailwind = $this->createView($data, 'tailwind');

        $view_default = $this->createView($data);

        foreach ([$view_tailwind, $view_default] as $view) {
            $view->assertSeeInOrder(['<p', '</p>'], false);
            $view->assertSeeText('Hey. Meet the new Editor. On this page you can see it in action.');
        }
    }
}
