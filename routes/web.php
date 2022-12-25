<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\UserController as FrontendUserController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Admin\Brand\Index;
use App\Http\Livewire\Admin\ProductComponent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::controller(FrontendController::class)->group(function(){
    Route::get('/','index');
    Route::get('/collections','categories');
    Route::get('/collections/{category_slug}','products');
    Route::get('/collections/{category_slug}/{product_slug}','productView');
    
    Route::get('/new-arrivals', 'newArrivals');
    Route::get('/featured-products', 'featuredProducts');

    Route::get('search', 'searchProducts');
});



Route::middleware(['auth'])->group(function(){
    Route::get('/wishlist', [WishlistController::class, 'index']);
    Route::get('/cart', [CartController::class, 'index']);
    Route::get('/checkout', [CheckoutController::class, 'index']);

    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('/orders/{orderId}', [OrderController::class, 'show']);

    Route::get('/profile', [FrontendUserController::class, 'index']);
    Route::post('/profile', [FrontendUserController::class, 'updateUserDetail']);
    Route::get('/change-password', [FrontendUserController::class, 'passwordCreate']);
    Route::post('/change-password', [FrontendUserController::class, 'changePassword']);
});

Route::get('thank-you', [FrontendController::class, 'thankyou']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('settings', [SettingController::class, 'index']);
    Route::post('settings', [SettingController::class, 'store']);

    Route::controller(SliderController::class)->group(function(){
       Route::get('/sliders', 'index');
       Route::get('/sliders/create', 'create');
       Route::post('/sliders/create', 'store');
       Route::get('/sliders/{slider}/edit', 'edit');
       Route::put('/sliders/{slider}', 'update');
       Route::get('/sliders/{slider}/delete', 'destroy');
    });

    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');
    });

    Route::get('/brands', Index::class);
    Route::get('/products', ProductComponent::class);

    // Route::controller(ProductController::class)->group(function(){
    //     Route::get('/products', 'index');
    //     Route::get('/products/create', 'create');
    //     Route::post('/products', 'store');
    //     Route::get('/products/{product}/edit', 'edit');
    //     Route::put('/products/{product}', 'update');
    //     Route::get('/products/{product_id}/delete', 'destroy');
    //     Route::get('product-image/{product_image_id}/delete', 'destroyImage');
    //     Route::post('/product-color/{prod_color_id}','updateProdColorQty');
    //     Route::get('/product-color/{prod_color_id}/delete','deleteProdColor');
    // });

    Route::controller(ColorController::class)->group(function(){
        Route::get('/colors', 'index');
        Route::get('/colors/create', 'create');
        Route::post('/colors/create', 'store');
        Route::get('/colors/{color}/edit', 'edit');
        Route::put('/colors/{color_id}', 'update');
        Route::get('/colors/{color_id}/delete', 'destroy');
    });


    Route::controller(AdminOrderController::class)->group(function(){
        Route::get('/orders', 'index');
        Route::get('/orders/{orderId}', 'show');
        Route::put('/orders/{orderId}', 'updateOrderStatus');

        Route::get('/invoice/{orderId}', 'viewInvoice');
        Route::get('/invoice/{orderId}/generate', 'generateInvoice');
        
        Route::get('/invoice/{orderId}/email', 'mailInvoice');
    });

    Route::controller(UserController::class)->group(function(){
        Route::get('/users', 'index');
        Route::get('/users/create', 'create');
        Route::post('/users', 'store');
        Route::get('/users/{user_id}/edit', 'edit');
        Route::put('/users/{user_id}', 'update');
        Route::get('/users/{user_id}/delete', 'destroy');

    });
     

});
