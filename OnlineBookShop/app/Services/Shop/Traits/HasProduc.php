<?PhP 
namespace App\Services\Shop\Traits;

use App\Models\Product;
use Illuminate\Http\Request;

trait HasProduc{
    /**
     * Preparing products to send to view
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function preparingProducts(Request $request) :mixed{
        ($request->has('search'))
        ? $products = Product::where('title' , 'LIKE' , '%' . $request->input('search') .'%')->get()
        : $products = Product::all();

        return $products;
    }
}

