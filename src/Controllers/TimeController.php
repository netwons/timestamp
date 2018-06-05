<?php

namespace Masoud\Time\Controllers;

use App\Events\OrderStatusUpdate;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Masoud\Time\Timestamp;


class TimeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showtime()
    {
        return \MyFacadeTimer::onehourago();
        $value=config('MyConfig.paris');
        $v=config('MyConfig.title');
        $time=Carbon::now()->setTimezone($value)->toTimeString();
        return view('MyView::time',compact('time','v'));
    }

    public function showtimestamp()
    {
        return Timestamp::all();
    }




}

