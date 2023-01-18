<?PhP 
namespace App\Support\Payment;

use App\Support\Payment\Contracts\RequestInterface;
use App\Support\Payment\Exception\GatewayNotFoundException;

class PaymentService{
    public const IDPAY = 'IDpay';
    public const ZARINPAL = 'Zarinpal';

    public function __construct(
            private string $gatewayName , 
            private RequestInterface $request)
    {}

    public function pay(){
        $this->gatewayFactory()->pay();
    }
  
    public function gatewayFactory(){
        $className = 'App\Support\Payment\Gateways\\' . $this->gatewayName;

        if(!class_exists($className))
            throw new GatewayNotFoundException("Gateway is invalid!");

        return new $className($this->request);
    }
}
 

 