jQuery(document).ready(function() {
	//debugger;
	// jQuery('#Uploadfile').on("",function(){
		// var filename = jQuery('#Uploadfile').val();

		jQuery("#testfile").css('opacity',0);
		jQuery('#button').addClass('btn btn-grey');
		jQuery('#testfile').css({
            position: 'absolute',
            top: '10px',
            left: '10px' 
        });
		// if(jQuery('input#testfile').val()==""){
		// 	jQuery("#val").text('No file Choosen');
		// }

	// });
	
	jQuery('#button').click(function () {
		jQuery("input[type='file']").trigger('click');

	});

	jQuery('input#testfile').change(function () {
		jQuery('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
	})
});