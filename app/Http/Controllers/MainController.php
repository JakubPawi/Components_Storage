<?php

namespace App\Http\Controllers;

use App\Models\Komponent;
use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;


class MainController extends Controller
{
   
    public function index()
    {
        $komponentyRekord = Komponent::all();
        $x = 1;
        return view('MainPage.komponenty', ['komponenty' => $komponentyRekord],['x'=>$x]);
    }

    public function news()
    {
        return view('MainPage.nowy');
    }

    public function store(PagesRequest $request)
    {
        $wyslij = new Komponent();
            
        $wyslij->name = $request->name;
        $wyslij->code = $request->code;
        $wyslij->quantity = $request->que;
        $wyslij->location = $request->location;
        //$wyslij->date = $request->date;
        $wyslij->save();
        
        return redirect()->route('komponents')->with('message','Komponent '. $wyslij->name.",". $wyslij->code.' dodany poprawnie.');
    }

    public function dodaj()
    {
        $wyslij = new Komponent();
        
        $wyslij->name = $request->name;
        $wyslij->code = $request->code;
        $wyslij->quantity = $request->que;
        $wyslij->location = $request->location;
        //$wyslij->date = $request->date;
        $wyslij->save();

        return redirect()->route('komponents')->with('message','Komponent '. $wyslij->name.",". $wyslij->code.' dodany poprawnie.');
    }
   
    public function create()
    {
        //
    }

    public function show($id)
    {
        //
    }

    
    public function edit($location)
    {
        
         $wyslij = Komponent::find($location);

        return view('MainPage.edit',['wyslij'=>$wyslij]);
    }

   
    public function update($code,PagesRequest $request)
    {
        $wyslij = Komponent::find($code);
        
        $wyslij->id = $request -> id;
        $wyslij->name = $request->name;
        $wyslij->code = $request->code;
        $wyslij->quantity = $request->que;
        $wyslij->location = $request->location;
        //$wyslij->date = $request->date;
        $wyslij->save();

        return redirect()->route('komponents')->with('message','Komponent: '. $wyslij->code.' zapisany poprawnie.');
    }

    public function destroy (Komponent $id)
    {
        $id->delete();
        return redirect()->route('komponents')->with('message','Komponent usunięty poprawnie.');
    }
    public function zamowienia()
    {
        $komponentyRekord = Komponent::all();
        $x = 1;
        return view('MainPage.zamowienia', ['komponenty' => $komponentyRekord],['x'=>$x]);
    }
}
