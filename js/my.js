$(function(){
  $.datepicker.regional['ru'] = {
	closeText: 'Закрыть',
	prevText: '<Пред',
	nextText: 'След>',
	currentText: 'Сегодня',
	monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
	'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
	monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
	'Июл','Авг','Сен','Окт','Ноя','Дек'],
	dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
	dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
	dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
	weekHeader: 'Не',
	dateFormat: 'dd.mm.yy',
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: ''
};
$.datepicker.setDefaults(($.datepicker.regional["ru"])
 );
$.timepicker.regional['ru'] = {
	separator: '@',
	stepMinute: 10 ,
	timeOnlyTitle: 'Выберите время',
	timeText: 'Время',
	hourText: 'Часы',
	minuteText: 'Минуты',
	secondText: 'Секунды',
	millisecText: 'миллисекунды',
	currentText: 'Теперь',
	closeText: 'Закрыть',
	ampm: false ,
       
};
//Тут ограничение при выборе одной из дат,в другой изменяются диапазоны выбора (Limiting the choice of one of the dates and dependence in the range of choice and dates)
  $.timepicker.setDefaults($.timepicker.regional['ru']);
     $('#time_start').datetimepicker({
  	onClose: function(dateText, inst) {
        var endDateTextBox = $('#time_end');
        if (endDateTextBox.val() != '') {
            var testStartDate = new Date(dateText);
            var testEndDate = new Date(endDateTextBox.val());
            if (testStartDate > testEndDate)
                endDateTextBox.val(dateText);
        }
        else {
            endDateTextBox.val(dateText);
        }
    },
    onSelect: function (selectedDateTime){
        var start = $(this).datetimepicker('getDate');
          $('#time_end').datetimepicker('option', 'minDate', new Date(start.getTime()));
              }
  
});

  $('#time_end').datetimepicker({
    onClose: function(dateText, inst) {
        var startDateTextBox = $('#time_start');
        if (startDateTextBox.val() != '') {
            var testStartDate = new Date(startDateTextBox.val());
            var testEndDate = new Date(dateText);
            if (testStartDate > testEndDate)
                startDateTextBox.val(dateText);
        }
        else {
            startDateTextBox.val(dateText);
        }
    },
    onSelect: function (selectedDateTime){
        var end = $(this).datetimepicker('getDate');
        $('#time_start').datetimepicker('option', 'maxDate', new Date(end.getTime()) );
    }
});
});
// Cтавим по умолчанию текущий день и время 00:00,начальное время -1 день от текущего(Set default day: current day and time 00:00, the start day that -1 day from the current)
$("#time_start").ready(function(){
    var myDate=new Date();
    var s= new Date((myDate.getYear()+1900)+" "+(myDate.getMonth()+1)+" "+(myDate.getDate()-1));
    $('#time_start').datetimepicker('setDate', s );
});
$("#time_end").ready(function(){
var d= new Date();
var m= new Date((d.getYear()+1900)+" "+(d.getMonth()+1)+" "+d.getDate());
    $('#time_end').datetimepicker('setDate', m );
});
// Радиобатоны on/off (radiobutton 2 positions on/off)
$(document).ready(function() {
	$(".checklist .checkbox-select").click(
    function(event) {
    event.preventDefault();
    $(this).parent().addClass("selected");
    $(this).parent().find(":checkbox").attr("checked","checked");
	}
);
$(".checklist .checkbox-deselect").click(
    function(event) {
    event.preventDefault();
$(this).parent().removeClass("selected");
$(this).parent().find(":checkbox").removeAttr("checked");
	}
);
  });
$(document).ready( function(){ 
	$(".cb-enable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-disable',parent).removeClass('selected');
		$(this).addClass('selected');
		$('.checkbox',parent).attr('checked', true);
	});
	$(".cb-disable").click(function(){
		var parent = $(this).parents('.switch');
		$('.cb-enable',parent).removeClass('selected');
		$(this).addClass('selected');
		$('.checkbox',parent).attr('checked', false);
	});
$('#myForm').submit(function(){ 
	                $.ajax({  
                    type: "GET",  
                    url: "ajax.php",  
                  data: $('#myForm').serialize(),  
                    success: function(html){  
                        $(".data").html(html);  
                    }  
                });  
                return false;  
          });  
	
});
//Изменение input при разрешении от 1024px (Changing the input at a resolution of 1024)
  (function($) {
    $.fn.autoClear = function () {
        // Cохраняем во внутреннюю переменную текущее значение (Keep the internal variable current value)
        $(this).each(function() {
            $(this).data("autoclear", $(this).attr("value"));
        });
        $(this)
            .bind('focus', function() {   // Обработка фокуса (Processing event focus)
                if ($(this).attr("value") == $(this).data("autoclear")) {
                    $(this).attr("value", "").addClass('autoclear-normalcolor');
                }
            })
            .bind('blur', function() {    // Обработка потери фокуса (Processing event lost focus)
                if ($(this).attr("value") == "") {
                    $(this).attr("value", $(this).data("autoclear")).removeClass('autoclear-normalcolor');
                }
            });
        return $(this);
    }
})(jQuery)
 
$(function(){
    // Привязываем плагин ко всем элементам с классом "autoclear"(Bind the plugin to all elements with class "autoclear")
if(screen.width<1025) {
        $("[name=dur_min]").attr('placeholder','MIN' );
    	$("[name=dur_max]").attr('placeholder', 'MAX');
	$("[name=dur_min]").autoClear();
	$("[name=dur_max]").autoClear();  
  }
});
$(document).bind("ajaxComplete",function(){ 
	$(function() {

  // call the tablesorter plugin and apply the ui theme widget
  $("table").tablesorter({
    widthFixed: false,

    // widget code now contained in the jquery.tablesorter.widgets.js file
    widgets : ['uitheme', 'zebra',"resizable"],

    widgetOptions : {
      // adding zebra striping, using content and default styles - the ui css removes the background from default
      // even and odd class names included for this demo to allow switching themes
      zebra   : ["ui-widget-content even", "ui-state-default odd"],

      // change default uitheme icons - find the full list of icons here: http://jqueryui.com/themeroller/ (hover over them for their name)
      // default icons: ["ui-icon-arrowthick-2-n-s", "ui-icon-arrowthick-1-s", "ui-icon-arrowthick-1-n"]
      // ["up/down arrow (cssHeaders/unsorted)", "down arrow (cssDesc/descending)", "up arrow (cssAsc/ascending)" ]
      uitheme : ["ui-icon-carat-2-n-s", "ui-icon-carat-1-s", "ui-icon-carat-1-n"]
    }
  });
$('tbody tr').hover(function() {
	$(this).toggleClass('backlight');
	}, function() {
	$(this).removeClass('backlight');
	});
	// Выделение строк в таблице(Lecting rows in a table)
	$('tbody').delegate('tr','click',function() {
	$(this).toggleClass('selectlines');
  });
  });
});




