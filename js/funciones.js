function toTitleCase(str) {
	return str.replace(/\w\S*/g, function (txt) {
		return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
	});
}
$(document).ready(function () {
	var content = $(window).height() - 130;
	$('#container-registro, .columnas-deportes, #container-premios').height(content);
	$('select#departamento').each(function () {
		var title = 'Seleccione';
		if ($('option:selected', this).val() != '')
			title = $('option:selected', this).text();
		$(this)
				.css({'z-index': 10, 'opacity': 0, '-khtml-appearance': 'none'})
				.after('<span class="select1">' + title + '</span>')
				.change(function () {
					val = $('option:selected', this).text();
					$(this).next().text(val);
				})
	});
	$('select#provincia').each(function () {
		var title = 'Seleccione';
		if ($('option:selected', this).val() != '')
			title = $('option:selected', this).text();
		$(this)
				.css({'z-index': 10, 'opacity': 0, '-khtml-appearance': 'none'})
				.after('<span class="select2">' + title + '</span>')
				.change(function () {
					val = $('option:selected', this).text();
					$(this).next().text(val);
				})
	});
	$('select#distrito').each(function () {
		var title = 'Seleccione';
		if ($('option:selected', this).val() != '')
			title = $('option:selected', this).text();
		$(this)
				.css({'z-index': 10, 'opacity': 0, '-khtml-appearance': 'none'})
				.after('<span class="select3">' + title + '</span>')
				.change(function () {
					val = $('option:selected', this).text();
					$(this).next().text(val);
				})
	});
	$('input:checkbox').screwDefaultButtons({
		image: 'url("images/checkbox.png")',
		width: 22,
		height: 21
	});
	$('#departamento').change(function () {
		var id;
		id = $(this).val();
		$.ajax({
			url: urlBase + '/getProvincias',
			data: 'id=' + id,
			error: function () {
				console.log('error');
			},
			dataType: 'json',
			success: function (data) {
				var html;
				html = '<option>Provincia</option>';
				$.each(data, function (i, item) {
					html += '<option value="' + item.id + '">' + toTitleCase(item.provincia.toLowerCase()) + '</option>';
				});
				$('#provincia').val('').trigger('change').html(html);
				$('#distrito').val('').trigger('change');
			},
			type: 'POST'
		});
	});
	$('#provincia').change(function () {
		var id;
		id = $(this).val();
		$.ajax({
			url: urlBase + '/getDistritos',
			data: 'id=' + id,
			error: function () {
				console.log('error');
			},
			dataType: 'json',
			success: function (data) {
				var html;
				html = '<option>Distrito</option>';
				$.each(data, function (i, item) {
					html += '<option value="' + item.id + '">' + toTitleCase(item.distrito.toLowerCase()) + '</option>';
				});
				$('#distrito').val('').trigger('change').html(html);
			},
			type: 'POST'
		});
	});
	$.scrollIt({
		easing: 'linear',
		topOffset: -66
	});
	$("footer .col-sm-10 span").click(function () {
		$("#terminos-layer").fadeIn("slow");
		$("footer .col-sm-10 span img.uno-terminos").fadeOut("fast", function(){
			$("footer .col-sm-10 span img.dos-terminos").fadeIn("fast");
		});
	});
	$(".btn-close").click(function () {
		$("#terminos-layer").fadeOut("slow");
		$("footer .col-sm-10 span img.dos-terminos").fadeOut("fast", function(){
			$("footer .col-sm-10 span img.uno-terminos").fadeIn("fast");
		});
	});
	$("#registro").validate({
		rules: {
			nombres: "required",
			apellidos: "required",
			dni: "required",
			email: {
				required: true,
				email: true
			},
			departamento: "required",
			provincia: "required",
			distrito: "required"
		},
		submitHandler: function(form) {
			$.ajax({
				url: urlBase + '/registro',
				data: $('#registro').serialize(),
				error: function () {
					console.log('error');
				},
				dataType: 'json',
				success: function (data) {
					if (data.success == 'error') {
						$("#error-layer").fadeIn("slow");
						setTimeout(function () {
							$("#error-layer").fadeOut("slow");
						}, 5000);
					} else {
						$("#gracias-layer").fadeIn("slow");
						setTimeout(function () {
							$("#gracias-layer").fadeOut("slow", function(){
								$(".registro-content").addClass("none");
								$(".content-deportes-3").fadeIn("slow");
							});
						}, 5000);
					}
				},
				type: 'POST'
			});
		}
	});
	$('#dni').keyup(function () {
		this.value = this.value.replace(/[^0-9\.]/g, '');
	});
});