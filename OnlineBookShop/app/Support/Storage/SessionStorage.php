<?PhP 
namespace App\Support\Storage;

use App\Support\Storage\Contract\StorageInterface;
use Countable;

class SessionStorage implements StorageInterface , Countable{
    /* Preparation */
    private $bucket;
    public function __construct(string $bucket = 'default'){
        $this->bucket = $bucket;
    }
    
    /**
     * Get all sessions of the specified bucket
     *
     * @return array
     */
    public function all() :array|null {
        return session()->get($this->bucket) ?? [];
    }

    /**
     * Get a session of the specified bucket 
     *
     * @param string|integer $index
     * @return array
     */
    public function get(int $index) :array{
        return session()->get("$this->bucket.$index");
    }

    /**
     * Get quantity of a session from specified bucket 
     *
     * @param integer $index
     * @return integer
     */
    public function getQuantity(int $index) :int{
        return $this->get($index)['quantity'];
    }

    /**
     * Put a session in specified bucket 
     *
     * @param string|integer $index
     * @param mixed $value
     * @return void
     */
    public function set(int $index , mixed $value) :void{
        session()->put("$this->bucket.$index" , $value);
    }

    /**
     * Forget a session in specified bucket 
     *
     * @param string|integer $index
     * @return void
     */
    public function unset(int $index) :void{
        session()->forget("$this->bucket.$index");
    }

    /**
     * Checking that the session exists in the specified bucket
     *
     * @param string|integer $index
     * @return boolean
     */
    public function exsits(int $index) :bool{
        return session()->has("$this->bucket.$index");
    } 

    /**
     * Forget all sessions in the specified bucket
     *
     * @return void
     */
    public function clear() :void{
        session()->forget($this->bucket);
    }

    /**
     * Count all sessions of the specified bucket
     *
     * @return integer
     */
    public function count() :int{
        return count($this->all());
    }
}

