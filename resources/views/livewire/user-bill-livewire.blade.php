<div>
    <x-slot name="header">
            <div class="flex justify-between items-center">
                <div>
                    My Bills
                </div>
                <div><a href="{{route('user.bill.add')}}" class="underline">
                    <button type="button" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Add User Bill</button>
                    </a></div>
            </div>
    </x-slot>
    <div class="overflow-x-auto">
        <div class="flex">
            <div class="w-full">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-green-500 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">Bill No.</th>
                                <th class="py-3 px-6 text-center">User ID</th>
                                <th class="py-3 px-6 text-center">Product Name</th>
                                <th class="py-3 px-6 text-center">Product Detail</th>
                                <th class="py-3 px-6 text-center">Quantity</th>
                                <th class="py-3 px-6 text-center">Amount </th>
                                <th class="py-3 px-6 text-center">Issued Salary ID</th>
                                <th class="py-3 px-6 text-center">Total Amount</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($all_bills as $bills)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{$bills->id}}
                                </td>
                                <td class="py-3 px-6 text-left">
                                    {{$bills->bill_no}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$bills->user_id}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$bills->product_name}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$bills->product_details}}
                                </td> <td class="py-3 px-6 text-center">
                                    {{$bills->quantity}}
                                </td> <td class="py-3 px-6 text-center">
                                    {{$bills->amount}}
                                </td> <td class="py-3 px-6 text-center">
                                    {{$bills->issued_salary_id}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$bills->total_amount}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <a href="{{route('user.bill.edit',$bills->id)}}">

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
