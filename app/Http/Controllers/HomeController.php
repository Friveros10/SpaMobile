<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\roleModel;
use App\local;
use App\registros;
use App\balance;

use Illuminate\Support\Facades\Auth;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    
    public function pdfAll()
    {
        $registros= balance::all();
        $pdf = \PDF::loadView('pdf.pdfAll', compact('registros'));
        return $pdf->download('pdfAll.pdf');
    }
    public function excelAll()
    {
        return Excel::download(new UsersExport, 'registros.xlsx');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user=Auth::user();
        if (Auth::check()){
            if ($user->esAdmin()){
              //  echo "Eres usuario administrador.";
                return view('Admin.user', compact('user'));
           } else{
              //  echo "Eres usuario, NO ADMINISTRADOR.";
                return view('User.mainUser',  compact('user'));    
            }
        }  
    }

    public function getUsersAll(){
        $user = User::with('role');
        $response =  $user->get();
        return response()->json($response);
    }

    public function getLocalesAll()
    {
        $local = local::with('ruta');
       $response =  $local->get();
       return response()->json($response);
    }
    public function getLocalesUser()
    {
        $local = local::with('user','ruta');
       $response =  $local->get();
       return response()->json($response);
    }

    public function getRegistros()
    {
        $registros = registros::with('user', 'local','local.ruta','type_bandeja','type_register');
        $response =  $registros->get();
        return response()->json($response);
    } 

    
    public function getBalance()
    {
        $registros = balance::all();
        return response()->json($registros);
    } 

   
   public function saveRegister(Request $request)
   {
       try{

        //return response()->json($request->all());

        if(!empty($request->BandejaChica) )
        {
            $registros =new registros();
            $registros->id_tipo_bandeja = $request->BandejaChica;
            $registros->id_local = $request->local;
            $registros->id_tipo_registro = $request->tipoRegistro;
            $registros->id_usuario = 2;
            $registros->cantidad= $request->quantityS;
            $registros->save();
        }

        if(!empty($request->BandejaGrande) )
        {
            $registros =new registros();
            $registros->id_tipo_bandeja = $request->BandejaGrande;
            $registros->id_local = $request->local;
            $registros->id_tipo_registro = $request->tipoRegistro;
            $registros->id_usuario = 2;
            $registros->cantidad= $request->quantityB;
            $registros->save();

        }

        if(!empty($request->Dolly)  )
        {
            $registros =new registros();
            $registros->id_tipo_bandeja = $request->Dolly;
            $registros->id_local = $request->local;
            $registros->id_tipo_registro = $request->tipoRegistro;
            $registros->id_usuario = 2;
            $registros->cantidad= $request->quantityD;
            $registros->save();

        }

        return response()->json(['status'=>'success','data'=>'Registrado correctamente'], 200);
    } catch(\Exception $e) {
           // catch code
           return response()->json(['status'=>'error','data'=>'Error interno: '.$e->getMessage()], 500);
       } 
   }
   
    
}
 