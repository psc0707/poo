<?php 
	class VideoGame {

		const CONSOLE = array("Nintendo","Playstation","X-Box");	
		public $title;
		public $releaseDate;
		public $editor;
		public $genre;
		public $console;

		public $packaging;

		function __construct ($title="", $releaseDate="", $editor="", $genre="") {
			$this->title = $title;
			$this->releaseDate = $releaseDate;
			$this->editor = $editor;
			$this->genre = $genre;
		}

		// Date de sortie
		function sortieJeux () {

			$today = date("Y-m-d");			
			if ($this->releaseDate <= $today) {
				return true;
			} 
			return false;
		}

		// Date de sortie
		function sortirJeux () {			
			$this->releaseDate = date("Y-m-d");			
		}
	}
 ?>