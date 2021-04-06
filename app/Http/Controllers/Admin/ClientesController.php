<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ClientesController extends Controller
{
    public function verificaCliente(Request $request){

       $cliente = DB::table('clientes')->where('cnpj','like','%'.$request->cnpj.'%')->first();
       $pbtec   = 'https://pbtec.deltaze.com.br';
       $tecmais = 'https://tecmais.deltaze.com.br';

        if($cliente == null){
            return redirect()->route('home')->with('status','Não encontramos informações com o cnpj informado');
        }

       if($cliente->tipoEmpresa == 'PBTEC'){
            $url =$pbtec;
            return view('areaCliente',compact('url','cliente'));
       }else {
           $url = $tecmais;
           return view('areaCliente',compact('url','cliente'));
       }

    }
}
