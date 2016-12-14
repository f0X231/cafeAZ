
function selectTab01() {
		$('.tabs-title-01').click(function() {
				$('.tabs-title-01').removeClass('is-active');
				$('.tabs-title-02').removeClass('is-active');
				$('.tabs-title-03').removeClass('is-active');
				$('.tabs-title-01').addClass('is-active');

				$('#panel1').removeClass('is-active');
				$('#panel2').removeClass('is-active');
				$('#panel3').removeClass('is-active');
				$('#panel1').addClass('is-active');

				$('.register-form-doc').css('display', 'block');
		});
}

function selectTab02() {
		$('.tabs-title-02').click(function() {
					if(!checkFormStep01()) {
					 		popupAlert( "", "กรุณากรอกข้อมูลให้ครบถ้วน");
							return false;
					}

					$('.tabs-title-01').removeClass('is-active');
					$('.tabs-title-02').removeClass('is-active');
					$('.tabs-title-03').removeClass('is-active');
					$('.tabs-title-01').addClass('is-active');
					$('.tabs-title-02').addClass('is-active');

					$('#panel1').removeClass('is-active');
					$('#panel2').removeClass('is-active');
					$('#panel3').removeClass('is-active');
					$('#panel2').addClass('is-active');

					$('.register-form-doc').css('display', 'none');

					$('.btn-prev-panel1').click(function() {
							$('.tabs-title-01').removeClass('is-active');
							$('.tabs-title-02').removeClass('is-active');
							$('.tabs-title-03').removeClass('is-active');
							$('.tabs-title-01').addClass('is-active');
							$('.tabs-title-02').addClass('is-active');

							$('#panel1').removeClass('is-active');
							$('#panel2').removeClass('is-active');
							$('#panel3').removeClass('is-active');
							$('#panel2').addClass('is-active');
					});
		});
}

function selectTab03() {
		$('.tabs-title-03').click(function() {
				if(!checkFormStep02()) {
						popupAlert( "", "กรุณากรอกข้อมูลให้ครบถ้วน");
						return false;
				}

				$('.tabs-title-01').removeClass('is-active');
				$('.tabs-title-02').removeClass('is-active');
				$('.tabs-title-03').removeClass('is-active');
				$('.tabs-title-01').addClass('is-active');
				$('.tabs-title-02').addClass('is-active');
				$('.tabs-title-03').addClass('is-active');

				$('#panel1').removeClass('is-active');
				$('#panel2').removeClass('is-active');
				$('#panel3').removeClass('is-active');
				$('#panel3').addClass('is-active');

				$('.register-form-doc').css('display', 'none');

				$('.btn-prev-panel2').click(function() {
						$('.tabs-title-01').removeClass('is-active');
						$('.tabs-title-02').removeClass('is-active');
						$('.tabs-title-03').removeClass('is-active');
						$('.tabs-title-01').addClass('is-active');
						$('.tabs-title-02').addClass('is-active');

						$('#panel1').removeClass('is-active');
						$('#panel2').removeClass('is-active');
						$('#panel3').removeClass('is-active');
						$('#panel2').addClass('is-active');

						return false;
				});
		});
}

function selectTab() {
		selectTab01();
		selectTab02();
		selectTab03();
}

function popupAlert(title, text) {
	swal({
				title: title,
				text: text,
				html: true
	});
}

function validateInputFormStep01() {

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

								$('.tabs-title-01').removeClass('is-active');
								$('.tabs-title-02').removeClass('is-active');
								$('.tabs-title-03').removeClass('is-active');
								$('.tabs-title-01').addClass('is-active');
								$('.tabs-title-02').addClass('is-active');

								$('#panel1').removeClass('is-active');
								$('#panel2').removeClass('is-active');
								$('#panel3').removeClass('is-active');
								$('#panel2').addClass('is-active');

								$('.register-form-doc').css('display', 'none');

								$('.btn-prev-panel1').click(function() {
										$('.tabs-title-01').removeClass('is-active');
										$('.tabs-title-02').removeClass('is-active');
										$('.tabs-title-03').removeClass('is-active');
										$('.tabs-title-01').addClass('is-active');
										$('.tabs-title-02').addClass('is-active');

										$('#panel1').removeClass('is-active');
										$('#panel2').removeClass('is-active');
										$('#panel3').removeClass('is-active');
										$('#panel2').addClass('is-active');
								});

								return false;
						}
		});

		return false;
}

