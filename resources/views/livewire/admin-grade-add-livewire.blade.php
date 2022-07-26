<center>

<div class="bg-blue-200 min-h-screen flex items-center">
    <div class="w-full">
      <h2 class="text-center text-black-500 font-bold text-2xl uppercase mb-10"> <u>Grade Add</u>  </u></h2>
      <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
          <div class="mb-5">
            <label for="rank_id" class="block mb-2 font-bold text-gray-600">Rank Id</label>
            <select wire:model="rank_id">>
              <option>Select a Rank</option>
              @foreach ($all_ranks as $rank)
                  <option value="{{$rank->id}}">{{$rank->name}}</option>
              @endforeach
            </select>          </div>
          <div class="mb-5">
             <label for="grade_name" class="block mb-2 font-bold text-gray-600">Grade name</label>
             <input type="text" id="grade_name" wire:model='grade_name' placeholder=" Grade name" class="border border-gray-300 shadow p-3 w-full rounded mb-">
           </div>

           <div class="mb-5">
             <label for="salary_amount" class="block mb-2 font-bold text-gray-600">salary amount</label>
             <input type="numberxt" id="salary_amount" wire:model='salary_amount' placeholder="salary amount" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>

          <center>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" wire:click='save()' value="save!">
              save
            </button>


          </div>
        </center>
      </div>
    </div>
  </div>
</center>
