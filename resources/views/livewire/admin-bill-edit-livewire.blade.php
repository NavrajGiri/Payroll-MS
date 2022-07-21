{{-- <div>
    <center>
            Bill_No: <input type="number" wire:model="bill_no"><br><br>
            User_Id: <input type="number" wire:model="user_id"><br><br>
            Product_Name: <input type="text" wire:model="product_name"><br><br>
            Product_Details: <input type="text" wire:model="product_details"><br><br>
            Quantity: <input type="text" wire:model="quantity"><br><br>
            Amount: <input type="number" wire:model="amount"><br><br>
            issued_salary_id: <input type="number" wire:model="issued_salary_id"><br><br>
            Total_Amount: <input type="number" wire:model="total_amount"><br><br>
            <input type="button" value="update" wire:click='save()' name="done"><br><br>

    </center>
</div> --}}

<center>
    <div class="col-lg-6 w-full max-w-xl">
        <form class= "bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8">
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
                Bill No
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="bill_id" id="bill_id" type="text" placeholder="bill id">

            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
                User Id
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="allowance_name" id="allowance_name" type="text" placeholder="Allowance_name">

            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
                Product Name
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="product_name" id="product_name" type="text" placeholder="Product Name">

            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                  Product Details
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="product_details" id="product_details" type="text" placeholder="Product details">

              </div><div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                  Quantity
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="quantity" id="quantity" type="text" placeholder="Quantity">

              </div><div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                 Amount
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="amount" id="amount" type="text" placeholder="Amount">

              </div><div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                  Issued salary Id
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="issued_salary_id" id="issued_salary_id" type="text" placeholder="Issued salary id">

              </div><div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                  Total Amount
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="total_amount" id="total_amount" type="text" placeholder="Total Amount">

              </div>

          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" value="update" wire:click='save()' value="save!">
              save
            </button>

          </div>
        </form>

      </div>
    </center>