function checkFormStep01() {
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


			if(inputDateTime.length != 10)
						errorStatus += 1;

			if(inputTypeOfCompany == 'person') {
						if(inputName.length < 2 )  		errorStatus += 1;
						if(inputSurname.length < 2) 	errorStatus += 1;
			}
			else {
						if(inputCompanyName.length < 2)		errorStatus += 1;
			}

			if(inputPhone.length != 10)
					errorStatus += 1;


			if(errorStatus > 0)	return false;
			else 								return true;

}

function validateInputFormStep02() {
		$('.btn-next-panel3').click(function() {
				var whereStation 			= $("input[name='request_station']:checked").val();
				var branchLocation 		= $("input[name='request_local_branch']:checked").val();

				var inputAddr 				= $('#request_addr_no').val();
				var inputMoo 					= $('#request_moo').val();
				var inputBuild 				= $('#request_build').val();
				var inputFloor 				= $('#request_floor').val();
				var inputRoom 				= $('#request_room').val();
				var inputRoad 				= $('#request_road').val();
				var inputProvince 		= $('#select_province').val();
				var inputDistrict 		= $('#select_district').val();
				var inputTumbon 			= $('#select_tumbon').val();
				var inputPostNumber 	= $('#request_postnumber').val();

				var inputCountry 			= $('#select_country').val();
				var inputCity 				= $('#request_city').val();

				var inputAreaName 				= $('#request_area').val();
				var inputSelectLocation 	= $('#select_location').val();
				var inputNamePlace 				= $('#request_name_place').val();
				var inputLatitude 				= $('#request_lat').val();
				var inputLongitude 				= $('#request_lng').val();

				var errorStatus = 0;

				if(branchLocation == 'thailand') {
							if(inputAddr.length <= 0  )				errorStatus += 1;
							if(inputMoo.length <= 0) 					errorStatus += 1;
							if(inputBuild.length <= 0  )			errorStatus += 1;
							if(inputFloor.length <= 0) 				errorStatus += 1;
							if(inputRoom.length <= 0  )				errorStatus += 1;
							if(inputRoad.length <= 0) 				errorStatus += 1;
							if(inputProvince.length <= 0  )		errorStatus += 1;
							if(inputDistrict.length <= 0) 		errorStatus += 1;
							if(inputTumbon.length <= 0  )			errorStatus += 1;
							if(inputPostNumber.length <= 0) 	errorStatus += 1;
				}
				else {
							if(inputCountry.length <= 0  )		errorStatus += 1;
							if(inputCity.length <= 0) 				errorStatus += 1;
				}

				if(inputAreaName.length <= 0) 					errorStatus += 1;
				if(inputSelectLocation.length <= 0) 		errorStatus += 1;
				if(inputNamePlace.length <= 0) 					errorStatus += 1;
				if(inputLatitude.length <= 0) 					errorStatus += 1;
				if(inputLongitude.length <= 0) 					errorStatus += 1;

				if(errorStatus > 0) {
						popupAlert( "", "กรุณากรอกข้อมูลให้ครบถ้วน");
						return false;
				}
				else {
						$('.tabs-title-01').removeClass('is-active');
						$('.tabs-title-02').removeClass('is-active');
						$('.tabs-title-03').removeClass('is-active');
						$('.tabs-title-01').addClass('is-active');
						$('.tabs-title-02').addClass('is-active');
						$('.tabs-title-03').addClass('is-active');

						$('#panel1').removeClass('is-active');
						$('#panel2').removeClass('is-active');
						$('#panel3').removeClass('is-active');
						$('#panel3').addClass('is-active');

						$('.register-form-doc').css('display', 'none');

						$('.btn-prev-panel2').click(function() {
								$('.tabs-title-01').removeClass('is-active');
								$('.tabs-title-02').removeClass('is-active');
								$('.tabs-title-03').removeClass('is-active');
								$('.tabs-title-01').addClass('is-active');
								$('.tabs-title-02').addClass('is-active');

								$('#panel1').removeClass('is-active');
								$('#panel2').removeClass('is-active');
								$('#panel3').removeClass('is-active');
								$('#panel2').addClass('is-active');

								return false;
						});
				}

		});

		return false;
}

