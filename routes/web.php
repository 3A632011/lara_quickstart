<?php

use App\Task;
use Illuminate\Http\Request;
//顯示所有任務的清單
Route::get('/', function () {
    //
});
// 增加新的任務
Route::post('/task', function (Request $request) {
    //
});
// 刪除任務
Route::delete('/task/{task}', function (Task $task) {
    //
});
