
function popupAlert(title, text) {
	swal({
				title: title,
				text: text,
				html: true
	});
}

function validateInputForm() {

		$('.btn_franchise_step_one').click(function() {
				popupAlert( "HTML <small>Title</small>!", "A custom <span style="color:#F8BB86">html<span> message.");
				return false;
		});

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

	inputDefaultValue('request_username', 'ชื่อ');
	inputDefaultValue('request_surname', 'นามสกุล');
	inputDefaultValue('request_company_name', 'ชื่อนิติบุคคล');
	inputDefaultValue('request_phone', 'โทรศัพท์บ้าน');
	inputDefaultValue('request_tel', 'โทรศัพท์มือถือ');
	inputDefaultValue('request_fax', 'แฟกซ์');

	inputDefaultValue('request_addr_no', 'เลขที่');
	inputDefaultValue('request_moo', 'หมู่');
	inputDefaultValue('request_build', 'อาคาร');
	inputDefaultValue('request_floor', 'ชั้น');
	inputDefaultValue('request_room', 'ห้อง');
	inputDefaultValue('request_road', 'ถนน');
	inputDefaultValue('request_postnumber', 'รหัสไปรษณีย์');

	inputDefaultValue('request_city', 'เมือง');


});
