var checkingInput=false;
var password="пароль";
while (checkingInput==false) {
	var usersInput = prompt("Введите пароль для доступа к программе" 
	+ " сравнения:");
	if (usersInput!=password) {
		alert ("Неверный пароль!");
	}
	else {
		alert ("Добро пожаловать!"); 
		checkingInput=true;
	}
};
var x, y; 
x=parseFloat(prompt("Введите значение х",''));
// метод parseInt() переводит строку в целое число
y=parseFloat(prompt("Введите значение у",'')); 
if(x<y) {
	alert("Число y больше x");
} 
else if (x>y) {
	alert("Число x больше y"); 
}
else if (x==y) {
	 alert ("x и y равны друг другу!");
}
