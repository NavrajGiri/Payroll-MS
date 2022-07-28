<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
               Allowance

            </div>
            <div><a href="{{route('admin.allowance.add')}}" >
                <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Add Allowance</button> </a>

        </div>


    </x-slot>
</div>
    <div class="overflow-x-auto">
        <div class="flex">
            <div class="w-full ">
                <div class="bg-white shadow-full rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-green-500 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">User ID.</th>
                                <th class="py-3 px-6 text-center">Allowance Name</th>
                                <th class="py-3 px-6 text-center">Allowance Type</th>
                                <th class="py-3 px-6 text-center">Amount</th>
                                <th class="py-3 px-6 text-center">Total </th>
                                <th class="py-3 px-6 text-center">Issue Date</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($all_allowance as $allowance)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{$allowance->id}}
                                </td>
                                <td class="py-3 px-6 text-left">
                                    {{$allowance->user_id}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->allowance_details}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->allowance_type}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->amount}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->total}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->issue_date}}
                                </td>

                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <a href="{{route('admin.allowance.edit',$allowance->id)}}">
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


