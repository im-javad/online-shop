<?PhP 
namespace App\Support\Coupon\Validator\Contracts;

use App\Models\Coupon;

abstract class AbstractCouponValidator implements couponValidatorInterface{
    /**
     * Determining the next validator
     *
     * @var couponValidatorInterface
     */
    private $nextValidator;

    /**
     * Setting the next validator
     *
     * @param couponValidatorInterface $nextValidator
     * @return void
     */
    public function setNextValidator(couponValidatorInterface $nextValidator){
        $this->nextValidator = $nextValidator;
    }

    /**
     * Perform the next validator , if any
     *
     * @param \App\Models\Coupon $coupon
     * @return true|void
     */
    public function validate(Coupon $coupon){
        if($this->nextValidator === null)
            return true;

        $this->nextValidator->validate($coupon);
    }
}
