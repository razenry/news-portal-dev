<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Tulisan
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-slate-900 shadow sm:rounded-lg">
                <div class="max-w-2xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-white">
                                Edit Data Tulisan
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                Silakan melakukan perubahan data
                            </p>
                        </header>

                        <form method="post" action="" class="mt-6 space-y-6" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div>
                                <x-input-label for="title" value="Title" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus autocomplete="title" />

                            </div>
                            <div>
                                <x-input-label for="decription" value="decription" />
                                <x-text-input id="decription" name="decription" type="text" class="mt-1 block w-full" required autofocus autocomplete="decription" />

                            </div>
                            <div>
                                <x-input-label for="file_input" value="Thumbnail" />
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-slate-900 dark:border-gray-600 dark:placeholder-gray-400 p-2" id="file_input" type="file">

                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
