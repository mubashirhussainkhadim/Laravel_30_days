<?php

namespace App\Providers;
use App\Models\JobListing;
use Auth;
use App\Models\User;
use Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
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
        Model::preventLazyLoading();
        // Gate::define('edit-job',function(User $user, JobListing $job){
        //     return $job->employer->user->is(Auth::user());
        // });
    }
}
