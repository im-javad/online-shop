<?PhP 
namespace App\Support\Cost;

use App\Support\Cost\Contract\CostInterface;

class ShippingCost implements CostInterface{
    /** preparation **/
    private $cost;
    public function __construct(CostInterface $cost){
        $this->cost = $cost;      
    }

    const SHIPPING_PERCENTAGE = 1.5;
    
    /**
     * Shipping cost only
     *
     * @return integer
     */
    public function getCost() :int{
        return $this->cost->getTotalCost() / 100 * self::SHIPPING_PERCENTAGE;
    }

    /**
     * Total of all costs
     *
     * @return integer
     */
    public function getTotalCost() :int{
        return $this->cost->getTotalCost() + $this->getCost();
    }

    /**
     * Shipping description only
     *
     * @return string
     */
    public function description() :string{
        return 'Shipping Cost';
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

