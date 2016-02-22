<?php

namespace App\Http\Controllers\activity;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\activity\ActivityModel;
use Symfony\Component\HttpFoundation\Response;

class ActivityController extends Controller
{
    /**
     * @param ActivityModel $activityModel
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ActivityModel $activityModel)
    {

        /*
        $resultArr = [
            ["startTime"=>"10:37am","endTime"=> "12:37pm","user"=> "Ben","userId"=> 1,"group"=> "test group","description"=> "this is a test activity","status"=>"Completed","duration"=> "2 hours"],
            ["startTime"=>"11:37am","endTime"=> "01:37pm","user"=> "Ben","userId"=> 1,"group"=> "test group","description"=> "this is a test activity","status"=>"Completed","duration"=> "2 hours"],
            ["startTime"=>"09:37am","endTime"=> "11:37pm","user"=> "Ben","userId"=> 1,"group"=> "test group","description"=> "this is a test activity","status"=>"Completed","duration"=> "2 hours"],
            ["startTime"=>"08:37am","endTime"=> "10:37pm","user"=> "Ben","userId"=> 1,"group"=> "test group","description"=> "this is a test activity","status"=>"Completed","duration"=> "2 hours"],
            ["startTime"=>"03:37pm","endTime"=> "05:37pm","user"=> "Ben","userId"=> 1,"group"=> "test group","description"=> "this is a test activity","status"=>"Completed","duration"=> "2 hours"],
            ["startTime"=>"11:37am","endTime"=> "01:37pm","user"=> "Ben","userId"=> 1,"group"=> "test group","description"=> "this is a test activity","status"=>"Completed","duration"=> "2 hours"]
        ];
        */
        return response()->json($activityModel->queryActivity());
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
