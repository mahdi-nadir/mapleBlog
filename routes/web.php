<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArrimaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExpressEntryController;
use App\Http\Controllers\Auth\ProviderController;
use App\Mail\MyTestEmail;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);

Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', function () {
            return view('welcome');
        });

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');



        // Route::get('/update-password', [ProfileController::class, 'updateFromSocialMedia']);



        Route::middleware('auth')->group(
            function () {
                //...
                // Route::post('/update-password', [ProfileController::class, 'updateFromSocialMedia'])->name('update.passwordUsername');

                /** Localized Routes here **/
                Route::get('/arrima/expression-of-interest', [ArrimaController::class, 'expression_of_interest'])->name('arrima.expression_of_interest');
                Route::get('/arrima/self-assessment-tool', [ArrimaController::class, 'self_assessment_tool'])->name('arrima.self_assessment_tool');
                Route::get('/arrima/csq', [ArrimaController::class, 'csq'])->name('arrima.csq');
                Route::get('/arrima/permanent-residence', [ArrimaController::class, 'permanent_residence'])->name('arrima.permanent_residence');
                Route::get('/arrima/pmi', [ArrimaController::class, 'pmi'])->name('arrima.pmi');
                Route::put('/arrima/update-arrima-score', [ArrimaController::class, 'updateArrimaScore'])->name('update.arrima-score');

                Route::get('/express-entry/eligibility-calculator', [ExpressEntryController::class, 'eligibility'])->name('ee.eligibility');
                Route::get('/express-entry/crs-calculator', [ExpressEntryController::class, 'crs'])->name('ee.crs');
                Route::get('/express-entry/clb-calculator', [ExpressEntryController::class, 'clb'])->name('ee.clb');
                Route::get('/express-entry/suggested-pnp', [ExpressEntryController::class, 'suggestedpnp'])->name('ee.suggestedpnp');
                Route::get('/express-entry/extra-info', [ExpressEntryController::class, 'extrainfo'])->name('ee.extrainfo');

                // Route::get('/essai', [UserController::class, 'index']);
                // Route::post('/toggle-like', [PostController::class, 'toggleLike'])->name('post.toggle-like');

                Route::get('/maplemind-blog', [BlogController::class, 'index'])->name('blog.index');
                Route::get('/posts', [BlogController::class, 'getAllPosts'])->name('blog.allPosts');
                Route::post('/filter-posts', [BlogController::class, 'filterPosts'])->name('post.filter');

                Route::get('/maplemind-blog/writing-post', [PostController::class, 'create'])->name('post.create');
                Route::post('/maplemind-blog/writing-post', [PostController::class, 'store'])->name('post.store');
                Route::get('/maplemind-blog/{category}', [BlogController::class, 'showByCategory'])->name('posts.category');
                Route::get('/maplemind-blog/{categoryId}/{postId}', [PostController::class, 'index'])->name('post.index');


                Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
                Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
                Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            }
        );
    }
);

require __DIR__ . '/auth.php';
