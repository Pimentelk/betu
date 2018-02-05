<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Book;
use Validator;

class ReadingListController extends EducationController
{ 
    public function index() {                     
        $data = [
            'books' => Book::list()-> get(),
        ];        
        return view('user.reading',$data);
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'book.title'     => 'required|max:150',
            'book.author'    => 'required|max:150',
            'book.learned'   => 'max:200',
            'book.notes'     => 'max:200'
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 406);
        }

        $book = new Book;
        $book->user_id = auth()->user()->id;
        $book->title    = $request->input('book.title', 'title');
        $book->author   = $request->input('book.author', 'author');
        $book->learned  = $request->input('book.learned', 'learned');
        $book->notes    = $request->input('book.notes', 'notes');
        
        if ($book->save()) {
            return response('Created', 201);
        }
        return response('Expectation Failed',417);
    }

    public function update(Request $request, Book $book) {

        $validator = Validator::make($request->all(), [
            'book.title'     => 'required|max:150',
            'book.author'    => 'required|max:150',
            'book.learned'   => 'max:200',
            'book.notes'     => 'max:200',
            'book.status'    => ''
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 406);
        }

        $book->title    = $request->input('book.title');
        $book->author   = $request->input('book.author');
        $book->learned  = $request->input('book.learned');
        $book->notes    = $request->input('book.notes');
        $book->read     = $request->input('book.status',0);

        if ($book->read) {
            $book->completed = date('Y-m-d');
        }

        if ($book->save()) {
            return response(Book::list()->get(), 202);
        }
        return response('Expectation Failed',417);
    }

    
    public function destroy(Book $book) {

        if ($book->delete()) {
            return response(Book::list()->get(), 202);
        }
        return response('Expectation Failed',417);
    }
}
