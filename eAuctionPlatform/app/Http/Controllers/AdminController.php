<?php

namespace App\Http\Controllers;


use App\Models\Bid;
use App\Models\User;
use App\Models\auction;
use App\Models\invoice;
use App\Models\valuation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    // public function create(){
    //     return view('admin.createinvoice');
    // }

    public function addinvoice(Request $request){
        try {
            invoice::insert([
                'invoice_no'=>$request->invoice,
                'plantation_name'=>$request->Plantation,
                'grade'=>$request->grade,
                'bag_count'=>$request->bagcount,
                'per_bag_quantity'=>$request->perbagquantity,
                'created_at'=>now()
            ]);

            return response()->json(['success'=>true, 'msg'=>'Added Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }

    public function showInvoice($id){
        try {
            $invoice = invoice::where('id', $id)->get();
            return response()->json(['success'=>true, 'data'=>$invoice]);

        } catch (\Exception $e) {
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }


    public function editinvoice(Request $request){
        try {
            $invoice = invoice::find($request->id);
            $invoice->invoice_no = $request->invoice;
            $invoice->plantation_name = $request->Plantation;
            $invoice->grade = $request->grade;
            $invoice->bag_count = $request->bagcount;
            $invoice->per_bag_quantity = $request->perbagquantity;
            $invoice->invoice_bill = $request->invoicebill;
            $invoice->save();
            return response()->json(['success'=>true, 'msg'=>'Updated Successfully']);

        } catch (\Exception $e) {
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }


    public function deleteinvoice(Request $request){
        try {
            invoice::where('id',$request->id)->delete();
            return response()->json(['success'=>true, 'msg'=>'Deleted Successfully']);
            
        } catch (\Exception $e) {
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }


    public function valuationboard(){
        $invoice=invoice::all();
        $valuation=valuation::with('invoice')->get();
        return view('admin.valuation',['invoice'=>$invoice,'valuation'=>$valuation]);
    }


    public function addValuation(Request $request){
        try {
            valuation::insert([
                'invoice_no'=>$request->invoice,
                'sellingmark'=>$request->Plantation,
                'grade'=>$request->grade,
                'charactesristics'=>$request->Characteristics,
                'weight'=>$request->Weight,
                'valuation'=>$request->Valuation,
                'created_at'=>now()
            ]);

            return response()->json(['success'=>true, 'msg'=>'Added Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }

    public function deletevaluation(Request $request){
        try {
            valuation::where('id',$request->id)->delete();
            return response()->json(['success'=>true, 'msg'=>'Deleted Successfully']);
            
        } catch (\Exception $e) {
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }

    public function showvaluation2($id){
        try {
            $valuation = valuation::where('id', $id)->get();
            return response()->json(['success'=>true, 'data'=>$valuation]);

        } catch (\Exception $e) {
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }

    public function editvaluationmodule(Request $request){
        try {
            $valuation = valuation::find($request->hiddenID);
            $valuation->invoice_no = $request->dataI;
            $valuation->grade = $request->dataG;
            $valuation->sellingmark = $request->dataSM;
            $valuation->charactesristics = $request->dataC;
            $valuation->weight = $request->dataW;
            $valuation->valuation = $request->dataV;
            $valuation->save();
            return response()->json(['success'=>true, 'msg'=>'Data Update Success']);

        } catch (\Exception $e) {
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }



// Auction Related
    public function auctionPage(){
        $auction = auction::all();
        return view('admin.auction',compact('auction'));
    }

    public function userDashboard(){
        $users=User::where('is_admin',0)->get();
        return view('admin.users',compact('users'));
    }

    public function addUSER(Request $request){
        try {
            $password = Str::random(8);
            User::insert([
                'name'=>$request->username,
                'email'=>$request->email,
                'password'=>Hash::make($password)
            ]);

            $url=URL::to('/');
            $data['url'] = $url;
            $data['name']=$request->username;
            $data['email']=$request->email;
            $data['password']=$password;
            $data['title']="User Registration Request";

            Mail::send('userregistration', ['data'=>$data], function($message) use ($data){
                $message->to($data['email'])->subject($data['title']);
            });
            return response()->json(['success'=>true, 'msg'=>'User Registration Success']);

        } catch (\Exception $e) {
            dd($e);
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }

    
    public function editUSER(Request $request){
        try {
            $user = User::find($request->id);

            $user->name = $request->username;
            $user->email = $request->email;
            $user->save();

            $url=URL::to('/');
            $data['url'] = $url;
            $data['name']=$request->username;
            $data['email']=$request->email;
            $data['title']="User Details Updated";

            Mail::send('updatedUserDetail', ['data'=>$data], function($message) use ($data){
                $message->to($data['email'])->subject($data['title']);
            });
            return response()->json(['success'=>true, 'msg'=>'User Updated Success']);

        } catch (\Exception $e) {
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }

    public function deleteUser(Request $request){
        try {
            User::where('id',$request->id)->delete();
            return response()->json(['success'=>true, 'msg'=>'Deleted Successfully']);
            
        } catch (\Exception $e) {
            return response()->json(['success'=>false, 'msg'=>$e->getMessage()]);
        }
    }


      // Users - Forntend Controllers
    public function frontuserDashboard(){
        return view('users.dashboard');
    }
  
    public function auctionItemsummary(){
        $auctionList = valuation::all();
        return view('users.auctionitems',compact('auctionList'));
    }   
    
    
    public function auctionboard($id){
        $valuationready = valuation::findOrFail($id);
        return view('users.auctionProduct', compact('valuationready'));

    }

    

}
