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
            return [
                'name' => 'PROCEED TO CHECKOUT',
                'route' => 'shop.basket.checkout.form'
            ];
        if(Route::currentRouteName() === 'shop.basket.checkout.form')
            return [
                'name' => 'PLACE ORDER',
                'route' => 'shop.basket.checkout.form'
            ];
    }
}

