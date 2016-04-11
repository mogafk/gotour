$(document).ready(function(){
	var $dateContainer = $('.hotel-search--date');
	$('.hotel-roundtour-date--open').click(function(){
		if($dateContainer.is(':hidden')){
			$dateContainer.slideDown(300);
		}
		return false;
	});
	$('.hotel-selectdate--save').click(function(){
		// dateSave();
		$dateContainer.slideUp(150);
		return false;
	});
});