<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use App\Http\Requests\LogsRequest;

class LoggingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogsRequest $request)
    {
        $log = new Log($request->all());
        $save_log = $log->save();
        if(!$save_log){
            session()->flash('message','Time is in not saved');
            return redirect()->back();
        }else{
            return redirect()->back()
                ->withInput()
                ->with('success', 'time in Registered Succcessfully')
                ->with('status', $log->status);
        }

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
    public function update(LogsRequest $request, $id)
    {
        $user_log = Log::find($id);
        $update_log = $user_log->update($request->all());
        if(!$update_log){
            return redirect()
                ->back()->with('failure', 'Failed to update time in details. Please try again later.');
        }
        return redirect()
            ->back()->with('success', 'Time out updated successfully');
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
