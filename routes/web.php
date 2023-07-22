<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/time-zone', function (\Illuminate\Http\Request $request) {
    if (isset($request->location)) {
        $location = $request->location;
        $todayDate = Carbon::now($location)->format('Y-m-d h:i:s');
        echo 'Múi giờ bạn chọn ' . $location . ' hiện tại đang là: ' . $todayDate;
    }
});
