<?PhP 
namespace App\Support\Cost;

use App\Support\Cost\Contract\CostInterface;
use App\Support\Coupon\DiscountManager;

class DiscountCost implements CostInterface{
    /* Preparation */
    public function __construct(private CostInterface $cost , private DiscountManager $discountManager){
    }
    
    /**
     * Discount cost only
     *
     * @return integer
     */
    public function getCost() :int{
        return $this->discountManager->calculateDiscount();
    }
    
    /**
     * Total of all costs
     *
     * @return integer
     */
    public function getTotalCost() :int{
        return $this->cost->getTotalCost() - $this->getCost();
    }

    /**
     * Discount description only
     *
     * @return string
     */
    public function description() :string{
        return 'Discount Cost';
    }

    /**
     * Summary of the entire cart
     *
     * @return array
     */
    public function getSummary() :array{
        return array_merge($this->cost->getSummary() , [$this->description() => $this->getCost()]);
    }
}

