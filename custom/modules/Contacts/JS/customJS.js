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
  $("#iban_c").parent().append("<img id='iban_loader' src='themes/default/images/loading.gif'height='20'>");

  if(iban_c == '' || iban_c == undefined) {
    $("#iban_loader").remove();
    return false;
  }

  $.ajax({
    url: 'https://openiban.com/validate/'+iban_c+'',  // replace with
                  // dynamic value
    data: { // pass additional options
      "validateBankCode": true,   // (not guaranteed)
      "getBIC": true      // (not guaranteed)
    },
    success: function(data) {
      var result = data;
      if(result.valid) {
        $("#iban_loader").remove();
      } 
      else {        
        $("#iban_loader").remove();
        alert('Invalid IBAN');
        $("#iban_c").val('');
      }
    },
    error: function(xhr) {
        $("#iban_loader").remove();
        alert('Failed to validate IBAN');
    }
  });
}