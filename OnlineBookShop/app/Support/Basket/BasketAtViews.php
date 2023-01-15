<?PhP 
namespace App\Support\Basket;

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
}


