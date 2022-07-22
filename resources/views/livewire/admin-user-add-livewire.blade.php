
        {{-- <div>
            <center>
                    Name: <input type="text" wire:model="name"><br><br>
                    Computer_No: <input type="number" wire:model="computer_no"><br><br>
                    Rank: <input type="text" wire:model="rank"><br><br>

</select><br><br>
                    Dob: <input type="date" wire:model="date_of_birth"><br><br>
                    Gender: <input type="text" wire:model="gender"><br><br>
                    Merital_status: <input type="text" wire:model="merital_status"><br><br>
                    Address: <input type="text" wire:model="address"><br><br>
                    Phone_No: <input type="number" wire:model="phone_no"><br><br>
                    Joining_Date: <input type="date" wire:model="joining_date"><br><br>
                    blood_Group: <input type="text" wire:model="blood_group"><br><br>
                    Pan_No: <input type="number" wire:model="pan_no"><br><br>
                    Bank_Name: <input type="text" wire:model="bank_name"><br><br>
                    Acount_NO: <input type="number" wire:model="account_no"><br><br>
                    Grade_Id: <input type="number" wire:model="grade_id"><br><br>
                    nagrik_lagani_kosh_No: <input type="number" wire:model="nagrik_lagani_kosh_no"><br><br>
                    <input type="button"  wire:click='save()' value="save!"><br><br>
            </center>
    </div>

 --}}

 <center>



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


              <center> <input type="button"  wire:click='save()'></center>

            </form>
          </div>
        </div>
      </div>
