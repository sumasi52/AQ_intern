<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function getAddressByPostalCode($postalCode)
    {
        $addresses = Postalcode::where('postal_code', $postalCode)->groupBy('address')->pluck('address');

        return response()->json($addresses);
    }
}
