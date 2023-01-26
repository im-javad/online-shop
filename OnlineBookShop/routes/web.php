<?PhP

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\PaymentController as ControllersPaymentController;
use App\Http\Controllers\Shop\BasketController;
use App\Http\Controllers\Shop\CheckoutController;
use App\Http\Controllers\Shop\MainController;
use App\Http\Controllers\Shop\ProductController as ShopProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/** Book shop routes **/
Route::prefix('')->group(function(){
    /* For main ones */
    Route::get('' , [MainController::class , 'home'])->name('shop.home');
    /* For products */
    Route::prefix('/products')->group(function(){
        Route::get('' , [ShopProductController::class , 'index'])->name('shop.products.index');
        Route::get('/{product}/show' , [ShopProductController::class , 'show'])->name('shop.products.show');
    });
    /* For basket */
    Route::prefix('/basket')->group(function(){
        // checked restfull(methods!!!!)
        Route::get('' , [BasketController::class , 'index'])->name('shop.basket.index');
        Route::get('/{product}/add' , [BasketController::class , 'add'])->name('shop.basket.add');
        Route::get('/{product}/remove' , [BasketController::class , 'remove'])->name('shop.basket.remove');
        Route::get('/clear' , [BasketController::class , 'clear'])->name('shop.basket.clear');
        Route::put('/update/{product}/quantity' , [BasketController::class , 'updateQuantity'])->name('shop.basket.update.quantity');
    });
    /* For checkout */
    Route::prefix('/checkout')->group(function(){
        Route::get('' , [CheckoutController::class , 'checkoutForm'])->name('shop.checkout.index');
    });
});

/** Payment routes **/
Route::prefix('/payment')->group(function(){
    Route::post('/pay' , [ControllersPaymentController::class , 'pay'])->name('payment.pay');
    Route::get('/{gateway}/callback' , [ControllersPaymentController::class , 'callback'])->name('payment.callback');
});

/** Coupon routes **/
Route::prefix('/coupon')->group(function(){
    Route::post('/' , [CouponController::class , 'storage'])->name('coupon.storage');
    Route::get('/destroy' , [CouponController::class , 'destroy'])->name('coupon.destroy');
});

/** Routes that has admin prefix **/
Route::prefix('/admin')->group(function(){
    /* For categories */
    Route::prefix('/categories')->group(function(){
        Route::get('' , [CategoryController::class , 'index'])->name('admin.categories.index');
        Route::post('' , [CategoryController::class , 'storage'])->name('admin.categories.storage');
        Route::delete('/{category}/remove' , [CategoryController::class , 'destroy'])->name('admin.categories.destroy');
        Route::get('/{category}/edit' , [CategoryController::class , 'edit'])->name('admin.categories.edit');
        Route::put('/{category}/update' , [CategoryController::class , 'update'])->name('admin.categories.update');
    });
    /* For products */
    Route::prefix('/products')->group(function(){
        Route::get('' , [productController::class , 'all'])->name('admin.products.all');
        Route::get('/create' , [productController::class , 'create'])->name('admin.products.create');
        Route::post('' , [productController::class , 'store'])->name('admin.products.store');
        Route::delete('/{product}/remove' , [productController::class , 'destroy'])->name('admin.products.destroy');
        Route::get('/{product}/edit' , [productController::class , 'edit'])->name('admin.products.edit');
        Route::put('/{product}/update' , [productController::class , 'update'])->name('admin.products.update');
        Route::get('{product}/download/demo' , [productController::class , 'downloadDemo'])->name('admin.products.download.demo');
    });
    /* For users */
    Route::prefix('/users')->group(function(){
        Route::get('' , [UserController::class , 'all'])->name('admin.users.all');
        Route::get('/create' , [UserController::class , 'create'])->name('admin.users.create');
        Route::post('' , [UserController::class , 'store'])->name('admin.users.store');
        Route::delete('/{user}/remove' , [UserController::class , 'destroy'])->name('admin.users.destroy');
        Route::get('/{user}/edit' , [UserController::class , 'edit'])->name('admin.users.edit');
        Route::put('/{user}/update' , [UserController::class , 'update'])->name('admin.users.update');
    });
    /* For orders */
    Route::prefix('/orders')->group(function(){
        Route::get('' , [OrderController::class , 'index'])->name('admin.orders.index');
    });
    /* For payments */
    Route::prefix('/payments')->group(function(){
        Route::get('' , [PaymentController::class , 'index'])->name('admin.payments.index');
    });
});

/** Authentication routes **/
Auth::routes();
