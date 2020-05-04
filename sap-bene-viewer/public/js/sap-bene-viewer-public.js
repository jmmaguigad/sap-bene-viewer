/**
 *
 * @link              https://fo2.dswd.gov.ph/
 * @since             1.0.0
 * @package           Sap_Beneficiary_Viewer
 */
jQuery(document).ready( function(){
	$('body').on('change','#province',function(){
		var province = $(this).val();
		if (province != '--Select Province--'){
			var data = {
				'action': 'get_municipality_by_ajax',
				'province': province,
				'security': sap_bene_viewer.security
			}

			$('#dummy_municipality').hide();

			$.post(sap_bene_viewer.ajaxurl, data, function(response) {
                $('.load_municipality').html(response);
            });
		}
	});

	$('body').on('change','#municipality',function(){
		var province = $('#province').val();
		var municipality = $(this).val();
		var data = {
			'action': 'get_barangay_by_ajax',
			'province': province,
			'municipality': municipality,
			'security': sap_bene_viewer.security
		}

		$('#dummy_barangay').hide();

		$.post(sap_bene_viewer.ajaxurl, data, function(response) {
            $('.load_barangay').html(response);
        });
	});

	$('body').on('click','#searchresult',function(){
		var province = $('#province').val();
		var municipality = $('#municipality').val();
		var barangay = $('#barangay').val();
		var data = {
			'action': 'get_results_by_ajax',
			'province': province,
			'municipality': municipality,
			'barangay': barangay,
			'security': sap_bene_viewer.security
		}

		$.post(sap_bene_viewer.ajaxurl, data, function(response) {
            $('.result').html(response);
        });		
	});

	// Reference: https://stackoverflow.com/a/17075148
	$('body').on('keyup','#searchsaptextbox',function(){

    var data = this.value.toUpperCase();
    //split the current value of searchInput
    data = data.split(" ");

    //create a jquery object of the rows
    var jo = $("#fbody").find("tr");
    if (this.value == "") {
        jo.show();
        return;
    }

    //hide all the rows
    jo.hide();

    //Recusively filter the jquery object to get results.
    jo.filter(function (i, v) {
        var $t = $(this);
        for (var d = 0; d < data.length; ++d) {
            if ($t.is(":contains('" + data[d] + "')")) {
                return true;
            }
        }
        return false;
    })
    //show the rows that match.
    .show();
	});		
});