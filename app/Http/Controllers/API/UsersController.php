<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersController extends Controller {

    public $successStatus = 200;

    public function testQuery() {
        $schedule = Schedule::all();

        if (count($schedule) > 0) {
            return response()->json($schedule, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no schedule in the database'], 404);
        }
    }
}
?>