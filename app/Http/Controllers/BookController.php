<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;


class BookController extends Controller
{
	public function index()
	{
		$publishers = Publisher::all();       
		$categories = Category::all();
		$books = Book::latest()->simplePaginate(8);
		return view('index', compact('books', 'categories', 'publishers'));
	}

	public function show($id)
	{
		$books = Book::find($id);
		$categories = Category::all();
		$publishers = Publisher::all();   
		return view('books.show', compact('books', 'categories', 'publishers'));
	}

	public function category($id)
	{
        $category = Category::find($id);
        $categories = Category::all();
		$publishers = Publisher::all();   
        $books = $category->books()->latest()->simplePaginate(8);
        return view('books.categories', compact('books', 'categories', 'category', 'publishers'));
	}

	public function contact()
	{
		$categories = Category::all();
		$publishers = Publisher::all();   
		$books = Book::latest()->simplePaginate(8);
		return view('books.contact', compact('books', 'categories', 'publishers'));
	}

	public function publishers()
	{
		$publishers = Publisher::all();     
		$categories = Category::all(); 
		return view('books.publishers', compact('categories', 'publishers'));

	}

	public function publisher($id)
	{
        $publisher = Publisher::find($id);
		$publishers = Publisher::all();     
		$categories = Category::all();
		// $books = Book::latest()->simplePaginate(8);
        $books = $publisher->books()->latest()->simplePaginate(8);
		return view('books.publisher', compact('books', 'categories', 'publishers', 'publisher'));

	}
}
