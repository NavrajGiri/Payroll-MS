<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <button type="button" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">IssuedSalary</button>

            </div>
            <div><a href="{{route('admin.issuedsalary')}}" >
                <button type="button" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">IssuedSalary</button>
        </a></div>

        </div>



        <div class="bg-blue-200 min-h-screen flex items-center">
            <div class="w-full">
              <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Admin Grade Add</h2>
              <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
                  <div class="mb-5">
                    <label for="user_id" class="block mb-2 font-bold text-gray-600">user id</label>
                    <select wire:model="user_id">
                      <option>Please select User Id</option>
                        @foreach ($all_users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                  <div class="mb-5">
                     <label for="date" class="block mb-2 font-bold text-gray-600">Date</label>
                     <input type="date" id="date" wire:model='date' placeholder="  Date" class="border border-gray-300 shadow p-3 w-full rounded mb-">
                   </div>

                   <div class="mb-5">
                     <label for="note" class="block mb-2 font-bold text-gray-600">Note</label>
                     <input type="text" id="note" wire:model='note' placeholder="note" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
                     <div class="mb-5">
                        <label for="amount" class="block mb-2 font-bold text-gray-600">Amount</label>
                        <input type="number" id="amount" wire:model='amount' placeholder="Amount" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>
                     <div class="mb-5">
                     <label for="issued_by" class="block mb-2 font-bold text-gray-600">Issued by</label>
                            <input type="text" id="issued_by" wire:model='issued_by' placeholder="Isssud by" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>

                  <center> <input type="button" value="update" wire:click='save()' value='save!'></center>

                </form>
              </div>
            </div>
          </div>











