<?php

namespace App\Providers;

use App\Interfaces\SeriesRepository;
use App\Repositories\EloquentSeriesRepository;
use Illuminate\Support\ServiceProvider;

class SeriesRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SeriesRepository::class, EloquentSeriesRepository::class);
    }

}
