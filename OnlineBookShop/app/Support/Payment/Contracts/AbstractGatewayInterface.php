<?PhP 
namespace App\Support\Payment\Contracts;

abstract class AbstractGatewayInterface{
    const VERIFY_FAILD = 'verify.faild';
    const VERIFY_SUCCESS = 'verify.success';
    
    public function __construct(protected RequestInterface $request){ 
    }
}

