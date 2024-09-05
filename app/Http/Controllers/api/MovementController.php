<?php

namespace App\Http\Controllers\Api;

use App\Services\PersonalRecordService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovementController extends Controller
{
    public function __construct(private PersonalRecordService $personalRecordService)
    {
        $this->personalRecordService = $personalRecordService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!$request->id)
            return response()->json(['error' => 'Selecione um movimento'], 500);

        $personalRecord = $this->personalRecordService->index($request);

        if(count($personalRecord)){
            return response()->json([
                'status' => 200,
                'movement' => $personalRecord
            ]);
        }

        return response()->json(['error' => 'Não foi possível efetuar a requisição'], 500);
    }
}
