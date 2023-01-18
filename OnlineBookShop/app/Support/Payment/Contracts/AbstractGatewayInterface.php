<?PhP 
namespace App\Support\Payment\Contracts;

abstract class AbstractGatewayInterface{
    public function __construct(RequestInterface $request){ 
    }
}
