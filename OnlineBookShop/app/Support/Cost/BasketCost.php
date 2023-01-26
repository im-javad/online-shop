<?PhP 
namespace App\Support\Cost;

use App\Support\Basket\Basket;
use App\Support\Cost\Contract\CostInterface;

class BasketCost implements CostInterface{
    /* preparation */
    public function __construct(private Basket $basket){  
    }
    
    /**
     * Basket cost only
     *
     * @return integer
     */
    public function getCost() :int{
        return $this->basket->getTotalProductsCost();
    }

    /**
     * Total of all costs
     *
     * @return integer
     */
    public function getTotalCost() :int{
        return $this->getCost();
    }

    /**
     * Basket description only
     *
     * @return string
     */
    public function description() :string{
        return 'Cart Cost';
    }

    /**
     * Summary of the entire cart
     *
     * @return array
     */
    public function getSummary() :array{
        return [$this->description() => $this->getCost()];
    }
}

