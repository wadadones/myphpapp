<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Notification;

class HomeController extends Controller
{
    public function home() {
        $month = 7;
        $dates = $this->getCalendarDates(2020, $month);
        $notification = new Notification();
        return view('home', ['dates' => $dates, 'currentMonth' => $month, 'notification' => $notification]);
    }

    private function getCalendarDates($year, $month) {
        $date = new Carbon("{$year}-{$month}-01");
        $addDay = ($date->copy()->endOfMonth()->isSunday()) ? 7 : 0;
        $date->subDay($date->dayOfWeek);

        $count = 31 + $addDay + $date->dayOfWeek;
        $count = ceil($count / 7) * 7;
        $dates = [];
        
        for ($i = 0; $i < $count; $i++, $date->addDay()) {
            // copyしないと全部同じオブジェクトを入れてしまうことになる
            $dates[] = $date->copy();
        }
        return $dates;
    }
}
