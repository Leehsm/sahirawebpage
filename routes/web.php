<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Admin
Route::group(['prefix'=>'admin', 'middleware'=>['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function(){

    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    
    Route::get('/admin/dashboard', [BackendController::class, 'index']);
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

    //AboutUS
    Route::prefix('aboutus')->group(function(){
        Route::get('/view', [BackendController::class, 'AboutUsView'])->name('aboutus.all');
        Route::get('/add', [BackendController::class, 'AboutUsAdd'])->name('aboutus.add');
        Route::post('/store', [BackendController::class, 'AboutUsStore'])->name('aboutus.store');
        Route::get('/edit/{id}', [BackendController::class, 'AboutUsEdit'])->name('aboutus.edit');
        Route::post('/update', [BackendController::class, 'AboutUsUpdate'])->name('aboutus.update');
        Route::get('/delete/{id}', [BackendController::class, 'AboutUsDelete'])->name('aboutus.delete');
    });

    //Blog
    Route::prefix('blog')->group(function(){
        Route::get('/view', [BackendController::class, 'BlogView'])->name('blog.all');
        Route::get('/add', [BackendController::class, 'BlogAdd'])->name('blog.add');
        Route::post('/store', [BackendController::class, 'BlogStore'])->name('blog.store');
        Route::get('/edit/{id}', [BackendController::class, 'BlogEdit'])->name('blog.edit');
        Route::post('/update', [BackendController::class, 'BlogUpdate'])->name('blog.update');
        Route::get('/delete/{id}', [BackendController::class, 'BlogDelete'])->name('blog.delete');
    });

    //ContactUs
    Route::prefix('contactus')->group(function(){
        Route::get('/view', [BackendController::class, 'ContactUsView'])->name('contactus.all');
        Route::get('/add', [BackendController::class, 'ContactUsAdd'])->name('contactus.add');
        Route::post('/store', [BackendController::class, 'ContactUsStore'])->name('contactus.store');
        Route::get('/edit/{id}', [BackendController::class, 'ContactUsEdit'])->name('contactus.edit');
        Route::post('/update', [BackendController::class, 'ContactUsUpdate'])->name('contactus.update');
        Route::get('/delete/{id}', [BackendController::class, 'ContactUsDelete'])->name('contactus.delete');
    });

    //FAQ
    Route::prefix('faq')->group(function(){
        Route::get('/view', [BackendController::class, 'FAQView'])->name('faq.all');
        Route::get('/add', [BackendController::class, 'FAQAdd'])->name('faq.add');
        Route::post('/store', [BackendController::class, 'FAQStore'])->name('faq.store');
        Route::get('/edit/{id}', [BackendController::class, 'FAQEdit'])->name('faq.edit');
        Route::post('/update', [BackendController::class, 'FAQUpdate'])->name('faq.update');
        Route::get('/delete/{id}', [BackendController::class, 'FAQDelete'])->name('faq.delete');
    });

    //Membership
    Route::prefix('membership')->group(function(){
        Route::get('/view', [BackendController::class, 'MembershipView'])->name('membership.all');
        Route::get('/add', [BackendController::class, 'MembershipAdd'])->name('membership.add');
        Route::post('/store', [BackendController::class, 'MembershipStore'])->name('membership.store');
        Route::get('/edit/{id}', [BackendController::class, 'MembershipEdit'])->name('membership.edit');
        Route::post('/update', [BackendController::class, 'MembershipUpdate'])->name('membership.update');
        Route::get('/delete/{id}', [BackendController::class, 'MembershipDelete'])->name('membership.delete');
    });

    //OurProduct
    Route::prefix('ourproduct')->group(function(){
        Route::get('/view', [BackendController::class, 'OurProductView'])->name('ourproduct.all');
        Route::get('/add', [BackendController::class, 'OurProductAdd'])->name('ourproduct.add');
        Route::post('/store', [BackendController::class, 'OurProductStore'])->name('ourproduct.store');
        Route::get('/edit/{id}', [BackendController::class, 'OurProductEdit'])->name('ourproduct.edit');
        Route::post('/update', [BackendController::class, 'OurProductUpdate'])->name('ourproduct.update');
        Route::get('/delete/{id}', [BackendController::class, 'OurProductDelete'])->name('ourproduct.delete');
    });

    //OurTeam
    Route::prefix('ourteam')->group(function(){
        Route::get('/view', [BackendController::class, 'OurTeamView'])->name('ourteam.all');
        Route::get('/add', [BackendController::class, 'OurTeamAdd'])->name('ourteam.add');
        Route::post('/store', [BackendController::class, 'OurTeamStore'])->name('ourteam.store');
        Route::get('/edit/{id}', [BackendController::class, 'OurTeamEdit'])->name('ourteam.edit');
        Route::post('/update', [BackendController::class, 'OurTeamUpdate'])->name('ourteam.update');
        Route::get('/delete/{id}', [BackendController::class, 'OurTeamDelete'])->name('ourteam.delete');
    });

});


//User
// Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about-us', [FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/our-product-skincare', [FrontendController::class, 'skincare'])->name('skincare');
Route::get('/our-product-handbag', [FrontendController::class, 'handbag'])->name('handbag');
Route::get('/our-product-outfit', [FrontendController::class, 'outfit'])->name('outfit');
Route::get('/contact-us', [FrontendController::class, 'contactus'])->name('contactus');
Route::get('/membership', [FrontendController::class, 'membership'])->name('membership');
Route::post('membership/register', [FrontendController::class, 'membershipRegister'])->name('membership.register');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/readblog', [FrontendController::class, 'readblog'])->name('readblog');
