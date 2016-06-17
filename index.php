<?php
header ("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
    <head>
        <title>Authorization</title>
        <link rel="stylesheet" href="bootstrap.css"/>
		<script src="bootstrap.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>
		<script src="jquery-2.2.2.min.js"></script>
        <script>
             function AjaxFormRequest(result_id,form_id,url) {
                jQuery.ajax({
                    url:     url, 
                    type:     "POST", 
                    dataType: "html", 
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
        <h1><br><p align="center">Sign in</p></h1><br><br>
        <div style='width:40%; margin:0 auto'>
			<form action="" method="post" id = "myform">
				<div class="form-group">
					<label for="login">Login</label>
					<input type="text" name="login" id="login" class="form-control" autofocus placeholder="Введите логин" autocomplete="off"/>
					<p class="help-block">Например, login</p>
				</div>
				<div class="form-group">
					<label for="pass">Password</label>
					<input type="password" name="password" class="form-control" id="pass" placeholder="Введите пароль"/>
				</div>
				<label>Don't have an account? <a href="registration.php">Sing up</a> now!</label><br><br>
				<input type="button" class="btn btn-success" value="Enter" onclick="AjaxFormRequest('mistake','myform','entercheck.php')"/>
				<div id="mistake"></div>
			</form>
		</div>
    </body>
</html>
