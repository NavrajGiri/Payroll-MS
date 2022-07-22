<div>
    <x-slot name="header">
        My Allowences
    </x-slot>
    <div class="overflow-x-auto">
        <div class="flex">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-full rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-green-500 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-center">Allowance Name</th>
                                <th class="py-3 px-6 text-center">Allowance Type</th>
                                <th class="py-3 px-6 text-center">Amount</th>
                                <th class="py-3 px-6 text-center">Total </th>
                                <th class="py-3 px-6 text-center">Issued Salary ID</th>
                                <th class="py-3 px-6 text-center">Issue Date</th>
                                <th class="py-3 px-6 text-center">Issue By</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($all_allowance as $allowance)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{$allowance->id}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->allowance_name}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->allowance_details}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->allowance_type}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->amount}}
                                </td> <td class="py-3 px-6 text-center">
                                    {{$allowance->total}}
                                </td> <td class="py-3 px-6 text-center">
                                    {{$allowance->issued_salary_id}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->issue_date}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$allowance->issue_by}}
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


