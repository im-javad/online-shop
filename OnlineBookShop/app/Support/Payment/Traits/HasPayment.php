<?PhP 
namespace App\Support\Payment\Traits;

use App\Models\Order;
use App\Support\Payment\Exceptions\RequestNotFoundException;
use Illuminate\Http\Request;

trait HasPayment{
    /**
     * Preparation of the specified payment gateway request
     *
     * @param string $gatewayName
     * @param array|\Illuminate\Http\RequestRequest $result
     * @return object
     */
    public function preparationGatewayRequest(string $gatewayName , array|Request $result){
        $className = '\App\Support\Payment\Requests\\' . $gatewayName . 'Request';

        if(!class_exists($className))
            throw new RequestNotFoundException("Invalid Request!");

        return new $className($result);
    }

    /**
     * Perform operations after successful payment verification
     *
     * @param \App\Models\Order $order
     * @param string $gatewayName
     * @param array $result
     * @return void
     */
    public function successVerification(Order $order ,string $gatewayName ,array $result){
        $order->status = 'paid';

        $order->save();
        
        $this->confirmPayment($order , $gatewayName , $result);

        $this->transaction->completeOrder($order);
    }

    /**
     * Complete payment after successful payment
     *
     * @param \App\Models\OrderOrder $order
     * @param string $gateway
     * @param array $verifyResult
     * @return mixed
     */
    public function confirmPayment(Order $order , string $gateway ,array $result){
        return $order->payment->confirm($gateway , $order->res_num , $result['track_id'] , $result['id']); 
    }
    
    /**
     * Send response after successful order registration
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function successResponse(){
        return redirect()
                        ->route('shop.home')->with('successAlert' , 'Your order has been registered');
    }
    
    /**
     * Sending a response after failure in the order
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function errorResponse(){
        return redirect()
                        ->route('shop.basket.index')->with('errorAlert', 'Fail to do register order');
    }

    /**
     * Sending a response after failure in the verify payment
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verificationFailureResponse(){
        return redirect()
                        ->route('shop.basket.index')->with('warningAlert' , 'There was a problem during payment');
    }
}


