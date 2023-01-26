<?PhP 
namespace App\Support\Coupon\Validator;

use App\Models\Coupon;
use App\Support\Coupon\Exceptions\ExpiredCouponTime;
use App\Support\Coupon\Validator\Contracts\AbstractCouponValidator;

class IsExpired extends AbstractCouponValidator{
    /**
     * Checking the coupon is expired or not
     *
     * @param \App\Models\Coupon $coupon
     * @return mixed
     */
    public function validate(Coupon $coupon){
        if($coupon->isExpired())
            throw new ExpiredCouponTime("Expired Coupon Time"); 
        
        return parent::validate($coupon);
    }
}
