/* Creating page table. */
CREATE TABLE 'page_T' (
	'PageID' int(10) NOT NULL,
	'page_layout' varchar(32) NOT NULL 
	CHECK (page_layout IN('FirstPage', 'SearchResult', 'Song', 'SingerSongList')),
CONSTRAINT Page_PK PRIMARY KEY (PageID));

/* Creating song table. */
CREATE TABLE 'song_T'(
	'SongID' int(8) NOT NULL,
	'Title' varchar(64) NOT NULL,
	'Genre' varchar(32) NOT NULL,
	'VideoLink' varchar(256),
CONSTRAINT Song_PK PRIMARY KEY (SongID));

/* Creating singer table. */
CREATE TABLE 'singer_T'(
	'SingerID' int(8) NOT NULL,
	'SingerName' varchar(64) NOT NULL,
CONSTRAINT Singer_PK PRIMARY KEY (SingerID));

/* Creating Chord table, ShapeLink is pointing to chord shape image. */
CREATE TABLE 'chord_T'(
	'ChordID' int(8) NOT NULL,
	'Name' varchar(64) NOT NULL,
	'ShapeLink' varchar(256) NOT NULL,
CONSTRAINT Chord_PK PRIMARY KEY (ChordID));
