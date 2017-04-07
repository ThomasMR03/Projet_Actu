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
    elementsPerPage: 1,
    effect: 'climb'
});


$('#actuu').easyPaginate({
    paginateElement: 'span',
    elementsPerPage: 3,
    effect: 'climb'
});