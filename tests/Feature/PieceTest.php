<?php

namespace Tests\Feature;

use App\Models\Composer;
use App\Models\Piece;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PieceTest extends TestCase
{

    public function test_a_piece_can_be_created()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(User::factory()->create());

        $composer = Composer::factory()->create();

        //$this->get('/pieces/create')->assertStatus(200);

        $piece = $this->post('/pieces', [
            'name' => 'Cellokonzert',
            'composer_id' => $composer->id,
        ]);

        $this->assertDatabaseHas('pieces', [
            'name' => 'Cellokonzert'
        ]);
    }
}
