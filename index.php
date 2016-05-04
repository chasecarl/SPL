<?php
header ("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign in</title>
        <link rel="stylesheet" href="style.css"/>
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>
    <script src="jquery-2.2.2.min.js">
    </script>
        
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
		<br><br><br><br>
        <h1>Sign in</h1>
        <div align = "center">
            <div class = "form">
                <form  action="" method="post" id = "myform">
                    <label>Login</label><br><br><input type="text" name = "login" class="data" autofocus  autocomplete="off"/><br><br>
                    <label>Password</label><br><br><input type = "password" name = "password" class="data" /><br><br>
                    <label>Don't have an account? <a href="registration.php">Sing up</a> now!</label><br><br>
					<input type = "button" class="btn3" value="Enter" onclick="AjaxFormRequest('mistake','myform','entercheck.php')"/><br><br>
                    <div id="mistake" ></div>
                </form>
            </div>
        </div>
    </body>
</html>
