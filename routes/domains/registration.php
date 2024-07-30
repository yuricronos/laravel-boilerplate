<?PHP

use App\Http\Controllers\Registration\PostRegisterController;
use App\Http\Controllers\Registration\ViewRegisterController;
use App\LocalFeatures;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\RoutePath;


Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {
    $enableViews = config('fortify.views', true);

    if (LocalFeatures::enabled(LocalFeatures::localRegistration())) {
        if ($enableViews) {
            Route::get(RoutePath::for('register', '/register'), [ViewRegisterController::class, 'create'])
                ->middleware([sprintf("guest:%s", config('fortify.guard'))])
                ->name('register');
        }

        Route::post(RoutePath::for('register', '/register'), [PostRegisterController::class, 'store'])
            ->middleware([sprintf("guest:%s", config('fortify.guard'))]);
    }
});
