
    <div>
        <x-slot name="header">
            <div class="flex justify-between items-center">
                <div>
                    Bill
                </div>
                <div><a href="{{route('admin.bill')}}">
                    <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">All Bill</button> </a>
                </x-slot>
            </div>

    <div class="bg-blue-200 min-h-screen flex items-center">
        <div class="w-full">
          <h2 class="text-center text-black-500 font-bold text-2xl uppercase mb-10"> <u>Bill Edit</u></h2>
          <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
              <div class="mb-5">
                <label for="user_id" class="block mb-2 font-bold text-gray-600"> bill No</label>
                <input type="number" id="user_id" wire:model='bill_no' placeholder="Bill No" class="border border-gray-300 shadow p-3 w-full rounded mb-">
              </div>
              <div class="mb-5">
                 <label for="user_id" class="block mb-2 font-bold text-gray-600">user id</label>
                 <select wire:model="user_id">
                  <option>Please select User Id</option>
                  @foreach ($all_users as $user)
                      <option value="{{$user->id}}">{{$user->name}}</option>
                  @endforeach
              </select>               </div>

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
                 </div>

             <div class="mb-5">
             <label for="isssed_salary_id" class="block mb-2 font-bold text-gray-600">Issued salary id </label>
             <input type="number" id=" isssed_salary_id" wire:model='isssed_salary_id' placeholder="Issued salary id  " class="border border-gray-300 shadow p-3 w-full rounded mb-">
             </div>

             <div class="mb-5">
            <label for="total_amount" class="block mb-2 font-bold text-gray-600">Total Amount </label>
             <input type="number" id=" total_amount" wire:model='total_amount' placeholder=" Total Amount " class="border border-gray-300 shadow p-3 w-full rounded mb-">
              </div>


              <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" value="update" wire:click='save()' value="save!">
                  save
                </button>

              </div>
            </form>
          </div>
        </div>
      </div>
