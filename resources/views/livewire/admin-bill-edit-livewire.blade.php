<<<<<<< HEAD
=======
{{--
>>>>>>> 2087c37d9440f5c80388fe093871fe12013f6096
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
    </center> --}}
    <div>
        <x-slot name="header">
            <div class="flex justify-between items-center">
                <div>
                    <button type="button" class="inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out">Bill</button>
                </div>
                <div><a href="{{route('admin.bill')}}">
                    <button type="button" class="inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out">All Bill</button> </a></div>

            </div>

    <div class="bg-blue-200 min-h-screen flex items-center">
        <div class="w-full">
          <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Admin bill edit</h2>
          <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
              <div class="mb-5">
                <label for="user_id" class="block mb-2 font-bold text-gray-600"> bill No</label>
                <input type="number" id="user_id" wire:model='bill_no' placeholder="Bill No" class="border border-gray-300 shadow p-3 w-full rounded mb-">
              </div>
              <div class="mb-5">
                 <label for="user_id" class="block mb-2 font-bold text-gray-600">user id</label>
                 <input type="number" id="user_id" wire:model='user_id' placeholder=" user id" class="border border-gray-300 shadow p-3 w-full rounded mb-">
               </div>

               <div class="mb-5">
                 <label for="product_name" class="block mb-2 font-bold text-gray-600">Product Name </label>
                 <input type="text" id="product_name" wire:model='product_name' placeholder="Prouduct Name" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
                 <div class="mb-5">

                  <label for="product_details" class="block mb-2 font-bold text-gray-600">Allowance details</label>
                     <input type="text" id="product_details" wire:model='product_details' placeholder="Prouduct Details" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
                     <div class="mb-5">
                 <label for="quantity" class="block mb-2 font-bold text-gray-600"> Quantity</label>
                         <input type="text" id="quantity" wire:model='quantity' placeholder="Quantity" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
                         <div class="mb-5">
                 <label for="amount" class="block mb-2 font-bold text-gray-600">Amount </label>
                             <input type="number" id=" amount" wire:model='amount' placeholder="Amount " class="border border-gray-300 shadow p-3 w-full rounded mb-">
             <div class="mb-5">
             <label for="isssed_salary_id" class="block mb-2 font-bold text-gray-600">Issued salary id </label>
                                            <input type="number" id=" isssed_salary_id" wire:model='isssed_salary_id' placeholder="Issued salary id  " class="border border-gray-300 shadow p-3 w-full rounded mb-">
                                            <div class="mb-5">
                                                <label for="total_amount" class="block mb-2 font-bold text-gray-600">Total Amount </label>
                                                            <input type="number" id=" total_amount" wire:model='total_amount' placeholder=" Total Amount " class="border border-gray-300 shadow p-3 w-full rounded mb-">


              <center> <input type="button" value="Update" wire:click='save()'></center>

            </form>
          </div>
        </div>
      </div>
