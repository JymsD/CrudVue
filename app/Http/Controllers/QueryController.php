<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departure;
use App\Position;
use App\Employee;

class QueryController extends Controller
{
    public function allQuery(Request $request) {
      if (!$request->ajax()) {
        return redirect('/');
      } else {
        return [
          'departures' => Departure::with('positions')->get(),
          'positions' => Position::with('departure')->get(),
          'employees' => Employee::with('position')->get()
        ];
      }
    }
}
