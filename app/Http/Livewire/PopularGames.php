<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class PopularGames extends Component
{
    public $popularGames = [];

    public function loadPopularGames() {
        $before = Carbon::now()->subMonth(2)->timestamp;
        $after  = Carbon::now()->addMonth(2)->timestamp;

        // Caching
        $popularGamesUnformatted = Cache::remember(
            'popular-games',
            1,
            function () use ($before, $after) {
                return Http::withHeaders(config('services.igdb'))
                    ->withOptions([
                        'body' => "
                            fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, slug;
                            where platforms = (48,49,130,6) & (first_release_date >={$before} & first_release_date < {$after});
                            sort popularity desc;
                            limit 12;
                    "
               ])->get('https://api-v3.igdb.com/games/')->json();
        });

        //dump($this->formatForView($popularGamesUnformatted));

        $this->popularGames = $this->formatForView($popularGamesUnformatted);

        collect($this->popularGames)->filter(
            function ($game) {
                return $game[ 'rating' ];
            }
        )->each(
            function ($game) {
                $this->emit('gameWithRatingAdded', [
                    'slug'      => $game['slug'],
                    'rating'    => $game['rating'] / 100
                ]);
            }
        );
    }


    public function render() {
        return view('livewire.popular-games');
    }

    private function formatForView($games) {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'coverImageUrl' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'rating'        => isset($game['rating']) ? round($game['rating']) : null,
                'platforms'     => collect($game['platforms'])->pluck('abbreviation')->implode(', '),
            ]);
        })->toArray();
    }
}
