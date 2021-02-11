@include('layouts.header')
<body>
<main>
<button><a href="/catalog">Retour</a></button>
<section class=" bg-white text-gray-900">
  
        
  <!-- SECTION: eCommerce -->
  <div
    class="flex flex-col justify-between mx-auto p-8 md:flex-row lg:w-5/6 xl:3/4"
  >
    <!-- SECTION: Image Gallery -->
    <div class="flex flex-col md:w-1/2 mx-2">
      <!-- SECTION: Main Image -->
      <img
        class="rounded-md object-cover"
        src="https://images.unsplash.com/photo-1508160552827-195c99fc90b7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
        alt=""
      />
      <!-- !SECTION: Main Image -->
      <!-- SECTION: Other Images -->
      <div class="flex w-full p-4 justify-around">
        <img
          class="rounded-md object-cover w-1/3 mx-2"
          src="https://images.unsplash.com/photo-1512446816042-444d641267d4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
          alt=""
        />
        <img
          class="rounded-md object-cover w-1/3 mx-2"
          src="https://images.unsplash.com/photo-1512446387219-99c19f8fe95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1789&q=80"
          alt=""
        />
        <img
          class="rounded-md object-cover w-1/3 mx-2"
          src="https://images.unsplash.com/photo-1544451256-d79e9e199fa8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1934&q=80"
          alt=""
        />
      </div>
      <!-- !SECTION: Other Images -->
    </div>
    <!-- !SECTION: Image Gallery -->
    <!-- SECTION: Product -->
    <div
      class="flex flex-col h-full justify-evenly px-8 items-center md:w-1/2 md:mx-2"
    >
      <!-- SECTION: Product Title -->
      <h1 class="text-3xl text-center md:text-5xl leading-none font-semibold">
      {{ $books[0]->Title }}
      </h1>
      <!-- !SECTION: Product Title -->
      <!-- SECTION: Product Subtitle -->
      <h2 class="text-2xl font-light text-center mb-4">
      by {{ $books[0]->Author }}
      </h2>
      <!-- !SECTION: Product Subtitle -->
      <!-- SECTION: Product Description -->
      <p class="text-justify">
        Sequi excepturi sint sunt error vero a explicabo cumque officiis quod
        quis! Eum illum qui harum, eaque laboriosam est eveniet amet, eos quasi
        recusandae perferendis rem non, veritatis ea tempora aliquid fugit? Odio
        tempore sit vitae voluptatem quo consequuntur illum dolor velit. Animi,
        quia.
      </p>
      <!-- !SECTION: Product Description -->
      <!-- SECTION: Features -->
      <div class="self-start mt-4 mb-4 md:mb-16">
        <ul class=" flex flex-col md:flex-row flex-wrap w-full">
          <li class="md:w-1/2 md:px-2 capitalize">Genre:  {{ $books[0]-> Genre }} </li>
          <li class="md:w-1/2 md:px-2"> Publisher: {{ $books[0]-> Publisher}}</li>
          <li class="md:w-1/2 md:px-2 ">Pages: {{ $books[0]-> Height}}</li>
          <li class="md:w-1/2 md:px-2"></li>
        </ul>
      </div>
      <!-- !SECTION: Features -->
      
      <div
        class="flex flex-col md:flex-row justify-between items-center w-full"
      >
        <!-- SECTION: Add to cart -->
        <div class="flex w-full mt-8 justify-end items-center">
          <!-- !SECTION: Borrow-->
          <button
            class="px-6 bg-indigo-500 border-indigo-500 text-white md:px-12 uppercase py-2 rounded-lg text-xl xl:text-2xl transition-colors duration-200 ease-in-out focus:outline-none hover:bg-blue-300"
          >
            Rent
          </button>
        </div>
        <!-- !SECTION: Add to cart -->
      </div>
    </div>
    <!-- !SECTION: Product -->
  </div>
  <!-- !SECTION: eCommerce -->
    
      
</section>
      
</main>
<footer>    
@include('components.footer')
</footer>
</body>
</html>