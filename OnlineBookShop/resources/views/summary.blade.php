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
        <a href="{{ route($routes->view_SetRouteForSummaryBtn()['route']) }}" class="primary-btn" id="btn-summary">{{ $routes->view_SetRouteForSummaryBtn()['name'] }}</a>
    </div>
</div>
<!-- Summary end -->
