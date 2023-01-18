<?PhP 
namespace App\Services\Setters;

use Illuminate\Support\Facades\Route;

class Routes{
    /**
     * Setting the next route for the main key of summary view 
     *
     * @return array
     */
    public function view_SetRouteForSummaryBtn(){
        if(Route::currentRouteName() === 'shop.basket.index')
            return 'basket';
        return 'checkout';
    }
}

