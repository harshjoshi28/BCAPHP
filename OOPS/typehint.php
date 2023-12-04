<?php
class Song
{
	public $title;
	public $lyrics;
}
class Data
{	
	function sing(Song $song)
	{
		$this->d_song = $song;
		echo "Best song of the year :". $this->d_song->title ."<br>";
		echo "<p>". $this->d_song->lyrics." </p>";
	} 
}

$data = new Data();
$hit = new Song();
$hit->title = "Tera Ghata";
$hit->lyrics = "Isme Tera GHATA mer kuchh nai jata";
$data->sing($hit);

//sing($hit);

?>