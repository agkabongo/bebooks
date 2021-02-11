<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- component -->
<div class="text-gray-900 bg-gray-200">
    <div class="container p-4 flex space-between justify-between min-w-3xl">
        <h1 class=" my-4 text-3xl">
            BeBooks Library
        </h1>
        <div class="card my-4 justify-end">
        <form class="card-body" action="/search" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." name="q">
                <span class="input-group-btn">
            <button class="btn btn-secondary" type="submit">Go!</button>
          </span>
            </div>
        </form>
    </div>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Title</th>
                    <th class="text-left p-3 px-5">Author</th>
                    <th class="text-left p-3 px-5">Genre</th>
                    <th class="text-left p-3 px-5">Publisher</th>
                    <th class="text-left p-3 px-5">Pages</th>
                    <th class="text-left p-3 px-5">Stock</th>
                    <th class="text-left p-3 px-5"></th>
                </tr>

                @foreach($books as $book)
                <tr class="border-b hover:bg-orange-100">
                    <td class="p-3 px-5">{{ $book-> Title }}</td>
                    <td class="p-3 px-5">{{ $book-> Author }}</td>
                    <td class="p-3 px-5">{{ $book->Genre }}</td>
                    <td class="p-3 px-5">{{ $book->Publisher }}</td> 
                    <td class="p-3 px-5">{{ $book->Height }}</td>
                    <td class="p-3 px-5">{{ $book->Stock }}</td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
