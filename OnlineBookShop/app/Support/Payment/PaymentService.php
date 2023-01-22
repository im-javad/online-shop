<?PhP 
namespace App\Support\Payment;

use App\Support\Payment\Contracts\RequestInterface;
use App\Support\Payment\Exception\GatewayNotFoundException;

class PaymentService{
    public const IDPAY = 'IDpay'; // Implemented (for test)
    public const ZARINPAL = 'Zarinpal'; // !Not yet implemented
    public const PAYPAL = 'Paypal'; // !Not yet implemented
    public const WEBPAY = 'Webpay'; // !Not yet implemented

    /* Preparation */
    public function __construct(
            private string $gatewayName , 
            private RequestInterface $request)
    {}

    /**
     * Connect to the specified payment gateway for payment
     *
     * @return mixed
     */
    public function pay(){
        return $this->gatewayFactory()->pay();
    }

    /**
     * Connect to the specified payment gateway for payment
     *
     * @return mixed
     */
    public function verify(){
        return $this->gatewayFactory()->verify();
    }

    /**
     * Find the specified payment gateway
     *
     * @return object
     */
    public function gatewayFactory(){
        $className = 'App\Support\Payment\Gateways\\' . $this->gatewayName;

        if(!class_exists($className))
            throw new GatewayNotFoundException("Invalid gateway!");

        return new $className($this->request);
    }
}
 

