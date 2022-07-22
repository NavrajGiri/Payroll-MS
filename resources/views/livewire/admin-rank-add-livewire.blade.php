

<div class="bg-blue-200 min-h-screen flex items-center">
    <div class="w-full">
      <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Admin Rank Add</h2>
      <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
          <div class="mb-5">
            <label for="rank" class="block mb-2 font-bold text-gray-600"> Rank </label>
            <input type="text" id="rank" wire:model='rank' placeholder="rank " class="border border-gray-300 shadow p-3 w-full rounded mb-">
          </div>

          <center> <input type="button"  wire:click='save()' value='save!'></center>

        </form>
      </div>
    </div>
  </div>
