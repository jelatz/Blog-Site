@props([
    'action' => '',
    'method' => ''
])    
    <form action="{{ isset($action) ? $action : '' }}" method="{{ isset($method) ? $method : '' }}">
       <div class="relative border-2 border-gray-100 m-4 rounded-lg">
           <div class="absolute top-4 left-3">
               <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
           </div>
           <input type="text" name="search" class="h-12 w-full rounded-lg z-0 focus:shadow focus:outline-none"
               placeholder="Search Blog" />
           <div class="absolute top-1/2 -translate-y-1/2 right-2">
               <button type="submit" class="h-8 w-20 text-white rounded-lg bg-red-800 hover:bg-red-600">
                   Search
               </button>
           </div>
       </div>
   </form>
