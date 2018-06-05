<?php
Route::get('time','\Masoud\Time\Controllers\TimeController@showtime');
Route::get('timestamp','\Masoud\Time\Controllers\TimeController@showtimestamp');
Route::get('test',function (){
    //1
//    $timer= new \Masoud\Time\Facade\Timer();
//    return $timer->aQuarterago();
    //2
    //return app('MyTimer')->onehourago();
    //3
    //return MyFacadeTimer::onehourago();
});