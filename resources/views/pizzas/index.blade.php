
<div class="container items-center">
    @foreach ($pizza as $pizza)
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-6">
                <div>{{ $pizza->naam }}</div>
                <div>{{ $pizza->prijs }}</div>
                <div>{{ $pizza->ingredienten }}</div>
              
                    <div class="inline-flex gap-1 mb-1">
                        <form action="{{ route('pizzas.details', [$pizza]) }}" method="get">
                            <x-button class="ml-3 bg-blue-500 w-32">
                                {{ __('Details') }}
                            </x-button>
                        </form>

                        <a href="/pizzas/{{$pizza->id}}/samenstellen" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Update</a>



                    </div>

        </div>
    @endforeach
</div>

