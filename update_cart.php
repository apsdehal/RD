<?php session_start();
if(isset($_POST['returnJSON'])){
		$data= json_encode($_SESSION['basket']);
		echo $data;
	} else if(isset($_POST['value'])){
		if(sha1($_POST['value']) == $_SESSION['pass_phrase']) echo 1;
		else echo 0; 
		
		} else if(isset($_POST['itemName'])){
		$i='0';
		while(1){
			if($_SESSION['basket'][$i]['name']==$_POST['itemName']){unset($_SESSION['basket'][$i]);
			}
			$i++;
			}		
		}else {
	$isThere=-1;
	$i=0;
	$j=$_SESSION['basket']['j'];
		   if(isset($_SESSION['basket'][0]))
				foreach($_SESSION['basket'] as $k){
					if($k['name']==$_POST['title']){ $isThere = $i;break;}$i++;
				}
				if($isThere == -1){
					$_SESSION['basket'][$j]['name']=$_POST['title'];
					$_SESSION['basket'][$j]['count']=1;
					$j++;
				} else {
					$_SESSION['basket'][$isThere-1]['count']++;
				}
	$_SESSION['basket']['j']=$j;			
	}
?>