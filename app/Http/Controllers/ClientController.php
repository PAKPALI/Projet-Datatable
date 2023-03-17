<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;

class ClientController extends Controller
{
    public function ClientsView(Request $request){

        if(request()->ajax()){
            $client = Clients::all();

            return Datatables::of($client)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-warning btn-sm editProduct">Edit</a>';

                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('client.index');
    }

    public function addClient(Request $request){
        $error_messages = [
            "name.required" => __('Fill in the name!'),
            "email.required" => __('Fill in the email! '),
            "address.required" => __('Fill in the adresse! '),
        ];
    
        $validator = Validator::make($request->all(),[
            'name' => ['required'],
            'email' => ['required'],
            'address' => ['required'],
        ], $error_messages);
    
        if($validator->fails())
        {
            return response()->json([
                "status" => false,
                "reload" => false,
                "title" => __('REGISTRATION FAILED'),
                "msg" => $validator->errors()->first()
            ]);
        }else{

            //Remplir le "protected filiable" avant l'inscription
            Clients::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'address' => $request['address'],
            ]);
    
            return response()->json([
                "status" => true,
                "reload" => true,
                "redirect_to" => "",
                "title" => __('Successful inscription'),
                "msg" => $request-> name.__('The registration is validated'),
            ]);
        }
    }

    public function update(Request $request){
        $error_messages = [
            "name.required" => __('Fill in the name!'),
        ];
    
        $validator = Validator::make($request->all(),[
            'name' => ['required'],
        ], $error_messages);
    
        if($validator->fails())
        {
            return response()->json([
                "status" => false,
                "reload" => false,
                "title" => __('UPDATED FAILED'),
                "msg" => $validator->errors()->first()
            ]);
        }else{

            //Remplir le "protected filiable" avant l'inscription
            $id = $request['id'];
            $client = Clients::find($id);
            $client->update([
                'name' => $request['name'],
            ]);
    
            return response()->json([
                "status" => true,
                "reload" => true,
                "redirect_to" => "",
                "title" => __('Successful updated'),
                "msg" => $request-> name.__('The update is validated'),
            ]);
        }
    }

    public function delete(Request $request){
        

        //Remplir le "protected filiable" avant l'inscription
        $id = $request['id'];
        $client = Clients::find($id);
        $client->delete();

        return response()->json([
            "status" => true,
            "reload" => true,
            "redirect_to" => "",
            "title" => __('Successful delete'),
            "msg" => $request-> name.__('The delete is validated'),
        ]);
        
    }
}