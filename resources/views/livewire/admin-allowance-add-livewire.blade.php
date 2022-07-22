
<center>
    <div class="col-lg-6 w-full max-w-xl">
        <form class= "bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8">
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
                User_Id
              </label>
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
    </center>

