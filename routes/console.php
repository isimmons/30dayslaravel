<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('fochizzle {foo}', function (string $foo) {
    $this->comment($foo);
})->purpose('Demonstrate silly foo foo fochizzle command');

