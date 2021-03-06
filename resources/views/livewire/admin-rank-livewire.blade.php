<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
             Rank
            </div>
            <div><a href="{{route('admin.rank.add')}}" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Add Rank
                </a></div>
        </div>
    </x-slot>

    <div class="overflow-x-auto">
        <div class="flex">
            <div class="w-full ">
                <div class="bg-white shadow-full rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-green-500 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($all_rank as $rank)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">

                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{$rank->id}}
                                </td>
                                <td class="py-3 px-6 text-left">
                                    {{$rank->name}}
                                </td>

                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <a href="{{route('admin.rank.edit',$rank->id)}}">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


