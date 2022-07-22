<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Allowance</button>
            </div>
            <div><a href="{{route('admin.allowance')}}" >
                <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">All Allowance</button>
            </a></div>
        </x-slot>
        </div>




 <div class="bg-blue-200 min-h-screen flex items-center">
    <div class="w-full">
      <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Admin Allowance Edit</h2>
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
             <label for="allowance_details" class="block mb-2 font-bold text-gray-600">Allowance details</label>
             <input type="text" id="allowance_details" wire:model='allowance_details' placeholder="Allowance Details" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>

             <div class="mb-5">
              <label for="allowance_type" class="block mb-2 font-bold text-gray-600">Allowance Type</label>
              <center>
              <select class="form-control" name="allowance_type">
                 <option value="">select type</option>
                 <option value="">credit</option>
                 <option value="">debit</option>
              </select></center>
             {{-- <input type="text" id="allowance_type" wire:model='allowance_type' placeholder="Allowance Type" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div> --}}


                 <div class="mb-5">
             <label for="amount" class="block mb-2 font-bold text-gray-600"> Amount</label>
             <input type="number" id="amount" wire:model='amount' placeholder="Amount" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
             <div class="mb-5">
                 <label for="Total" class="block mb-2 font-bold text-gray-600"> Total</label>
                 <input type="number" id="total" wire:model='total' placeholder="total" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>


             <div class="mb-5">
                     <label for="issued_salary_id" class="block mb-2 font-bold text-gray-600"> issued_salary_id</label>
                     <input type="number" id="issued_salary_id" wire:model='issued_salary_id' placeholder="issued_salary_id" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
             <div class="mb-5">
             <label for="issue_date" class="block mb-2 font-bold text-gray-600">Issue date </label>
             <input type="date" id="issue date" wire:model='issue_date' placeholder="issued date" class="border border-gray-300 shadow p-3 w-full rounded mb-">


          <center> <input type="button" value="Update" wire:click='save()' value='save!'></center>

        </form>
      </div>
    </div>
  </div>
