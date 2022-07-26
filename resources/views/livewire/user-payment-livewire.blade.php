<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
            User Payments
                </div>

    </div>
    </x-slot>
    <input wire:model="keyword">
    <div class="overflow-x-center">
        <div class="flex">
            <div class="w-full lg:w-5/6 ">
                <div class="bg-lightblue rounded my-6">
                    <table class="min-w-max w-full table-center">
                        <thead>
                            <tr class="bg-green-500 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Id</th>
                                <th class="py-3 px-6 text-left">Date</th>
                                <th class="py-3 px-6 text-left">Note</th>
                                <th class="py-3 px-6 text-center">Amount</th>
                                <th class="py-3 px-6 text-center">Bank</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($issued_salaries as $salary)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{$salary->id}}
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{$salary->date}}
                                </td>
                                <td class="py-3 px-6 text-left">
                                    {{$salary->note}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$salary->amount}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$salary->bank}}
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
