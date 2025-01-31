<?php
	
	class FizzBuzz {
		
		private int $num;
		
		public function __construct(int $num) {
			$this->num = $num;
		}
		
		/**
		 * @return int
		 */
		public function getNum() : int
		{
			return $this->num;
		}
		
		/**
		 * @param int $num
		 */
		public function setNum( int $num ) : void
		{
			$this->num = $num;
		}
	}
