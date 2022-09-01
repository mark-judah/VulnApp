<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BooksController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'book_cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'book_file' => 'required|mimetypes:application/pdf|max:10000'
        ]);
        if ($validator->fails()) {
            $error = $validator->errors()->first();
            session()->flash('error', "Invalid file types, choose an image for the cover image and a pdf file!");
            return redirect('/');
        }
        $file1 = $request->file('book_cover');
        // Define upload path
        $destinationPath = public_path('/uploads/book_covers'); // upload path
        // Upload Orginal Image
        $bookCover = date('YmdHis') . "." . $file1->getClientOriginalExtension();
        $file1->move($destinationPath, $bookCover);
        $insert['image'] = "$bookCover";

        $file2 = $request->file('book_file');
        // Define upload path
        $destinationPath = public_path('/uploads/book_files'); // upload path
        // Upload Orginal Image
        $bookFile = date('YmdHis') . "." . $file2->getClientOriginalExtension();
        $file2->move($destinationPath, $bookFile);
        $insert['file'] = "$bookFile";

        Books::create([
            'book_title' => $request->get('book_title'),
            'book_cover' => $bookCover,
            'book_file' => $bookFile,
        ]);

        return redirect('/');
    }


    public function preview($book)
    {
        $fetchedBook=Books::where('book_title',$book)->get(['book_file']);
        $file=$fetchedBook[0]->book_file;
        $pathToFile="/uploads/book_files/$file";
        return redirect("$pathToFile");


    }
}
