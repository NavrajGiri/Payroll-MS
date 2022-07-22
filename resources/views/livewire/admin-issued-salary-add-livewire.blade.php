<div class="bg-blue-200 min-h-screen flex items-center">
    <div class="w-full">
      <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Admin Grade Edit</h2>
      <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
          <div class="mb-5">
            <label for="user_id" class="block mb-2 font-bold text-gray-600">user id</label>
            <input type="number" id="user_id" wire:model='user_id' placeholder="user id" class="border border-gray-300 shadow p-3 w-full rounded mb-">
          </div>
          <div class="mb-5">
             <label for="date" class="block mb-2 font-bold text-gray-600">Date</label>
             <input type="number" id="date" wire:model='date' placeholder="  Date" class="border border-gray-300 shadow p-3 w-full rounded mb-">
           </div>

           <div class="mb-5">
             <label for="note" class="block mb-2 font-bold text-gray-600">Note</label>
             <input type="text" id="note" wire:model='note' placeholder="note" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
             <div class="mb-5">
                <label for="amount" class="block mb-2 font-bold text-gray-600">Amount</label>
                <input type="number" id="amount" wire:model='amount' placeholder="Amount" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
             <div class="mb-5">
             <label for="issued_by" class="block mb-2 font-bold text-gray-600">Issued by</label>
                    <input type="text" id="issued_by" wire:model='issued_by' placeholder="Isssud by" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>

          <center> <input type="button"  wire:click='save()' value='save!'></center>

        </form>
      </div>
    </div>
  </div>
