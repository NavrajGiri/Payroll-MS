<<<<<<< HEAD
<center>
<div class="col-lg-6 w-full max-w-xl">
    <form class= "bg-secondary shadow-md rounded px-8 pt-6 pb-8 mb-8">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">
            Rank id
          </label>
          <select wire:model="rank_id">>
            <option>Select a Rank</option>
            @foreach ($all_ranks as $rank)
                <option value="{{$rank->id}}">{{$rank->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">
            Grade Name
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="grade_name" id="salary_amount" type="text" placeholder="grade name">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">
            Salary Amount
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" wire:model="salary_amount" id="salary_amount" type="text" placeholder="salary amount">
=======
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
>>>>>>> 2087c37d9440f5c80388fe093871fe12013f6096

           <div class="mb-5">
             <label for="salary_amount" class="block mb-2 font-bold text-gray-600">salary amoutn</label>
             <input type="numberxt" id="salary_amount" wire:model='salary_amount' placeholder="salary amount" class="border border-gray-300 shadow p-3 w-full rounded mb-"> </div>

          <center> <input type="button"  wire:click='save()' value='save!'></center>

        </form>
      </div>
    </div>
  </div>
