<x-app-layout>

  <div class="filters flex space-x-6">
    <div class="w-1/3">
      <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
        <option value="Category One">Category One</option>
        <option value="Category Two">Category Two</option>
        <option value="Category Three">Category Three</option>
        <option value="Category Four">Category Four</option>
      </select>
    </div>
    <div class="w-1/3">
      <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
        <option value="Filter One">Filter One</option>
        <option value="Filter Two">Filter Two</option>
        <option value="Filter Three">Filter Three</option>
        <option value="Filter Four">Filter Four</option>
      </select>
    </div>
    <div class="w-2/3 relative">
      <input type="search" placeholder="Find an idea"
        class="w-full rounded-xl border-none bg-white px-4 py-2 pl-8 placeholder:text-gray-900">
      <div class="absolute top-0 flex items-center h-full ml-2">
        <x-icon.search />
      </div>
    </div>
  </div>

</x-app-layout>