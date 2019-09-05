<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\StoreEmployee;
use App\Http\Request\UpdateEmployee;
use Carbon\Carbon;
use App\Employee;

class EmployeeController extends Controller
{
    public function create(StoreEmployee $request) {
      $today = Carbon::now();
      $unknow = Carbon::createFromFormat('d-m-Y', $request->birthday);

      if ($unknow->diffInYears($today) < 18) {
        return [
          'date' => ['El empleado tiene que ser mayor de 18 años']
        ];
      } else {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->birthday = $unknow;
        $employee->email = $request->email;
        $employee->position_id = $request->position;
        $employee->save();
      }
    }

    public function update(UpdateEmployee $request) {
      $today = Carbon::now();
      $unknow = Carbon::createFromFormat('d-m-Y', $request->birthday);

      if ($unknow->diffInYears($today) < 18) {
        return [
          'date' => ['El empleado tiene que ser mayor de 18 años']
        ];
      } else {
        $employee = Employee::find($request->id);
        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->birthday = $unknow;
        $employee->email = $request->email;
        $employee->position_id = $request->position;
        $employee->save();
      }
    }

    public function delete($id) {
      $employee = Employee::find($id);
      $employee->delete();
    }
}
