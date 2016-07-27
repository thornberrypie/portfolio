$(document).ready(function($){
	function updateSlider(ui){
		var val = ui.value;
		var lineWidth = $('.ui-slider-handle').css('left');
		var balance = parseInt($('.balance .value').text());
		$('.currentval .val').text(val);
		$('.yellow-line').width(lineWidth);
	}

	var sliderDiv = $('.slider');

	var sliderMin = parseInt(sliderDiv.attr('data-min'));
	var sliderMax = parseInt(sliderDiv.attr('data-max'));
	var sliderBalance = parseInt(sliderDiv.attr('data-balance'));

	
	//Activate slider
	sliderDiv.slider({
		'min': sliderMin,
		'max': sliderMax,
		'value': sliderBalance,
		'create': function(event, ui){
			var min =  sliderDiv.slider( "option", "min" );
			var max =  sliderDiv.slider( "option", "max" );
			var val =  sliderDiv.slider( "option", "value" );
			var lineWidth = $('.ui-slider-handle').css('left');
			$('.ui-slider-handle').html('<span class="currentval"><span class="val">'+val+'</span>c</span>');
			$('.slider').append('<span class="yellow-line" style="width:'+lineWidth+'"></span>');
			var minMax = '<span class="min"><span>'+min+'c</span>Min</span>';
			minMax += '<span class="max"><span>'+max+'c</span>Max</span>';
			$('.slider-inner').append(minMax);
		},
		'slide': function(event, ui){
			updateSlider(ui);
			//$('.ui-slider-handle').draggable('option', 'snapTolerance', ui.value);
		},
		'change': function(event, ui){
			updateSlider(ui);
		}
	});

	//Enable dragging of slider for touchscreens
	$('.slider').draggable({
		containment: '.slider',
		snap: true,
		snapTolerance: 0
	});
});