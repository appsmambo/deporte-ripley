$(document).ready(function () {
	var content = $(window).height() - 110;
	$('#container-registro').height(content);
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

});