<?php

namespace App\Entities;
/**
 * Created by PhpStorm.
 * User: maizhikun
 * Date: 16/2/28
 * Time: 下午10:42
 */

use K_Laravel_Creator\Entities\Base_Entity;


class Creator_Log_Entity extends Base_Entity{

    public static $entity = [
        "Log" => "自定义日志"
    ];

    public static function get_attribute(){
        $attribute = array();

        $attribute['message'] = parent::set_attribute("信息","string");
        $attribute['type'] = parent::set_attribute("日志类型","string");
        $attribute['type'] = parent::set_attribute("日志类型","string");
        $attribute['identifying'] = parent::set_attribute("标识","string"); 
        $attribute['referer'] = parent::set_attribute("referer","string"); 
        return array_merge(parent::get_attribute(),$attribute);
    }

    
}