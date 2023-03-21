<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder
    extends Seeder
{
    public function run()
    {
        $addresses = [['name' => 'Alice Smith', 'country' => 'USA', 'city' => 'San Francisco', 'zip' => '94103', 'street' => 'Market St', 'house_number' => '123', 'apartment_number' => 'Apt 2B', 'state' => 'California', 'type' => 'shipping', 'additional_info' => 'Call before delivery', 'user_id' => 1, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Bob Johnson', 'country' => 'Canada', 'city' => 'Vancouver', 'zip' => 'V6B 1G1', 'street' => 'Homer St', 'house_number' => '456', 'apartment_number' => 'Suite 100', 'state' => 'British Columbia', 'type' => 'billing', 'additional_info' => 'Leave at front desk', 'user_id' => 2, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Jane Davis', 'country' => 'UK', 'city' => 'London', 'zip' => 'WC2N 5DU', 'street' => 'Trafalgar Square', 'house_number' => '789', 'apartment_number' => '', 'state' => '', 'type' => 'shipping', 'additional_info' => '', 'user_id' => 3, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Alexandre Martin', 'country' => 'France', 'city' => 'Paris', 'zip' => '75009', 'street' => 'Rue de Rochechouart', 'house_number' => '101', 'apartment_number' => '', 'state' => '', 'type' => 'shipping', 'additional_info' => 'Use the back entrance', 'user_id' => 4, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Maria Hernandez', 'country' => 'Spain', 'city' => 'Barcelona', 'zip' => '08001', 'street' => 'La Rambla', 'house_number' => '234', 'apartment_number' => '1-2', 'state' => '', 'type' => 'billing', 'additional_info' => 'Deliver after 5 pm', 'user_id' => 5, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Luca Rossi', 'country' => 'Italy', 'city' => 'Rome', 'zip' => '00118', 'street' => 'Via dei Fori Imperiali', 'house_number' => '567', 'apartment_number' => '', 'state' => '', 'type' => 'shipping', 'additional_info' => 'Use the side entrance', 'user_id' => 6, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Hans Mueller', 'country' => 'Germany', 'city' => 'Berlin', 'zip' => '10117', 'street' => 'Unter den Linden', 'house_number' => '890', 'apartment_number' => '4th floor', 'state' => '', 'type' => 'billing', 'additional_info' => 'Call upon arrival', 'user_id' => 7, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Lena Petrova', 'country' => 'Russia', 'city' => 'Moscow', 'zip' => '101000', 'street' => 'Red Square', 'house_number' => '111', 'apartment_number' => '', 'state' => '', 'type' => 'shipping', 'additional_info' => 'Leave at reception', 'user_id' => 8, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Javier Martinez', 'country' => 'Mexico', 'city' => 'Mexico City', 'zip' => '06500', 'street' => 'Paseo de la Reforma', 'house_number' => '222', 'apartment_number' => '12A', 'state' => '', 'type' => 'billing', 'additional_info' => 'Deliver before noon', 'user_id' => 9, 'created_at' => now(), 'updated_at' => now(),], ['name' => 'Chen Wei', 'country' => 'China', 'city' => 'Shanghai', 'zip' => '200000', 'street' => 'Nanjing Road', 'house_number' => '333', 'apartment_number' => '', 'state' => '', 'type' => 'shipping', 'additional_info' => '', 'user_id' => 10, 'created_at' => now(), 'updated_at' => now(),],];
        DB::table('addresses')->insert($addresses);
    }
}
