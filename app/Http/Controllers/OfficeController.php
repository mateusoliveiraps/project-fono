<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfficeRequest;
use App\Models\Office;
use Exception;
use Illuminate\Http\Response;

class OfficeController extends Controller
{
    public function list(){
        try{
            $offices = Office::all();
            return response()-> json($offices, Response::HTTP_OK);
        }catch(Exception $e){
            return response()->json(['message' => 'Ocorreu um erro ao deletar'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function create(OfficeRequest $request){
        try{
            $office = Office::create($request->all());
            return $office;
        }catch(Exception $e){
            return response()->json(['message' => 'Ocorreu um erro ao deletar'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit(OfficeRequest $request, int $id){
        try{
            $validated = $request->validated();
            $office = Office::where('id', '=', $id)->first();
            if(!$office){
                throw new Exception('Consultório não encontrado!',Response::HTTP_NOT_FOUND);
            }
            $office->update($validated);
            return $office;
        }catch(Exception $e){
            return response()->json(['message' => 'Ocorreu um erro ao deletar'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function delete(int $id){
        try{
            Office::destroy($id);
            return response()->json(['message' => 'Consultório deletado com sucesso'], Response::HTTP_OK);
        }catch(Exception $e){
    return response()->json(['message' => 'Ocorreu um erro ao deletar'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
