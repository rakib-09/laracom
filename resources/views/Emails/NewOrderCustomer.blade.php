@component('mail::layout')
    {{-- Header --}}
@slot('header')
    @component('mail::header', ['url' => config('app.url')])
            Medha Bikash Prokashon
    @endcomponent
@endslot

{{-- Body --}}
Dear <b>{{$name}}</b>, <br>
Your Order Has been received by Our Automated Service.
Our Customer Care will contact with you Soon for confirmation !!

<b>Please Check Your Order List</b>

@component('mail::table')
    | Product Name       | Product Price         | Quantity  |
    | ------------- |:-------------:| --------:|
    @foreach($messages as $row => $ms)
    |   {{$ms['product_name']}}   | {{$ms['product_price']}}     | {{$ms['quantity']}}     |
    @endforeach
@endcomponent


{{-- Subcopy </h4> --}}
@isset($messages)
    @slot('subcopy')
        @component('mail::subcopy')
            This email is auto generated by Our Application.
        @endcomponent
    @endslot
@endisset
{{-- Subcopy --}}
@component('mail::button', ['url' => $url, 'color' => 'green'])
    Track Your Order
@endcomponent

{{-- Footer --}}
@slot('footer')
    @component('mail::footer')
        © {{ date('Y') }} {{ config('app.name') }}. All rights reserved!
    @endcomponent
@endslot
@endcomponent
