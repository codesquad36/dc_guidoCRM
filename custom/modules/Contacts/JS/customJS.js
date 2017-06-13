$(document).ready(function(){
	var val = $("#Ik_ben_lid_van_ledenservice_c").val();  
	if(val.match(/Nee/g)!== null){
		lidnummerShowHide()
	}
})

function lidnummerShowHide(){
  if ($("#Ik_ben_lid_van_ledenservice_c").val() == "Nee") {
    $("[field = lidnummer_c]").hide();
    $('#lidnummer_c').parent().parent().find('.label').hide();
   }else{
    $("[field = lidnummer_c]").show();
    $('#lidnummer_c').parent().parent().find('.label').show();
   }
 }

function validateIBAN() {
  var iban_c = $("#iban_c").val();
  if (IBAN.isValid(iban_c) == false) {
    alert('Invalid IBAN');
    $("#iban_c").val('');
  }
}