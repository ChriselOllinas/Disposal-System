<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProxyData_Model;
use App\NewPDF_Model;
use PDF;
use App\User; 
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function newPDF(){
    	return view('newPDF');
    }

    public function dashboard(){
    	return view('dashboard');
    }



    public function searchAsset(){
    	$item = ProxyData_Model::all();
    	return view('searchAsset', compact('item'));
    }

    public function newPDFCreate(Request $request){
    	$search = $request->get('pdf_search');
    	$item = ProxyData_Model::where('item_pid', 'like', '%'.$search.'%')->get();
    	return view('newPDFCreated', compact('item'));
    }



    // public function searchPDF(Request $request){
    // 	$search = $request->get('pdfsearch');
    // 	$item = ProxyData_Model::where('item_pid', 'like', '%'.$search.'%')->get();
    // 	return view('newPDFCreated', compact('item'));
    // }


    public function search(Request $request){
    	$search = $request->get('asset_search');
    	$item = ProxyData_Model::where('item_pid', 'like', '%'.$search.'%')->get();
    	return view('searchAssetResult', compact('item'));
    }

    public function createPDF(Request $request){
        $deptName = 'CSO';
        $fileType = 'PDF';
        $year = date('Y');
        // $getQueryCount = 100;
        $query =NewPDF_Model::select('id')->orderBy('id', 'item_desc')->limit(1);
        // dd($query);
        $getQueryCount = $query->count() > 0 ? $query->first()->id + 1 : 1; //increment 
        $fileCount = str_pad($getQueryCount, 5, '0', STR_PAD_LEFT);
        $newFileName = $deptName.$fileType.$year.$fileCount;

        // dd($newFileName);
         $this->validate($request,[
            'item_pid' => 'required',
            'item_serial' => 'required',
            'item_brand' => 'required',
            'item_roomnum' => 'required',
            'item_model' => 'required',
            'item_type' => 'required',
            'item_desc' => 'required',
            'item_status' => 'required',

        ]);

          NewPDF_Model::create([
            
            'item_pid' => $request['item_pid'],
            'item_serial' => $request['item_serial'],
            'item_brand' => $request['item_brand'],
            'item_roomnum' => $request['item_roomnum'],
            'item_model' => $request['item_model'],
            'item_type' => $request['item_type'],
            'item_desc' => $request['item_desc'],
            'item_status' => $request['item_status'],
            'filename' =>  $newFileName,
        ]);

          // dd($newFileName);
         return redirect('newPDF')->with("alert",'PDF has been added');
    }

    public function printPDF(){
        $pdf = NewPDF_Model::all();
    	return view('printPDF',compact('pdf'));
    }

    public function printPDFExtract($id){
        //dd($id);
        $item = NewPDF_Model::find($id);
        //dd($item);
        $pdf = PDF::loadView('printPDFResult', compact('item'))->setPaper('letter', 'portrait');

        $filename = $item->filename; // file can changed based on the row name in DB
        // dd($filename);
        return $pdf->download($filename . '.pdf');
    }

    public function voidModule(){ // return of view 'voidModule' 
        $pdf = NewPDF_Model::all();
        return view('voidModule',compact('pdf'));
    }

    public function voidModuleEdit($id){ // getting 1pdf to edit status
        $pdf = NewPDF_Model::find($id);
        //dd($pdf);
        return view('voidModuleEdit', compact('pdf'));
        
    }

    public function saveUpdatedPDF(Request $request, $id){
        //dd($id);
        $this->validate($request,[
            'item_pid' => 'required',
            'item_serial' => 'required',
            'item_brand' => 'required',
            'item_roomnum' => 'required',
            'item_model' => 'required',
            'item_type' => 'required',
            'item_desc' => 'required',
            'item_status' => 'required',

        ]);
        //dd($request);
            $pdf = NewPDF_Model::find($id);
            
            $pdf->item_pid = $request->get('item_pid');
            $pdf->item_serial = $request->get('item_serial');
            $pdf->item_brand = $request->get('item_brand');
            $pdf->item_roomnum = $request->get('item_roomnum');
            $pdf->item_model = $request->get('item_model');
            $pdf->item_type = $request->get('item_type');
            $pdf->item_desc = $request->get('item_desc');
            $pdf->item_status = $request->get('item_status');
            //dd($pdf);
            $pdf->save();
            return redirect('printPDF')->with("alert",'Status has been updated!');
            // return view('voidModule');  
    }

        public function validationModule(){
            $pdf = NewPDF_Model::all();
            return view('validationModule', compact('pdf'));
        }

        public function validationModuleEdit($id){ // getting 1pdf to edit status
        $pdf = NewPDF_Model::find($id);
        //dd($pdf);
        return view('validationModuleEdit', compact('pdf'));
        
    }

}

