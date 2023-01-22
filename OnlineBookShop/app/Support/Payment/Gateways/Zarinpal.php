<?PhP 

// !Not yet implemented

namespace App\Support\Payment\Gateways;

use App\Support\Payment\Contracts\AbstractGatewayInterface;
use App\Support\Payment\Contracts\PayableInterface;
use App\Support\Payment\Contracts\VerifyableInterface;

class Zarinpal extends AbstractGatewayInterface implements PayableInterface , VerifyableInterface{
    public function pay(){
        
    }

    public function verify(){
        
    }
}


