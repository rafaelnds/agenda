<?php
    class Books {
      /* Member variables */
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
		 return $this->price;
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
		 return $this->title;
      }
	  function __construct( $par1, $par2 ) {
		$this->title = $par1;
		$this->price = $par2;
}
	
   }
	$physics = new Books( "Physics for High School", 15.00);
	$maths = new Books (  "Advanced Chemistry", 12.50);
	$chemistry = new Books ( "Algebra" , 21.25);
	
	$physics->getTitle();
	$physics->getPrice();
	$chemistry->getTitle();
	$chemistry->getPrice();
	$maths->getTitle();
	$maths->getPrice();
	?>