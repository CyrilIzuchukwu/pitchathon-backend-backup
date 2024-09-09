<?php

namespace App\Providers;

use App\Models\Benefit;
use App\Models\CountDown;
use App\Models\Criteria;
use App\Models\Eligility;
use App\Models\Faq;
use App\Models\FocusSector;
use App\Models\Footer;
use App\Models\journey;
use App\Models\ThemeColor;
use App\Models\Timeline;
use App\Models\Title;
use App\Models\top_nav;
use App\Models\Ui_hero_text;
use App\Models\ui_logo;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;


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


        View::composer('*', function ($view) {


            $color_theme = ThemeColor::latest()->first();
            $view->with('color_theme', $color_theme);


            $navimg = top_nav::latest()->first();
            $view->with('navimg', $navimg);


            $logoui = ui_logo::latest()->first();
            $view->with('logoui', $logoui);


            $herotext = Ui_hero_text::latest()->first();
            $view->with('herotext', $herotext);

            $journey = journey::latest()->first();
            $view->with('journey', $journey);

            $countDown = CountDown::latest()->first();
            $view->with('countDown', $countDown);

            $eligibility = Eligility::latest()->first();
            $view->with('eligibility', $eligibility);

            $focusSector = FocusSector::all();
            $view->with('focusSector', $focusSector);

            $criteria = Criteria::latest()->first();
            $view->with('criteria', $criteria);

            $timeline = Timeline::latest()->first();
            $view->with('timeline', $timeline);

            $pageFooter = Footer::latest()->first();
            $view->with('pageFooter', $pageFooter);


            $title = Title::latest()->first();
            $view->with('title', $title);


            $benefits = Benefit::all();
            $view->with('benefits', $benefits);

            $faqs = Faq::all();
            $view->with('faqs', $faqs);
        });



        if (env('APP_ENV') == 'production') {
            URL::forceScheme('https');
        }
        Schema::defaultStringLength(101);
        Paginator::useBootstrapFive();
    }
}
