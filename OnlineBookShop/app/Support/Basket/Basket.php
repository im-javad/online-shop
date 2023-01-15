<?PhP 
namespace App\Support\Basket;

use App\Models\Product;
use App\Support\Basket\Traits\Preparation;
use App\Support\Storage\Contract\StorageInterface;

class Basket{
    use Preparation;

    /**
     * Adding quantity to sessions 
     *
     * @param Product $product
     * @param integer $quantity
     * @return void
     */
    public function add(Product $product , int $quantity){
        $currentQuantity = $this->currentQuantity($product->id);

        $this->storage->set($product->id , ['quantity' => $currentQuantity + $quantity]);
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
        return null;
    }
}


