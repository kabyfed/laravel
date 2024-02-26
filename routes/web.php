<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Задание 9.1
Route::get('/user/{id?}', function ($id = 0) {
    return "Передан параметр $id";
});

//Задание 9.2
Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    $date = $year . '-' . $month . '-' . $day;
    echo "Дата: " . $date . '<br>';

    $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    return "День недели: " . $days[date("w", strtotime($date))];
})->where([
    'year' => '(19|20)\d{2}$',
    'month' => '^(0?[1-9]|1[012])$',
    'day' => '^[0-9]*$'
]);

//Задание 9.3
Route::get('names/{name}', function ($name) {
    $users = [
        'user1' => 'city1',
        'user2' => 'city2',
        'user3' => 'city3',
        'user4' => 'city4',
        'user5' => 'city5'
    ];
    if (array_key_exists($name, $users)) {
        return $users[$name];
    } else {
        return 'Вы ввели неверное имя';
    }
});

//Задание 9.4
Route::get('/pages/show/{id}', [PageController::class, 'showOne']);
Route::get('/page/all', [PageController::class, 'showAll']);
Route::get('/method/{title}/{content}', [MyController::class, 'method']);

//Задание 13.1
Route::get('/task13/2', [EmployeeController::class, 'show2']);
Route::get('/task13/3', [EmployeeController::class, 'show3']);
Route::get('/task13/4', [EmployeeController::class, 'show4']);
Route::get('/task13/5', [EmployeeController::class, 'show5']);
Route::get('/task13/6', [EmployeeController::class, 'show6']);
Route::get('/task13/7', [EmployeeController::class, 'show7']);
Route::get('/task13/8', [EmployeeController::class, 'show8']);
Route::get('/task13/9', [EmployeeController::class, 'show9']);
Route::get('/task13/10', [EmployeeController::class, 'show10']);

//Задание 13.2
Route::get('/task13_2/2', [UserController::class, 'addOneUser']);
Route::get('/task13_2/3', [UserController::class, 'addThreeUsers']);
Route::get('/task13_2/4', [UserController::class, 'changeUserInfo']);
Route::get('/task13_2/5', [UserController::class, 'deleteUser']);
