<?php

namespace Tests\Unit;

use App\Items;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ItemsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_create_items() {
        $data = [
            'name' => $this->faker->name,
            'code' => $this->faker->buildingNumber,
            'sell_price' => $this->faker->randomNumber(5),
            'buy_price' => $this->faker->randomNumber(5),
            'description' => $this->faker->paragraph
        ];
        $this->post(route('items.store'), $data)
            ->assertStatus(200)
            ->assertJson($data);
    }

   	public function test_can_update_items() {
        $item = factory(Items::class)->create();
        $data = [
            'name' => $this->faker->name,
            'code' => $this->faker->buildingNumber,
            'sell_price' => $this->faker->randomNumber(5),
            'buy_price' => $this->faker->randomNumber(5),
            'description' => $this->faker->paragraph
        ];
        $this->put(route('items.update', $item->id), $data)
            ->assertStatus(200)
            ->assertJson($data);
    }
}
