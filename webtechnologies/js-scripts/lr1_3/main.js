var checking = true;
		while (checking) {
			var userName = prompt("Введите сюда свое имя:", "Ваше имя");
			if (userName!=null) {
				document.write ("<p>" + userName + "</p>");
				}
			var usersAnwser = confirm ("Начать заново?")
			if (!usersAnwser) {
				alert ("Ну и правильно!")
				checking=false;
			}
			else {
				alert ("Не надоело?");
			}
		}
