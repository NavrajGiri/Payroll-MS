

<div class="bg-blue-200 min-h-screen flex items-center">
    <div class="w-full">
      <h2 class="text-center text-black-500 font-bold text-2xl uppercase mb-10"><u>Rank Add</u> </h2>
      <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">

          <div class="mb-5">
            <label for="rank" class="block mb-2 font-bold text-gray-600"> Rank </label>
            <input type="text" id="rank" wire:model='name' placeholder="rank " class="border border-gray-300 shadow p-3 w-full rounded mb-">
          </div>

          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" value="update" wire:click='save()' value="save!">
              save
            </button>

          </div>
      </div>
    </div>
  </div>
