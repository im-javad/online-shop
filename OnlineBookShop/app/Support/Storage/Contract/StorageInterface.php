<?PhP 
namespace App\Support\Storage\Contract;

/**
 * Interface implementation for classes that have storage 
 * 
 * @method int getQuantity()
 */ 
interface StorageInterface{
    public function all();
    public function get(int $index);
    public function set(int $index , mixed $value);
    public function unset(int $index);
    public function exsits(int $index);
    public function clear();
}

