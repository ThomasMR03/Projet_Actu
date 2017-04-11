function navMobile(){
	if ($( "#navmobile" ).hasClass( "hidden" )) {
		$("#navmobile").attr('class','visible');
	}else if ($( "#navmobile" ).hasClass( "cache" )){
		$("#navmobile").attr('class','visible');
	}else{
		$("#navmobile").attr('class','cache');
	}
}


$('#commentaire').easyPaginate({
    paginateElement: 'span',
    elementsPerPage: 10,
    effect: 'climb'
});


$('#actuu').easyPaginate({
    paginateElement: 'span',
    elementsPerPage: 6,
    effect: 'climb'
});