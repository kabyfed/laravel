<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class EmployeeController extends Controller
{
    //Задание 13.1 пункт 2
    public function show2()
    {
        $employee = DB::table('employees')
            ->orderBy('salary')
            ->get();
        return view('show', ['employee' => $employee]);
    }

    //Задание 13.1 пункт 3
    public function show3()
    {
        $employee = DB::table('employees')
            ->where('salary', '=', 400)
            ->orwhere('id', '>=', 4)
            ->get();
        return view('show', ['employee' => $employee]);
    }
    //Задание 13.1 пункт 4
    public function show4()
    {
        $employee = DB::table('employees')
            ->find(3);
        dump($employee);
    }
    //Задание 13.1 пункт 5
    public function show5()
    {
        $employee = DB::table('employees')
            ->select('name')
            ->find(3);
        dump($employee);
    }
    //Задание 13.1 пункт 6
    public function show6()
    {
        $employees = DB::table('employees')
            ->whereBetween('salary', [400, 800])
            ->orWhere('position', 'Программист')
            ->get();
        return view('show', ['employee' => $employees]);
    }
    //Задание 13.1 пункт 7
    public function show7()
    {
        $salarys = DB::table('employees')->pluck('salary')->sum();
        echo "Суммарная заработная плата всех работников = " . $salarys;
    }
    // // Задание 13.1 пункт 8
    public function show8()
    {
        $positionSalarys = DB::table('employees')
            ->select('position', DB::raw('SUM(salary) as salary'))
            ->groupBy('position')
            ->get();
        foreach ($positionSalarys as $totalSalary) {
            echo "Должность: " . $totalSalary->position . ", Суммарная зарплата: " . $totalSalary->salary . "<br>";
        }
    }
    // Задание 13.1 пункт 9
    public function show9()
    {
        $employee = DB::table('employees')
            ->whereDay('birthday', '=', 25)
            ->get();
        return view('show', ['employee' => $employee]);
    }
    // Задание 13.1 пункт 10
    public function show10()
    {
        $employee = DB::table('employees')
            ->whereYear('birthday', '=', 1990)
            ->get();
        return view('show', ['employee' => $employee]);
    }
}
