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
	$('#enviar').click(function (e) {
		e.preventDefault();
		$.ajax({
			url: urlBase + '/registro',
			data: $('#registro').serialize(),
			error: function () {
				console.log('error');
			},
			dataType: 'json',
			success: function (data) {
				if (data.success == 'error') {
					console.log(data);
				} else {
					$("#gracias-layer").fadeIn("slow");
					setTimeout(function () {
						$("#gracias-layer").fadeOut("slow");
					}, 5000);
				}
			},
			type: 'POST'
		});
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
				$.each(data, function (i, item) {
					html += '<option value="' + item.id + '">' + toTitleCase(item.provincia.toLowerCase()) + '</option>';
				});
				$('#provincia').html(html);
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
				$.each(data, function (i, item) {
					html += '<option value="' + item.id + '">' + toTitleCase(item.distrito.toLowerCase()) + '</option>';
				});
				$('#distrito').html(html);
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
	});
});