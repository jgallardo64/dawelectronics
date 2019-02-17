<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder {

    private $arrayOrders = array(
        array(
            "id" => 1,
            "user_id" => 5,
            "paid" => 0,
            "total" => 980, 00,
            "created_at" => "2019\/2\/17 14:52:20",
            "updated_at" => "2019\/2\/17 14:52:20"
        ),
        array(
            "id" => 2,
            "user_id" => 5,
            "paid" => 0,
            "total" => 1550, 00,
            "created_at" => "2019\/2\/17 14:52:28",
            "updated_at" => "2019\/2\/17 14:52:28"
        ),
        array(
            "id" => 3,
            "user_id" => 5,
            "paid" => 0,
            "total" => 345, 00,
            "created_at" => "2019\/2\/17 14:52:35",
            "updated_at" => "2019\/2\/17 14:52:35"
        ),
        array(
            "id" => 4,
            "user_id" => 5,
            "paid" => 0,
            "total" => 260, 00,
            "created_at" => "2019\/2\/17 14:52:43",
            "updated_at" => "2019\/2\/17 14:52:43"
        ),
        array(
            "id" => 5,
            "user_id" => 5,
            "paid" => 0,
            "total" => 1600, 00,
            "created_at" => "2019\/2\/17 14:52:55",
            "updated_at" => "2019\/2\/17 14:52:56"
        ),
        array(
            "id" => 6,
            "user_id" => 5,
            "paid" => 0,
            "total" => 15, 00,
            "created_at" => "2019\/2\/17 14:53:11",
            "updated_at" => "2019\/2\/17 14:53:11"
        ),
        array(
            "id" => 7,
            "user_id" => 5,
            "paid" => 0,
            "total" => 33, 00,
            "created_at" => "2019\/2\/17 14:53:23",
            "updated_at" => "2019\/2\/17 14:53:23"
        ),
        array(
            "id" => 8,
            "user_id" => 3,
            "paid" => 0,
            "total" => 1260, 00,
            "created_at" => "2019\/2\/17 14:53:40",
            "updated_at" => "2019\/2\/17 14:53:40"
        ),
        array(
            "id" => 9,
            "user_id" => 3,
            "paid" => 0,
            "total" => 199, 00,
            "created_at" => "2019\/2\/17 14:53:48",
            "updated_at" => "2019\/2\/17 14:53:48"
        ),
        array(
            "id" => 10,
            "user_id" => 3,
            "paid" => 0,
            "total" => 1520, 00,
            "created_at" => "2019\/2\/17 14:53:55",
            "updated_at" => "2019\/2\/17 14:53:55"
        ),
        array(
            "id" => 11,
            "user_id" => 3,
            "paid" => 0,
            "total" => 1300, 00,
            "created_at" => "2019\/2\/17 14:54:07",
            "updated_at" => "2019\/2\/17 14:54:07"
        ),
        array(
            "id" => 12,
            "user_id" => 3,
            "paid" => 0,
            "total" => 440, 00,
            "created_at" => "2019\/2\/17 14:54:17",
            "updated_at" => "2019\/2\/17 14:54:17"
        ),
        array(
            "id" => 13,
            "user_id" => 3,
            "paid" => 0,
            "total" => 369, 00,
            "created_at" => "2019\/2\/17 14:54:32",
            "updated_at" => "2019\/2\/17 14:54:32"
        ),
        array(
            "id" => 14,
            "user_id" => 6,
            "paid" => 0,
            "total" => 930, 00,
            "created_at" => "2019\/2\/17 14:55:08",
            "updated_at" => "2019\/2\/17 14:55:08"
        ),
        array(
            "id" => 15,
            "user_id" => 6,
            "paid" => 0,
            "total" => 3930, 00,
            "created_at" => "2019\/2\/17 14:55:18",
            "updated_at" => "2019\/2\/17 14:55:18"
        ),
        array(
            "id" => 16,
            "user_id" => 6,
            "paid" => 0,
            "total" => 195, 00,
            "created_at" => "2019\/2\/17 14:55:28",
            "updated_at" => "2019\/2\/17 14:55:29"
        ),
        array(
            "id" => 17,
            "user_id" => 6,
            "paid" => 0,
            "total" => 1200, 00,
            "created_at" => "2019\/2\/17 14:55:36",
            "updated_at" => "2019\/2\/17 14:55:36"
        ),
        array(
            "id" => 18,
            "user_id" => 6,
            "paid" => 0,
            "total" => 1550, 00,
            "created_at" => "2019\/2\/17 14:55:44",
            "updated_at" => "2019\/2\/17 14:55:44"
        ),
        array(
            "id" => 19,
            "user_id" => 6,
            "paid" => 0,
            "total" => 1750, 00,
            "created_at" => "2019\/2\/17 14:55:53",
            "updated_at" => "2019\/2\/17 14:55:53"
        ),
        array(
            "id" => 20,
            "user_id" => 6,
            "paid" => 0,
            "total" => 490, 00,
            "created_at" => "2019\/2\/17 14:56:04",
            "updated_at" => "2019\/2\/17 14:56:04"
        ),
        array(
            "id" => 21,
            "user_id" => 4,
            "paid" => 0,
            "total" => 1200, 00,
            "created_at" => "2019\/2\/17 14:56:24",
            "updated_at" => "2019\/2\/17 14:56:24"
        ),
        array(
            "id" => 22,
            "user_id" => 4,
            "paid" => 0,
            "total" => 1520, 00,
            "created_at" => "2019\/2\/17 14:56:32",
            "updated_at" => "2019\/2\/17 14:56:32"
        ),
        array(
            "id" => 23,
            "user_id" => 4,
            "paid" => 0,
            "total" => 1260, 00,
            "created_at" => "2019\/2\/17 14:56:39",
            "updated_at" => "2019\/2\/17 14:56:39"
        ),
        array(
            "id" => 24,
            "user_id" => 4,
            "paid" => 0,
            "total" => 400, 00,
            "created_at" => "2019\/2\/17 14:56:47",
            "updated_at" => "2019\/2\/17 14:56:47"
        ),
        array(
            "id" => 25,
            "user_id" => 4,
            "paid" => 0,
            "total" => 195, 00,
            "created_at" => "2019\/2\/17 14:56:57",
            "updated_at" => "2019\/2\/17 14:56:57"
        ),
        array(
            "id" => 26,
            "user_id" => 4,
            "paid" => 0,
            "total" => 3930, 00,
            "created_at" => "2019\/2\/17 14:57:08",
            "updated_at" => "2019\/2\/17 14:57:08"
        ),
        array(
            "id" => 27,
            "user_id" => 4,
            "paid" => 0,
            "total" => 12410, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        )
    );

    public function run() {
        Schema::disableForeignKeyConstraints();
        DB::table('orders')->truncate();
        foreach ($this->arrayOrders as $orders) {
            $ol = new Order();
            $ol->user_id = $orders['user_id'];
            $ol->total = $orders['total'];
            $ol->save();
        }
        Schema::enableForeignKeyConstraints();
    }

}
