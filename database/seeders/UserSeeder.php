<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        if (!User::where("email", "admin@me.it")->first()) {
            $mainUser = new User();
            $mainUser->name = "admin";
            $mainUser->email = "admin@me.it";
            $mainUser->email_verified_at = now();
            $mainUser->password = Hash::make('admin');
            $mainUser->save();

            $mainUser1 = new User();
            $mainUser1->name = "user1";
            $mainUser1->email = "user1@me.it";
            $mainUser1->email_verified_at = now();
            $mainUser1->password = Hash::make('password1');
            $mainUser1->save();

            $mainUser2 = new User();
            $mainUser2->name = "user2";
            $mainUser2->email = "user2@me.it";
            $mainUser2->email_verified_at = now();
            $mainUser2->password = Hash::make('password2');
            $mainUser2->save();

            $mainUser3 = new User();
            $mainUser3->name = "user3";
            $mainUser3->email = "user3@me.it";
            $mainUser3->email_verified_at = now();
            $mainUser3->password = Hash::make('password3');
            $mainUser3->save();

            $mainUser4 = new User();
            $mainUser4->name = "user4";
            $mainUser4->email = "user4@me.it";
            $mainUser4->email_verified_at = now();
            $mainUser4->password = Hash::make('password4');
            $mainUser4->save();

            $mainUser5 = new User();
            $mainUser5->name = "user5";
            $mainUser5->email = "user5@me.it";
            $mainUser5->email_verified_at = now();
            $mainUser5->password = Hash::make('password5');
            $mainUser5->save();

            $mainUser6 = new User();
            $mainUser6->name = "user6";
            $mainUser6->email = "user6@me.it";
            $mainUser6->email_verified_at = now();
            $mainUser6->password = Hash::make('password6');
            $mainUser6->save();

            $mainUser7 = new User();
            $mainUser7->name = "user7";
            $mainUser7->email = "user7@me.it";
            $mainUser7->email_verified_at = now();
            $mainUser7->password = Hash::make('password7');
            $mainUser7->save();

            $mainUser8 = new User();
            $mainUser8->name = "user8";
            $mainUser8->email = "user8@me.it";
            $mainUser8->email_verified_at = now();
            $mainUser8->password = Hash::make('password8');
            $mainUser8->save();

            $mainUser9 = new User();
            $mainUser9->name = "user9";
            $mainUser9->email = "user9@me.it";
            $mainUser9->email_verified_at = now();
            $mainUser9->password = Hash::make('password9');
            $mainUser9->save();

            $mainUser10 = new User();
            $mainUser10->name = "user10";
            $mainUser10->email = "user10@me.it";
            $mainUser10->email_verified_at = now();
            $mainUser10->password = Hash::make('password10');
            $mainUser10->save();

            $mainUser11 = new User();
            $mainUser11->name = "user11";
            $mainUser11->email = "user11@me.it";
            $mainUser11->email_verified_at = now();
            $mainUser11->password = Hash::make('password11');
            $mainUser11->save();

            $mainUser12 = new User();
            $mainUser12->name = "user12";
            $mainUser12->email = "user12@me.it";
            $mainUser12->email_verified_at = now();
            $mainUser12->password = Hash::make('password12');
            $mainUser12->save();

            $mainUser13 = new User();
            $mainUser13->name = "user13";
            $mainUser13->email = "user13@me.it";
            $mainUser13->email_verified_at = now();
            $mainUser13->password = Hash::make('password13');
            $mainUser13->save();

            $mainUser14 = new User();
            $mainUser14->name = "user14";
            $mainUser14->email = "user14@me.it";
            $mainUser14->email_verified_at = now();
            $mainUser14->password = Hash::make('password14');
            $mainUser14->save();

            $mainUser15 = new User();
            $mainUser15->name = "user15";
            $mainUser15->email = "user15@me.it";
            $mainUser15->email_verified_at = now();
            $mainUser15->password = Hash::make('password15');
            $mainUser15->save();

            $mainUser16 = new User();
            $mainUser16->name = "user16";
            $mainUser16->email = "user16@me.it";
            $mainUser16->email_verified_at = now();
            $mainUser16->password = Hash::make('password16');
            $mainUser16->save();

            $mainUser17 = new User();
            $mainUser17->name = "user17";
            $mainUser17->email = "user17@me.it";
            $mainUser17->email_verified_at = now();
            $mainUser17->password = Hash::make('password17');
            $mainUser17->save();

            $mainUser18 = new User();
            $mainUser18->name = "user18";
            $mainUser18->email = "user18@me.it";
            $mainUser18->email_verified_at = now();
            $mainUser18->password = Hash::make('password18');
            $mainUser18->save();

            $mainUser19 = new User();
            $mainUser19->name = "user19";
            $mainUser19->email = "user19@me.it";
            $mainUser19->email_verified_at = now();
            $mainUser19->password = Hash::make('password19');
            $mainUser19->save();
        }
    }
}
