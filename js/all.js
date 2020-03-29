
function lof(x)
{
	location.href=x
}

function del(table,id){
	$.post("./api/del.php",{table,id},function(res){
		location.reload();
	})
}

function show(table,id,sh){
	$.post("./api/show.php",{table,id,sh},function(){
		location.reload();
	})
}

function sw(table,id,id2){
	$.post("./api/switch.php",{table,id,id2},function(){
		location.reload();
	})
};