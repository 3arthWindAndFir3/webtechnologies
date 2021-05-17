//константы с ценами на туры для детей и взрослых
const EgyptAdult = 3500;
const EgyptKid = 2500;
const GreeceAdult = 3800;
const GreeceKid = 2800;
const ItalyAdult = 5800;
const ItalyKid = 4800;
const FranceAdult = 4900;
const FranceKid = 3900;
const TurkeyAdult = 3700;
const TurkeyKid = 2700;

//форма с параметрами тура
$("#buy-button").click(function(){ 
//диалоговое окно
	$( "#dialogue" ).dialog();
//выпадающий список
	$( "#choose-country" ).selectmenu(); 
//календари
	$( "#date-begin" ).datepicker();

	$( "#date-end" ).datepicker();
//ползунки
var handle = $( "#adult-handle" );
    $( "#adult-number" ).slider({
      create: function() {
        handle.text( $( this ).slider( "value" ) );
      },
      slide: function( event, ui ) {
        handle.text( ui.value );
      }
    });

var handle2 = $( "#kid-handle" );
    $( "#kid-number" ).slider({
      create: function() {
        handle2.text( $( this ).slider( "value" ) );
      },
      slide: function( event, ui ) {
        handle2.text( ui.value );
      }
    });
//подсказки при наведении
	$( document ).tooltip();


//форма с расчетом стоимости тура на основе введенных параметров
$("#cost-count").click(function(){
//получение значений из формы
	var ChoosenCountry =  $('#choose-country option:selected').text();
	console.log(ChoosenCountry);
	var DateBegin=$("#date-begin").datepicker('getDate');
	console.log(DateBegin);
	var DateEnd=$("#date-end").datepicker('getDate'); 
	console.log(DateEnd);
	var DateDifference = Math.ceil((DateEnd - DateBegin) / (1000 * 60 * 60 * 24))+1;
	console.log(DateDifference);
	var AdultNumber = document.getElementById('adult-handle').innerHTML;
	var KidNumber = document.getElementById('kid-handle').innerHTML;
	console.log(AdultNumber);
	console.log(KidNumber);
//выбор формулы в зависимости от выбранной страны
	if (ChoosenCountry=="Египет") {
		var Cost = DateDifference*AdultNumber*EgyptAdult+DateDifference*KidNumber*EgyptKid;
	};
		
	if (ChoosenCountry=="Греция") {
		var Cost = DateDifference*AdultNumber*GreeceAdult+DateDifference*KidNumber*GreeceKid;
	};
	if (ChoosenCountry == "Италия") {
		var Cost = DateDifference*AdultNumber*ItalyAdult+DateDifference*KidNumber*ItalyKid;
	};
	if (ChoosenCountry == "Франция") {
		var Cost = DateDifference*AdultNumber*FranceAdult+DateDifference*KidNumber*FranceKid;
	};
	if (ChoosenCountry=="Турция") {
		var Cost = DateDifference*AdultNumber*TurkeyAdult+DateDifference*KidNumber*TurkeyKid;
	};

	//окно подтверждения
	$( "#cost-info" ).dialog();
	$("#cost").val(Cost);
	//отправка на платежный шлюз
	$("#yes").click(function(){
		$( "#time-to-pay" ).dialog();
	});
	//закрытие окна подтверждения
	$("#no").click(function(){
		 $("#cost-info").dialog('close');
	});
});


}); 

