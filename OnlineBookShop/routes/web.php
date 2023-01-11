<?PhP

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/** Routes that has admin prefix **/
Route::prefix('/admin')->group(function(){
    /* For categories */
    Route::prefix('categories')->group(function(){
        Route::get('' , [CategoryController::class , 'index'])->name('categories.index');
        Route::post('' , [CategoryController::class , 'storage'])->name('categories.storage');
        Route::delete('/{category}/remove' , [CategoryController::class , 'destroy'])->name('categories.destroy');
        Route::get('/{category}/edit' , [CategoryController::class , 'edit'])->name('categories.edit');
        Route::put('/{category}/update' , [CategoryController::class , 'update'])->name('categories.update');
    });
});

/** Authentication routes **/
Auth::routes();

