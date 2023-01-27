<?PhP 
namespace App\Support\Basket;

use App\Models\Product;
use App\Support\Basket\Traits\Auxiliary;
use App\Support\Basket\Traits\Preparation;

class BasketAtViews{
    use Preparation , Auxiliary;

    /**
     * Get quantity
     *
     * @param integer $productId
     * @return integer
     */
    public function getQuantity(int $productId) :int{
        return $this->storage->getQuantity($productId);
    }

    /**
     * Checking quantity
     *
     * @param integer $productId
     * @return boolean
     */
    public function hasQuantity(int $productId) :bool{
        return ($this->storage->exsits($productId)) ? true : false;
    }

    /**
     * Count basket
     *
     * @return integer
     */
    public function countBasket() :int{ 
        $countBasket = 0;
        foreach($this->giveSelectedProducts() as $item){
            $countBasket += $item['quantity'];
        }
        return $countBasket;
    }

    /**
     * Give product total price
     *
     * @param \App\Models\Product $product
     * @return int|float
     */
    public function productTotal(Product $product){
        return $product->price * $product->quantity;
    }

    /**
     * Calculation product price before aplly discount 
     *
     * @param integer $productId
     * @return integer
     */
    public function beforeDiscount($productId){
        $product = Product::find($productId);

        $discountPrice = ($product->price / (100 - $product->percent_discount)) * $product->percent_discount;
        
        $mainPrice = $product->price + $discountPrice;

        return $mainPrice;
    }
}
