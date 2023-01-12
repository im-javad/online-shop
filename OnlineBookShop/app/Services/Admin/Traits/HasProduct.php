<?PhP 
namespace App\Services\Admin\Traits;

use App\Models\Product;
use Illuminate\Http\Request;

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
            'title' => 'required | min:3 | max:255',
            'description' => 'required | min:10 | max:500',
            'demo_url' => 'nullable | image | mimes:png,jpg,jpeg,jfif | max:2048',
            'price' => 'required | numeric | max:1000000000'
        ]);
    }

    /**
     * Product storage operation
     *
     * @param array $validator
     * @return void
     */
    public function doStore(array $validator){
        $productCreated = Product::create([
            'category_id' => $validator['category_id'],
            'title' => $validator['title'],
            'description' => $validator['description'],
            'price' => $validator['price'],
        ]);

        if(isset($validator['demo_url'])){
            $image_path = $validator['demo_url']->store('' , 'product_images_storage');
            $productCreated->update([
                'demo_url' => $image_path,
            ]);
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
        ]);

        if(isset($validator['demo_url'])){
            $image_path = $validator['demo_url']->store('' , 'product_images_storage');
            $product->update([
                'demo_url' => $image_path,
            ]);
        }
    }
}

