<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
                        <div class="row">
{{--                            <h1>{{ dd($order) }}</h1>--}}
                            @foreach($order as $order)
                                <div class="col-sm-6 col-md-4 border">
                                    <h5>{{ $order->cart }}</h5>
                                </div>
                            @endforeach
                        </div>
</x-app-layout>
