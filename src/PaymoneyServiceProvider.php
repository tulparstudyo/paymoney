<?php

namespace TulparStudyo\Paymoney;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class PaymoneyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {
        //
    }
}
