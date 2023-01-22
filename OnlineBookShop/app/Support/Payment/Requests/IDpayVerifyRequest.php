<?PhP 
namespace App\Support\Payment\Requests;

use App\Support\Payment\Contracts\RequestInterface;
use Illuminate\Http\Request;

class IDpayVerifyRequest implements RequestInterface{
    private string $id;
    private string $order_id;

    /* Initialization */
    public function __construct(Request $request) {
        $this->id = $request->id;
        $this->order_id = $request->order_id;
    }

    /**
     * Giving id
     *
     * @return string 
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Giving order id 
     *
     * @return string
     */
    public function getOrderId(){
        return $this->order_id;
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

