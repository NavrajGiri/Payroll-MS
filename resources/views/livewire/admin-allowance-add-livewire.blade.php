 <div class="bg-blue-200 min-h-screen flex items-center">
   <div class="w-full">
     <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Admin Allowance Add</h2>
     <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
         <div class="mb-5">
           <label for="user_id" class="block mb-2 font-bold text-gray-600">User Id</label>
           <select wire:model="user_id">
            <option>Please select User Id</option>
           @foreach ($all_users as $user)
               <option value="{{$user->id}}">{{$user->name}}</option>
           @endforeach
       </select>
          </div>
         <div class="mb-5">
            <label for="allowance_name" class="block mb-2 font-bold text-gray-600">Phone.No</label>
            <input type="text" id="allowance_name" wire:model='allowance_name' placeholder=" allowance_name" class="border border-gray-300 shadow p-3 w-full rounded mb-">
          </div>

          <div class="mb-5">
            <label for="allowance_details" class="block mb-2 font-bold text-gray-600">Allowance details</label>
            <input type="text" id="allowance_details" wire:model='allowance_details' placeholder="Allowance Details" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
            <div class="mb-5">

             <label for="allowance_type" class="block mb-2 font-bold text-gray-600">Allowance Type</label>
                <input type="text" id="allowance_type" wire:model='allowance_type' placeholder="Allowance Type" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
                <div class="mb-5">
            <label for="amount" class="block mb-2 font-bold text-gray-600"> Amount</label>
                    <input type="number" id="amount" wire:model='amount' placeholder="Amount" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
                    <div class="mb-5">
            <label for="issue_date" class="block mb-2 font-bold text-gray-600">Issue date </label>
                        <input type="date" id="issue date" wire:model='issue_date' placeholder="issued date" class="border border-gray-300 shadow p-3 w-full rounded mb-">


         <center> <input type="button" value="Update" wire:click='save()'></center>

       </form>
     </div>
   </div>
 </div>