function checkFormStep02() {

				var whereStation 			= $("input[name='request_station']:checked").val();
				var branchLocation 		= $("input[name='request_local_branch']:checked").val();

				var inputAddr 				= $('#request_addr_no').val();
				var inputMoo 					= $('#request_moo').val();
				var inputBuild 				= $('#request_build').val();
				var inputFloor 				= $('#request_floor').val();
				var inputRoom 				= $('#request_room').val();
				var inputRoad 				= $('#request_road').val();
				var inputProvince 		= $('#select_province').val();
				var inputDistrict 		= $('#select_district').val();
				var inputTumbon 			= $('#select_tumbon').val();
				var inputPostNumber 	= $('#request_postnumber').val();

				var inputCountry 			= $('#select_country').val();
				var inputCity 				= $('#request_city').val();

				var inputAreaName 				= $('#request_area').val();
				var inputSelectLocation 	= $('#select_location').val();
				var inputNamePlace 				= $('#request_name_place').val();
				var inputLatitude 				= $('#request_lat').val();
				var inputLongitude 				= $('#request_lng').val();

				var errorStatus = 0;

				if(branchLocation == 'thailand') {
							if(inputAddr.length <= 0  )				errorStatus += 1;
							if(inputMoo.length <= 0) 					errorStatus += 1;
							if(inputBuild.length <= 0  )			errorStatus += 1;
							if(inputFloor.length <= 0) 				errorStatus += 1;
							if(inputRoom.length <= 0  )				errorStatus += 1;
							if(inputRoad.length <= 0) 				errorStatus += 1;
							if(inputProvince.length <= 0  )		errorStatus += 1;
							if(inputDistrict.length <= 0) 		errorStatus += 1;
							if(inputTumbon.length <= 0  )			errorStatus += 1;
							if(inputPostNumber.length <= 0) 	errorStatus += 1;
				}
				else {
							if(inputCountry.length <= 0  )		errorStatus += 1;
							if(inputCity.length <= 0) 				errorStatus += 1;
				}

				if(inputAreaName.length <= 0) 					errorStatus += 1;
				if(inputSelectLocation.length <= 0) 		errorStatus += 1;
				if(inputNamePlace.length <= 0) 					errorStatus += 1;
				if(inputLatitude.length <= 0) 					errorStatus += 1;
				if(inputLongitude.length <= 0) 					errorStatus += 1;


				if(errorStatus > 0) return false;
				else 								return false;

}

function validateInputFormStep03() {
		$('.btn-confirm').click(function() {
					popupAlert( "", "ขอบคุณสำหรับการสมัครแฟรนไชส์ คาเฟ่ อเมซอน<br />โดยท่านจะได้รับการตอบกลับทาง E-Mail ที่ท่านได้ระบุไว้ค่ะ");
					return false;
		});
		return false;
}

function dateSelected() {
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
}

function checkClickCheckTab01() {
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

			$("input[name='request_local_branch']").click(function() {
					var exp = this.value;
					if(exp == 'thailand') {
							$("#select_country").prop('disabled', true);
							$("#request_city").prop('disabled', true);

							$("#request_addr_no").prop('disabled', false);
							$("#request_moo").prop('disabled', false);
							$("#request_build").prop('disabled', false);
							$("#request_floor").prop('disabled', false);
							$("#request_room").prop('disabled', false);
							$("#request_road").prop('disabled', false);
							$("#request_postnumber").prop('disabled', false);
							$("#select_province").prop('disabled', false);
							$("#select_district").prop('disabled', false);
							$("#select_tumbon").prop('disabled', false);
					}
					else {
							$("#select_country").prop('disabled', false);
							$("#request_city").prop('disabled', false);

							$("#request_addr_no").prop('disabled', true);
							$("#request_moo").prop('disabled', true);
							$("#request_build").prop('disabled', true);
							$("#request_floor").prop('disabled', true);
							$("#request_room").prop('disabled', true);
							$("#request_road").prop('disabled', true);
							$("#request_postnumber").prop('disabled', true);
							$("#select_province").prop('disabled', true);
							$("#select_district").prop('disabled', true);
							$("#select_tumbon").prop('disabled', true);
					}
			});
}

