<?PhP 
namespace App\Support\Payment\Contracts;

abstract class AbstractFailVerify{
    public function __construct(private string $statusCode) {
    }

    public function failVerifyResponse(string $msg){
        return redirect()->route('shop.basket.index')->with('warningAlert' , $msg);
    }
}


