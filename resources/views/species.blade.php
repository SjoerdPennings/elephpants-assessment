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

                            <form action="/herd/add/{{$elephpant->id}}" method="POST">
                                @csrf
                                <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Add to Herd ＋
                                </button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
