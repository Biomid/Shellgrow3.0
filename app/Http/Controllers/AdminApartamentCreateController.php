<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class AdminApartamentCreateController extends Controller
{
    public function index()
    {
        return view('apartment');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required|string',
        'local' => 'required|string',
        'building' => 'required|string',
        'room_number' => 'required|integer',
        'quantity_rooms' => 'required|integer',
        'area' => 'required|numeric',
        'file_owner_document' => 'file|nullable',
        'file_power_of_attorney' => 'file|nullable',
        'file_property_management_letter' => 'file|nullable',
        'file_commercial_offer' => 'file|nullable',
        'file_contacts' => 'file|nullable',
        'DEWA_account' => 'required|string',
        'DEWA_account_password' => 'required|string|min:6',
        'AC_account' => 'required|string',
        'AC_account_password' => 'required|string|min:6',
        'internet_account' => 'required|string',
        'internet_account_password' => 'required|string|min:6',
        'GAS_supplier' => 'nullable|string',
        'GAS_account' => 'nullable|string',
        'apartment_price' => 'required|numeric',
        'invest' => 'required|numeric',
        'rental_price_sigin' => 'required|numeric',
        'commission' => 'required|numeric',
       // 'communal_payments' => 'nullable|boolean',
    ]);
        // Создание нового экземпляра апартамента
        $apartment = new Apartment();
        $apartment->fill($validatedData);
        $apartment->save();

        return redirect()->route('dashboard');
    }
    public function show()
    {
        $apartments = Apartment::orderBy('id')->get();
        return view('apartment-show', compact([
            'apartments'
        ]));
    }
}
