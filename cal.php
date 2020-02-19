<?php

require 'calc_init.php';


if($sum_el==0){
	
	echo "0 zł brutto";
}else{
	echo number_format($val_sum,2,',','')." zł brutto";
}
?>