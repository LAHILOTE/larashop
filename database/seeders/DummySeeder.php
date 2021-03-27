<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummy1 = new User;
        $dummy1->username = "test1";
        $dummy1->name = "test1";
        $dummy1->email = "test1@larashop.test";
        $dummy1->roles = json_encode(["CUSTOMER"]);
        $dummy1->password = Hash::make("test1");
        $dummy1->avatar = "saat-ini-tidak-ada-file.png";
        $dummy1->address = "test1";
        $dummy1->save();

        $dummy2 = new User;
        $dummy2->username = "test2";
        $dummy2->name = "test2";
        $dummy2->email = "test2@larashop.test";
        $dummy2->roles = json_encode(["CUSTOMER"]);
        $dummy2->password = Hash::make("test2");
        $dummy2->avatar = "saat-ini-tidak-ada-file.png";
        $dummy2->address = "test2";
        $dummy2->save();

        $dummy3 = new User;
        $dummy3->username = "test3";
        $dummy3->name = "test3";
        $dummy3->email = "test3@larashop.test";
        $dummy3->roles = json_encode(["CUSTOMER"]);
        $dummy3->password = Hash::make("test3");
        $dummy3->avatar = "saat-ini-tidak-ada-file.png";
        $dummy3->address = "test3";
        $dummy3->save();

        $dummy4 = new User;
        $dummy4->username = "test4";
        $dummy4->name = "test4";
        $dummy4->email = "test4@larashop.test";
        $dummy4->roles = json_encode(["CUSTOMER"]);
        $dummy4->password = Hash::make("test4");
        $dummy4->avatar = "saat-ini-tidak-ada-file.png";
        $dummy4->address = "test4";
        $dummy4->save();

        $dummy5 = new User;
        $dummy5->username = "test5";
        $dummy5->name = "test5";
        $dummy5->email = "test5@larashop.test";
        $dummy5->roles = json_encode(["CUSTOMER"]);
        $dummy5->password = Hash::make("test5");
        $dummy5->avatar = "saat-ini-tidak-ada-file.png";
        $dummy5->address = "test5";
        $dummy5->save();

        $dummy6 = new User;
        $dummy6->username = "test6";
        $dummy6->name = "test6";
        $dummy6->email = "test6@larashop.test";
        $dummy6->roles = json_encode(["CUSTOMER"]);
        $dummy6->password = Hash::make("test6");
        $dummy6->avatar = "saat-ini-tidak-ada-file.png";
        $dummy6->address = "test6";
        $dummy6->save();

        $dummy7 = new User;
        $dummy7->username = "test7";
        $dummy7->name = "test7";
        $dummy7->email = "test7@larashop.test";
        $dummy7->roles = json_encode(["CUSTOMER"]);
        $dummy7->password = Hash::make("test7");
        $dummy7->avatar = "saat-ini-tidak-ada-file.png";
        $dummy7->address = "test7";
        $dummy7->save();

        $dummy8 = new User;
        $dummy8->username = "test8";
        $dummy8->name = "test8";
        $dummy8->email = "test8@larashop.test";
        $dummy8->roles = json_encode(["CUSTOMER"]);
        $dummy8->password = Hash::make("test8");
        $dummy8->avatar = "saat-ini-tidak-ada-file.png";
        $dummy8->address = "test8";
        $dummy8->save();

        $dummy9 = new User;
        $dummy9->username = "test9";
        $dummy9->name = "test9";
        $dummy9->email = "test9@larashop.test";
        $dummy9->roles = json_encode(["CUSTOMER"]);
        $dummy9->password = Hash::make("test9");
        $dummy9->avatar = "saat-ini-tidak-ada-file.png";
        $dummy9->address = "test9";
        $dummy9->save();

        $dummy10 = new User;
        $dummy10->username = "test10";
        $dummy10->name = "test10";
        $dummy10->email = "test10@larashop.test";
        $dummy10->roles = json_encode(["CUSTOMER"]);
        $dummy10->password = Hash::make("test10");
        $dummy10->avatar = "saat-ini-tidak-ada-file.png";
        $dummy10->address = "test10";
        $dummy10->save();

        $dummy11 = new User;
        $dummy11->username = "test11";
        $dummy11->name = "test11";
        $dummy11->email = "test11@larashop.test";
        $dummy11->roles = json_encode(["CUSTOMER"]);
        $dummy11->password = Hash::make("test11");
        $dummy11->avatar = "saat-ini-tidak-ada-file.png";
        $dummy11->address = "test11";
        $dummy11->save();

        $this->command->info("User Dummy berhasil diinsert");
    }
}
