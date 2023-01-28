<?PhP 
namespace App\Services\Admin\Traits;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait HasProduct{
    /**
     * Add form validation
     *
     * @param Illuminate\Http\Request $request
     * @return array
     */ 
    public function validateAddForm(Request $request){
        return $request->validate([
            'category_id' => 'required | max:20 | exists:categories,id',
            'title' => 'required | min:3 | max:255 | unique:products,title',
            'description' => 'required | min:10 | max:1500',
            'demo_url' => 'required | image | mimes:png,jpg,jpeg,jfif | max:2048',
            'price' => 'required | numeric | max:1000000000',
            'stock' => 'required | numeric | max:100000',
            'percent_discount' => 'nullable',
            'author' => 'required | string | min:3 | max:45'
        ]);
    }

    /**
     * Update form validation
     *
     * @param Illuminate\Http\Request $request
     * @return array
     */ 
    public function validateUpdateForm(Request $request){
        return $request->validate([
            'category_id' => 'required | max:20 | exists:categories,id',
            'title' => 'required | min:3 | max:255',
            'description' => 'required | min:10 | max:1500',
            'demo_url' => 'nullable | image | mimes:png,jpg,jpeg,jfif | max:2048',
            'price' => 'required | numeric | max:1000000000',
            'stock' => 'required | numeric | max:100000',
            'percent_discount' => 'nullable',
            'author' => 'required | string | min:3 | max:45'
        ]);
    }

    /**
     * Product storage operation
     *
     * @param array $validator
     * @return void
     */
    public function doStore(array $validator){
        try {
            $image_path = $validator['demo_url']->store('' , 'product_images_storage');
            Product::create([
                'category_id' => $validator['category_id'],
                'title' => $validator['title'],
                'description' => $validator['description'],
                'demo_url' => $image_path,
                'price' => $validator['price'],
                'stock' => $validator['stock'],
                'percent_discount' => $validator['percent_discount'],
                'author' => $validator['author'],
            ]);
        }catch(\Throwable $th){
            return back()->with('simpleWarningAlert' , 'Failed to storage product.please try again after few minute.');
        }
    }

    /**
     * Product update operation
     *
     * @param App\Models\Product $product
     * @param array $validator
     * @return void
     */
    public function doUpdate(Product $product , array $validator){
        $product->update([
            'category_id' => $validator['category_id'],
            'title' => $validator['title'],
            'description' => $validator['description'],
            'price' => $validator['price'],
            'stock' => $validator['stock'],
            'percent_discount' => $validator['percent_discount'],
            'author' => $validator['author'],
        ]);

        if(isset($validator['demo_url'])){
            $image_path = $validator['demo_url']->store('' , 'product_images_storage');
            File::delete(public_path("\images\products\\$product->demo_url"));
            $product->update([
                'demo_url' => $image_path,
            ]);
        }
    }
}
