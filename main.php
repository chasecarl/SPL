<?php header ("Content-Type: text/html; charset=utf-8")?>
<?php
     include 'autorize.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Notes
        </title>
        <link rel="stylesheet" href="bootstrap.css"/>
        <script src="bootstrap.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>

        <script type="text/javascript"> 
		$(function() {
			
			$('.form2').draggable({
				containment: "window"
			});
		});
    </script>
    </head>
    <body>
        <div align="right"><h4>Welcome, <?php  echo $person["name"];?> | <a href="logout.php">Log out</a>&nbsp;</h4></div><br>
        
        <div align="center">
		<h2>Write notes!</h2><br>
        <div class="form">
            <form method="post" action="addNote.php">
                <textarea class="note" name="notes" cols="48" rows="7" wrap="hard" required placeholder="Write your note here..."></textarea><br>
                <input type="submit" value="OK" class="btn btn-success"/>
                <span id="result"></span>
            </form><br>
        </div>  
        </div>
        
        <hr width="60%">
		
        <div class="container">
		<h2 style="text-align:center">Your notes</h2>
		<div class="row">
		<div class="span3"><?php
		$notes = $person["notes"];
		if (count($notes)== 1)
		{
			echo "<div align='center'><div class='form' style='text-align:center;'><span style='color:crimson;font-size:24px;'>Create your first note now!</span></div></div>";
		}
		
		for ($i = count($notes)-1; $i > 0; $i--)
		{
			?>
			<div class="col-sm-4 form2">
			<h5 style='width:20%'><?php echo $notes[$i]["date"]?></h5>
			<form method="post" action="deleteNote.php" id="delete">
				<div class="row">
					<div class="col-sm-6"><textarea class="id" name="id" cols="2" rows="1" style="resize:none;"><?php echo $notes[$i]["id"]?></textarea></div>
					<div class="col-sm-6" align="right"><input type="submit" value="X" class="btn btn-danger" title="Delete" align="right"/></div>
				</div>
			</form>
			<form method="post" action="changeNote.php">
				<textarea style="display:none;" class="id" name="id"><?php echo $notes[$i]["id"]?></textarea>
				<textarea class="note2" name="note" cols="48" rows="7" wrap="hard" onkeypress="if(event.keyCode==10||(event.ctrlKey && event.keyCode==13))koment.click();" style="resize:none;"><?php echo $notes[$i]["text"];?>
				</textarea><br>
				<input type="submit" value="Save" class="btn btn-primary" id="koment"/>
			</form>
			</div><?php
		}?>
		</div>
		</div>
		</div><br>
    </body>
</html>