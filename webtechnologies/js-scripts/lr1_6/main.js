document.write("<table border='1' align='center'>" +
	"<th>Степень</th>" +
	"<th>Результат</th>");
			
for (var i=0; i<=5; i++) {
	document.write ("<tr><td>2<sup><small>"+ i +"</small></sup></td>"+
	"<td>"+ Math.pow(2, i) +"</td></tr>");
}
		
document.write("</table>");