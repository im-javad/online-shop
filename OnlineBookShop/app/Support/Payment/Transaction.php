<?PhP 
namespace App\Support\Payment;

use App\Events\RegisteredOrder;
use App\Models\Order;
use App\Models\Payment;
use App\Support\Basket\Basket;
use App\Support\Cost\Contract\CostInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Transaction{
    /* Preparation */
    public function __construct(
        private Request $request ,
        private Basket $basket ,
        private CostInterface $cost){
    }

    /**
     * The operation of going to the payment gateway and making the required data such as the order
     *
     * @return null|array
     */
    public function doPaymentOperation(){
        DB::beginTransaction();

        try {
            $user = $this->CompletionUserInformation();

            $order = $this->makeOrder();

            $payment = $this->makePayment($order);

            DB::commit();
        }catch(\Exception $event){
            DB::rollBack();
            return null;
        }

        return [
            'user' => $user,
            'order' => $order,
            'payment' => $payment,
        ];
    }

    /**
     * Completing user information to place an order
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function CompletionUserInformation(){
        $user = Auth::user();

        $user->email = Auth::user()->email; //For higher reliability and security(is option!)

        if(empty($user->phone_number))
            $user->phone_number = $this->request->phone_number;

        $user->address = $this->request->address;
        
        $user->save();

        return $user;
    }

    /**
     * Creating an order for registration
     *
     * @return array
     */
    public function makeOrder(){
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'amount' => $this->basket->getTotalProductsCost(),
            'res_num' => bin2hex(random_bytes(16)),
            'status' => 'unpaid',
        ]);

        $order->products()->attach($this->basket->all());

        return $order;
    }

    /**
     * Creating an payment for order payment 
     *
     * @param \App\Models\OrderOrder $order
     * @return array
     */
    public function makePayment(Order $order){
        $payment = Payment::create([
            'order_id' => $order->id,
            'amount' => $this->cost->getTotalCost(),
            'method' => $this->request->method,
            'status' => 'unpaid',
        ]);

        return $payment;
    }

    /**
     * Performing the operation after the successful order and completing the order
     *
     * @param \App\Models\Order $order
     * @return void
     */
    public function completeOrder(Order $order){
        $this->normalizeStock($order);

        event(new RegisteredOrder($order));
        
        $this->basket->clear();

        session()->forget('coupon');
    }
    
    /**
     * Decreasing product inventory after successful order registration
     *
     * @param \App\Models\Order $order
     * @return void
     */
    public function normalizeStock(Order $order){
        foreach($order->products as $product){
            $product->decrementStock($product->pivot->quantity);
        }
    }
}

