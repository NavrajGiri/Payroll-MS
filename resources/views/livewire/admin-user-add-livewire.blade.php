
<center>
    <div class="col-lg-6 w-full max-w-xl"> <div class="col-lg-6 w-full max-w-xl">
    <form class= "bg-white shadow-full rounded px-8 pt-6 pb-8 mb-8">
            <div class="mb-5">
                <label for="name" class="block mb-2 font-bold text-gray-600">Name</label>
                <input type="text" id="name" wire:model='name' placeholder="Name" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 font-bold text-gray-600">email</label>
                <input type="text" id="email" wire:model='email' placeholder="email" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

                 <div class="mb-5">
             <label for="password" class="block mb-2 font-bold text-gray-600"> Password</label>
             <input type="text" id="password" wire:model='password' placeholder="password" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>

             <div class="mb-5">
                 <label for="computer_no" class="block mb-2 font-bold text-gray-600"> computer_no</label>
                 <input type="number" id="computer_no" wire:model='computer_no' placeholder="Computer no" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>


             <div class="mb-5">
                    <label for="rank" class="block mb-2 font-bold text-gray-600"> Rank</label>
                    <select class ="shadow appearance-none border rounded w- full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " wire:model='rank'>
                    <option>Please select Rank</option>
                    @foreach ($all_ranks as $rank)
                    <option value="{{$rank->id}}">{{$rank->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-5">
                <label for="grade_id" class="block mb-2 font-bold text-gray-600">Grade id</label>
                <select class id="grade_id" wire:model='grade_id' placeholder="Grade id " class="border border-gray-300 shadow p-3 w-full rounded mb-">
                <option>Please select Rank</option>
                    @foreach ($all_grades as $grade)
                    <option value="{{$grade->id}}">{{$grade->grade_name}}</option>
                    @endforeach
                </select>
            </div>
             <div class="mb-5">
             <label for="dob" class="block mb-2 font-bold text-gray-600">Date of birth</label>
             <input type="date" id="dob" wire:model='date_of_birth' placeholder="date of birth" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
                <label for="gender" class="block mb-2 font-bold text-gray-600">Gender</label>
                <input type="text" id="gender" wire:model='gender' placeholder="Gender" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
                <label for="merital status" class="block mb-2 font-bold text-gray-600">Merital status</label>
                <input type="text" id="merital_status" wire:model='merital_status' placeholder="merital_status" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
                <label for="address" class="block mb-2 font-bold text-gray-600">Address</label>
                <input type="text" id="address" wire:model='address' placeholder="Address" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
                <label for="phone_no" class="block mb-2 font-bold text-gray-600">Phone No</label>
                <input type="number" id="phone_no" wire:model='phone_no' placeholder="Phone No" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
                <label for="joining_date" class="block mb-2 font-bold text-gray-600">Joining Date</label>
                <input type="date" id="joining_date" wire:model='joining_date' placeholder="Joining Date" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
                <label for="blood_group" class="block mb-2 font-bold text-gray-600">Blood Group</label>
                <input type="text" id="blood_group" wire:model='blood_group' placeholder="Blood group" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
                <label for="pan_no" class="block mb-2 font-bold text-gray-600">Pan No</label>
                <input type="number" id="pan_no" wire:model='pan_no' placeholder="Pan no" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
                <label for="bank_no" class="block mb-2 font-bold text-gray-600">Bank Name</label>
                <input type="text" id="bank_no" wire:model='bank_no' placeholder="Bank name" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
                <label for="account_no" class="block mb-2 font-bold text-gray-600">Account Number</label>
                <input type="number" id="account_no" wire:model='account_no' placeholder="Account number " class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>


            <div class="mb-5">
                <label for="nagrik_lagani_kosh_no" class="block mb-2 font-bold text-gray-600">Nagrik lagani kosh Number</label>
                <input type="number" id="nagrik_lagani_kosh_no" wire:model='nagrik_lagani_kosh_no' placeholder="nagrik no " class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

          <div class="flex items-center justify-between">
             <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button"  wire:click='save()' value="save!">
               save
             </button>

           </div>
    </div>
      </div>
    </div>
  </div>
</center>
</div>
