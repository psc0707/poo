<?php

class VideoGameBis {
	/** @var string */
	private $title;
	/** @var string */
	private $releaseDate;
	/** @var string */
	private $editor;
	/** @var string */
	private $genre;
	/** @var string */
	private $console;
	/** @var float */
	private $price; // Excl VAT

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

	const VAT_RATE = 1.17; // Taux de tva à 17%
	const VAT_PERCENT = 17; // Pourcentage de tva à 17%

	public function __construct($title='', $releaseDate='', $editor='', $genre='', $console='', $price=0.0) {
		$this->title = $title;
		$this->releaseDate = $releaseDate;
		$this->editor = $editor;
		$this->genre = $genre;
		$this->console = $console;
		$this->price = $price;
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

	// Exo2 ++
	public function getPriceVatIncluded() {
		return $this->price * self::VAT_RATE;
	}

	// Getters
	public function getTitle() {
		return $this->title;
	}
	public function getReleaseDate() {
		return $this->releaseDate;
	}
	public function getEditor() {
		return $this->editor;
	}
	public function getGenre() {
		return $this->genre;
	}
	public function getConsole() {
		return $this->console;
	}
	public function getPrice() {
		return $this->price;
	}
	// Setters
	public function setTitle($title) {
		$this->title = $title;
	}
	public function setReleaseDate($releaseDate) {
		$this->releaseDate = $releaseDate;
	}
	public function setEditor($editor) {
		$this->editor = $editor;
	}
	public function setGenre($genre) {
		$this->genre = $genre;
	}
	public function setConsole($console) {
		$this->console = $console;
	}
	public function setPrice($price) {
		$this->price = $price;
	}
}