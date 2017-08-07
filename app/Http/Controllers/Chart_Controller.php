<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
//use K_Laravel_Creator\Http\Controllers\Base_Controller;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Creator_Error_Model;
use App\Models\Creator_Loadtime_Model;
use App\Models\Creator_Network_Model;


class Chart_Controller extends BaseController
{

   
    public function line(Request $request) {

        //$entity_model_name = 'Creator_' . $request->entity_name . '_Model';
        //$model = new $entity_model_name;
       $where_array = json_decode( $request->get('where')   );
       //dump($where_array);
        $data = DB::table('Creator_Loadtime')
                  ->select(DB::raw("
                                    AVG(  dom_content_loaded -  unload_event_start ) as dom_load, 
                                    AVG(  atf ) as atf, 
                                    AVG(  window_loaded -  unload_event_start ) as window_loaded,
                                    DATE(updated_at) as date
                                   "
                                    
                                   ))
                  //->select(DB::raw(""))
                  //->select(DB::raw(""))
                  ->where("updated_at", ">=", DB::raw('DATE_SUB(CURDATE(), INTERVAL 6 DAY)') )
                  ->where('window_loaded','<>','unload_event_start')
                  ->where(DB::raw('dom_content_loaded -  unload_event_start') ,'<=',100000)
                   ->where(DB::raw('window_loaded -  unload_event_start') ,'<=',100000)
                    ->where(DB::raw('window_loaded -  unload_event_start') ,'>=',0)
                  ->where('atf','<>',-1);
                  //->groupBy(DB::raw('DATE(updated_at)'))
                  //->get();

        if ( gettype($where_array) === 'array' )
        foreach ($where_array as $key => $value) {
            //if (array_key_exists($value->key,$this->entity->get_attribute()) ==true){
                $data = $data->where($value->key, $value->condition, $value->value);
            //}
        }
        $data = $data->groupBy(DB::raw('DATE(updated_at)'))
                  ->get();
        //dump($data);
        return $data;               
       
    }

    public function network_chart(Request $request){
      $where_array = json_decode( $request->get('where')   );
      $data = DB::table('Creator_Network')
                ->select(
                          DB::raw("
                                     AVG( DURATION ), 
                                     URL, 
                                     COUNT( * ) 
                                  ")
                        );
       if ( gettype($where_array) === 'array' )
        foreach ($where_array as $key => $value) {
            //if (array_key_exists($value->key,$this->entity->get_attribute()) ==true){
                $data = $data->where($value->key, $value->condition, $value->value);
            //}
        }   
        $data = $data->groupBy('URL')
                  ->orderBy(DB::raw('SUM( DURATION )'), 'DESC')
                  ->skip(0)
                  ->take(20)
                  ->get();
        //dump($data);
        return $data;    
    }

    public function error_chart(Request $request){
      $where_array = json_decode( $request->get('where')   );
      $data = DB::table('Creator_Error')
                ->select(
                          DB::raw("
                                     `Column`, 
                                     COUNT( * ) 
                                  ")
                        );
       if ( gettype($where_array) === 'array' )
        foreach ($where_array as $key => $value) {
            //if (array_key_exists($value->key,$this->entity->get_attribute()) ==true){
                $data = $data->where($value->key, $value->condition, $value->value);
            //}
        }   
        $data = $data->groupBy('Column')
                  ->orderBy(DB::raw('count(*)'), 'DESC')
                  ->skip(0)
                  ->take(20)
                  ->get();
        //dump($data);
        return $data;    
    }
}
