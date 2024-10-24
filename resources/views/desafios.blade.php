<x-layout>
    <x-slot:heading>
        Desafios
    </x-slot:heading>
    <div>
        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
            @foreach ($desafios as $desafio)
                    <a href="/desafio/{{ $desafio['id'] }}" class="border-4 border-indigo-200 rounded p-2 text-center hover:scale-105 size:auto">
                        <div>
                            <strong>{{ $desafio['title'] }}</strong>
                        </div>
                        <div>
                            Dificuldade: {{ $desafio['dificuldade'] }}.
                        </div>
                    </a>
            @endforeach
        </div>

        {{-- <div class="py-8">
            {{ $desafios->links() }}
        </div> --}}
    </div>


</x-layout>
