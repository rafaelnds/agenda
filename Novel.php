<?php
require("Books.php");
class Novel extends Books {
   var $publisher;
   var $author;
   function setPublisher($par){
      $this->publisher = $par;
   }
   
   function getPublisher(){
      echo $this->publisher. "<br />";
   }
	
   function setAuthor($par){
      $this->author = $par;
   }
   
   function getAuthor(){
      echo $this->author. "<br />";
   }
  function __construct( $par1, $par2) {
		$this->publisher = $par1;
		$this->author = $par2;
	}
}
	$physics = new Novel("Physics Teaching Corporation","John Howlett James");
	$maths = new Novel( "NYU University", "Arnold Lovren");
	$chemistry = new Novel ("Chemistry for everyone", "Dr. Junior Sanchez" );
	
	$physics->getPublisher();
	$physics->getAuthor();
	$chemistry->getAuthor();
	$chemistry->getPublisher();
	$maths->getPublisher();
	
	
	
	
	
	

?>