<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use App\Http\Requests\NotificationRequest;

class NotificationController extends Controller {
    public function store(NotificationRequest $request) {
        $notification = new Notification();
        // eval(\Psy\sh());
        $notification->date = $request->date;
        $notification->name = $request->name;
        $notification->save();

        return redirect("/home");
    }
}
