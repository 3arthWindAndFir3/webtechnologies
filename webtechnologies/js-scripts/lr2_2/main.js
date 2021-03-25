$("#send").click(function(){ 
	//имя
	if ($("#name").val().length == 0){ 
	alert ("Заполните поле Ваше имя!"); }
	//пароль
	if ($("#pass").val().length==0 || ($("#pass").val().length)<4) {
	alert ("Поле пароль не заполнено или содержит менее 4 символов!");
	}
	//подтверждение
	if ($("#pass").val()!=$("#repeat").val()) {
	alert("Пароли не совпадают друг с другом!");
	}
	//электронная почта
	if ($("#email").val().length == 0){ 
	alert ("Заполните поле Адрес электронной почты!"); }

	var mailAddress = ($("#email").val());
	var arr = mailAddress.split('');
	var checking = false;

	for (var i=0; i<arr.length; i++) {
		if (arr[i]=='@') {
			checking=true;
		}
	}
	if (checking==false) {
		alert ("Адрес электронной почты не содержит @!");
	}
	//сообщение
	if ($("#contain").val().length==0 || ($("#contain").val().length)<10){ 
	alert ("Письмо должно обязательно содержать не менеее 10 знаков!"); }

}); 