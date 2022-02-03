@extends('layouts.contenttailwind')
@section('title')
    Hieronder kunt u onze heerlijke gerechten bestellen.
@endsection
@section('undertitle')
    Kies er een paar uit!
@endsection
@section('content')
    <div class="container px-6 mx-auto">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                    <div class="flex items-end justify-end w-full bg-cover">
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700">{{ $product->naam }}</h3>
                        <p class="text-gray-500">{{ $product->beschrijving }}</p>
                        <p class="text-gray-500">{{ $product->ingredienten }}</p>
                        <span class="mt-2 text-gray-500">€{{ $product->prijs }}</span>

                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->naam }}" name="name">
                            <input type="hidden" value="{{ $product->prijs }}" name="price">
                            <input type="hidden" value="1" name="quantity">
                            <button class="bg-black hover:bg-black-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Voeg toe</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
