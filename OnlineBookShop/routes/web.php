<?PhP

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/** Routes that has admin prefix **/
Route::prefix('admin')->group(function(){
    /* For categories */
    Route::prefix('/categories')->group(function(){
        Route::get('' , [CategoryController::class , 'index'])->name('admin.categories.index');
        Route::post('' , [CategoryController::class , 'storage'])->name('admin.categories.storage');
        Route::delete('/{category}/remove' , [CategoryController::class , 'destroy'])->name('admin.categories.destroy');
        Route::get('/{category}/edit' , [CategoryController::class , 'edit'])->name('admin.categories.edit');
        Route::put('/{category}/update' , [CategoryController::class , 'update'])->name('admin.categories.update');
    });
    /* For products */
    Route::prefix('products')->group(function(){
        Route::get('' , [productController::class , 'all'])->name('admin.products.all');
        Route::get('/create' , [productController::class , 'create'])->name('admin.products.create');
        Route::post('' , [productController::class , 'store'])->name('admin.products.store');
        Route::delete('/{product}/remove' , [productController::class , 'destroy'])->name('admin.products.destroy');
        Route::get('/{product}/edit' , [productController::class , 'edit'])->name('admin.products.edit');
        Route::put('/{product}/update' , [productController::class , 'update'])->name('admin.products.update');
        Route::get('{product}/download/demo' , [productController::class , 'downloadDemo'])->name('admin.products.download.demo');
    });
    /* For users */
    Route::prefix('users')->group(function(){
        Route::get('' , [UserController::class , 'all'])->name('admin.users.all');
        Route::get('/create' , [UserController::class , 'create'])->name('admin.users.create');
        Route::post('' , [UserController::class , 'store'])->name('admin.users.store');
        Route::delete('/{user}/remove' , [UserController::class , 'destroy'])->name('admin.users.destroy');
        Route::get('/{user}/edit' , [UserController::class , 'edit'])->name('admin.users.edit');
        Route::put('/{user}/update' , [UserController::class , 'update'])->name('admin.users.update');
    });
});

/** Authentication routes **/
Auth::routes();

