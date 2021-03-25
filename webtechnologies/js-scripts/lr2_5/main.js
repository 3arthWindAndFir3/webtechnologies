$(".drag").mousemove(function(e){
$( ".drag" ).draggable();
});

$(".drag").mousedown(function(e){
$( ".drag" ).css("opacity", "0.5"); 
});

$(".drag").mouseup(function(e){
$( ".drag" ).css("opacity", "1"); 
});

