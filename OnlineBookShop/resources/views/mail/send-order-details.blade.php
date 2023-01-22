<x-mail::message>
# The result of your order:

User {{ $order->user->name }}.
<br>
Your order was registered with ID({{ $order->res_num }}) 
<br>

<hr>

<h1>Your shopping list:</h1>
@foreach ($order->products as $product)
{{ $product->pivot->quantity }} => {{ $product->title}} <br>
@endforeach

<hr>

<h2>Go to your panel to track your order</h2>
<x-mail::button :url="'http://localhost'">
Go to my panel
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>



