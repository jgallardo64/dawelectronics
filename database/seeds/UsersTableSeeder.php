<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    private $arrayUsers = array(
        array(
            "id" => 18,
            "nif" => "10274539W",
            "name" => "admin",
            "email" => "admin@gmail.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "20",
            "addressshippingPO" => "29",
            "addressshippingcity" => "Lake Danika",
            "addressshippingregion" => "Michigan",
            "addressbilling" => "99182 Hand Extension",
            "addressbillingPO" => "9",
            "addressbillingcity" => "New Modestoside",
            "addressbillingregion" => "Alabama",
            "status" => 1,
            "admin" => 1,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 21,
            "nif" => "30905249B",
            "name" => "user",
            "email" => "user@gmail.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => null,
            "addressshippingPO" => "308",
            "addressshippingcity" => "New Maximillia",
            "addressshippingregion" => "Washington",
            "addressbilling" => "48833 Tremaine Valleys",
            "addressbillingPO" => "19571",
            "addressbillingcity" => "Uptonfort",
            "addressbillingregion" => "Alabama",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 3,
            "nif" => "16664239A",
            "name" => "juan",
            "email" => "juan@gmail.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "132.447841292",
            "addressshippingPO" => "97",
            "addressshippingcity" => "Fayview",
            "addressshippingregion" => "Vermont",
            "addressbilling" => "1204 Brooklyn Track",
            "addressbillingPO" => "17199",
            "addressbillingcity" => "O'Keefeland",
            "addressbillingregion" => "Alaska",
            "status" => 1,
            "admin" => 1,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 37,
            "nif" => "7444395P",
            "name" => "jorge",
            "email" => "jorge@gmail.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "12.0944117",
            "addressshippingPO" => "8410",
            "addressshippingcity" => "Moriahstad",
            "addressshippingregion" => "SouthCarolina",
            "addressbilling" => "1540 Piper Station Suite 696",
            "addressbillingPO" => "52702135",
            "addressbillingcity" => "South Rupert",
            "addressbillingregion" => "Arizona",
            "status" => 1,
            "admin" => 1,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 39,
            "nif" => "50900664P",
            "name" => "miguel",
            "email" => "miguel@gmail.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "33153615.807",
            "addressshippingPO" => "88647534",
            "addressshippingcity" => "Lake Norwoodview",
            "addressshippingregion" => "Oregon",
            "addressbilling" => "2073 Winston Orchard",
            "addressbillingPO" => "3222",
            "addressbillingcity" => "Daytonland",
            "addressbillingregion" => "California",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 62,
            "nif" => "75585069P",
            "name" => "german",
            "email" => "german@gmail.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "2.2510889",
            "addressshippingPO" => "29666",
            "addressshippingcity" => "West Jordy",
            "addressshippingregion" => "Alabama",
            "addressbilling" => "12783 Myrtle Inlet",
            "addressbillingPO" => "85",
            "addressbillingcity" => "Wiegandton",
            "addressbillingregion" => "California",
            "status" => 1,
            "admin" => 1,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 23,
            "nif" => "89403412C",
            "name" => "sandra",
            "email" => "sandra@gmail.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "282.78963",
            "addressshippingPO" => "400711",
            "addressshippingcity" => "Port Danikaside",
            "addressshippingregion" => "Maine",
            "addressbilling" => "205 Schuppe Ford Suite 879",
            "addressbillingPO" => "1687",
            "addressbillingcity" => "Stracketown",
            "addressbillingregion" => "Connecticut",
            "status" => 0,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 44,
            "nif" => "25361554Y",
            "name" => "DrAlfredaRueckerII",
            "email" => "nblock@ullrichwiegand.org",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "2.935458",
            "addressshippingPO" => "99877913",
            "addressshippingcity" => "Keyonville",
            "addressshippingregion" => "Missouri",
            "addressbilling" => "28646 Mallie Route",
            "addressbillingPO" => null,
            "addressbillingcity" => "Chadside",
            "addressbillingregion" => "Connecticut",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 77,
            "nif" => "36301638W",
            "name" => "EdaKoepp",
            "email" => "gorczany.lucienne@gmail.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "7434.52633896",
            "addressshippingPO" => "4903065",
            "addressshippingcity" => "North Lizziestad",
            "addressshippingregion" => "Oregon",
            "addressbilling" => "090 Gutkowski Road Apt. 328",
            "addressbillingPO" => "733986",
            "addressbillingcity" => "Eliasview",
            "addressbillingregion" => "Delaware",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 65,
            "nif" => "14134604T",
            "name" => "EloiseTorphy",
            "email" => "hintz.bobby@berge.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "450171847.1269",
            "addressshippingPO" => "21",
            "addressshippingcity" => "Zboncakfort",
            "addressshippingregion" => "Oregon",
            "addressbilling" => "23178 Rico Ramp Apt. 716",
            "addressbillingPO" => "895",
            "addressbillingcity" => "Lake Sherwood",
            "addressbillingregion" => "District of Columbia",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 100,
            "nif" => "27362655S",
            "name" => "EzequielCormier",
            "email" => "holly02@schaden.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "429511.6",
            "addressshippingPO" => "1461",
            "addressshippingcity" => "Lake Wendy",
            "addressshippingregion" => "NewYork",
            "addressbilling" => "2704 Schaden Forks Apt. 077",
            "addressbillingPO" => "48962",
            "addressbillingcity" => "New Lamontbury",
            "addressbillingregion" => "District of Columbia",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 57,
            "nif" => "66557890F",
            "name" => "CullenVolkmanIII",
            "email" => "marisa.altenwerth@gmail.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "71.6836124",
            "addressshippingPO" => "77331",
            "addressshippingcity" => "North Damien",
            "addressshippingregion" => "Texas",
            "addressbilling" => "451 Hills Extension",
            "addressbillingPO" => "8084",
            "addressbillingcity" => "Port Uriel",
            "addressbillingregion" => "Florida",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 69,
            "nif" => "13891450W",
            "name" => "ClementineNicolas",
            "email" => "bryon65@gmail.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "6.53246384",
            "addressshippingPO" => "965397",
            "addressshippingcity" => "Pamelafort",
            "addressshippingregion" => "Massachusetts",
            "addressbilling" => "1159 McDermott Road",
            "addressbillingPO" => "1",
            "addressbillingcity" => "Shainamouth",
            "addressbillingregion" => "Florida",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 79,
            "nif" => "44844935H",
            "name" => "ProfAlbinaLakinIV",
            "email" => "kertzmann.daphnee@russel.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "56.8543",
            "addressshippingPO" => "711461",
            "addressshippingcity" => "Mavisburgh",
            "addressshippingregion" => "Missouri",
            "addressbilling" => "01742 Salvador Union Apt. 743",
            "addressbillingPO" => "6",
            "addressbillingcity" => "East Jaylen",
            "addressbillingregion" => "Florida",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 95,
            "nif" => "45604532V",
            "name" => "MurphyKuphalMD",
            "email" => "oswaldo.hackett@considine.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => null,
            "addressshippingPO" => "76",
            "addressshippingcity" => "North Edd",
            "addressshippingregion" => "Hawaii",
            "addressbilling" => "9697 Gino Prairie",
            "addressbillingPO" => "437036092",
            "addressbillingcity" => "South Cobymouth",
            "addressbillingregion" => "Florida",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 49,
            "nif" => "63755082W",
            "name" => "FredyPollich",
            "email" => "carter.robbie@towne.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "4.80863021",
            "addressshippingPO" => "8",
            "addressshippingcity" => "Malindaville",
            "addressshippingregion" => "Mississippi",
            "addressbilling" => "3213 Jarret Brook",
            "addressbillingPO" => "53538",
            "addressbillingcity" => "Yostside",
            "addressbillingregion" => "Georgia",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 87,
            "nif" => "14033247G",
            "name" => "DrHeavenGislason",
            "email" => "mills.savanah@hotmail.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "2.596",
            "addressshippingPO" => "24",
            "addressshippingcity" => "South Emery",
            "addressshippingregion" => "Alaska",
            "addressbilling" => "9420 Schulist Extensions Suite 218",
            "addressbillingPO" => "880681",
            "addressbillingcity" => "Phyllischester",
            "addressbillingregion" => "Georgia",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 93,
            "nif" => "12679329G",
            "name" => "MissHollyMurphyV",
            "email" => "gdickens@fishergoyette.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "28.51743488",
            "addressshippingPO" => "786413066",
            "addressshippingcity" => "Joesphburgh",
            "addressshippingregion" => "NewHampshire",
            "addressbilling" => "60486 Hyatt View",
            "addressbillingPO" => "337095285",
            "addressbillingcity" => "Westmouth",
            "addressbillingregion" => "Georgia",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        ),
        array(
            "id" => 64,
            "nif" => "45938003B",
            "name" => "KristinaBotsfordPhD",
            "email" => "marlene.kub@gmail.com",
            "email_verified_at" => null,
            "password" => null,
            "addressshipping" => "40552096.88987",
            "addressshippingPO" => "967",
            "addressshippingcity" => "Hegmannhaven",
            "addressshippingregion" => "RhodeIsland",
            "addressbilling" => "09923 Hirthe Plaza",
            "addressbillingPO" => "149073880",
            "addressbillingcity" => "Vandervortport",
            "addressbillingregion" => "Hawaii",
            "status" => 1,
            "admin" => 0,
            "remember_token" => null,
            "created_at" => null,
            "updated_at" => null
        )
    );

    public function run() {
        Schema::disableForeignKeyConstraints();
        DB::table('Users')->truncate();

        foreach ($this->arrayUsers as $users) {
            $user = new User();
            $user->nif = $users['nif'];
            $user->name = $users['name'];
            $user->email = $users['email'];
            $user->email_verified_at = $users['email_verified_at'];
            $user->password = bcrypt('123456');
            $user->addressshipping = $users['addressshipping'];
            $user->addressshippingPO = $users['addressshippingPO'];
            $user->addressshippingcity = $users['addressshippingcity'];
            $user->addressshippingregion = $users['addressshippingregion'];
            $user->addressbilling = $users['addressbilling'];
            $user->addressbillingPO = $users['addressbillingPO'];
            $user->addressbillingcity = $users['addressbillingcity'];
            $user->addressbillingregion = $users['addressbillingregion'];
            $user->status = $users['status'];
            $user->admin = $users['admin'];
            $user->remember_token = $users['remember_token'];            
            $user->save();
        }
    }

}
