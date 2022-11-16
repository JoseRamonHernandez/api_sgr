<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Platillos;
use Symfony\Component\HttpFoundation\Response;

class PlatillosController extends Controller
{
    public function showAll()
    {
        return response()->json([
            "message: " => "ShowAll Platillos"
        ]);
    }

    public function guardar(Request $request)
    {
        $platillo = new Platillo();

        $platillo->name = $request->name;
        $platillo->ingredients = $request->ingredients;
        $platillo->price = $request->price;
        $platillo->image = $request->image;
        $platillo->status = $request->status;

        $platillo->save();

        return response()->json(['result: '=>$platillo], Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {

    }
    
    public function destroy($id)
    {

    }

}
