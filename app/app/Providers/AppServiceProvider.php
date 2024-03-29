<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        /* 
            Added by @maomuriel 
            As this blog post said to solve the problem:

            $ php artisan migrate       

            Migration table created successfully.
            Migrating: 2014_10_12_000000_create_users_table

               Illuminate\Database\QueryException  : SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table `users` add unique `users_email_unique`(`email`))

        */

        \Schema::defaultStringLength(191);
    }
}
