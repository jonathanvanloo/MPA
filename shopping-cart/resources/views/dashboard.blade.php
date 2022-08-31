<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="row">
            @foreach($order as $order)
                @if(Auth::id() == $order->user_id)
                    <div class="col-sm-6 col-md-4 border">
                        <h5>{{ $order }}</h5>
                    </div>
                @endif
            @endforeach
        </div>
</x-app-layout>
