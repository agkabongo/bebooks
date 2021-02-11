
 @include('layouts.header')

<main>
<div class="container mx-auto mt-10">
<h2 class="title-font sm:text-4xl text-3xl pl-5 font-medium text-gray-900 uppercase">Our Catalog</h2>
<h3 class="title-font pl-6">Discover our amazing books</h3>
<div class="container mx-auto p-8">
<div class="flex flex-wrap mx-12 my-20 gap-y-4 justify-center">
            <button class="text-sm mx-3 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50  hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full"><a href="/catalog">All Categories</a></button>
            
            <button class="text-sm mx-3 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full"><a href="/catalog/comic">Comic</a> </button>
            
            <button class="text-sm mx-3 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full"><a href="/catalog/computer_science">Computer Science</a></button>
             
            <button class="text-sm mx-3 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full"><a href="/catalog/data_science">Data Science</a></button>
             
            <button class="text-sm mx-3 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full"><a href="/catalog/economics">Economics</a></button>
             
            <button class="text-sm mx-3 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full"><a href="/catalog/fiction">Fiction</a></button>
             
            <button class="text-sm mx-3 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full"><a href="/catalog/history">History</a></button>
             
            <button class="text-sm mx-3 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full"><a href="/catalog/mathematics	">Mathematics	</a></button>
            <button class="text-sm mx-3 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full"><a href="/catalog/nonfiction">Nonfiction</a></button>
            <button class="text-sm mx-3 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full"><a href="/catalog/philosophy">Philosophy</a></button>
            <button class="text-sm mx-3 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full"><a href="/catalog/psychology">Psychology</a></button>
            <button class="text-sm mx-3 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full"><a href="/catalog/science">Science</a></button>
        </div>

  <div class="flex flex-row flex-wrap -mx-2"> 
   @foreach ($books as $book)     
    <div class=" lg:w-1/4 sm:w-1/2 md:w-1/3 min-h-20 mb-4 px-1">
      <div class="relative bg-white rounded border">
        <div class="p-4">
          <h3 class="text-lg font-bold">
            <a class="stretched-link" href="/show/book_id={{ $book->id }}" title="show">
            {{ $book->Title }}
            </a>
          </h3>
          <h6 class="block mb-2 text-sm text-gray-600"> Author: {{ $book->Author }}</h6>
          <h6 class="block mb-2 text-sm text-gray-600">Publisher: {{ $book->Publisher }}</h6>
          <p>
           {{__('Description')}}
          </p>
          <div class="flex justify-end">
          <button class="text-sm px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full">Buy</button>
          <button class="text-sm mx-2 px-3 border-2 border-indigo-600 text-indigo-600 border-opacity-50 hover:bg-indigo-600 hover:text-white focus:outline-none rounded-full">Borrow</button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    
</div>
</div>
</main>

<footer class="bg-gray-300 w-full py-6 px-4">
@include('components.footer')
</footer>
</body>
</html>