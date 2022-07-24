<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                Grade
            </div>
            <div><a href="{{route('admin.grade')}}" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">All Grade</a></div>

        </div>
    </x-slot>
        <div class="bg-blue-200 min-h-screen flex items-center">
            <div class="w-full">
              <h2 class="text-center text-black-500 font-bold text-2xl uppercase mb-10"><u>  Grade Edit</u> </h2>
              <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
                  <div class="mb-5">
                    <label for="rank_id" class="block mb-2 font-bold text-gray-600">Rank Id</label>
                    <select wire:model="rank_id">
                      <option>Select a Rank</option>
                      @foreach ($all_ranks as $rank)
                          <option value="{{$rank->id}}">{{$rank->name}}</option>
                      @endforeach
                    </select>
                </div>
                  <div class="mb-5">
                     <label for="grade_name" class="block mb-2 font-bold text-gray-600">Grade name</label>
                     <input type="text" id="grade_name" wire:model='grade_name' placeholder=" Grade name" class="border border-gray-300 shadow p-3 w-full rounded mb-">
                   </div>

                   <div class="mb-5">
                     <label for="salary_amount" class="block mb-2 font-bold text-gray-600">salary amount</label>
                     <input type="numberxt" id="salary_amount" wire:model='salary_amount' placeholder="salary amount" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>

                     <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" value="update" wire:click='save()' value="save!">
                          save
                        </button>

                      </div>
              </div>
            </div>
          </div>
