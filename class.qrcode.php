<?php

/**
 * The MIT License (MIT)
 * Copyright (c) 2013 Andrew Champ
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction, 
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, 
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, 
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial 
 * portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT 
 * LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
 * NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, 
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE 
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

	class qrcode{
	
		public $url;
		public $size;
		
		
		public function __construct($_url=null, $_size='500'){
			if($_url==null):
				print 'You need to define a url or text';
			else:
				if($_size > 500):
					$_size = 500;
				endif;
				$this->url = $_url;
				$this->size = $_size;
				$this->createImage();
			endif;
		}
	
	
		private function createImage(){
			print '<img src="http://chart.googleapis.com/chart?cht=qr&chs='.$this->size.'x'.$this->size.'&choe=UTF-8&chld=H&chl='.$this->url.' alt="" />';
		}
		
	}
	
	
/**
 * Example Usage:
 */
	$qr = new qrCode('http://andrewchamp.com/', '300');

?>
