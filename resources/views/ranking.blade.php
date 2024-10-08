<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto shadow-sm sm:rounded-lg">
                <table class="w-full text-sm text-center text-gray-500 dark:text-white">
                    <thead>
                        <tr class="bg-white border-b dark:bg-gray-700 dark:border-gray-600 text-xl">
                            <th class="px-6 py-3">Rank</th>
                            <th class="px-6 py-3">Name</th>
                            <th class="px-6 py-3">Unique</th>
                            <th class="px-6 py-3">Total</th>
                            <th class="px-6 py-3">Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-lg">
                            <td class="px-6 py=4">{{ $loop->index + 1 }}</td>
                            <td class="px-6 py=4">{{ $user->name }}</td>
                            <td class="px-6 py=4">{{$user->elephpants->unique()->count()}}</td>
                            <td class="px-6 py=4">{{ $user->elephpants_count }}</td>
                            <td class="px-6 py=4">{{ $user->updated_at->diff(now()) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
