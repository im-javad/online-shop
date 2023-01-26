<?PhP 
namespace App\Support\Coupon;

use App\Models\Coupon;
use App\Support\Coupon\Validator\CanUseCoupon;
use App\Support\Coupon\Validator\IsExpired;

class CouponValidator{
    /**
     * Start validator operation for coupon
     *
     * @param \App\Models\Coupon $coupon
     * @return void
     */
    public function isValid(Coupon $coupon){
        $isExpired = resolve(IsExpired::class);
        $canUseCoupon = resolve(CanUseCoupon::class);

        $isExpired->setNextValidator($canUseCoupon);

        $isExpired->validate($coupon);
    }
}
