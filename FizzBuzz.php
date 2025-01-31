<?php
	
	class FizzBuzz
	{
		private int $num;
		
		public function __construct( int $num = 100 )
		{
			$this->num = $num;
		}
		
		public function setNum( $num ) : int
		{
			$this->num = $num;
			return $this->num;
		}
		
		public function getNum() : int
		{
			return $this->num;
		}
		
		public function fizzBuzz() : string
		{
			$output = "";
			foreach( range( 1, $this->getNum() ) as $number ) {
				if( $number % 3 !== 0 && $number % 5 !== 0 ) {
					$output .= $number . "<br/>";
					continue;
				}
				
				if( $number % 3 === 0 ) {
					$output .= "Fizz";
				}
				
				if( $number % 5 === 0 ) {
					$output .= "Buzz";
				}
				
				$output .= "<br/>";
			}
			return $output;
		}
	}
