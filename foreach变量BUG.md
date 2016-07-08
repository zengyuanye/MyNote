###foreach变量bug
				
	
	foreach($plots as $var){

		$ShopId=$var["marketShopId"];
		$sql="SELECT marketShopId,plotYAxis,plotXAxis FROM market_plot WHERE marketFloorsId='".$this->input["marketFloorsId"]."' AND marketShopId={$ShopId} ";
	}	
	将遍历$var的变量sql语句执行N次


	foreach($plots as $var){

		
	$sql="SELECT marketShopId,plotYAxis,plotXAxis FROM market_plot WHERE marketFloorsId='".$this->input["marketFloorsId"]."' AND marketShopId={$var["marketShopId"]} ";
	}	
	将遍历$var的第一个变量即sql永远执行一次


