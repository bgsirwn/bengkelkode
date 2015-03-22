$(document).ready(function(){
	$('#about-me-edit-button').click(function(){
		showTextArea('about-me');
	});
});


function showTextArea(id){
	var addition = '';
	if (id=='about-me') {
		addition += '<form id="about-me-form">';
		addition += '<textarea id="about-me-textarea"></textarea>';
		addition += '<input type="submit" value="save">';
		addition += '</form>';
		$('#about-me-control').hide();

		var lastValue = $('#about-me-content').html();
		$('#about-me-content').html(addition);
		$('#about-me-textarea').html(lastValue);

		$('#about-me-form').submit(function(event){
			aboutMeSubmit();
			event.preventDefault();
		});
	}
}

function closeTextArea(id){
	if (id=='about-me') {
		var addition = $('#about-me-textarea').val();
		
		$('#about-me-control').show();
		$('#about-me-content').html(addition);
	}
}


function aboutMeSubmit(){
	/*kirim ajax*/

	/*tutup text area*/
	closeTextArea('about-me');
}