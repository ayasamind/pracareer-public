<?php

namespace App\Providers;

use Config;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const ADMIN_HOME   = '/admin/admins';
    public const STUDENT_HOME = '/student/posts';
    public const COMPANY_HOME = '/company/posts';
    public const MAIL_SEND    = '/student/mail_send';
    public const HOME         = '/';
    protected $namespace  = 'App\Http\Controllers'; 

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(): void
    {
        $this->mapAdminRoutes();
        $this->mapCompanyRoutes();
        $this->mapStudentRoutes();
    }

    /**
     * 管理画面用のルート
     */
    protected function mapAdminRoutes(): void
    {
        if ($this->isSubDomainRouting()) {
            Route::domain('administrator.'.Config::get('app.domain'))
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));
        } else {
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));
        }
    }

    /**
     * 企業画面用のルート
     */
    protected function mapCompanyRoutes(): void
    {
        if ($this->isSubDomainRouting()) {
            Route::domain('company.'.Config::get('app.domain'))
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/company.php'));
        } else {
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/company.php'));
        }
    }

    /**
     * 学生画面用のルート
     */
    protected function mapStudentRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/student.php'));
    }

    /**
     * 本番環境のみサブドメインのルーティング
     */
    private function isSubDomainRouting(): bool
    {
        return Config::get('app.env') === 'production';
    }

}
