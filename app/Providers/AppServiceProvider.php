<?php

namespace App\Providers;

use App\Http\Controllers\AdminConsumerController;
use App\Models\Consumer;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Paginator::useBootstrapFive();

        date_default_timezone_set('Asia/Tashkent'); 

        View()->composer('components.layouts.backend.home', function($view) {
            $view->with('consumers', Consumer::where('user_id', auth()->user()->id)->get());
            $view->with('consumers_active', Consumer::where('user_id', auth()->user()->id)->whereDay('date', '>=', Carbon::now()->format('d') - 3)->get());
            $view->with('consumers_passive', Consumer::where('user_id', auth()->user()->id)->whereBetween('date', [Carbon::now()->subDays(8), Carbon::now()->subDays(4)])->get());
            $view->with('consumers_noactive', Consumer::where('user_id', auth()->user()->id)->whereDay('date', '<', Carbon::now()->format('d') - 7)->get());
        });

    }
}
