function navMobile(){
	if ($( "#navmobile" ).hasClass( "hidden" )) {
		$("#navmobile").attr('class','visible');
	}else if ($( "#navmobile" ).hasClass( "cache" )){
		$("#navmobile").attr('class','visible');
	}else{
		$("#navmobile").attr('class','cache');
	}
}