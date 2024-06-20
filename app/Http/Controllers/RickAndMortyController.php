<?php

namespace App\Http\Controllers;
use App\Services\RickAndMortyService;

class RickAndMortyController extends Controller {

	protected $character;
	protected $rickAndMorty;

	public function __construct(RickAndMortyService $rickAndMorty) {
        $this->rickAndMorty = $rickAndMorty;
    }

	public function index($page) {
        return $this->rickAndMorty->getCharacters($page);
    }

    public function show($id) {
        return $this->rickAndMorty->getCharacterById($id);
    }
}
