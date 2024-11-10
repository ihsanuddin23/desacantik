<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IdentitasRt;

class ToolsApiController extends Controller
{

    public function DemografiWilayah()
    {
        $data = IdentitasRt::all();

        $response = array(
            'code'   => 200,
            'status' => 'success',
            'data'   => $data,
        );

        return response()->json($response, $response['code']);
    }
}
