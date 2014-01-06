<?php
	
if($_POST){
	
	if($_POST['type']=="gallery"){
		if($_POST['item']){
			echo $_POST['item'];
			
		}
	}
}

?>