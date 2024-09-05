<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Movement;
use Carbon\Carbon;

class PersonalRecordService
{
    public function index(Request $request){
        $movements = Movement::where('id', $request->id)
            ->select('id', 'name')
            ->get()
            ->map(function ($movement) {
                $movement->personalRecord = $movement->personalRecord()
                ->orderBy('value', 'desc')
                ->get()
                ->unique('user_id');

                return $movement;
            });

        $collUsers = new Collection();

        $recordAtual = "";
        $ranking = 1;

        foreach ($movements as $movement) {
            $collUsers->push([
                'name' => $movement->name,
            ]);

            foreach ($movement->personalRecord as $user) {
                if($recordAtual === $user->value){
                    $ranking = ($ranking-1);
                }

                $recordAtual = $user->value;

                $collUsers->push([
                    'ranking' => $ranking,
                    'user' => $user->user->name,
                    'personal_record' => $user->value,
                    'date' => Carbon::parse($user->date)->format('d-m-Y 00:00:00'),
                ]);

                $ranking++;
            }
        }

        return $collUsers;
    }
}
