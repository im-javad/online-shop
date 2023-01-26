<?PhP 
namespace App\Support\Coupon;

use App\Models\Coupon;
use App\Support\Cost\BasketCost;

class DiscountManager{
    /* Preparation */
    private static BasketCost $cost;
    public function __construct(BasketCost $cost){
        self::$cost = $cost;
    }

    /**
     * Discount price calculation
     * 
     * @return int
     */
    public static function calculateDiscount(){
        if(!session()->has('coupon')) return 0;

        return self::doCalculateDiscount(session()->get('coupon') , self::$cost->getTotalCost());
    }

    /**
     * Doing Discount price calculation operation
     *
     * @param \App\Models\Coupon $coupon
     * @param integer $amount
     * @return int
     */
    public static function doCalculateDiscount(Coupon $coupon , int $amount){
        $discountAmount = (int)($coupon->percent / 100 * $amount);

        return (self::isExceeded($coupon , $discountAmount)) ? $discountAmount : $coupon->limit;
    }
    
    /**
     * Checking whether the discount price exceeds the limit or not
     *
     * @param \App\Models\Coupon $coupon
     * @param integer $discountAmount
     * @return boolean
     */
    private static function isExceeded(Coupon $coupon , int $discountAmount){
        return $coupon->limit > $discountAmount;
    }
}
