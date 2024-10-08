<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4">
                    @foreach($elephpants as $elephpant)
                    <div class="max-w-sm border border-gray-200 rounded-lg shadow dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg w-full h-auto" src="{{asset('images/' . $elephpant->image)}}" alt="" />
                        </a>
                        <div class="p-5 dark:text-white">
                            <p class="text-xl font-extrabold">{{ $elephpant->name }}</p>
                            <p>{{ $elephpant->event }}</p>
                            <p class="font-bold">{{ $elephpant->company }}</p>
                            <p>{{ $elephpant->year }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
