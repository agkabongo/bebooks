<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Http\Request;

class book extends Controller
{
    public books $book ;
    public function index(Request $request)
    {
    
        $books=Books::all();
        return view('catalog ',compact('books'));
    }

    public function create(Request $request){
       
        return view('create');
        
    }
    
    public function store(Request $request){

            Books::create(array(
            'Title' => $request->title,
            'Author'  => $request->author,
            'Genre' => $request->genre,
            'Summary' => $request->summary,
            'Height'=>$request->height,
            'Publisher'=>$request->publisher,
            'Stock' => $request->stock, 

        ));
        return redirect('/dashboard')
        ->with('success', 'Book created successfully.');
    }

    public function edit(Request $request){
        $book_id = $request -> id;
        $books=Books::where('id','=',$book_id)->get();
        return view('edit', compact('books'));
    }

    public function update(Request $request){
        $book_id = $request -> id;
        $request->validate([

            'title' => 'required',
            'author'  => 'required',
            'genre' => 'required',
            'height'=>'required',
            'publisher'=>'required',
            'stock' => 'required'

        ]);
       $books = Books::where('id','=',$book_id)->update($request->except(['_token']));
        return redirect('/dashboard')
        ->with('success', 'Book updated successfully.');
    }


    public function delete(Request $request){
     $book_id = $request -> id;
     $books= Books::where('id','=',$book_id)->delete();
     return redirect('/dashboard')
        ->with('success', 'Book deleted successfully.');
    }
    

    public function recent()
    {
        $books=Books::all()->take(5);
        return view('welcome',compact('books'));
    }

    public function filter(Request $request){
        $genre = $request -> genre;
        $books=Books::where('genre','=',$genre)->get();
           return view('catalog',compact('books'));
          //  return redirect()->to("catalog"); 
    }
    public function show(Request $request){
        $id_book = $request -> id;
        $books= Books::where('id','=',$id_book)->get();
        return view('show', compact('books'));
    }

    public function dashboard(){
        $books=Books::all();
        return view('dashboard',compact('books'));
    }
    

   
}
