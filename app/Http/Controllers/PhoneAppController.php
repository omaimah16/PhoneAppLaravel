<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PhoneAppController extends Controller
{
    public function getWelcome()
    {
        $phone = [
            ['Type' => 'Iphone 14', 'Price' => '3500', 'Color' => 'Black'],
            ['Type' => 'Sumsung', 'Price' => '2500', 'Color' => 'White'],
            ['Type' => 'Huwaui', 'Price' => '1000', 'Color' => 'Gold']
        ];

        return view('welcome', ["ph" => $phone]);
    }

    public function GetPhoneData()
    {
        $phone = DB::table('products')
            ->get();
        return view("showPhone", ["ph" => $phone]);
    }

    public function GetPhoneDataid($id)
    {
        $phone = DB::table('products')
            ->where('id', '=', $id)
            ->find($id);
        return view("checkOut", ["ph" => $phone]);
    }

    public function getinvoic(Request $Request)
    {
        $price = $Request->price;
        $QTY = 1;
        $total = $price * $QTY;
        $tax = $total * 0.15;
        $total = $total + $tax;
        $desc = 0;
        $net = $total + $desc;
        $invoicdate = date("Y-m-d H:i:s");
        $CostName = $Request->Fname;
        $PName = $Request->PName;

        $row = [
            'CostName' => $CostName,
            'invDate' => $invoicdate,
            'ProductName' => $PName,
            'Price' => $price,
            'Quntity' => $QTY,
            'Tax' => $tax,
            'Descount' => $desc,
            'Net' => $net
        ];
        DB::table('invoic')->insert($row);
        $datainv=DB::table('invoic')
        ->orderBy('id','desc')
        ->first();
        return view('invoic',['inv'=>$datainv]);
    }
}
