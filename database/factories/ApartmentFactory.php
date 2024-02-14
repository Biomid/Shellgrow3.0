<?php

namespace Database\Factories;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apartment>
 */
class ApartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Apartment::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'local' => $this->faker->city,
            'building' => $this->faker->streetName,
            'room_number' => $this->faker->numberBetween(1, 100),
            'quantity_rooms' => $this->faker->numberBetween(1, 10),
            'area' => $this->faker->randomFloat(2, 50, 300),
            'parking_number' => $this->faker->randomNumber(4),
            'extra_nanny' => $this->faker->boolean,
            'extra_laundry' => $this->faker->boolean,
            'extra_cabinet' => $this->faker->boolean,
            'file_owner_document' => $this->faker->word . '.pdf',
            'file_power_of_attorney' => $this->faker->word . '.pdf',
            'file_property_management_letter' => $this->faker->word . '.pdf',
            'file_commercial_offer' => $this->faker->word . '.pdf',
            'file_contacts' => $this->faker->word . '.pdf',
            'DEWA_account' => $this->faker->word,
            'DEWA_account_password' => $this->faker->password,
            'AC_account' => $this->faker->word,
            'AC_account_password' => $this->faker->password,
            'internet_account' => $this->faker->word,
            'internet_account_password' => $this->faker->password,
            'GAS_supplier' => $this->faker->word,
            'GAS_account' => $this->faker->word,
            'apartment_price' => $this->faker->randomFloat(2, 100000, 1000000),
            'invest' => $this->faker->randomFloat(2, 10000, 100000),
            'rental_price_sigin' => $this->faker->randomFloat(2, 500, 5000),
            'commission' => $this->faker->randomFloat(2, 500, 5000),
            'communal_payments' => $this->faker->boolean,
        ];
    }
}
