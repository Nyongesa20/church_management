<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('admin.dashboard', function ($view) {
            $data = $view->getData();
            
            // Set default values for chart data
            if (!isset($data['assembliesChartData'])) {
                $view->with('assembliesChartData', ['labels' => [], 'data' => []]);
            }
            
            if (!isset($data['membersChartData'])) {
                $view->with('membersChartData', ['labels' => [], 'data' => []]);
            }
            
            if (!isset($data['eventsChartData'])) {
                $view->with('eventsChartData', ['labels' => [], 'data' => []]);
            }
            
            if (!isset($data['offeringsChartData'])) {
                $view->with('offeringsChartData', ['labels' => [], 'data' => []]);
            }
            
            // Set default values for count data
            if (!isset($data['assembliesCount'])) {
                $view->with('assembliesCount', 0);
            }
            
            if (!isset($data['membersCount'])) {
                $view->with('membersCount', 0);
            }
            
            if (!isset($data['eventsCount'])) {
                $view->with('eventsCount', 0);
            }
            
            if (!isset($data['offeringsCount'])) {
                $view->with('offeringsCount', 0);
            }
        });
    }
}
