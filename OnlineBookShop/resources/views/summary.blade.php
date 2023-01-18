@inject('cost', 'App\Support\Cost\Contract\CostInterface')
@inject('routes', 'App\Services\Setters\Routes')

<!-- Summary start -->
<div class="col-lg-4">
    <div class="cart__discount">
        <h6>Discount codes</h6>
        <form action="#">
            <input type="text" placeholder="Coupon code">
            <button type="submit">Apply</button>
        </form>
    </div>
    <div class="cart__total">
        <h6>Summary</h6>
        <ul style="padding-left: 0rem;">
            @foreach ($cost->getSummary() as $key => $value)
                <li>{{ $key }} <span>${{ number_format($value) }}</span></li>
            @endforeach
                <li>Total <span>${{ number_format($cost->getTotalCost()) }}</span></li>
        </ul>
        
        @if($routes->view_SetRouteForSummaryBtn() === 'basket')
            <a class="primary-btn" id="btn-summary" href="{{ route('shop.checkout.index') }}">PROCEED TO CHECKOUT</a>  
        @else
            <a onclick="event.preventDefault();document.getElementById('checkout-form').submit()" class="primary-btn" id="btn-summary" href="">PLACE ORDER</a>  
        @endif

    </div>
</div>
<!-- Summary end -->
