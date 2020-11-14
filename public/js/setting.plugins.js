$(function () {  
    //Input Date Calendar
    $("#inicio, #termino").datepicker({
        format: "yyyy-mm-dd",
        startDate: "0d",
        language: "es",
        autoclose: true
	});
	
	$("#birthdate").datepicker({
        format: "yyyy-mm-dd",
        endDate: "0d",
        language: "es",
        autoclose: true
    });
    
    $("#inicio, #termino, #birthdate").datepicker("setDate", new Date());
	
	$("#date").datepicker({
        format: "yyyy-mm-dd",
        startDate: "1700-01-01",
        language: "es",
        autoclose: true
	}); 
	
    //Formularios Admin
    var $validator = $("#editForm").validate({
		lang: 'es',
		rules: {
            email: { email: true },
            new_pass: { minlength: 5 },
            repeat_pass: { minlength: 5, equalTo: "#new_pass" }
        },
		errorElement: 'span',
		errorClass: 'validate-has-error',
		highlight: function (element) {
			$(element).closest('.form-group').addClass('validate-has-error');
		},
		unhighlight: function (element) {
			$(element).closest('.form-group').removeClass('validate-has-error');
            $("select").change(function() {
                $(this).valid();
            });
		},
		errorPlacement: function (error, element) {
			if(element.closest('.has-switch').length) {
				error.insertAfter(element.closest('.has-switch'));
			}
			else
			if(element.parent('.checkbox, .radio').length || element.parent('.input-group').length) {
				error.insertAfter(element.parent());
			}
			else {
				error.insertAfter(element);
			}
		}
	});
    
    //Wizard
    $('#editWizard').bootstrapWizard({
		'tabClass': '',
		onNext: function(tab, navigation, index) {            
            var $valid = $("#editForm").valid();
			if(!$valid) {
                $validator.focusInvalid();
				return false;
			}
		},
		onTabClick: function(tab, navigation, index) {
			var $valid = $("#editForm").valid();
			if(!$valid) {
				$validator.focusInvalid();
				return false;
			}
		},
		onTabShow: function(tab, navigation, index){
			var $total = navigation.find('li').length;
			var $current = index+1;
			
			// If it's the last tab then hide the last button and show the finish instead
			if($current >= $total) {
				$('#editWizard').find('.pager .next').hide();
				$('#editWizard').find('.pager .finish').show();
				$('#editWizard').find('.pager .finish').removeClass('disabled');
			} else {
				$('#editWizard').find('.pager .next').show();
				$('#editWizard').find('.pager .finish').hide();
			}
		}
	});
});