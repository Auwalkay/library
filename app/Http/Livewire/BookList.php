<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use Carbon\Carbon;
use Auth;
use Session;
class BookList extends Component
{
    public $books,$title,$isbn,$publisher,$dateAdded,$checkedBooks;

    public function __construct() {
        $this->books = Book::all();
        $this->checkedBooks= Auth::user()->books->where('status',0)->pluck('book_id');

    }

    public function search()
    {
        if ($this->title !=null) {
            $this->books = Book::where("title","like",'%'.$this->title.'%')->get();
        }
        if ($this->title !=null && $this->isbn != null) {
            $this->books = Book::where("title","like",'%'.$this->title.'%')->where("isbn","like",'%'.$this->isbn.'%')->get();
        }
        if ($this->title !=null && $this->publisher != null) {
            $this->books = Book::where("title","like",'%'.$this->title.'%')->where("publisher","like",'%'.$this->publisher.'%')->get();
        }
        if ($this->title !=null && $this->dateAdded != null) {
            $this->books = Book::where("title","like",'%'.$this->title.'%')->where("created_at","like",'%'.$this->dateAdded.'%')->get();
        }
        if ($this->title !=null && $this->isbn != null && $this->publisher != null) {
            $this->books = Book::where("title","like",'%'.$this->title.'%')
            ->where("isbn","like",'%'.$this->isbn.'%')
            ->where("publisher","like",'%'.$this->publisher.'%')
            ->get();
        }
        if ($this->title !=null && $this->isbn != null && $this->dateAdded != null) {
            $this->books = Book::where("title","like",'%'.$this->title.'%')
            ->where("isbn","like",'%'.$this->isbn.'%')
            ->where("created_at","like",'%'.$this->dateAdded.'%')
            ->get();
        }
        if ($this->title !=null && $this->publisher != null && $this->dateAdded != null) {
            $this->books = Book::where("title","like",'%'.$this->title.'%')
            ->where("publisher","like",'%'.$this->publisher.'%')
            ->where("created_at","like",'%'.$this->dateAdded.'%')
            ->get();
        }


        // $this->books = Book::find(5);
    }

    public function checkOut(Book $book)
    {


        $book->readers()->create([
            'user_id'=> Auth::user()->id,
            'checked_in'=> Carbon::createFromFormat('Y-m-d',date('Y-m-d')),
            'checked_out'=>Carbon::createFromFormat('Y-m-d',date('Y-m-d'))->addDays(10),
            'status'=>0,

        ]);

        Session::flash("success","Book Checked");


    }

    public function render()
    {
        $this->checkedBooks= Auth::user()->books->where('status',0)->pluck('book_id');
        return view('livewire.book-list');
    }
}