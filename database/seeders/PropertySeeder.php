<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->id();
        // $table->string('name');
        // $table->integer('price');
        // $table->string('location');
        // $table->string('type');
        // $table->string('image');
        // $table->integer('rented')->default(0);
        // $table->longText('amenities');
        // $table->longText('description');

        // $table->integer('beds');
        // $table->integer('bathroom');
        // $table->integer('garage');
        // $table->integer('area');

        DB::table('properties')->insert([
            'name' => 'Greenlake 707',
            'price' => 100000000,
            'location' => 'Greenlake',
            'type' => 'House',
            'bed' => '6',
            'bathroom' => '1',
            'garage' => '1',
            'area' => '500',
            'image' => '01-2403-S-Royal-Court-6X4-Web2-scaled.jpg',
            'rented' => 0,
            'amenities' => 'Balcony, Deck, Parking, Internet, Wood Flooring.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec rhoncus commodo tortor ac facilisis. Suspendisse venenatis eros velit,
                                sollicitudin porttitor metus porta non. Vivamus pellentesque enim vitae justo
                                porta, eu semper justo finibus.'
        ]);

        DB::table('properties')->insert([
            'name' => 'Serenity Pot',
            'price' => 120000000,
            'location' => 'Adeptus Domain',
            'type' => 'Villa',
            'bed' => '5',
            'bathroom' => '2',
            'garage' => '2',
            'area' => '600',
            'image' => '04-7509-NE-211th-Cir-Web.jpg',
            'rented' => 0,
            'amenities' => 'Balcony, Deck, Parking, Internet, Wood Flooring, Tubby.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec rhoncus commodo tortor ac facilisis. Suspendisse venenatis eros velit,
                                sollicitudin porttitor metus porta non. Vivamus pellentesque enim vitae justo
                                porta, eu semper justo finibus.'
        ]);

        DB::table('properties')->insert([
            'name' => 'Liyue Pavalion',
            'price' => 170000000,
            'location' => 'Liyue Harbor',
            'type' => 'House',
            'bed' => '2',
            'bathroom' => '1',
            'garage' => '1',
            'area' => '450',
            'image' => 'home-exterior-today-180726-tease-1355945.jpg',
            'rented' => 0,
            'amenities' => 'Balcony, Deck, Parking, Internet, Wood Flooring.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec rhoncus commodo tortor ac facilisis. Suspendisse venenatis eros velit,
                                sollicitudin porttitor metus porta non. Vivamus pellentesque enim vitae justo
                                porta, eu semper justo finibus.'
        ]);
    }
}
