
function lof(x)
{
	location.href=x
}

function del(table,id){
	$.post("./api/del.php",{table,id},function(){
		location.reload();
	})
}

function show(table,id,sh){
	$.post("./api/show.php",{table,id,sh},function(){
		location.reload();
	})
}