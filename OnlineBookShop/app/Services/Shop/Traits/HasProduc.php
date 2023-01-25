<?PhP 
namespace App\Services\Shop\Traits;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

trait HasProduc{
    /**
     * Preparing products to send to view
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function preparingProducts(Request $request){
        ($request->has('search'))
        ? $products = Product::where('title' , 'LIKE' , '%' . $request->input('search') .'%')->get()
        : $products = Product::all();

        return $products;
    }

    public function organizeProductsByCategory(Request $request){
        $products = $this->preparingProducts($request);
        
        $all = [];

        foreach (Category::all() as $category) {
            $all += ([
                $category->slug => $products->where('category_id' , $category->id)->all()
            ]);
        }

        $allProductsWithKey = [
            'All' => $products
        ];

        $all = array_merge($allProductsWithKey , $all);

        return $all;
    }
}

