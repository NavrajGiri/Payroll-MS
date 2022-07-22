<div>
    <div class="grid grid-cols-6">
        <div>Name</div>
        <div>Salary</div>
        <div>Bills</div>
        <div>Allowance</div>
        <div>Total</div>
        <div>Action</div>
    </div>
    @foreach ($all_users as $user)
    <div class="grid grid-cols-6 border-b pb-5 pt-5">
        <div>{{$user->name}}</div>
        <div>{{$salary = $user->grade()->first()->salary_amount}}</div>
        <div>
            @php
                $bills = $user->bill()->whereNull('issued_salary_id')->get();
                $total_bills = 0;
                foreach($bills as $bill){
                    $total_bills = $total_bills + $bill->amount;
                    echo "Rs ".$bill->amount." for ".$bill->product_name."<br/>";
                }
                echo "Total: Rs ". $total_bills;
            @endphp
        </div>
        <div>
            @php
                $allowances = $user->allowance()->whereNull('issued_salary_id')->get();
                $total_allowance = 0;
                foreach($allowances as $allowance){
                    if($allowance->allowance_type == "debit") {
                        $allowance->amount = -$allowance->amount;
                    }
                    $total_allowance = $total_allowance + $allowance->amount;
                    echo "Rs ".$allowance->amount." for ".$allowance->allowance_name."<br/>";
                }
                echo "Total: Rs ". $total_allowance;
            @endphp
        </div>
        <div>Rs. {{$salary + $total_bills + $total_allowance}}</div>
        <div>
            <input wire:model="note" placeholder="Note">
            <input wire:model="method" placeholder="Payment Method">
            <input type="button" value="Issue this Salary!" wire:click='issue_salary({{$user->id}})'>
        </div>
    </div>
    @endforeach
</div>
