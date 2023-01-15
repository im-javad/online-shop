<?PhP 
namespace App\Support\Basket;

use App\Http\Requests\Shop\UpdateQuantityRequest;
use App\Models\Product;
use App\Support\Basket\Traits\Auxiliary;
use App\Support\Basket\Traits\Preparation;
use Illuminate\Http\Request;

class Basket{
    use Preparation , Auxiliary;

    /**
     * Adding quantity to sessions 
     *
     * @param \App\Models\Product $product
     * @param integer $quantity
     * @return void
     */
    public function add(Product $product , int $quantity){
        $currentQuantity = $this->currentQuantity($product->id);

        $product->hasStock($currentQuantity);

        $this->update($product->id , $currentQuantity + $quantity);
    }

    /**
     * Removing quantity from sessions
     *
     * @param \App\Models\Product $product
     * @param integer $quantity
     * @return void
     */
    public function remove(Product $product , int $quantity){
        $currentQuantity = $this->currentQuantity($product->id);

        $this->update($product->id , $currentQuantity - $quantity);
    }

    /**
     * Update product quantity in cart
     *
     * @param \App\Models\Product $product
     * @param integer $quantity
     * @return void
     */
    public function updateQuantity(Product $product , int $quantity){
        $product->hasStock($quantity - 1);

        $this->update($product->id , $quantity);
    }
    
    /**
     * Clear all of the sessions 
     *
     * @return void
     */ 
    public function clear(){
        $this->storage->clear();
    }

    /**
     * Receive selected products
     * 
     * @return mixed
     */
    public function selectedProducts(){
        return $this->giveSelectedProducts();
    }

    /**
     * Update quantity
     *
     * @param integer $productId
     * @param integer $quantity
     * @return mixed
     */
    public function update(int $productId , int $quantity){
        if($quantity <= 0)
            return $this->storage->unset($productId);
        $this->storage->set($productId , ['quantity' => $quantity]);
    }
}



