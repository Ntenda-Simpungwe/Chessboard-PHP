<html>
<style>
  .blackdiv{
    width: 60px;
    height: 60px;
    background-color: black;
    position:absolute;
	
	
  }
  .whitediv{
    width: 60px;
    height: 60px;
    background-color: white;
	border-color: black;
    position:absolute;
	border:1px solid black;
  }
</style>



<?php
 $pos = $_POST["in"];
 
 function bdraw($top,$left)
 {
	 echo "<div style = \"top:$top;left:$left;\" class = \"blackdiv\"></div>";
 }
 function wdraw($top,$left)
 {
	 echo "<div style = \"top:$top;left:$left;\" class = \"whitediv\"></div>";
 }
 
 $top = 60;
 $left = 60;
 $outer = 0;
 $outer = (int)$outer;
 $inner = 0;
 $inner = (int) $inner;
 
 for ( $outer = 1; $outer < 9; $outer++)
 {
	 for ( $inner = 1; $inner < 9; $inner++)
	 {
		 
		 if ($inner%2 !=0 || $inner == 1)
		 {
			 wdraw($top,$left);	 
		 }
		 else
		 {
			 bdraw($top,$left);
		 }
		 
		 if ($inner != 8)
		 {
		 if ($outer%2 != 0 || $outer == 1)
			 $left = $left+60;
		 else
			 $left = $left-60;
		 }
	 }	
		$top = $top+60;
 }
 
 
?>

</html>