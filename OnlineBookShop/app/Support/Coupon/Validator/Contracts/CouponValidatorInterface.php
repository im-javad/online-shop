<?PhP
namespace App\Support\Coupon\Validator\Contracts;

use App\Models\Coupon;
/** Organize coupon validators */
interface CouponValidatorInterface{
    public function setNextValidator(couponValidatorInterface $nextValidator);
    public function validate(Coupon $coupon);
}
