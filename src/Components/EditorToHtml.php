<?php

namespace Dontfreakout\LaravelEditorjsToHtml\Components;

use Illuminate\View\Component;

class EditorToHtml extends Component
{
    public string $template;

    public $blocks;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $editorData, string $template = null)
    {
        $template = $template ?? config('editorjs-to-html.default-template');

        $content = json_decode($editorData, true);
        $this->template = $template;
        $this->blocks = $content['blocks'];
    }

    public function viewName($blockType): array
    {
        return [
            join('.', ['editorjs-to-html::blocks', $this->template, $blockType]),
            join('.', ['editorjs-to-html::blocks.default', $blockType]),
            'editorjs-to-html::missing-template',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('editorjs-to-html::components.editor-to-html');
    }
}
