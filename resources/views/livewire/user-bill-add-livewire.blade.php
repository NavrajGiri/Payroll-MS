<div class="bg-blue-200 min-h-screen flex items-center">
    <div class="w-full">
      <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Add new Bill</h2>
      <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">

          <div class="mb-5">
            <label for="user_id" class="block mb-2 font-bold text-gray-600"> Bill No</label>
            <input type="number" id="bill_no" wire:model='bill_no' placeholder="Bill No" class="border border-gray-300 shadow p-3 w-full rounded mb-">
          </div>

           <div class="mb-5">
                <label for="product_name" class="block mb-2 font-bold text-gray-600">Product Name </label>
                <input type="text" id="product_name" wire:model='product_name' placeholder="Prouduct Name" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
                <label for="product_details" class="block mb-2 font-bold text-gray-600">Products details</label>
                <input type="text" id="product_details" wire:model='product_details' placeholder="Prouduct Details" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
             <label for="quantity" class="block mb-2 font-bold text-gray-600"> Quantity</label>
             <input type="text" id="quantity" wire:model='quantity' placeholder="Quantity" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>
            <div class="mb-5">
            <label for="total_amount" class="block mb-2 font-bold text-gray-600">Total Amount </label>
            <input type="number" id=" total_amount" wire:model='total_amount' placeholder=" Total Amount " class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>


          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" wire:click='save()' value="save!">
              save
            </button>

          </div>
      </div>
    </div>
  </div>
