<<<<<<< HEAD
<center>
    <div class="col-lg-6 w-full max-w-xl"> <div class="col-lg-6 w-full max-w-xl">
    <form class= "bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">
            Name
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="name" id="name" type="text" placeholder="name">

        </div>
=======
<<<<<<< HEAD
 <center>


 <div class="col-lg-6 w-full max-w-xs">
    <form class= "bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8">
=======

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



<<<<<<< HEAD
 <div class="col-lg-6 w-full max-w-xl">
    <form class= "bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8">
 <div class="col-lg-6 w-full max-w-xs">
    <form class= "bg-primary shadow-md rounded px-8 pt-6 pb-8 mb-8">
>>>>>>> 940cb8ff4fdd7fe7faab57db59d3338094811913
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">
            Name
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="name" id="name" type="text" placeholder="name">
=======
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
>>>>>>> 2087c37d9440f5c80388fe093871fe12013f6096

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
<<<<<<< HEAD
>>>>>>> 85c004b6493f9246c807d7c57a0bd44caded8df0
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">
            Email
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="email" id="email" type="text" placeholder="email">

        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">
            Password
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="password" id="password" type="text" placeholder="password">

        </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Computer No
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="computer_no" id="computer_no" type="text" placeholder="computer no ">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
        Rank
        </label>
<<<<<<< HEAD
        <select class ="shadow appearance-none border rounded w- full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " wire:model='rank'>
            <option>Please select Rank</option>
            @foreach ($all_ranks as $rank)
            <option value="{{$rank->id}}">{{$rank->name}}</option>
            @endforeach
        </select>

=======
        <select wire:model="rank_id">
          <option>Please select Rank</option>
            @foreach ($all_ranks as $rank)
                <option value="{{$rank->id}}">{{$rank->name}}</option>
            @endforeach
        </select>
>>>>>>> 85c004b6493f9246c807d7c57a0bd44caded8df0
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Dob
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="date_of_birth" id="date_of_birth" type="text" placeholder="date of birth">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Gender
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="gender" id="gender" type="text" placeholder="gender">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
          Merital Status
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="merital_status" id="merital_status" type="text" placeholder="merital_status">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Address
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="address" id="address" type="text" placeholder="address">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Phone NO
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="phone_no" id="phone_no" type="text" placeholder="phone no">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Joining Date
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="joining_date" id="joining_date" type="text" placeholder="joining date">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Blood Group
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="blood_group" id="blood_group" type="text" placeholder="blood group">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Pan NO
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="pan_no" id="pan_no" type="text" placeholder="pan no">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Bank Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="bank_name" wire:model="bank_no" type="text" placeholder="bank name">

      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Account N0
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="account_no" id="account_no" type="text" placeholder="account no">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Grade Id
        </label>
<<<<<<< HEAD
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="grade_id" id="grade_id" type="text" placeholder="grade id">

=======
        <select wire:model="grade_id">
        <option>Please select Grade Id</option>
        @foreach ($all_grade as $grade)
            <option value="{{$grade->id}}">{{$grade->name}}</option>
        @endforeach
    </select>
>>>>>>> 85c004b6493f9246c807d7c57a0bd44caded8df0
      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
          Nagrik lagani kosh NO
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="nagrik_lagani_kosh_no" id="name" type="text" placeholder="name">

      </div>

      <div class="flex items-center justify-between">
<<<<<<< HEAD
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button"  wire:click='save()' value="save!">
=======
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" wire:click='save()' value="save!">
>>>>>>> 85c004b6493f9246c807d7c57a0bd44caded8df0
          save
        </button>

      </div>
    </form>

  </div>
</center>
<<<<<<< HEAD
=======
=======
      </div>
>>>>>>> 2087c37d9440f5c80388fe093871fe12013f6096
>>>>>>> 85c004b6493f9246c807d7c57a0bd44caded8df0
