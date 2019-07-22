<?php

namespace Tests\Unit\Controllers;

use App\Models\CoinStats;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StatisticsPageControllerTest extends TestCase
{
    use RefreshDatabase;

    public function settingUp()
    {
        Carbon::setTestNow('2019-05-15 12:00:00');
    }

    /** @test */
    function it_can_show_the_index()
    {
        CoinStats::create([
            'date' => '2019-05-15',
            'coin' => 'btc',
            'random_pages_generated' => 100,
            'pages_viewed' => 200,
            'keys_generated' => 300,
        ]);

        CoinStats::create([
            'date' => '2019-05-15',
            'coin' => 'eth',
            'random_pages_generated' => 1,
            'pages_viewed' => 2,
            'keys_generated' => 3,
        ]);

        CoinStats::create([
            'date' => '2019-04-15',
            'coin' => 'eth',
            'random_pages_generated' => 10,
            'pages_viewed' => 20,
            'keys_generated' => 30,
        ]);

        $this->showStatisticsPage()
            ->assertStatus(200)
            ->assertSeeText('Today: 303')
            ->assertSeeText('This month: 303')
            ->assertSeeText('Last month: 30')
            ->assertSeeText('All time: 333');
    }

    /** @test */
    function regression__this_month_stats_only_count_the_current_year()
    {
        CoinStats::create([
            'date' => '2019-05-15',
            'coin' => 'btc',
            'random_pages_generated' => 100,
            'pages_viewed' => 200,
            'keys_generated' => 300,
        ]);

        CoinStats::create([
            'date' => '2018-05-15',
            'coin' => 'btc',
            'random_pages_generated' => 100,
            'pages_viewed' => 200,
            'keys_generated' => 300,
        ]);

        $this->showStatisticsPage()
            ->assertStatus(200)
            ->assertSeeText('Today: 300')
            ->assertSeeText('This month: 300')
            ->assertSeeText('Last month: n/a')
            ->assertSeeText('All time: 600');
    }

    /** @test */
    function regression__last_month_stats_only_count_the_current_year()
    {
        CoinStats::create([
            'date' => '2019-04-15',
            'coin' => 'btc',
            'random_pages_generated' => 100,
            'pages_viewed' => 200,
            'keys_generated' => 300,
        ]);

        CoinStats::create([
            'date' => '2018-04-15',
            'coin' => 'btc',
            'random_pages_generated' => 100,
            'pages_viewed' => 200,
            'keys_generated' => 300,
        ]);

        $this->showStatisticsPage()
            ->assertStatus(200)
            ->assertSeeText('Today: n/a')
            ->assertSeeText('This month: n/a')
            ->assertSeeText('Last month: 300')
            ->assertSeeText('All time: 600');
    }

    private function showStatisticsPage()
    {
        return $this->get(route('stats'));
    }
}
