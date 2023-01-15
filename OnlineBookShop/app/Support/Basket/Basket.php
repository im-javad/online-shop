<?PhP 
namespace App\Support\Basket;

use App\Models\Product;
use App\Support\Basket\Traits\Preparation;

class Basket{
    use Preparation;

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
     * Clear all of the sessions 
     *
     * @return void
     */ 
    public function clear(){
        $this->storage->clear();
    }

    /*** Auxiliary methods ***/

    /**
     * Checking that the session exists 
     *
     * @param integer $productId
     * @return boolean
     */
    public function hasProduct(int $productId){
        return $this->storage->exsits($productId);
    }

    /**
     * Getting current quantity
     *
     * @param integer $productId
     * @return int|null
     */
    public function currentQuantity(int $productId){
        if($this->hasProduct($productId))
            return $this->storage->getQuantity($productId);
        return false;
    }

    /**
     * Update quantity
     *
     * @param integer $productId
     * @param integer $quantity
     * @return void
     */
    public function update(int $productId , int $quantity){
        if($quantity <= 0)
            return $this->storage->unset($productId);
        $this->storage->set($productId , ['quantity' => $quantity]);
    }
}



