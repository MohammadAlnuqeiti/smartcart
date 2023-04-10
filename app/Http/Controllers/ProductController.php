<?php

namespace App\Http\Controllers;

use App\Imports\ImportProduct;
use App\Models\Merchant;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Product;


class ProductController extends Controller
{
    public function importView(Request $request){
        $merchants = Merchant::all();
        // dd($merchants);
        return view('importProduct',['merchants'=>$merchants]);
    }

    public function import(Request $request){

        Excel::import(new ImportProduct($request->merchant), $request->file('file')->store('files'));
        // Excel::import(new ImportProduct, $request->file('file')->store('files'));
        return redirect()->back();
    }
}
