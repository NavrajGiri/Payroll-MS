<center>
    <div class="col-lg-6 w-full max-w-xl">
        <form class= "bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8">
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
                Rank id
              </label>
              <select wire:model="rank_id">
                <option>Select a Rank</option>
                @foreach ($all_ranks as $rank)
                    <option value="{{$rank->id}}">{{$rank->name}}</option>
                @endforeach
              </select>            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
                Grade Name
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="salary_amount" id="salary_amount" type="text" placeholder="salary amount">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">
                Salary Amount
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="salary_amount" id="salary_amount" type="text" placeholder="salary amount">

            </div>

          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" value="update" wire:click='save()' value="save!">
              save
            </button>

          </div>
        </form>

      </div>
    </center>
