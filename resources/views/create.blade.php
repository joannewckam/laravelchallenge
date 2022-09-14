<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Upload a file
                    </h2>
                </header>
                <form method="POST" action="/note" enctype="multipart/form-data" class="text-center">
                    @csrf
                    <label
                    for="name"
                    class="inline-block text-lg mb-2"
                    >Name</label>
                    <input 
                    type="text"
                    name="name"
                    class="border border-gray-200 rounded p-2 w-full"
                    />
                    <label
                    for="file"
                    class="inline-block text-lg mb-2 "
                    >File</label>
                    <input 
                    type="file"
                    name="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    />
                    <button class="border border-gray-200 rounded p-2 ">Save</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
