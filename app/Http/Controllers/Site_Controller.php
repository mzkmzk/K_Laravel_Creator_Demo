<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Vinelab\Http\Client as HttpClient;

class Site_Controller extends Creator_Site_Controller
{

     public function __construct(Request $request, $entity_name = ''){
        parent::__construct($request, $entity_name);
     }

    public function authentication_site( ){
        $creator_user_id = $this->request->get('creator_user_id');
        $url = urldecode($this->request->get('url'));
        $reg = '/(\w*\.(com.cn|com|net.cn|net|org.cn|org|gov.cn|gov|cn|mobi|me|info|name|biz|cc|tv|asia|hk|网络|公司|中国)).*$/';

        preg_match($reg,$url,$url_info);

        $request = [
            'url' => $url . '/k_report'
        ];
        //dump($jump_url);
        $response = \HttpClient::get($request);
        //dump($response);
        
        if( $this->model
                ->where('creator_user_id', $creator_user_id)
                ->where('host', $url_info[1])
                ->count() >= 1
        ){
            return 
                response()->json([
                    "result" => '30002',
                    "message" => '该域名已经被当前账号验收'
                ]);
        }else if ( !is_null( $this->request->get('creator_user_id'))  && trim($response->content() ) == $this->request->get('creator_user_id') * 2 ) {
            return $this->insert([
                'creator_user_id' => $creator_user_id,
                'host' => $url_info[1]
            ]);
        }else {
            return 
                response()->json([
                    "result" => '30001',
                    "message" => '检验失败'
                ]);
             
        }

        //return $response->json();
     }

    
}
