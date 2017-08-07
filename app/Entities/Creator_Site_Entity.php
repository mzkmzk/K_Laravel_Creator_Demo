<?php

namespace App\Entities;
/**
 * Created by PhpStorm.
 * User: maizhikun
 * Date: 16/2/28
 * Time: 下午10:42
 */

use K_Laravel_Creator\Entities\Base_Entity;


class Creator_Site_Entity extends Base_Entity{

    public static $entity = [
        "Site" => "网站归属"
    ];

    public static function get_attribute(){
        $attribute = array();
        $attribute['creator_user_id'] = parent::set_attribute("用户","int");
        $attribute['host'] = parent::set_attribute("域名","string");
        return array_merge(parent::get_attribute(),$attribute);
    }

    
}