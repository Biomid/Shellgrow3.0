<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function show($id)
    {
        $apartment = Apartment::findOrFail($id);

        return view('apartment-description', compact(['apartment']));
    }
}
