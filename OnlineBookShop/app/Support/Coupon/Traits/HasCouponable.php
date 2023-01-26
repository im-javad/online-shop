<?PhP 
namespace App\Support\Coupon\Traits;

use App\Models\Coupon;
use Carbon\Carbon;

trait HasCouponable{
    /**
     * Establishing polymorphic relationship with the coupon
     *
     * @return mixed
     */
    public function coupons(){
        return $this->morphMany(Coupon::class , 'couponable');
    }

    /**
     * Only unexpired coupons
     *
     * @return mixed
     */
    public function validCoupons(){
        return $this->coupons()->where('expire_time' , '>' , Carbon::now());
    }
}
