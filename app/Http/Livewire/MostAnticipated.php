<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MostAnticipated extends Component
{
    public $mostAnticipated = [];

    public function loadMostAnticipated() {
        $current        = Carbon::now()->timestamp;
        $afterFourMonth = Carbon::now()->addMonth(4)->timestamp;

        // Caching
        $this->mostAnticipated = Cache::remember(
            'most-anticipated',
            3600,
            function () use ($current, $afterFourMonth) {
                return Http::withHeaders(config('services.igdb'))
                           ->withOptions(
                               [
                                   'body' => "
                    fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary;
                    sort popularity desc;
                    limit 4;
                ",
                               ]
                           )->get('https://api-v3.igdb.com/games/')->json();
            }
        );
    }

    public function render() {
        return view('livewire.most-anticipated');
    }
}
