<div class="w-full max-w-xs">
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Buscar por nombre
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username"  wire:model.live="filterName" type="text" placeholder="{{ Auth::user()->name }}">
    </div><hr>
  </div>
</div>