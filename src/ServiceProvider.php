<?php

namespace Bellevue7k\SpanClasses;

use Statamic\Fieldtypes\Bard\Augmentor;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__.'/../dist/js/span-classes.js',
    ];

    protected $stylesheets = [
        __DIR__.'/../dist/css/span-classes.css'
    ];

    protected $publishables = [
        __DIR__.'/../dist/css/fonts' => 'css/fonts'
    ];

    public function boot()
    {
        parent::boot();
        Augmentor::addMark(SpanClasses::class);
    }
}
