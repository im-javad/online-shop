<?PhP 
namespace App\Support\Payment\Gateways;

use App\Support\Payment\Contracts\AbstractGatewayInterface;
use App\Support\Payment\Contracts\PayableInterface;
use App\Support\Payment\Contracts\VerifyableInterface;
use App\Support\Payment\PaymentService;

class IDpay extends AbstractGatewayInterface implements PayableInterface , VerifyableInterface{
    public const STATUS_OK = 100;

    /**
     * Payment through IDpay gateway
     */
    public function pay(){
        $params = array(
            'order_id' => $this->request->getOrderId(),
            'amount' => $this->request->getAmount(),
            'name' => $this->request->getName(),
            'phone' => $this->request->getPhone(),
            'mail' => $this->request->getEmail(),
            'callback' => route('payment.callback' , PaymentService::IDPAY),
          );

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'https://api.idpay.ir/v1.1/payment');
          curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'X-API-KEY: ' . $this->request->getApiKey() . '',
            'X-SANDBOX: 1',
          ));
        
          $result = curl_exec($ch);
          curl_close($ch);
    
          $result = json_decode($result , true);

          return redirect($result['link']);
    }     

    /**
     * verify payment through IDpay gateway
     */
    public function verify(){
      $params = array(
        'id' => $this->request->getId(),
        'order_id' => $this->request->getOrderId(),
      );
      
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'https://api.idpay.ir/v1.1/payment/verify');
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-API-KEY: ' . $this->request->getApiKey() . '',
        'X-SANDBOX: 1',
      ));
      
      $result = curl_exec($ch);
      curl_close($ch);
      
      $result = json_decode($result , true);

      if(isset($result['error_code']))
        return [
          'status' => false,
        ];
      
      if($result['status'] === self::STATUS_OK)
        return [
          'status' => true,
          'statusCode' => $result['status'],
          'content' => $result,
        ];

      return false;
    }
}


