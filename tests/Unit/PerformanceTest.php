<?php

namespace Tests\Unit;

use App\Models\Composer;
use App\Models\Concert;
use App\Models\Ensemble;
use App\Models\Instrument;
use App\Models\Performance;
use App\Models\Piece;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PerformanceTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_performance_has_all_relationships()
    {
        $user = User::factory()->create();
        $concert = Concert::factory()->create();
        $instrument = Instrument::factory()->create();
        $piece = Piece::factory()->create();
        $ensemble = Ensemble::factory()->create();

        $performance = Performance::factory()->create([
            'user_id' => $user->id,
            'concert_id' => $concert->id,
            'instrument_id' => $instrument->id,
            'piece_id' => $piece->id,
            'ensemble_id' => $ensemble->id,
        ]);

        $this->assertEquals($user->id, $performance->user->id);
        $this->assertEquals($concert->id, $performance->concert->id);
        $this->assertEquals($instrument->id, $performance->instrument->id);
        $this->assertEquals($piece->id, $performance->piece->id);
        $this->assertEquals($ensemble->id, $performance->ensemble->id);
    }
}
