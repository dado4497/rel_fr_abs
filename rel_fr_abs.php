<?php
  //Declaration
  
	$server_name = $_SERVER['HTTP_HOST'];
	$current_path = $_SERVER['REQUEST_URI'];
?>

<?php
	
	function rel_fr_abs($path){
		$server_name = $GLOBALS["server_name"];
		$current_path = $GLOBALS["current_path"];
		if($path{0}=='/')
			$path = $server_name.$path;
		$pos = strpos($path, "://");
		if($pos==NULL)
			$pos = 0;
		else
			$pos +=3;
		$path = substr($path, $pos);
		
		$pos = strpos($path, "/");
		if($pos==NULL){
			echo "ERR 1: Wrong path";
			return FALSE;
		}
		
		$r_server_name=substr($path, 0, $pos);
		
		$path = substr($path, $pos+1);
    $array_server_name = explode(".", $server_name);
    $array_s = count($array_server_name);
    $array_r_server_name = explode(".", $r_server_name);
    $array_r_s = count($array_r_server_name);
    $path_uguali=false;
    for($i=0; $i < $array_r_s; $i++){
       if(isset($array_server_name[$array_s-$i]) && $array_r_server_name[$i]==$array_server_name[$array_s-$i])
          $path_uguali=true; 
    }
		
		if(!$path_uguali){
			echo "ERR 2: External path. You have requested file from: ". $r_server_name;
			return FALSE;
		}
		$current_path = substr($current_path, 1);
		$vet_current_path = explode("/", $current_path);
		$vet_path = explode("/", $path);
    /*
    echo "<pre>";
    print_r($vet_current_path);
    echo "</pre>";
    */
		$num_c_path = count($vet_current_path) - 1;
		$num_path = count($vet_path) - 1;
		
		$path_ret="";
		
		$diverso = 0;
		$d=false;
		
		for($i = 0; $i < $num_c_path; $i++){
      //echo "vet path: " . $vet_path[$i] . " vet c path: " . $vet_current_path[$i] . " Path ret: " .$path_ret . "<br />"; 
			if($vet_path[$i] != $vet_current_path[$i]){
				$path_ret .= "../";
				if($diverso==0 && !$d){
					$d = true;
					$diverso = $i;
				}
			}
			 
		}
		
		for($j=$diverso; $j < $num_path+1; $j++){
			if($j < $num_path)
				$path_ret .= $vet_path[$j]."/";
			else
				$path_ret .= $vet_path[$j];
		}
		
    if($d==false){
      $path_ret = $vet_path[$num_c_path];
    }
		
		/*echo $current_path."<br>";
		echo $path."<br>";
		echo $path_ret."<br>";*/
		
		return $path_ret;
			
	}

?>