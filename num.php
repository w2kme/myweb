<?php 
header('content-type:text/html; charset=utf-8;');
//一
for($i=1;$i<=5;$i++){
	echo "*";
}
echo "<hr/>";

//二
for($i=1;$i<=2;$i++){
	if($i==1){
		for($j=0;$j<8;$j++){
			if($j<3){
				echo "&nbsp;";
			}else{
				echo "*";
			}
			
		}
		echo "<br/>";
	}else{
		for ($j=0; $j <8 ; $j++) { 
			echo "*";
		}
	}
}
echo "<hr/>";
//三
for($i=1;$i<=3;$i++){
	if($i==1){
		for($j=0;$j<8;$j++){
			if($j<3){
				echo "&nbsp;";
			}else{
				echo "*";
			}
			
		}
		echo "<br/>";
	}
	if($i==2){
		for($j=0;$j<8;$j++){
			if($j<4){
				echo "&nbsp;";
			}else{
				echo "*";
			}
			
		}
		echo "<br/>";
	}
	if($i==3){		
		for($j=0;$j<8;$j++){
			echo "*";
		}
	}
}
echo "<hr/>";
//1
for ($i=1; $i <=7 ; $i++) { 
	echo "*<br/>";
}
echo "<hr/>";
//2
for ($i=1; $i <=7 ; $i++) { 
	if ($i==1||$i==4||$i==7) {
		for ($j=0; $j <5 ; $j++) { 
			echo "*";
		}
		echo "<br/>";
	}
	if ($i==2||$i==3) {
		for ($j=0; $j <5 ; $j++) { 
			if ($j==4) {
				echo "*";
			}else{
				echo "&nbsp;&nbsp;";
			}
			
		}
		echo "<br/>";
	}
	if ($i==5||$i==6) {
		for ($j=0; $j <5 ; $j++) { 
			if ($j==0) {
				echo "*";
			}else{
				echo "&nbsp;";
			}
			
		}
		echo "<br/>";
	}
}
echo "<hr/>";

//3
for ($i=1; $i <=7 ; $i++) { 
	if ($i==1||$i==4||$i==7) {
		for ($j=0; $j <5 ; $j++) { 
			echo "*";
		}
		echo "<br/>";
	}else{
		for ($j=0; $j <5 ; $j++) { 
			if ($j==4) {
				echo "*";
			}else{
				echo "&nbsp;&nbsp;";
			}			
		}
		echo "<br/>";
	}
}
echo "<hr/>";