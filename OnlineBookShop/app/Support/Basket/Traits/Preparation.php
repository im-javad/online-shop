<?PhP 
namespace App\Support\Basket\Traits;

use App\Support\Storage\Contract\StorageInterface;

trait Preparation{
    protected $storage;
    public function __construct(StorageInterface $storage){
        $this->storage = $storage;
    }
}

