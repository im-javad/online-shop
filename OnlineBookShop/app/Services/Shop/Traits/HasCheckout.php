<?PhP 
namespace App\Services\Shop\Traits;

use App\Exceptions\InvalidCost;
use App\Support\Cost\Contract\CostInterface;

trait HasCheckout{
    public function __construct(private CostInterface $cost) {
        $this->middleware('auth');
    }

    /**
     * Total cost validation
     *
     * @return void
     */
    public function validationCost(){
        if($this->cost->getTotalCost() <= 1000)
            throw new InvalidCost("Invalid Cost!");
    }    
}

