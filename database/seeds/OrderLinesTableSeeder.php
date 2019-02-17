<?php

use Illuminate\Database\Seeder;
use App\OrderLine;

class OrderLinesTableSeeder extends Seeder {

    private $arrayOrderLines = array(
        array(
            "id" => 1,
            "order_id" => 1,
            "product_id" => 1,
            "price" => 280, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:52:20",
            "updated_at" => "2019\/2\/17 14:52:20"
        ),
        array(
            "id" => 2,
            "order_id" => 1,
            "product_id" => 5,
            "price" => 700, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:52:20",
            "updated_at" => "2019\/2\/17 14:52:20"
        ),
        array(
            "id" => 3,
            "order_id" => 2,
            "product_id" => 23,
            "price" => 1260, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:52:28",
            "updated_at" => "2019\/2\/17 14:52:28"
        ),
        array(
            "id" => 4,
            "order_id" => 2,
            "product_id" => 25,
            "price" => 30, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:52:28",
            "updated_at" => "2019\/2\/17 14:52:28"
        ),
        array(
            "id" => 5,
            "order_id" => 2,
            "product_id" => 24,
            "price" => 260, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:52:28",
            "updated_at" => "2019\/2\/17 14:52:28"
        ),
        array(
            "id" => 6,
            "order_id" => 3,
            "product_id" => 27,
            "price" => 345, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:52:35",
            "updated_at" => "2019\/2\/17 14:52:35"
        ),
        array(
            "id" => 7,
            "order_id" => 4,
            "product_id" => 24,
            "price" => 260, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:52:43",
            "updated_at" => "2019\/2\/17 14:52:43"
        ),
        array(
            "id" => 8,
            "order_id" => 5,
            "product_id" => 14,
            "price" => 300, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:52:56",
            "updated_at" => "2019\/2\/17 14:52:56"
        ),
        array(
            "id" => 9,
            "order_id" => 5,
            "product_id" => 15,
            "price" => 1000, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:52:56",
            "updated_at" => "2019\/2\/17 14:52:56"
        ),
        array(
            "id" => 10,
            "order_id" => 5,
            "product_id" => 18,
            "price" => 300, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:52:56",
            "updated_at" => "2019\/2\/17 14:52:56"
        ),
        array(
            "id" => 11,
            "order_id" => 6,
            "product_id" => 30,
            "price" => 15, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:53:11",
            "updated_at" => "2019\/2\/17 14:53:11"
        ),
        array(
            "id" => 12,
            "order_id" => 7,
            "product_id" => 34,
            "price" => 33, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:53:23",
            "updated_at" => "2019\/2\/17 14:53:23"
        ),
        array(
            "id" => 13,
            "order_id" => 8,
            "product_id" => 23,
            "price" => 1260, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:53:40",
            "updated_at" => "2019\/2\/17 14:53:40"
        ),
        array(
            "id" => 14,
            "order_id" => 9,
            "product_id" => 33,
            "price" => 20, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:53:48",
            "updated_at" => "2019\/2\/17 14:53:48"
        ),
        array(
            "id" => 15,
            "order_id" => 9,
            "product_id" => 32,
            "price" => 179, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:53:48",
            "updated_at" => "2019\/2\/17 14:53:48"
        ),
        array(
            "id" => 16,
            "order_id" => 10,
            "product_id" => 24,
            "price" => 260, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:53:55",
            "updated_at" => "2019\/2\/17 14:53:55"
        ),
        array(
            "id" => 17,
            "order_id" => 10,
            "product_id" => 23,
            "price" => 1260, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:53:55",
            "updated_at" => "2019\/2\/17 14:53:55"
        ),
        array(
            "id" => 18,
            "order_id" => 11,
            "product_id" => 15,
            "price" => 1000, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:54:07",
            "updated_at" => "2019\/2\/17 14:54:07"
        ),
        array(
            "id" => 19,
            "order_id" => 11,
            "product_id" => 18,
            "price" => 300, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:54:07",
            "updated_at" => "2019\/2\/17 14:54:07"
        ),
        array(
            "id" => 20,
            "order_id" => 12,
            "product_id" => 20,
            "price" => 440, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:54:17",
            "updated_at" => "2019\/2\/17 14:54:17"
        ),
        array(
            "id" => 21,
            "order_id" => 13,
            "product_id" => 17,
            "price" => 190, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:54:32",
            "updated_at" => "2019\/2\/17 14:54:32"
        ),
        array(
            "id" => 22,
            "order_id" => 13,
            "product_id" => 32,
            "price" => 179, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:54:32",
            "updated_at" => "2019\/2\/17 14:54:32"
        ),
        array(
            "id" => 23,
            "order_id" => 14,
            "product_id" => 2,
            "price" => 430, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:08",
            "updated_at" => "2019\/2\/17 14:55:08"
        ),
        array(
            "id" => 24,
            "order_id" => 14,
            "product_id" => 3,
            "price" => 500, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:08",
            "updated_at" => "2019\/2\/17 14:55:08"
        ),
        array(
            "id" => 25,
            "order_id" => 15,
            "product_id" => 7,
            "price" => 2960, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:18",
            "updated_at" => "2019\/2\/17 14:55:18"
        ),
        array(
            "id" => 26,
            "order_id" => 15,
            "product_id" => 6,
            "price" => 970, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:18",
            "updated_at" => "2019\/2\/17 14:55:18"
        ),
        array(
            "id" => 27,
            "order_id" => 16,
            "product_id" => 32,
            "price" => 179, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:29",
            "updated_at" => "2019\/2\/17 14:55:29"
        ),
        array(
            "id" => 28,
            "order_id" => 16,
            "product_id" => 31,
            "price" => 16, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:29",
            "updated_at" => "2019\/2\/17 14:55:29"
        ),
        array(
            "id" => 29,
            "order_id" => 17,
            "product_id" => 29,
            "price" => 620, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:36",
            "updated_at" => "2019\/2\/17 14:55:36"
        ),
        array(
            "id" => 30,
            "order_id" => 17,
            "product_id" => 28,
            "price" => 580, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:36",
            "updated_at" => "2019\/2\/17 14:55:36"
        ),
        array(
            "id" => 31,
            "order_id" => 18,
            "product_id" => 23,
            "price" => 1260, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:44",
            "updated_at" => "2019\/2\/17 14:55:44"
        ),
        array(
            "id" => 32,
            "order_id" => 18,
            "product_id" => 24,
            "price" => 260, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:44",
            "updated_at" => "2019\/2\/17 14:55:44"
        ),
        array(
            "id" => 33,
            "order_id" => 18,
            "product_id" => 25,
            "price" => 30, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:44",
            "updated_at" => "2019\/2\/17 14:55:44"
        ),
        array(
            "id" => 34,
            "order_id" => 19,
            "product_id" => 10,
            "price" => 700, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:53",
            "updated_at" => "2019\/2\/17 14:55:53"
        ),
        array(
            "id" => 35,
            "order_id" => 19,
            "product_id" => 11,
            "price" => 500, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:53",
            "updated_at" => "2019\/2\/17 14:55:53"
        ),
        array(
            "id" => 36,
            "order_id" => 19,
            "product_id" => 12,
            "price" => 550, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:55:53",
            "updated_at" => "2019\/2\/17 14:55:53"
        ),
        array(
            "id" => 37,
            "order_id" => 20,
            "product_id" => 17,
            "price" => 190, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:56:04",
            "updated_at" => "2019\/2\/17 14:56:04"
        ),
        array(
            "id" => 38,
            "order_id" => 20,
            "product_id" => 18,
            "price" => 300, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:56:04",
            "updated_at" => "2019\/2\/17 14:56:04"
        ),
        array(
            "id" => 39,
            "order_id" => 21,
            "product_id" => 28,
            "price" => 580, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:56:24",
            "updated_at" => "2019\/2\/17 14:56:24"
        ),
        array(
            "id" => 40,
            "order_id" => 21,
            "product_id" => 29,
            "price" => 620, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:56:24",
            "updated_at" => "2019\/2\/17 14:56:24"
        ),
        array(
            "id" => 41,
            "order_id" => 22,
            "product_id" => 24,
            "price" => 260, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:56:32",
            "updated_at" => "2019\/2\/17 14:56:32"
        ),
        array(
            "id" => 42,
            "order_id" => 22,
            "product_id" => 23,
            "price" => 1260, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:56:32",
            "updated_at" => "2019\/2\/17 14:56:32"
        ),
        array(
            "id" => 43,
            "order_id" => 23,
            "product_id" => 23,
            "price" => 1260, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:56:39",
            "updated_at" => "2019\/2\/17 14:56:39"
        ),
        array(
            "id" => 44,
            "order_id" => 24,
            "product_id" => 26,
            "price" => 55, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:56:47",
            "updated_at" => "2019\/2\/17 14:56:47"
        ),
        array(
            "id" => 45,
            "order_id" => 24,
            "product_id" => 27,
            "price" => 345, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:56:47",
            "updated_at" => "2019\/2\/17 14:56:47"
        ),
        array(
            "id" => 46,
            "order_id" => 25,
            "product_id" => 32,
            "price" => 179, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:56:57",
            "updated_at" => "2019\/2\/17 14:56:57"
        ),
        array(
            "id" => 47,
            "order_id" => 25,
            "product_id" => 31,
            "price" => 16, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:56:57",
            "updated_at" => "2019\/2\/17 14:56:57"
        ),
        array(
            "id" => 48,
            "order_id" => 26,
            "product_id" => 6,
            "price" => 970, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:08",
            "updated_at" => "2019\/2\/17 14:57:08"
        ),
        array(
            "id" => 49,
            "order_id" => 26,
            "product_id" => 7,
            "price" => 2960, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:08",
            "updated_at" => "2019\/2\/17 14:57:08"
        ),
        array(
            "id" => 50,
            "order_id" => 27,
            "product_id" => 1,
            "price" => 280, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 51,
            "order_id" => 27,
            "product_id" => 2,
            "price" => 430, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 52,
            "order_id" => 27,
            "product_id" => 3,
            "price" => 500, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 53,
            "order_id" => 27,
            "product_id" => 4,
            "price" => 700, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 54,
            "order_id" => 27,
            "product_id" => 8,
            "price" => 280, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 55,
            "order_id" => 27,
            "product_id" => 7,
            "price" => 2960, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 56,
            "order_id" => 27,
            "product_id" => 6,
            "price" => 970, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 57,
            "order_id" => 27,
            "product_id" => 5,
            "price" => 700, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 58,
            "order_id" => 27,
            "product_id" => 9,
            "price" => 350, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 59,
            "order_id" => 27,
            "product_id" => 10,
            "price" => 700, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 60,
            "order_id" => 27,
            "product_id" => 11,
            "price" => 500, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 61,
            "order_id" => 27,
            "product_id" => 12,
            "price" => 550, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 62,
            "order_id" => 27,
            "product_id" => 16,
            "price" => 1200, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 63,
            "order_id" => 27,
            "product_id" => 15,
            "price" => 1000, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 64,
            "order_id" => 27,
            "product_id" => 14,
            "price" => 300, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 65,
            "order_id" => 27,
            "product_id" => 13,
            "price" => 500, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 66,
            "order_id" => 27,
            "product_id" => 17,
            "price" => 190, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        ),
        array(
            "id" => 67,
            "order_id" => 27,
            "product_id" => 18,
            "price" => 300, 00,
            "quantity" => 1,
            "discount" => null,
            "taxApplied" => 21, 00,
            "created_at" => "2019\/2\/17 14:57:52",
            "updated_at" => "2019\/2\/17 14:57:52"
        )
    );

    public function run() {
        Schema::disableForeignKeyConstraints();
        DB::table('order_lines')->truncate();
        foreach ($this->arrayOrderLines as $order_lines) {
            $orderLine = new OrderLine();
            $orderLine->order_id = $order_lines['order_id'];
            $orderLine->product_id = $order_lines['product_id'];
            $orderLine->price = $order_lines['price'];
            $orderLine->quantity = $order_lines['quantity'];
            $orderLine->discount = $order_lines['discount'];
            $orderLine->taxApplied = $order_lines['taxApplied'];
            $orderLine->save();
        }
        Schema::enableForeignKeyConstraints();
    }

}