function checkClickCheckTab02() {
			$("input[name='request_environment']").click(function() {
					var env = this.value;

					if(env == "other") {
							$("#request_environment_other").prop('disabled', false);
					}
					else {
							$("#request_environment_other").prop('disabled', true);
					}
			});

			$("#has_department").change(function() {
					if($(this).is(":checked")) 	$("#has_department_name").prop('disabled', false);
					else 												$("#has_department_name").prop('disabled', true);
			});

			$("#has_coffee").change(function() {
					if($(this).is(":checked")) 	$("#has_coffee_name").prop('disabled', false);
					else 												$("#has_coffee_name").prop('disabled', true);
			});

			$("#has_company").change(function() {
					if($(this).is(":checked")) 	$("#has_company_name").prop('disabled', false);
					else 												$("#has_company_name").prop('disabled', true);
			});

			$("#has_condo").change(function() {
					if($(this).is(":checked")) 	$("#has_condo_name").prop('disabled', false);
					else 												$("#has_condo_name").prop('disabled', true);
			});

			$("#has_university").change(function() {
					if($(this).is(":checked")) 	$("#has_university_name").prop('disabled', false);
					else 												$("#has_university_name").prop('disabled', true);
			});

			$("#has_gasstation").change(function() {
					if($(this).is(":checked")) 	$("#has_gasstation_name").prop('disabled', false);
					else 												$("#has_gasstation_name").prop('disabled', true);
			});

			$("#has_market").change(function() {
					if($(this).is(":checked")) 	$("#has_market_name").prop('disabled', false);
					else 												$("#has_market_name").prop('disabled', true);
			});

			$("#has_shortcut").change(function() {
					if($(this).is(":checked")) 	$("#has_shortcut_name").prop('disabled', false);
					else 												$("#has_shortcut_name").prop('disabled', true);
			});

			$("#has_otherthing").change(function() {
					if($(this).is(":checked")) 	$("#has_otherthing_name").prop('disabled', false);
					else 												$("#has_otherthing_name").prop('disabled', true);
			});

			$("#has_reason").change(function() {
					if($(this).is(":checked")) 	$("#require_reason").prop('disabled', false);
					else 												$("#require_reason").prop('disabled', true);
			});

			$("#has_reason").change(function() {
					if($(this).is(":checked")) 	$("#require_reason").prop('disabled', false);
					else 												$("#require_reason").prop('disabled', true);
			});
}

function uploadMapPic() {
		$("#upload_map").upload({
    		action: "upload-target.php",
				multiple: true,
				maxSize: 5000,
		});
}

function uploadFile() {
		$("#upload_file").upload({
    		action: "upload-target.php",
				maxSize: 5000,
		});
}


jQuery(document).ready(function(){


			selectTab();
			dateSelected();

			checkClickCheckTab01();
			checkClickCheckTab02();

			uploadMapPic();
			uploadFile();

			/* Tabs 1 */
			inputDefaultValue('request_username', 'ชื่อ');
			inputDefaultValue('request_surname', 'นามสกุล');
			inputDefaultValue('request_company_name', 'ชื่อนิติบุคคล');
			inputDefaultValue('request_phone', 'โทรศัพท์บ้าน');
			inputDefaultValue('request_tel', 'โทรศัพท์มือถือ');
			inputDefaultValue('request_fax', 'แฟกซ์');
			/* Tabs 2 */
			inputDefaultValue('request_addr_no', 'เลขที่');
			inputDefaultValue('request_moo', 'หมู่');
			inputDefaultValue('request_build', 'อาคาร');
			inputDefaultValue('request_floor', 'ชั้น');
			inputDefaultValue('request_room', 'ห้อง');
			inputDefaultValue('request_road', 'ถนน');
			inputDefaultValue('request_postnumber', 'รหัสไปรษณีย์');
			inputDefaultValue('request_city', 'เมือง');
			inputDefaultValue('request_name_place', 'ชื่อสถานที่');
			inputDefaultValue('request_lat', 'ละติจูด');
			inputDefaultValue('request_lng', 'ลองติจูด');


			validateInputFormStep01();
			validateInputFormStep02();
			validateInputFormStep03();

});
