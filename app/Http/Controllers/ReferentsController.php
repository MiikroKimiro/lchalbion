<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests\AccountingRequest;
use App\Http\Controllers\Controller;
use App\Accounting;
use DB;

class ReferentsController extends Controller
{
    public function getAccounting(){

        $firstWeek = Carbon::create()->startOfWeek();

        $LCGeneralWeek = Accounting::where('created_at', '>=', $firstWeek)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('SUM(amount) as total')
            ])
            ->toJson();


        return view('referents.finances.accounting', ['LCGeneralWeek' => $LCGeneralWeek]);

    }
}
