
function popupAlert(title, text) {
	swal({
				title: title,
				text: text,
				html: true
	});
}

function validateInputForm() {

		$('.btn_franchise_step_one').click(function() {
						var inputDateTime  			= $('#request_datetime').val();
						var inputTypeOfCompany 	= $("input[name='type_of_company']:checked").val();
						var inputName 					= $('#request_username').val();
						var inputSurname 				= $('#request_surname').val();
						var inputCompanyName 		= $('#request_company_name').val();
						var inputTel 						= $('#request_tel').val();
						var inputPhone 					= $('#request_phone').val();
						var inputFax 						= $('#request_fax').val();

						var inputEXP 						= $("input[name='request_experience']:checked").val();
						var inputEXPOther 			= $('#request_experience_other').val();

						var errorStatus = 0;


						if(inputDateTime.length != 10) {
								errorStatus += 1;
						}

						if(inputTypeOfCompany == 'person') {
									if(inputName.length < 2 ) {
											errorStatus += 1;
									}
									if(inputSurname.length < 2) {
											errorStatus += 1;
									}
						}
						else {
									if(inputCompanyName.length < 2) {
											errorStatus += 1;
									}
						}

						if(inputPhone.length != 10) {
								errorStatus += 1;
						}

						if(errorStatus > 0) {
								popupAlert( "", "กรุณากรอกข้อมูลให้ครบถ้วน");
								return false;
						}
						else {
								//$("#franchise-form-register").foundation("selectTab", $("#panel2"));
								return false;
						}
		});

		return false;
}



jQuery(document).ready(function(){

			var date = new Date();
		  var datestring = ('00' + date.getDate()).slice(-2) + '/' + ('00' + (date.getMonth() + 1)).slice(-2) + '/' + ('0000' + date.getFullYear()).slice(-4);

			$('#request_datetime').val(datestring);
			$('#request_datetime').datetimepicker({
				i18n:{
							de:{
									 months:['Januar','Februar','März','April', 'Mai','Juni','Juli','August', 'September','Oktober','November','Dezember', ],
									 dayOfWeek:["So.", "Mo", "Di", "Mi", "Do", "Fr", "Sa.", ]
							}
					},
					timepicker:false,
					format:'d/m/Y',
					minDate: 0
			});

			/* Tabs 1 */
			inputDefaultValue('request_username', 'ชื่อ');
			inputDefaultValue('request_surname', 'นามสกุล');
			inputDefaultValue('request_company_name', 'ชื่อนิติบุคคล');
			inputDefaultValue('request_phone', 'โทรศัพท์บ้าน');
			inputDefaultValue('request_tel', 'โทรศัพท์มือถือ');
			inputDefaultValue('request_fax', 'แฟกซ์');

			//ver type_of_company = $("input[name=type_of_company]:checked").val();

			$("input[name='type_of_company']").click(function() {
    			var category = this.value;
					if(category == 'person') {
							$("#request_username").prop('disabled', false);
							$("#request_surname").prop('disabled', false);
							$("#request_company_name").prop('disabled', true);
					}
					if(category == 'company') {
							$("#request_username").prop('disabled', true);
							$("#request_surname").prop('disabled', true);
							$("#request_company_name").prop('disabled', false);
					}
			});

			$("input[name='request_experience']").click(function() {
    			var exp = this.value;
					if(exp == 'noexp') {
							$("#request_experience_other").prop('disabled', true);
					}
					else {
							$("#request_experience_other").prop('disabled', false);
					}
			});



			inputDefaultValue('request_addr_no', 'เลขที่');
			inputDefaultValue('request_moo', 'หมู่');
			inputDefaultValue('request_build', 'อาคาร');
			inputDefaultValue('request_floor', 'ชั้น');
			inputDefaultValue('request_room', 'ห้อง');
			inputDefaultValue('request_road', 'ถนน');
			inputDefaultValue('request_postnumber', 'รหัสไปรษณีย์');

			inputDefaultValue('request_city', 'เมือง');

			validateInputForm();

});
