<?PhP 
namespace App\Support\Basket\Traits;

use App\Models\Product;

trait Auxiliary{
    /**
     * Getting the details of the products added to the shopping cart
     * 
     * @return mixed
     */
    public function giveSelectedProducts(){
        $productsId = array_keys($this->storage->all());

        $products = Product::find($productsId);

        foreach ($products as $product) {
            $product->quantity = $this->currentQuantity($product->id);
        }

        return $products;
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
     * Checking that the session exists 
     *
     * @param integer $productId
     * @return boolean
     */
    public function hasProduct(int $productId){
        return $this->storage->exsits($productId);
    }
}

