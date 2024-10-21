<x-layout>
    <x-slot:heading>
        Desafio
    </x-slot:heading>
    <h2 class="font-bold text-lg"> {{ $desafio['title'] }}</h2>
    <h5 class="font-bold">{{ $desafio['dificuldade'] }}</h5>

    <p>
        {{ $desafio['body'] }}
    </p>
</x-layout>