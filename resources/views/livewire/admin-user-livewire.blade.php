<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
            <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">User</button>
            </div>
            <div><a href="{{route('admin.user.add')}}" >
                <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Add User</button>
        </a></div>
</div>
    </x-slot>
    <div class="overflow-x-center">
        <div class="flex">
            <div class="w-full lg:w-5/6 ">
                <div class="bg-lightblue shadow-full rounded my-6">
                    <table class="min-w-max w-full table-center">
                        <thead>
                            <tr class="bg-green-500 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Id</th>
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Computer No.</th>
                                <th class="py-3 px-6 text-center">Rank</th>
                                {{-- <th class="py-3 px-6 text-center">Gender</th> --}}
                                <th class="py-3 px-6 text-center">Address</th>
                                <th class="py-3 px-6 text-center">Phone No.</th>
                                <th class="py-3 px-6 text-center">PAN No.</th>
                                <th class="py-3 px-6 text-center">Bank Name.</th>
                                <th class="py-3 px-6 text-center">Account No.</th>
                                <th class="py-3 px-6 text-center">Nagarik Lagani Kosh No.</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($all_users as $user)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{$user->id}}
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{$user->name}}
                                </td>
                                <td class="py-3 px-6 text-left">
                                    {{$user->computer_no}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$user->rank}}
                                </td>
                                {{-- <td class="py-3 px-6 text-center">
                                    {{$user->date_of_birth}}
                                </td><td class="py-3 px-6 text-center">
                                    {{$user->gender}}
                                </td><td class="py-3 px-6 text-center">
                                    {{$user->merital_status}}
                                </td><td class="py-3 px-6 text-center">
                                    {{$user->address}} --}}
                                </td><td class="py-3 px-6 text-center">
                                    {{$user->phone_no}}
                                {{-- </td><td class="py-3 px-6 text-center">
                                    {{$user->joining_date}}
                                </td> --}}
                                {{-- <td class="py-3 px-6 text-center">
                                    {{$user->blood_group}}
                                </td> --}}
                                <td class="py-3 px-6 text-center">
                                    {{$user->pan_no}}
                                </td><td class="py-3 px-6 text-center">
                                    {{$user->bank_no}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$user->account_no}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$user->grade_id}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$user->nagrik_lagani_kosh_no}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <a href="{{route('admin.user.edit',$user->id)}}">

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
