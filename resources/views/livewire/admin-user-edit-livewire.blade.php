
<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">User</button>
                </div>
            <div><a href="{{route('admin.user')}}" >
                <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">ALl User</button>
        </a></div>

        </div>
<center>
    <div class="col-lg-6 w-full max-w-xl"> <div class="col-lg-6 w-full max-w-xl">
    <form class= "bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">
            Name
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="name" id="name" type="text" placeholder="name">

        </div>
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
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model='rank'>

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
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="grade_id" id="grade_id" type="text" placeholder="grade id">

      </div><div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
          Nagrik lagani kosh NO
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="nagrik_lagani_kosh_no" id="name" type="text" placeholder="name">

      </div>

      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" value="update" wire:click='save()' value="save!">
          save
        </button>

      </div>
    </form>

  </div>
</center>
