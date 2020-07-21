<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("notifications")->truncate();

        $notifications = [
            [
                "name" => "notif1",
                "date" => "2020-07-20"
            ],
            [
                "name" => "notif2",
                "date" => "2020-07-22"
            ]
        ];

        foreach($notifications as $notification) {
            \App\Notification::create($notification);
        }
    }
}
