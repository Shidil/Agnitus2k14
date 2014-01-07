<?php
	
if($_POST){
	
	if($_POST['type']=="gallery"){
		if($_POST['item']&&$_POST['cat']){
			echo $_POST['item'].'  '.$_POST['cat'];
			
		}
	}
}

?>