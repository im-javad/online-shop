<?PhP 
namespace App\Support\Payment\Requests;

use App\Support\Payment\Contracts\RequestInterface;

class IDpayRequest implements RequestInterface{
    private $user;
    private $amount;

    public function __construct(array $data){
        $this->user = $data['user'];  
        $this->amount = $data['amount'];  
    }

    public function getUser(){
        return $this->user;
    }

    public function getAmount(){
        return $this->amount;
    }
}

