<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pengaturan Blog
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-900 shadow-sm sm:rounded-lg overflow-x-auto">
                <div class="p-6 bg-white dark:bg-slate-900 border-b border-gray-200 dark:border-slate-700">
                    <table
                        class="w-full whitespace-no-wrapw-full whitespace-no-wrap table-fixed text-black dark:text-white">
                        <thead>
                            <tr class="text-center font-bold">
                                <td class="border px-6 py-4 w-[80px]">No</td>
                                <td class="border px-6 py-4">Judul</td>
                                <td class="border px-6 py-4 lg:w-[250px] hidden lg:table-cell">Tanggal</td>
                                <td class="border px-6 py-4 lg:w-[100px] hidden lg:table-cell">Status</td>
                                <td class="border px-6 py-4 lg:w-[250px] w-[100px]">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $blog)
                                <tr>
                                    <td class="border px-6 py-4 text-center">{{ $data->firstItem() + $key}}</td>
                                    <td class="border px-6 py-4">
                                        {{ $blog->title }}
                                        <div class="block lg:hidden text-sm text-black dark:text-white">
                                            {{ $blog->status }} | {{ $blog->created_at->isoFormat('dddd, D MMMM Y') }}
                                        </div>
                                    </td>
                                    <td
                                        class="border px-6 py-4 text-center text-black dark:text-white text-sm hidden lg:table-cell">
                                        {{ $blog->created_at->isoFormat('dddd, D MMMM Y') }}</td>
                                    <td class="border px-6 py-4 text-center text-sm hidden lg:table-cell">{{ $blog->status }}</td>
                                    <td class="border px-6 py-4 text-center">
                                        <a href='{{ route("member.blogs.edit", ['blog' => $blog->id]) }}' class="text-blue-600 hover:text-blue-400 px-2">edit</a>
                                        <a href='' class="text-blue-600 hover:text-blue-400 px-2">lihat</a>
                                        <button type=' submit' class='text-red-600 hover:text-red-400 px-2'>
                                            hapus
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="p-5">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
