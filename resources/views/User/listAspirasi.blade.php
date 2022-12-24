<x-app-layout>
    <div class="w-[1040px] mx-auto mt-10">
        <table class="border-collapse w-full">
            <thead class="w-full overflow-hidden">
                <tr>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">No</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Aspirasi</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Foto</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                        1
                    </td>
                    <td class="w-96 inline-block overflow-x-hidden truncate lg:w-auto p-3 text-gray-800 border border-b lg:table-cell relative lg:static">
                        Lorem ipsum dolor, sit ame
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                        foto
                    </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                        <a href="#" class="text-blue-400 hover:text-blue-600 underline">detail</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>