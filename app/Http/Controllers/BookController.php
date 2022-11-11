<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\UserBook;
use Session;

class BookController extends Controller
{
    public function new()
    {
        return view("dashboard.books.newBook");
    }

    public function save(Request $request)
    {

        $this->validate($request,[
            'title'=>"required|string|min:5|max:200",
            'isbn'=>'required|string|min:5|max:200',
            "revisionNumber"=>"required",
            "publisher"=>"required|string",
            "publishedDate"=>"required|date",
            "author"=>"required|string",
            "genre"=>"required",
            "coverPage"=>"required|mimes:jpeg,jpg,JPEG,JPG,PNG,png|max:1024"
        ]);

        $filename = $request->coverPage->getClientOriginalName();
    	 	$newName = time().$filename;
    	 	$request->coverPage->move(public_path().'/cover_pages/',$newName);

        $book = Book::create([
            "title"=>$request->title,
            "isbn"=>$request->isbn,
            "revision_number"=>$request->revisionNumber,
            "publisher"=>$request->publisher,
            "author"=>$request->author,
            "published_date"=>$request->publishedDate,
            "genre"=>$request->genre,
            "cover_page"=>$newName,
        ]);

        Session::flash("success","New Book Added");

        return redirect()->route('user.book.all');
    }

    public function all()
    {
        $books = Book::orderBy("title",'asc')->get();

        //return $books;

        return view("dashboard.books.allBook")->withBooks($books);
    }

    public function details(Book $book)
    {
        return view("dashboard.books.detail")->withBook($book);
    }

    public function edit(Book $book)
    {
        return view('dashboard.books.edit')->withBook($book);
    }

    public function update(Request $request, Book $book)
    {
        $this->validate($request,[
            'title'=>"required|string|min:5|max:200",
            'isbn'=>'required|string|min:5|max:200',
            "revisionNumber"=>"required",
            "publisher"=>"required|string",
            "publishedDate"=>"required|date",
            "author"=>"required|string",
            "genre"=>"required",
            "coverPage"=>"mimes:jpeg,jpg,JPEG,JPG,PNG,png|max:1024"
        ]);

            if ($request->coverPage) {
                $filename = $request->coverPage->getClientOriginalName();
    	 	    $newName = time().$filename;
    	 	    $request->coverPage->move(public_path().'/cover_pages/',$newName);
                $book->cover_page = $newName;
            }


            $book->title = $request->title;
            $book->isbn = $request->isbn;
            $book->revision_number=$request->revisionNumber;
            $book->publisher=$request->publisher;
            $book->author =$request->author;
            $book->published_date=$request->publishedDate;
            $book->genre= $request->genre;

            $book->save();

            Session::flash("success","Book Update");

            return redirect()->route('user.book.details',$book->id);
    }

    public function checkedOut()
    {
        $books = UserBook::where('status',0)->get();

        return $books;
    }

}