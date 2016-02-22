<?php

namespace App\Services\activity;

use Illuminate\Support\Facades\DB;

class ActivityModel
{
    public function queryActivity(){
        $sql = "select id,start_time,end_time,user_id,user_name,user_group,description,";
        $sql .= "CONCAT(duration,' hours') as duration,";
        $sql .= "CASE status WHEN 0 THEN 'ongoing' WHEN 1 THEN 'completed' END as status";
        $sql .= " from t_io_activity";

        return DB::select($sql, []);
    }

}
