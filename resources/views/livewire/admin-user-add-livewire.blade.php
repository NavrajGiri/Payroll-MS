
        {{-- <div>
            <center>
                    Name: <input type="text" wire:model="name"><br><br>
                    Computer_No: <input type="number" wire:model="computer_no"><br><br>
                    Rank: <input type="text" wire:model="rank"><br><br>
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


 <div class="col-lg-6 w-full max-w-xs">
    <form class= "bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="name">
          Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="name">

      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="computer_no">
          Computer No
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="computer_no" type="text" placeholder="computer no ">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="rank">
        Rank
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="rank" type="text" placeholder="rank">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="date_of_birth">
          Dob
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date_of_birth" type="text" placeholder="date of birth">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="gender">
          Gender
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="gender" type="text" placeholder="gender">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="merital_status">
          Merital Status
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="merital_status" type="text" placeholder="merital_status">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="address">
          Address
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" placeholder="address">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="phone_no">
          Phone NO
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone_no" type="text" placeholder="phone no">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="joining_date">
          Joining Date
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="joining_date" type="text" placeholder="joining date">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="blood_group">
          Blood Group
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="blood_group" type="text" placeholder="blood group">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="pan_no">
          Pan NO
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pan_no" type="text" placeholder="pan no">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="bank_name">
          Bank Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="bank_name" type="text" placeholder="bank name">

      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="account_no">
          Account N0
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="account_no" type="text" placeholder="account no">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="grade_id">
          Grade Id
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="grade_id" type="text" placeholder="grade id">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" wire:model="nagrik_lagani_kosh_no">
          Nagrik lagani kosh NO
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="name">

      </div>

      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" wire:click='save()' value="save!">
          save
        </button>

      </div>
    </form>

  </div>
</center>
