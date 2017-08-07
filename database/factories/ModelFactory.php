<?php

function get_all_id(K_Laravel_Creator\Models\Base_Model $base_mobel) {
    /* dump($base_mobel);
     dump(\App\Models\User_Model::query()->get());
     error_log(\App\Models\User_Model::all());*/
    $model_datas = $base_mobel->all();
    //error_log($model_datas);
    $model_id = array();
    foreach($model_datas as $model_data){
        array_push($model_id,$model_data['id']);
    }
    return $model_id;
}

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->numberBetween(),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->numberBetween(),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->numberBetween(),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->numberBetween(),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->numberBetween(),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->numberBetween(),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->numberBetween(),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->numberBetween(),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'origin' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->numberBetween(),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),
'message' => $faker->text(30),
'line' => $faker->text(30),
'column' => $faker->text(30),
'object' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->numberBetween(),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),
'message' => $faker->text(30),
'line' => $faker->text(30),
'column' => $faker->text(30),
'object' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->numberBetween(),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});


$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),
'message' => $faker->text(30),
'line' => $faker->text(30),
'column' => $faker->text(30),
'object' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),
'message' => $faker->text(30),
'line' => $faker->text(30),
'column' => $faker->text(30),
'object' => $faker->text(30),
'user_agent' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'referer' => $faker->text(30),
'user_agent' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),
'message' => $faker->text(30),
'line' => $faker->text(30),
'column' => $faker->text(30),
'object' => $faker->text(30),
'user_agent' => $faker->text(30),
'error_code' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'referer' => $faker->text(30),
'user_agent' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),
'message' => $faker->text(30),
'line' => $faker->text(30),
'column' => $faker->text(30),
'object' => $faker->text(30),
'user_agent' => $faker->text(30),
'error_code' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'referer' => $faker->text(30),
'user_agent' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),
'message' => $faker->text(30),
'line' => $faker->text(30),
'column' => $faker->text(30),
'object' => $faker->text(30),
'user_agent' => $faker->text(30),
'error_code' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'referer' => $faker->text(30),
'user_agent' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Site_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'creator_user_id' => $faker->numberBetween(),
'host' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),
'message' => $faker->text(30),
'line' => $faker->text(30),
'column' => $faker->text(30),
'object' => $faker->text(30),
'user_agent' => $faker->text(30),
'error_code' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'referer' => $faker->text(30),
'user_agent' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Site_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'creator_user_id' => $faker->numberBetween(),
'host' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Log_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'message' => $faker->text(30),
'type' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Error_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'_id' => $faker->text(30),
'class_name' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),
'message' => $faker->text(30),
'line' => $faker->text(30),
'column' => $faker->text(30),
'object' => $faker->text(30),
'user_agent' => $faker->text(30),
'error_code' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Network_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'duration' => $faker->text(30),
'url' => $faker->text(30),
'referer' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Loadtime_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'unload_event_start' => $faker->text(30),
'dom_content_loaded' => $faker->text(30),
'atf' => $faker->text(30),
'window_loaded' => $faker->text(30),
'referer' => $faker->text(30),
'user_agent' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Site_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'creator_user_id' => $faker->numberBetween(),
'host' => $faker->text(30),

    ];
});

$factory->define(App\Models\Creator_Log_Model::class, function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime(),
'updated_at' => $faker->dateTime(),
'message' => $faker->text(30),
'type' => $faker->text(30),
'identifying' => $faker->text(30),

    ];
});

