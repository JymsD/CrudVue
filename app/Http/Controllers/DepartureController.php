<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departure;

class DepartureController extends Controller
{
    public function create(Request $request)
    {
    	$departure = new Departure();
    	$departure->title = $request->title;
    	$departure->save();
    }

    public function update(Request $request) {
      $departure = new Departure::find($request->id);
      $departure->title = $request->title;
      $departure->save();
    }

    public function delete($id) {
      $departure = Departure::find($id);
      $departure->positions()->delete();
      $departure->delete();

    }
}
