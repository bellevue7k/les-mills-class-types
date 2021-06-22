<?php

namespace Bellevue7k\SpanClasses;

use ProseMirrorToHtml\Marks\Mark;

class SpanClasses extends Mark
{
    protected $markType = 'spanClasses';
    protected $tagName = 'span';

    public function matching(): bool
    {
        return $this->mark->type === $this->markType;
    }

    public function tag(): ?array
    {
        return [
            [
                'tag'   => 'span',
                'attrs' => [
                    'class' => 'span-classes '.$this->mark->attrs->key
                ],
            ],
        ];
    }
}
