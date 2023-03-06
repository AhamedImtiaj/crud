<?php

namespace Database\Factories;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
{
    $imageUrl = 'https://example.com/image.jpg';
    $headers = get_headers($imageUrl);
    if (strpos($headers[0], '200') !== false) {
        $response = Http::get($imageUrl);
        if ($response->successful()) {
            $imageContents = $response->body();
            $imageName = 'contact-' . $this->faker->uuid . '.jpg';
            $imagePath = 'public/images/' . $imageName;
            Storage::put($imagePath, $imageContents);
            return [
                'name' => $this->faker->name(),
                'address' => $this->faker->address(),
                'mobile' => $this->faker->phoneNumber(),
                'photo' => $imageName,
            ];
        } else {
            // handle error
        }
    } else {
        // handle error
    }
}
}


