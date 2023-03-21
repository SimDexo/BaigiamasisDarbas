<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        $people = [['name' => 'John', 'surname' => 'Doe', 'personal_code' => '1234567890', 'email' => 'john.doe@example.com', 'phone' => '555-1234', 'user_id' => 1, 'address_id' => 11, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Jane', 'surname' => 'Doe', 'personal_code' => '0987654321', 'email' => 'jane.doe@example.com', 'phone' => '555-5678', 'user_id' => 2, 'address_id' => 12, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Bob', 'surname' => 'Smith', 'personal_code' => '2345678901', 'email' => 'bob.smith@example.com', 'phone' => '555-2345', 'user_id' => 3, 'address_id' => 13, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Alice', 'surname' => 'Johnson', 'personal_code' => '8901234567', 'email' => 'alice.johnson@example.com', 'phone' => '555-6789', 'user_id' => 4, 'address_id' => 14, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'David', 'surname' => 'Lee', 'personal_code' => '3456789012', 'email' => 'david.lee@example.com', 'phone' => '555-3456', 'user_id' => 5, 'address_id' => 15, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Maria', 'surname' => 'Garcia', 'personal_code' => '6789012345', 'email' => 'maria.garcia@example.com', 'phone' => '555-7890', 'user_id' => 6, 'address_id' => 16, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Ahmed', 'surname' => 'Khan', 'personal_code' => '4567890123', 'email' => 'ahmed.khan@example.com', 'phone' => '555-4567', 'user_id' => 7, 'address_id' => 17, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Sofia', 'surname' => 'Martinez', 'personal_code' => '9012345678', 'email' => 'sofia.martinez@example.com', 'phone' => '555-8901', 'user_id' => 8, 'address_id' => 18, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Yuta', 'surname' => 'Tanaka', 'personal_code' => '5678901234', 'email' => 'yuta.tanaka@example.com', 'phone' => '555-5678', 'user_id' => 9, 'address_id' => 19, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Hana', 'surname' => 'Kim', 'personal_code' => '0123456789', 'email' => 'hana.kim@example.com', 'phone' => '555-1234', 'user_id' => 10, 'address_id' => 20, 'created_at' => now(), 'updated_at' => now(),],];
        DB::table('people')->insert($people);
    }
}
