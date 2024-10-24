<x-layout>
    <x-slot:heading>
            <h2 class="font-bold text-lg"> {{ $desafio['title'] }}</h2>
            <h6 class="font-bold">Dificuldade: {{ $desafio['dificuldade'] }}</h6>
    </x-slot:heading>


    <div class="">
        <h6>Descrição</h6>
        <p>
            {{ $desafio['body'] }}
        </p>
    </div>

    <div class="flex justify-center rounded-lg  px-8 py-8">

        @foreach ($desafio->alternativas as $alternativa)
            {{-- @dd($alternativa->text); --}}
            <button class="mx-4 border-2 border-blue-400 p-2">{{$alternativa->text}}</button>
        @endforeach

            {{-- <button class="mx-4 border-2 border-blue-400 p-2">Alternativa 2</button>
            <button class="mx-4 border-2 border-blue-400 p-2">Alternativa 3</button>
            <button class="mx-4 border-2 border-blue-400 p-2">Alternativa 4</button> --}}
    </div>

</x-layout>
