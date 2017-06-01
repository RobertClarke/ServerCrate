$(function() {

	$('#faq .questions li').click(function(e) {
		var container = $('#faq .questions');
		
		$('li', container).removeClass('selected');
		$(this).addClass('selected');

		$('#faq .answer article').hide();
		$('#faq .answer article[data-answer-id="'+ $(this).attr('data-answer-id') +'"]').show();

	});

	$('.proxy-select .plans article').click(function() {
		var container = $('.proxy-select .plans');

		$('article', container).removeClass('selected');
		$(this).addClass('selected');

	});

	$('.proxy-select').on('submit', function(e) {
		e.preventDefault();
	});

});