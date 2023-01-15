<?PhP 
namespace App\Support\Basket;

use App\Support\Basket\Traits\Preparation;

class BasketAtViews{
    use Preparation;

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
}


