<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="my-4 text-3xl">Edit Book</h2>
                    <div class="container flex justify-center">
                        <form action="" method="post">
                        {{ csrf_field() }}
                            <div class="container flex my-4 w-full">
                                <div class=" flex flex-col mx-3 ">
                                    <label for="title">Title</label>
                                    <input class="w-90" type="text" name="title" value="{{ $books[0]->Title }}" required>
                                </div>
                                <div class="flex flex-col mx-3">
                                    <label for="author">Author</label>
                                    <input type="text" name="author" value="{{ $books[0]->Author }}" required>
                                </div>
                                <div class="flex flex-col mx-3">
                                    <label for="publisher">Publisher</label>
                                    <input type="text" name="publisher" value="{{ $books[0]->Publisher}}" required>
                                </div>

                            </div>

                            <div class="container flex my-8">
                                <div class="flex flex-col mx-3 ">
                                    <label for="genre">Genre</label>
                                    <input type="text" name="genre" value="{{ $books[0]->Genre }}" required>
                                </div>
                                <div class="flex flex-col mx-3 ">
                                    <label for="height">Pages</label>
                                    <input type="number" placeholder='0' name="height" value="{{ $books[0]->Height }}"required>
                                </div>
                                <div class=" flex flex-col mx-3 w-20">
                                    <label for="stock">Stock</label>
                                    <input type="number" placeholder='0' name="stock" value="{{ $books[0]->Stock }}" required>
                                </div>
                            </div>
                            <div class=" flex flex-col mx-3 my-8">
                                <textarea name="summary" id="" cols="30" rows="10" placeholder="Summary">{{ $books[0]->Summary }}</textarea>
                            </div>

                            <div class="container flex justify-center my-10">
                            <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none border-2 border-indigo-400 text-indigo-600 font-bold py-2 px-4 rounded"
            type="submit">
            Send
        </button>
                            </div>
                        


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
