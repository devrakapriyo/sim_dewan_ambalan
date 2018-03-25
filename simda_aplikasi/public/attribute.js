$(document).ready(function(){

    $('.parallax').parallax();

    $(".button-collapse").sideNav();

    $(".dropdown-button").dropdown();

    $('select').material_select();

    $('.materialboxed').materialbox();

    $('.modal-trigger').leanModal();

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });

	$('.slider').slider({full_width: true});

	$('.scrollspy').scrollSpy();

	$("#back-top").hide();

	$('ul.tabs').tabs('select_tab', 'tab_id');

	setInterval(function () {
        $(".autoload").load('monitoring-load')
    }, 2000);

	var options = [
	    {selector: '.class', offset: 200, callback: 'globalFunction()' },
	    {selector: '.other-class', offset: 200, callback: 'globalFunction()' },
	  ];
	  Materialize.scrollFire(options);
	
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('.div-top').fadeIn();
			} else {
				$('.div-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('.div-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
});

function addtable() {

    var table = document.getElementById("addtable");
    var row = table.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = "<div class='input-field'><input placeholder='Masukan nis peserta' type='text' class='validate' name='nis[]' required>" + "</div>";
    cell2.innerHTML = "<div class='input-field'><input placeholder='Masukan pembinaan peserta' type='text' class='validate' name='pembinaan[]' required>" + "</div>";
}
// function initialize() {
//         var mapCanvas = document.getElementById('map');
//         var mapOptions = {
//           center: new google.maps.LatLng(-6.64524,106.843623),
//           zoom: 18,
//           mapTypeId: google.maps.MapTypeId.ROADMAP
//         }
//         var map = new google.maps.Map(mapCanvas, mapOptions)
// }
// google.maps.event.addDomListener(window, 'load', initialize);

$(document).ready(function () {
    setInterval(function () {
        $(".isikomentar").load('isikomentar')
    }, 100);
});

$(document).ready(function () {
    $('#komentar').submit(function (event) {
        event.preventDefault();
        $('#errorContainer').addClass('hide');
        var type = $(this).attr('method');
        var action = $(this).attr('action');
        var data = $(this).serializeArray();
        $.ajax({
            url: action,
            type: type,
            data: data,
            dataType: "json",
            success: function (data, textStatus, jqXHR) {
                $('#view').append(row);
                $('#komentar').trigger('reset');
                $('.nama').trigger('reset');
                $('.email').trigger('reset');
                $('.komentar').trigger('reset');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                var errors = jqXHR.responseJSON;
                $('#errorBag').html('');
                $.each(errors, function (index, value) {
                    $('#errorContainer').removeClass('hide');
                    $('#errorBag').append('<li>' + value + '</li>');
                });
            }
        });
    });
});