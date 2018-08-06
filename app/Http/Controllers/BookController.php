<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Show the list of Books.
     *
     * @return \Illuminate\Http\Response
     */
    public function book()
    {
    	$books = Book::all();

        return view('book', compact('books'));
    }

    /**
     * View Books.
     *
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
    	$book = Book::find($request->id);

        return view('view-book', compact('book'));
    }

    /**
     * Edit Book form.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
    	$book = Book::find($request->id);

        return view('edit-book', compact('book'));
    }

    /**
     * update Books.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    	$book = $request->update([
    		'title' => $request->title,
    		'description' => $request->description,
    		'price' => $request->price
    	]);

		if (book) {
			return redirect()->route('book')->with(['message' => 'saved succesfully']);
		}
    }

    public function scrape()
    {
        $client = new \GuzzleHttp\Client();

        dd($client);
    }
}
