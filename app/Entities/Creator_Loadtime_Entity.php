<?php

namespace App\Entities;
/**
 * Created by PhpStorm.
 * User: maizhikun
 * Date: 16/2/28
 * Time: 下午10:42
 */

use K_Laravel_Creator\Entities\Base_Entity;

class Creator_Loadtime_Entity extends Base_Entity{

    public static $entity = [
        "Loadtime" => "Loadtime"
    ];

    //public static $has_many = ['Creator_Media'];

    public static function get_attribute(){
        $attribute = array();
        $attribute['unload_event_start'] = parent::set_attribute("卸载同域前页的绑定的开始时间","string");
        $attribute['dom_content_loaded'] = parent::set_attribute("DOM Ready","string");
        $attribute['atf'] = parent::set_attribute("首屏计算","string");
        $attribute['window_loaded'] = parent::set_attribute("window loaded","string");
        $attribute['referer'] = parent::set_attribute("referer","string"); 

         $attribute['user_agent'] = parent::set_attribute("user_agent","string"); 

        return array_merge(parent::get_attribute(),$attribute);
    }

    
}