$(document).ready(function(){
	$('#slide-home').owlCarousel({
		items:1,
		loop: true,
		nav: true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
	});
})

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})

$('#myModal').on('show.bs.modal', function (e) {
  if (!data) return e.preventDefault() // stops modal from being shown
})