<?PhP 
namespace App\Support\Coupon\Validator;

use App\Models\Coupon;
use App\Support\Coupon\Exceptions\IllegalCoupon;
use App\Support\Coupon\Validator\Contracts\AbstractCouponValidator;
use Illuminate\Support\Facades\Auth;

class CanUseCoupon extends AbstractCouponValidator{
    /**
     * Checking whether the coupon is for the user or not
     *
     * @param \App\Models\Coupon $coupon
     * @return mixed
     */
    public function validate(Coupon $coupon){
        if(!Auth::user()->coupons->contains($coupon))
            throw new IllegalCoupon("Coupon is illegal");

        return parent::validate($coupon);
    }
}
