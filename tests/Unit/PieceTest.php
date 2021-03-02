<?php

namespace Tests\Unit;

use App\Models\Composer;
use App\Models\Piece;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PieceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_a_piece_has_a_composer()
    {
        $composer = Composer::factory()->create();
        $piece = Piece::factory()->create([
            'composer_id' => $composer->id
        ]);

        $this->assertEquals($composer->id, $piece->composer->id);
    }

    public function test_a_piece_must_have_a_composer()
    {
        $piece = $this->post('/pieces', [
            'name' => 'Cellokonzert',
        ])->assertSessionHasErrors('composer_id');
    }
}
