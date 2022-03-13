<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\OrdersRequest;

class OrdersController extends Controller
{
    public function index()
    {
        $orderRekord = Order::all();
        $x = 1;
        return view('Order.index', ['order' => $orderRekord],['x'=>$x]);
    }

    public function news()
    {
        return view('Order.nowaDostawa');
    }

    public function storee(OrdersRequest $request)
    {
        $wyslij = new Order();
            
        $wyslij->klient = $request->klient;
        $wyslij->miasto = $request->miasto;
        $wyslij->numer = $request->numer;
        $wyslij->wprowadzil = $request->wprowadzil;
        $wyslij->typ = $request->typ;
        $wyslij->waga = $request->waga;
        $wyslij->ilosc = $request->ilosc;
        $wyslij->cena = $request->cena;
        $wyslij->komentarz = $request->komentarz;

        //$wyslij->date = $request->date;
        $wyslij->save();
        
        return redirect()->route('order')->with('message','Dostawa '. $wyslij->typ.",". $wyslij->cena.' dodana poprawnie.');
    }

    public function create()
    {
        //
    }

    public function show($id,Request $request)
    {
        $wyslij = Order::find($id);

        return view('Order.details',['wyslij'=>$wyslij]);
     }
    
    public function editt($numer)
    {
        
         $wyslij = Order::find($numer);

        return view('Order.editDostawa',['wyslij'=>$wyslij]);
    }

    public function updatee($numer,Request $request)
    {
        $wyslij = Order::find($numer);
        
        $wyslij->klient = $request->klient;
        $wyslij->miasto = $request->miasto;
        $wyslij->numer = $request->numer;
        $wyslij->wprowadzil = $request->wprowadzil;
        $wyslij->typ = $request->typ;
        $wyslij->waga = $request->waga;
        $wyslij->ilosc = $request->ilosc;
        $wyslij->cena = $request->cena;
        $wyslij->komentarz = $request->komentarz;
        //$wyslij->date = $request->date;
        $wyslij->save();

        return redirect()->route('order')->with('message','Dostawa '. $wyslij->typ.'zapisana poprawnie.');
    }

    public function destroyy (Order $id)
    {
        $id->delete();
        return redirect()->route('order')->with('message','Dostawa usunięta poprawnie.');
    }
    public function zamowienia()
    {
        // DB::table('komponents')->where('code', $code)->update(array('quantity',$x);

        $komponentyRekord = Order::all();
        $x = 1;
        return view('Order.zamowienia', ['komponenty' => $komponentyRekord],['x'=>$x]);
    }
}
