<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pedidos;
use Symfony\Component\HttpFoundation\Response;

class PedidosController extends Controller
{
    public function showAll()
    {
        return response()->json([
            "message: " => "ShowAll Pedidos"
        ]);
    }

    public function save(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }
    
    public function destroy($id)
    {

    }
}
