<<<<<<< HEAD
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
=======
<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Grade</button>
            </div>
            <div><a href="{{route('admin.grade')}}" >
                <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">All Grade   </button>    </a></div>

        </div>

        <div class="bg-blue-200 min-h-screen flex items-center">
            <div class="w-full">
              <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Admin Grade Edit</h2>
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

                  <center> <input type="button" value="Update" wire:click='save()'></center>

                </form>
              </div>
>>>>>>> 2087c37d9440f5c80388fe093871fe12013f6096
            </div>
          </div>
