<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RickAndMortyService {
    
    protected $baseUri;

    public function __construct() {
        $this->baseUri = 'https://rickandmortyapi.com/api/';
    }

    public function getCharacters($page = 1) {

        $response = Http::get($this->baseUri . 'character/?page=' . $page);
        $characters = json_decode($response);

        $this->addEpisodeCount($characters->results);

        return $characters;
    }

    public function getCharacterById($id) {

        $response = Http::get($this->baseUri . 'character/' . $id);
        $character = json_decode($response);

        $this->addEpisodeCount([$character]);

        return $character;
    }

    private function addEpisodeCount(array $characters) {

        foreach ($characters as $character) {
            $character->episode_count = count($character->episode);
        }
        
    }

}
