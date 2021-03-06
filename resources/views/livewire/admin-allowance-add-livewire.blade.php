

 <div class="bg-blue-200 min-h-screen flex items-center">
   <div class="w-full">
     <h2 class="text-center text-black-700 font-bold text-2xl uppercase mb-10"><u>Allowance Add</u> </h2>
     <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
         <div class="mb-5">
           <label for="user_id" class="block mb-2 font-bold text-gray-600">User Id</label>
             <center>
            <select wire:model="user_id">
            <option>Please select User Id</option>
           @foreach ($all_users as $user)
               <option value="{{$user->id}}">{{$user->name}}</option>
           @endforeach
       </select>
    </center>

          </div>

          <div class="mb-5">
            <label for="allowance_name" class="block mb-2 font-bold text-gray-600">Allowance Name</label>
            <input type="text" id="allowance_name" wire:model='allowance_name' placeholder="Allowance Name" class="border border-gray-300 shadow p-3 w-full rounded mb-">
        </div>
             <div class="mb-5">
            <label for="allowance_details" class="block mb-2 font-bold text-gray-600">Allowance details</label>
            <input type="text" id="allowance_details" wire:model='allowance_details' placeholder="Allowance Details" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>


            <div class="mb-5">
             <label for="allowance_type" class="block mb-2 font-bold text-gray-600">Allowance Type</label>
             <center>
             <select class="form-control" wire:model="allowance_type">
                <option>select type</option>
                <option value="credit">credit</option>
                <option value="debit">debit</option>
             </select></center>
            {{-- <input type="text" id="allowance_type" wire:model='allowance_type' placeholder="Allowance Type" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div> --}}


                <div class="mb-5">
            <label for="amount" class="block mb-2 font-bold text-gray-600"> Amount</label>
            <input type="number" id="amount" wire:model='amount' placeholder="Amount" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
            <label for="issue_date" class="block mb-2 font-bold text-gray-600">Issue date </label>
            <input type="date" id="issue date" wire:model='issue_date' placeholder="issued date" class="border border-gray-300 shadow p-3 w-full rounded mb-">
           </div>



         <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button"  wire:click='save()' value="save!">
              save
            </button>

          </div>
        </div>
        </div>
     </div>
   </div>
