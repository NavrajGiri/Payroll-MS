<div class="bg-blue-200 min-h-screen flex items-center">
    <div class="w-full">
      <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Admin Grade Add</h2>
      <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
          <div class="mb-5">
            <label for="rank_id" class="block mb-2 font-bold text-gray-600">Rank Id</label>
            <input type="text" id="user_id" wire:model='rank_id' placeholder="Rank id" class="border border-gray-300 shadow p-3 w-full rounded mb-">
          </div>
          <div class="mb-5">
             <label for="grade_name" class="block mb-2 font-bold text-gray-600">Grade name</label>
             <input type="text" id="grade_name" wire:model='grade_name' placeholder=" Grade name" class="border border-gray-300 shadow p-3 w-full rounded mb-">
           </div>

           <div class="mb-5">
             <label for="salary_amount" class="block mb-2 font-bold text-gray-600">salary amoutn</label>
             <input type="numberxt" id="salary_amount" wire:model='salary_amount' placeholder="salary amount" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>

          <center> <input type="button"  wire:click='save()' value='save!'></center>

        </form>
      </div>
    </div>
  </div>
