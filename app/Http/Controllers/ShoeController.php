<?php

namespace App\Http\Controllers;

use App\shoe;
use App\Transaction;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ShoeController extends Controller
{
    public function show(){
        $adidas = shoe::where('Type','Adidas')->get();
        $nike = shoe::where('Type','Nike')->get();
        return view('sneakersgalery')->with([
            'adidas'=>$adidas,
            'nike'=>$nike
        ]);
    }

    function detailshoes($id){
        $data = Shoe::join('brands', 'brands.id','=', 'shoes.brand_id')->where('shoes.id','=', $id)->select('shoes.id as id', 'brands.name as brand_name', 'shoes.name as name','file', 'price', 'discount', 'discount_price', 'stock', 'description')->first();

        $comment = Comment::join('users', 'comments.user_id','=','users.id')->where('comments.product_id','=',$id)->select('users.name as name','comment','date')->get();

        return view('product.details', ['data'=>$data, 'comments'=>$comment]);
    }

    public function showPageTransaction(){
       return view('transaksi');
    }

    function insertshoes(Request $request,$id)
    {
        $valid =\Illuminate\Support\Facades\Validator::make($request->all(),[
            'qty' => 'required'
        ]);


        if($valid->fails()) return redirect()->back()->withErrors($valid->errors());
        $data = shoe::find($id);
        if($data->qty - $request->qty < 0){
            return view('confirmation')->with('stock',False);
        }
        $data->qty = $data->qty - $request->qty;
        $data->save();

        $table = new Transaction();
        $table->shoe_id = $id;
        $table->qty = $request->qty;
        $table->user_id = Auth::user()->id;
        $table->save();

        return view('confirmation')->with([
            'shoe'=>$data,
            'qty'=>$request->qty,
            'stock'=>True
            ]);
    }



    }
