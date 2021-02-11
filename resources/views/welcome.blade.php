<body>

 @include('layouts.header')
 <section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-justify">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 uppercase">Find your 
        <br class="hidden lg:inline-block uppercase">favorite books here
      </h1>
      <p class="mb-8 pl-4 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum placeat nisi ipsum beatae et qui incidunt, sit reiciendis ratione! Ratione qui earum expedita quisquam facilis dicta culpa repellat cumque corporis?</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"><a href="catalog">View Catalog</a></button>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      
      <div style="background-image: url('https://tailwind.build/placeholders/pictures/office.jpg')"></div>
    </div>
  </div>
</section>
</header>

<main>  
   
<div class="container mx-auto mt-40">
<h2 class="title-font sm:text-4xl text-3xl pl-5 font-medium text-gray-900 uppercase">Our Bestsellers</h2>

</div>


<div class="container mx-auto p-8">

  <div class="flex flex-row flex-wrap -mx-2">
  @foreach ($books as $book)        
    <div class=" lg:w-1/4 sm:w-1/2 md:w-1/3 min-h-8 mb-4 px-2">
      <div class="relative bg-white rounded border">
        <picture class="block bg-gray-200 border-b">
          <img class="block" src="https://via.placeholder.com/800x600/EDF2F7/E2E8F0/&amp;text=Card" alt="Card 1">
        </picture>
        <div class="p-4">
          <h3 class="text-lg font-bold">
            <a class="stretched-link" href="#" title="Card 1">
            {{ $book->Title }}
            </a>
       
          </h3>
          <h6 class="block mb-2 text-sm text-gray-600"> {{ $book->Author }}</h6>
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
</main>
@include('components.footer')
    </body>
</html>
