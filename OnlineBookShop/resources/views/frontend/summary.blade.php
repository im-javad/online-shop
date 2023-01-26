@inject('cost', 'App\Support\Cost\Contract\CostInterface')
@inject('routes', 'App\Services\Setters\Routes')

<!-- Summary start -->
<div class="col-lg-4">
    <div class="cart__discount">
        <h6>Discount codes</h6>
        @if(session()->has('coupon'))
            <form action="{{ route('coupon.destroy') }}">
            @csrf
                <input value="{{session()->get('coupon')->code}}" disabled>
                <button type="submit">Remove</button>
            </form>
        @else()
            <form action="{{ route('coupon.storage') }}" method="POST">
            @csrf
                <input type="text" name="code" placeholder="Coupon code">
                @error('code')
                    <span class="valid-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
                <button type="submit">Apply</button>
            </form>
        @endif
    </div>
    <div class="cart__total">
        <h6>Summary</h6>
        <ul style="padding-left: 0rem;">
            @foreach($cost->getSummary() as $key => $value)
                <li>{{ $key }} <span>${{ number_format($value) }}</span></li>
            @endforeach
                <li>Total <span>${{ number_format($cost->getTotalCost()) }}</span></li>
        </ul>
        @if($routes->view_SetRouteForSummaryBtn() === 'basket')
            <a class="primary-btn" id="btn-summary" href="{{ route('shop.checkout.index') }}">PROCEED TO CHECKOUT</a>  
        @else
            <a onclick="event.preventDefault();document.getElementById('checkout-form').submit()" class="primary-btn" id="btn-summary">PLACE ORDER</a>  
        @endif
    </div>
</div>
<!-- Summary end -->
