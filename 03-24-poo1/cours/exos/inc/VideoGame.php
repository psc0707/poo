<?php

class VideoGame {
	/** @var string */
	public $title;
	/** @var string */
	public $releaseDate;
	/** @var string */
	public $editor;
	/** @var string */
	public $genre;
	/** @var string */
	public $console;

	// exercice ++
	const CONSOLE_MEGADRIVE = 'MegaDrive';
	const CONSOLE_PC = 'PC';
	const CONSOLE_PS_ONE = 'PlayStation One';
	const CONSOLE_PS2 = 'PlayStation2';
	const CONSOLE_PS3 = 'PlayStation3';
	const CONSOLE_PS4 = 'PlayStation4';
	const CONSOLE_XBOX = 'Xbox';
	const CONSOLE_DREAMCAST = 'Dreamcast';
	const CONSOLE_GAMEBOY = 'GameBoy';
	const CONSOLE_NES = 'Nintendo';
	const CONSOLE_SNES = 'Super Nintendo';
	const CONSOLE_MASTER_SYSTEM = 'Master System';

	public function __construct($title='', $releaseDate='', $editor='', $genre='', $console='') {
		$this->title = $title;
		$this->releaseDate = $releaseDate;
		$this->editor = $editor;
		$this->genre = $genre;
		$this->console = $console;
	}

	// Fonction permettant de savoir si un jeu vidéo est sorti ou non
	public function isReleased() {
		if (strtotime($this->releaseDate) <= time()) {
			return true;
		}
		return false;
	}

	// Fonction permettant de sortir un jeuvideo
	public function release() {
		$this->releaseDate = date('Y-m-d');
	}
}