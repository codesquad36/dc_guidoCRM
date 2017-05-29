$(document).ready(function(){
	temp_val = $("#relatietype_c").val();
	show_hide_field(temp_val);
	$("#relatietype_c").on('change', function(){
		show_hide_field($(this).val());	
	});
});
function show_hide_field(val){
	show = false;
	if(val == null){
		$("#deal_status").parent().parent().hide();
		return;
	}
	if(typeof(val) == 'string'){
		if(val.match(/Verzekering/g) == null){
			$("#deal_status").parent().parent().hide();
		}else{
			$("#deal_status").parent().parent().show();	
		}
		return;
	}
	relatie_val = val;
	$.each(relatie_val, function(key, val){
		if(trim(val) === 'Verzekering'){
			show = true;
		}
	});
	if(show){
		$("#deal_status").parent().parent().show();
	}else{
		$("#deal_status").parent().parent().hide();
	}
}