<?PhP

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\productController;
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

    });
});

/** Authentication routes **/
Auth::routes();

