@extends('layouts.contenttailwind')
@section('title')
    Hieronder vind u ons menu.
@endsection
@section('undertitle')
    Wij maken alleen maar VERSE pizza's!
@endsection
@section('content')
    <!-- Menu -->
    <section class="sectionSize bg-secondary justify-center md:justify-between md:items-center flex flex-col">
        <div class="md:grid md:grid-cols-5 md:grid-rows-3">
            @foreach ($pizza as $pizza)
                <div class="flex items-start font-montserrat my-6 mr-10">
                    <div>
                        <h3 class="font-semibold text-2xl">{{   $pizza->naam }}</h3>
                        <p>
                            {{ $pizza->beschrijving }} <br> {{ $pizza->ingredienten }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
