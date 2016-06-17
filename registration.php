<?php
header ("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <link rel="stylesheet" href="bootstrap.css"/>
        <script src="bootstrap.js"></script>
		<script src="jquery-2.2.2.min.js"></script>
        <script>
             function AjaxFormRequest(result_id,form_id,url) {
                jQuery.ajax({
                    url:     url, //Адрес подгружаемой страницы
                    type:     "POST", //Тип запроса
                    dataType: "html", //Тип данных
                    data: jQuery("#"+form_id).serialize(), 
                    success: function(response) { 
                    document.getElementById(result_id).innerHTML = response;
                },
                error: function(response) { //Если ошибка
                document.getElementById(result_id).innerHTML = "Ошибка при отправке формы";
                }
             });
        }
        </script>
      
    </head>
    <body>
        <br><br>
        <h1><p align="center">Registration</p></h1><br>
        <div style='width:40%; margin:0 auto'>
			<form action="" method="post" id="regForm">
				<div class="form-group">
					<label for="name">Your name</label>
					<input type="text" name="name" class="form-control" id="name" autofocus placeholder="Например, Имя"/>
				</div>
				<div class="form-group">
					<label for="email">Your e-mail</label>
					<input type="tel" name="email" class="form-control" id="email" placeholder="example@exam.ex"/>
				</div>
				<div class="form-group">
					<label for="login">Login</label>
					<input type ="text" name="login" class="form-control" id="login" autocomplete="off" placeholder="Например, login1"/>
				</div>
				<div class="form-group">
					<label for="pass">Password</label>
					<input type="password" name="password" class="form-control" id="pass" placeholder="Введите пароль тут"/>
				</div>
				<div class="form-group">
					<label for="pass">Repeat password</label>
					<input type="password" name="password2" class="form-control" id="pass" placeholder="Ещё разок"/>
				</div>
				<label>Already have an account? <a href="index.php">Sing in!</a></label><br>
				<input type="button" value="Sign up" class="btn btn-primary" onclick="AjaxFormRequest('result','regForm','regcheck.php')"/>
				<div id="result"></div>
			</form>
		</div>
    </body>
</html>