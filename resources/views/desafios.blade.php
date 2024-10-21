<x-layout>
    <x-slot:heading>
        Desafios
    </x-slot:heading>
    <ul>
        @foreach ($desafios as $desafio)
            <li>
                <a href="/desafio/{{ $desafio['id'] }}">
                    {{ $desafio['title'] }} | Dificuldade: {{ $desafio['dificuldade'] }}.
                </a>
            </li>   
        @endforeach
    </ul>

</x-layout>