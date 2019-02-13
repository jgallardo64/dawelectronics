<?php

use Illuminate\Database\Seeder;
use App\ProviderOrder;
class ProviderOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   private $providerOrdersArray = array(
        array(
            "id" => 1,
            "provider_id" => 1,
            "date" => "2010/2/11"
        ),
        array(
            "id" => 2,
            "provider_id" => 2,
            "date" => "2010/4/6"
        ),
        array(
            "id" => 3,
            "provider_id" => 3,
            "date" => "2010/5/2"
        ),
        array(
            "id" => 4,
            "provider_id" => 4,
            "date" => "2010/6/14"
        ),
        array(
            "id" => 5,
            "provider_id" => 5,
            "date" => "2010/6/26"
        ),
        array(
            "id" => 6,
            "provider_id" => 6,
            "date" => "2010/7/7"
        ),
        array(
            "id" => 7,
            "provider_id" => 7,
            "date" => "2010/7/17"
        ),
        array(
            "id" => 8,
            "provider_id" => 8,
            "date" => "2010/7/18"
        ),
        array(
            "id" => 9,
            "provider_id" => 9,
            "date" => "2010/10/4"
        ),
        array(
            "id" => 10,
            "provider_id" => 10,
            "date" => "2010/10/21"
        ),
        array(
            "id" => 11,
            "provider_id" => 11,
            "date" => "2010/11/29"
        ),
        array(
            "id" => 12,
            "provider_id" => 12,
            "date" => "2010/12/9"
        ),
        array(
            "id" => 13,
            "provider_id" => 13,
            "date" => "2010/12/18"
        ),
        array(
            "id" => 14,
            "provider_id" => 14,
            "date" => "2011/1/1"
        ),
        array(
            "id" => 15,
            "provider_id" => 15,
            "date" => "2011/6/9"
        ),
        array(
            "id" => 16,
            "provider_id" => 16,
            "date" => "2011/6/27"
        ),
        array(
            "id" => 17,
            "provider_id" => 17,
            "date" => "2011/8/27"
        ),
        array(
            "id" => 18,
            "provider_id" => 18,
            "date" => "2011/9/15"
        ),
        array(
            "id" => 19,
            "provider_id" => 19,
            "date" => "2011/9/24"
        ),
        array(
            "id" => 20,
            "provider_id" => 20,
            "date" => "2011/9/25"
        ),
        array(
            "id" => 21,
            "provider_id" => 1,
            "date" => "2011/10/20"
        ),
        array(
            "id" => 22,
            "provider_id" => 2,
            "date" => "2011/11/6"
        ),
        array(
            "id" => 23,
            "provider_id" => 3,
            "date" => "2011/11/25"
        ),
        array(
            "id" => 24,
            "provider_id" => 4,
            "date" => "2011/12/24"
        ),
        array(
            "id" => 25,
            "provider_id" => 5,
            "date" => "2012/2/26"
        ),
        array(
            "id" => 26,
            "provider_id" => 6,
            "date" => "2012/3/3"
        ),
        array(
            "id" => 27,
            "provider_id" => 7,
            "date" => "2012/3/7"
        ),
        array(
            "id" => 28,
            "provider_id" => 8,
            "date" => "2012/3/19"
        ),
        array(
            "id" => 29,
            "provider_id" => 9,
            "date" => "2012/6/3"
        ),
        array(
            "id" => 30,
            "provider_id" => 10,
            "date" => "2012/11/26"
        ),
        array(
            "id" => 31,
            "provider_id" => 11,
            "date" => "2013/1/31"
        ),
        array(
            "id" => 32,
            "provider_id" => 12,
            "date" => "2013/2/2"
        ),
        array(
            "id" => 33,
            "provider_id" => 13,
            "date" => "2013/2/4"
        ),
        array(
            "id" => 34,
            "provider_id" => 14,
            "date" => "2013/2/16"
        ),
        array(
            "id" => 35,
            "provider_id" => 15,
            "date" => "2013/4/5"
        ),
        array(
            "id" => 36,
            "provider_id" => 16,
            "date" => "2013/4/7"
        ),
        array(
            "id" => 37,
            "provider_id" => 17,
            "date" => "2013/4/11"
        ),
        array(
            "id" => 38,
            "provider_id" => 18,
            "date" => "2013/5/28"
        ),
        array(
            "id" => 39,
            "provider_id" => 19,
            "date" => "2013/6/16"
        ),
        array(
            "id" => 40,
            "provider_id" => 20,
            "date" => "2013/12/15"
        ),
        array(
            "id" => 41,
            "provider_id" => 1,
            "date" => "2014/2/8"
        ),
        array(
            "id" => 42,
            "provider_id" => 2,
            "date" => "2014/4/6"
        ),
        array(
            "id" => 43,
            "provider_id" => 3,
            "date" => "2014/4/26"
        ),
        array(
            "id" => 44,
            "provider_id" => 4,
            "date" => "2014/6/4"
        ),
        array(
            "id" => 45,
            "provider_id" => 5,
            "date" => "2014/7/1"
        ),
        array(
            "id" => 46,
            "provider_id" => 6,
            "date" => "2014/8/2"
        ),
        array(
            "id" => 47,
            "provider_id" => 7,
            "date" => "2014/8/18"
        ),
        array(
            "id" => 48,
            "provider_id" => 8,
            "date" => "2014/9/22"
        ),
        array(
            "id" => 49,
            "provider_id" => 9,
            "date" => "2014/10/7"
        ),
        array(
            "id" => 50,
            "provider_id" => 10,
            "date" => "2014/10/16"
        ),
        array(
            "id" => 51,
            "provider_id" => 11,
            "date" => "2014/10/23"
        ),
        array(
            "id" => 52,
            "provider_id" => 12,
            "date" => "2014/10/25"
        ),
        array(
            "id" => 53,
            "provider_id" => 13,
            "date" => "2015/2/26"
        ),
        array(
            "id" => 54,
            "provider_id" => 14,
            "date" => "2015/3/13"
        ),
        array(
            "id" => 55,
            "provider_id" => 15,
            "date" => "2015/5/18"
        ),
        array(
            "id" => 56,
            "provider_id" => 16,
            "date" => "2015/7/4"
        ),
        array(
            "id" => 57,
            "provider_id" => 17,
            "date" => "2015/8/5"
        ),
        array(
            "id" => 58,
            "provider_id" => 18,
            "date" => "2015/8/29"
        ),
        array(
            "id" => 59,
            "provider_id" => 19,
            "date" => "2015/9/13"
        ),
        array(
            "id" => 60,
            "provider_id" => 20,
            "date" => "2015/11/27"
        ),
        array(
            "id" => 61,
            "provider_id" => 1,
            "date" => "2015/11/27"
        ),
        array(
            "id" => 62,
            "provider_id" => 2,
            "date" => "2016/4/12"
        ),
        array(
            "id" => 63,
            "provider_id" => 3,
            "date" => "2016/4/19"
        ),
        array(
            "id" => 64,
            "provider_id" => 4,
            "date" => "2016/4/23"
        ),
        array(
            "id" => 65,
            "provider_id" => 5,
            "date" => "2016/6/8"
        ),
        array(
            "id" => 66,
            "provider_id" => 6,
            "date" => "2016/6/9"
        ),
        array(
            "id" => 67,
            "provider_id" => 7,
            "date" => "2016/6/17"
        ),
        array(
            "id" => 68,
            "provider_id" => 8,
            "date" => "2016/7/3"
        ),
        array(
            "id" => 69,
            "provider_id" => 9,
            "date" => "2016/7/19"
        ),
        array(
            "id" => 70,
            "provider_id" => 10,
            "date" => "2016/8/13"
        ),
        array(
            "id" => 71,
            "provider_id" => 11,
            "date" => "2016/9/3"
        ),
        array(
            "id" => 72,
            "provider_id" => 12,
            "date" => "2016/10/17"
        ),
        array(
            "id" => 73,
            "provider_id" => 13,
            "date" => "2016/10/23"
        ),
        array(
            "id" => 74,
            "provider_id" => 14,
            "date" => "2016/12/21"
        ),
        array(
            "id" => 75,
            "provider_id" => 15,
            "date" => "2016/12/23"
        ),
        array(
            "id" => 76,
            "provider_id" => 16,
            "date" => "2016/12/25"
        ),
        array(
            "id" => 77,
            "provider_id" => 17,
            "date" => "2017/2/18"
        ),
        array(
            "id" => 78,
            "provider_id" => 18,
            "date" => "2017/3/15"
        ),
        array(
            "id" => 79,
            "provider_id" => 19,
            "date" => "2017/4/12"
        ),
        array(
            "id" => 80,
            "provider_id" => 20,
            "date" => "2017/4/29"
        ),
        array(
            "id" => 81,
            "provider_id" => 1,
            "date" => "2017/6/14"
        ),
        array(
            "id" => 82,
            "provider_id" => 2,
            "date" => "2017/7/12"
        ),
        array(
            "id" => 83,
            "provider_id" => 3,
            "date" => "2017/7/27"
        ),
        array(
            "id" => 84,
            "provider_id" => 4,
            "date" => "2017/8/18"
        ),
        array(
            "id" => 85,
            "provider_id" => 5,
            "date" => "2017/8/21"
        ),
        array(
            "id" => 86,
            "provider_id" => 6,
            "date" => "2017/8/29"
        ),
        array(
            "id" => 87,
            "provider_id" => 7,
            "date" => "2017/9/21"
        ),
        array(
            "id" => 88,
            "provider_id" => 8,
            "date" => "2017/9/27"
        ),
        array(
            "id" => 89,
            "provider_id" => 9,
            "date" => "2017/10/15"
        ),
        array(
            "id" => 90,
            "provider_id" => 10,
            "date" => "2017/11/4"
        ),
        array(
            "id" => 91,
            "provider_id" => 11,
            "date" => "2017/11/9"
        ),
        array(
            "id" => 92,
            "provider_id" => 12,
            "date" => "2017/11/12"
        ),
        array(
            "id" => 93,
            "provider_id" => 13,
            "date" => "2017/11/24"
        ),
        array(
            "id" => 94,
            "provider_id" => 14,
            "date" => "2017/11/27"
        ),
        array(
            "id" => 95,
            "provider_id" => 15,
            "date" => "2017/12/19"
        ),
        array(
            "id" => 96,
            "provider_id" => 16,
            "date" => "2018/3/15"
        ),
        array(
            "id" => 97,
            "provider_id" => 17,
            "date" => "2018/6/27"
        ),
        array(
            "id" => 98,
            "provider_id" => 18,
            "date" => "2018/7/21"
        ),
        array(
            "id" => 99,
            "provider_id" => 19,
            "date" => "2018/7/22"
        ),
        array(
            "id" => 100,
            "provider_id" => 20,
            "date" => "2018/8/30"
        )
    );   

    public function run() {
        Schema::disableForeignKeyConstraints();
        DB::table('provider_orders')->truncate();

        foreach ($this->providerOrdersArray as $provOrd) {
            $pro = new ProviderOrder();
            $pro->provider_id = $provOrd['provider_id'];
            $pro->date = $provOrd['date'];
            $pro->save();
        }
        Schema::enableForeignKeyConstraints();
    }
}