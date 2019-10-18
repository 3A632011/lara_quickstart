<?php

use App\Task;
use Illuminate\Http\Request;
//顯示任務清單
Route::get('/', function () {
    return view('tasks');
});

// 增加新的任務
Route::post('/task', function (Request $request) {
    //
});
// 刪除任務
Route::delete('/task/{task}', function (Task $task) {
    //
});
