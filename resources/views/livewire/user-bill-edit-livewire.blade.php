<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <button type="button" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">USER Bill</button>

            </div>
<<<<<<< HEAD
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
                User Id
              </label>
              <select wire:model="user_id">                
                <option>Select a User Id</option>
                @foreach ($all_users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
                Product Name
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="product_name" id="product_name" type="text" placeholder="Product Name">
=======
            <div><a href="{{route('user.bill')}}" >
                <button type="button" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">All USER Bill</button>
            </a></div>

        </div>
>>>>>>> 2087c37d9440f5c80388fe093871fe12013f6096

        <div class="bg-blue-200 min-h-screen flex items-center">
            <div class="w-full">
              <h2 class="text-center text-blue-500 font-bold text-2xl uppercase mb-10">Admin bill edit</h2>
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

<<<<<<< HEAD
              </div><div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                  Issued salary Id
                </label>
                <select wire:model="issued-salary_id">                  
                  <option>Please select Issued Salary Id</option>
                  @foreach ($all_issuedsalary as $issuedsalary)
                      <option value="{{$issuedsalary->id}}">{{$issuedsalary->name}}</option>
                  @endforeach
              </select>
              </div><div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                  Total Amount
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="total_amount" id="total_amount" type="text" placeholder="Total Amount">
=======

                  <center> <input type="button" value="Update" wire:click='save()'></center>
>>>>>>> 2087c37d9440f5c80388fe093871fe12013f6096

                </form>
              </div>
            </div>
          </div>
