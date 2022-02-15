<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $day_today = $this->get_date_today();
        $has_time_in = $this->get_time_in_records();

        return view('dashboard', compact('day_today', 'has_time_in'));
    }

    /**
     * Return current day today
     */
    public static function get_date_today( $day_name_today = null){
        $day_name_today;
        // Get the current year
        $current_year = date('y');

        // Get the day name today
        $day_name_today = Carbon::now()->format('l');

        // Get the current month name
        $current_month = Carbon::now()->format('F');

        // Get the day date today
        $day_today = Carbon::now()->format('d');

        // pick the first three letters of the day name
        $day_today_3_characters = substr($day_name_today, 0, 3);

        // pick the first three letters of the current month name
        $month_3_characters = substr($current_month, 0, 3);

        $day_name_today = $day_today_3_characters."," .$day_today."/".$month_3_characters."/".$current_year;

        return $day_name_today;
    }

    //get user logged in record with time_in
    public function get_time_in_records(){
        $user_log = Log::where('user_id', Auth::user()->id)
            ->where('status', 0)
            ->orderByDesc('id')
            ->limit(1)
            ->first();
        if($user_log){
            return $user_log;
        }else{
            return false;
        }
    }

    //get Report data
    public function get_report_data(){
        // Get current month and year
        $year = now()->year;
        $month = now()->month;

        //Get month nme with 3 characters
        $month_name = substr(Carbon::now()->format('F'), 0, 3);
        $users = User::all();
        $users_logs = Log::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->get();
        return view('reporting.report', compact('users_logs', 'users', 'year', 'month_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
