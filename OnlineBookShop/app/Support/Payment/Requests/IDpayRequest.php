<?PhP 
namespace App\Support\Payment\Requests;

use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use App\Support\Payment\Contracts\RequestInterface;

class IDpayRequest implements RequestInterface{
    /* Preparation */
    private User $user;
    private Order $order;
    private Payment $payment;

    /* Initialization */
    public function __construct(array $result){
        $this->user = $result['user'];  
        $this->order = $result['order'];  
        $this->payment = $result['payment'];  
    }

    /**
     * Giving order id (res_num)
     *
     * @return string
     */
    public function getOrderId(){
        return $this->order->res_num;
    }

    /**
     * Giving payment amount
     *
     * @return int
     */ 
    public function getAmount(){
        return $this->payment->amount;
    }

    /**
     * Giving user name 
     *
     * @return string
     */
    public function getName(){
        return $this->user->name;
    }

    /**
     * Giving user phone number 
     *
     * @return int
     */ 
    public function getPhone(){
        return $this->user->phone_number;
    }

    /**
     * Giving user email
     *
     * @return string
     */ 
    public function getEmail(){
        return $this->user->email;
    }

    /**
     * Giving payment gateway api key
     *
     * @return string
     */
    public function getApiKey(){
        return config('services.gateways.idpay.api-key');
    }
}

