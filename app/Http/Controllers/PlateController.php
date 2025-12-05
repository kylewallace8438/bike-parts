<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlateController extends Controller
{
    public function lookupPlate(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:4096',
        ]);

        $image = $request->file('image');
        $cFile = curl_file_create($image->getRealPath(), $image->getMimeType(), $image->getClientOriginalName());
        //ADD PARAMETER IN REQUEST LIKE regions
        $data = array(
            'upload' => $cFile,
            'regions' => 'vn' // Optional
        );

        // Prepare new cURL resource
        $ch = curl_init('https://api.platerecognizer.com/v1/plate-reader/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2TLS);

        // Set HTTP Header for POST request
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Token 2c499c7043e33befa56a30bcdb1cafcac4be1574"
            )
        );
        $result = curl_exec($ch);
        return response()->json(json_decode($result), 200);
    }
}
