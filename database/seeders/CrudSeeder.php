<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $contacts = [
        ['name' => 'John', 'address' => '123 Main St', 'mobile' => '555-1234', 'photo' => 'john.jpg'],
        ['name' => 'Jane', 'address' => '456 Oak Ave', 'mobile' => '555-5678', 'photo' => 'jane.jpg'],
        // Add more contacts here...
    ];

    foreach ($contacts as $key => $value) {
        Contact::create([
            'name' => $value['name'],
            'address' => $value['address'],
            'mobile' => $value['mobile'],
            'photo' => '/images/' . $value['photo'], // Path to the image file in the public directory
        ]);
    }
}
}
