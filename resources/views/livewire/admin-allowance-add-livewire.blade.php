
{{-- <center>
    <div class="col-lg-6 w-full max-w-xl">
        <form class= "bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8">
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
                User_Id
              </label>
              <select wire:model="user_id">
                 <option>Please select User Id</option>
                @foreach ($all_users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="salary_amount" id="salary_amount" type="text" placeholder="salary amount">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
                Allowance_Name
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="allowance_name" id="allowance_name" type="text" placeholder="Allowance_name">

            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
                Allowance_Details
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="allowance_details" id="allowance_details" type="text" placeholder="Allowance_details">

            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Allowance_Type
                </label>
                <select class="form-control" name="allowance_type">
                  <option value="">credit</option>
                  <option value="">debit</option></select>
              </div><div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Amount
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="amount" id="amount" type="text" placeholder="Amount">

              </div><div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Total
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="total" id="total" type="text" placeholder="Total">

              </div><div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Issue_Date
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="issue_date" id="issue_date" type="text" placeholder="Issue_Date">


          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" wire:click='save()' value="save!">
              save
            </button>

          </div>
        </form>

      </div>
    </center> --}}



 <div class="bg-blue-200 min-h-screen flex items-center">
   <div class="w-full">
     <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Admin Allowance Add</h2>
     <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
         <div class="mb-5">
           <label for="user_id" class="block mb-2 font-bold text-gray-600">User Id</label>
           <input type="text" id="user_id" wire:model='user_id' placeholder="user id" class="border border-gray-300 shadow p-3 w-full rounded mb-">
         </div>
         <div class="mb-5">
            <label for="allowance_name" class="block mb-2 font-bold text-gray-600">Phone.No</label>
            <input type="text" id="allowance_name" wire:model='allowance_name' placeholder=" allowance_name" class="border border-gray-300 shadow p-3 w-full rounded mb-">
          </div>

          <div class="mb-5">
            <label for="allowance_details" class="block mb-2 font-bold text-gray-600">Allowance details</label>
            <input type="text" id="allowance_details" wire:model='allowance_details' placeholder="Allowance Details" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
            <div class="mb-5">

             <label for="allowance_type" class="block mb-2 font-bold text-gray-600">Allowance details</label>
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
