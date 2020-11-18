<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeatController extends Controller
{
    private $seat;

    public function __construct(Seat $seat)
    {
        $this->seat = $seat;
    }

    public function getFLoor()
    {
        return response()->json([
            'result' => $this->seat->getFloor()
        ], 200);
    }
}
