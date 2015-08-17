<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests\AccountingRequest;
use App\Http\Controllers\Controller;
use App\Accounting;
use DB;
use JavaScript;
use App\User;
use App\accClass;
use Illuminate\Support\Facades\Auth;


class ReferentsController extends Controller
{
    public function getAccounting(){

        $firstWeek = Carbon::create()->startOfWeek();
        $firstMonth = Carbon::create()->startOfMonth();
        $firstYear = Carbon::create()->startOfYear();

        $LCGeneralWeek = Accounting::where('created_at', '>=', $firstWeek)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('SUM(amount) as total')
            ]);
        $LCGeneralMonth = Accounting::where('created_at', '>=', $firstMonth)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('SUM(amount) as total')
            ]);
        $LCGeneralYear = Accounting::where('created_at', '>=', $firstYear)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('SUM(amount) as total')
            ]);
        $LCGeneralAll = Accounting::groupBy('date')
            ->orderBy('date', 'DESC')
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('SUM(amount) as total')
            ]);

        JavaScript::put([
            'LCGenDataWeek' => $LCGeneralWeek,
            'LCGenDataMonth' => $LCGeneralMonth,
            'LCGenDataYear' => $LCGeneralYear,
            'LCGenDataAll' => $LCGeneralAll
        ]);

        $classList = accClass::orderBy('className')->lists('className', 'id');

        return view('referents.finances.accounting');

    }

    public function postNewEntry(AccountingRequest $request){

        $Entry = new Accounting();

        $Entry->userID = Auth::user()->id;
        $Entry->concept = $request['concept'];
        $Entry->class = $request['accClass'];
        $amount = $request['amount'];
        if ($request['amountOperator'] == 'plus') {
            $Entry->amount = +$amount;
        }else{
            $Entry->amount = -$amount;
        }
        $Entry->save();


        return action('ReferentsController@getAccounting');
    }

    public function postNewClass(AccountingRequest $request){
        $newClass = new accClass();
        $newClass->className = $request['newClass'];
        $newClass->save();

        return action('ReferentsController@getAccounting');
    }
}
