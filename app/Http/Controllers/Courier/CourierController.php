<?php

namespace App\Http\Controllers\Courier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\CourierMerchant;
use App\Models\CourierMerchantDocument;

class CourierController extends Controller
{
    public function createCourier(Request $request)
    {
        $validated = $request->validate([           
            'country' => 'required|integer',
            'state' => 'required|integer',
            'company_name' => 'required|string',
            'company_address' => 'required|string',
            'company_phone' => 'required|string',
            'working_opening_time' => 'string',
            'working_closing_time' => 'string',
            'cac_number' => 'required|string',
            // 'cac_document_path' => 'required|string'
        ]);
        $auth_user = auth()->user();
        $user_id = $auth_user->id;

        $courierDocs = CourierMerchant::where('user_id', $user_id)->first();
        $courierDocs->country_id = $validated['country'] ?? null;
        $courierDocs->state_id = $validated['state'] ?? null;
        $courierDocs->company_name = $validated['company_name'] ?? null;
        $courierDocs->company_address = $validated['company_address'] ?? null;
        $courierDocs->company_phone = $validated['company_phone'] ?? null;
        $courierDocs->working_opening_time = $validated['working_opening_time'] ?? null;
        $courierDocs->working_closing_time = $validated['working_closing_time'] ?? null;
        $courierDocs->cac_number = $validated['cac_number'] ?? null;
        $courierDocs->save();

        // dd($courierDocs);
        return back();
    }

    public function addCourier(){
        $auth_user = auth()->user();
        $user_id = $auth_user->id;

        $countries = Country::all();
        $states = State::all();
        $courierDocs = CourierMerchant::where('user_id', $user_id)->first();
        
        return view('courier.addCourier')->with([
            'countries' => $countries,
            'states' => $states,
            'courier' => $courierDocs
        ]);
    }

    public function uploadCacDocument(Request $request){
        $auth_user = auth()->user();
        $user_id = $auth_user->id;

        $image = $request->file('file');
        $imageName = time() . '.' .$image->extension();
        $image->move(public_path('uploads/documents'), $imageName);

        $courierDocs = CourierMerchant::where('user_id', $user_id)->first();
        $courierDocs->cac_document_path = $imageName;
        $courierDocs->save();
        
        return response()->json(['success' => $imageName]);
    }

    public function uploadCacOtherDocuments(Request $request){
        $auth_user = auth()->user();
        $user_id = $auth_user->id;

        $image = $request->file('file');
        $imageName = time() . '.' .$image->extension();
        $image->move(public_path('uploads/documents'), $imageName);

        $courier = CourierMerchant::where('user_id', $user_id)->first();

        $document = new CourierMerchantDocument();
        $document->courier_id = $courier->id;
        $document->document_path = $imageName;
        $document->created_by = $user_id;
        $document->save();
        
        return response()->json(['success' => $imageName]);
    }

}
