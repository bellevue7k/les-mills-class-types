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

    public function boot()
    {
        parent::boot();
        Augmentor::addMark(SpanClasses::class);
    }
}
