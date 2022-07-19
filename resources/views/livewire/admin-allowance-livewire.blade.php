<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>Allowance</div>
            <div><a href="{{route('admin.allowance.add')}}" >
            <button type="button" class="inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">Add Allowance </button>
        </a></div>

        </div>
    </x-slot>
    <div class="overflow-x-auto">
        <div class="flex">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">User ID.</th>
                                <th class="py-3 px-6 text-center">Allowance Name</th>
                                <th class="py-3 px-6 text-center">Allowance Type</th>
                                <th class="py-3 px-6 text-center">Amount</th>
                                <th class="py-3 px-6 text-center">Total </th>
                                <th class="py-3 px-6 text-center">Issued Salary ID</th>
                                <th class="py-3 px-6 text-center">Issue Date</th>
                                <th class="py-3 px-6 text-center">Issue By</th>

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
                                    {{$allowance->allowance_name}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->allowance_details}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->allowance_type}}
                                </td> <td class="py-3 px-6 text-center">
                                    {{$allowance->amount}}
                                </td> <td class="py-3 px-6 text-center">
                                    {{$allowance->total}}
                                </td> <td class="py-3 px-6 text-center">
                                    {{$allowance->issue_salary_id}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->issue_date}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->issue_by}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
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


