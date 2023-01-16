<?PhP 
namespace App\Support\Cost\Contract;

/** Implementation of the interface for the decorator pattern(COST) **/
interface CostInterface{
    public function getCost() :int;
    public function getTotalCost() :int;
    public function description() :string;
    public function getSummary() :array;
}
