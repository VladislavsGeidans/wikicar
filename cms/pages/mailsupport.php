
<?php
	include ("../includes/config.php");
	include ("../includes/connect.php");
?>
<meta charset="utf8">
<link rel="stylesheet" type="text/css" href="../css/mail.css">
<link href="../css/hover.css" rel="stylesheet" media="all">
	<script>
		function onClick(){
			document.getElementById("modal").style.display = "block";
		}
		function clickDel(){
			document.getElementById("modal").style.display = "none";
		}
	</script>

	<style>

	#modal{
		position: absolute;
		top: 40%;
		left: 25%;
		padding: 20px;
		width: 700px;
		height:	200px;
		background: #5A5454;
		color: #fff;
		border-radius: 10px;
		box-shadow: 0 0 10px rgba(0,0,0,0.5);
	}
	.divButton{
		text-align: center;
		width: 100px;
		height: 30px;
		background: lightblue;
		box-shadow: 0 0 5px;
	}
	.divButton:hover{
		cursor: pointer;
	}
	.del{
		width: 30px;
		height: 30px;
		border: 1px solid red;
		background: url("C:/Apache24/htdocs/diplom/cms/del.png");
		background-size: 30px;
		position: absolute;
	}
	.del:hover{
		cursor: pointer;
	}

	.textareaotvet {
		width: 200px;
		height: 40px;
		resize: none;

	}

	</style>

<div class="butto">
				<form method='post' id='userform'>
					<input type='submit' value="Удалить выбранные" class='buttons' name='did'>
					<div class="mail_cl">
						<table class="titles">
							<tr>
								<td class="radiobutton"></td>
								<td class="nr">№</td>
								<td class="maill">От Кого:</td>
								<td class="temat">Тема: </td>
								<td class="textt">Текст:</td>
							</tr>
						</table>


				<?php
					/*ПОКАЗ ОТЗЫВОВ В ТАБЛИЦЕ*/
						if (!isset($email_id))
						{
							$query = "SELECT * FROM mails ORDER BY id DESC ";
							if ($result = mysqli_query($link, $query)) 
							{
    							while ($row = mysqli_fetch_assoc($result)) 
    							{
   									echo '<table class="pisma">
											<tr>
												<td class="radiobutton">
												<input type="checkbox" name="checkboxvar[]" value="'.$row["id"].'"><br>
												<td class="nr">'.$row["id"].'</td>
												<td class="maill"><a onclick="onClick();" href="admin.php?pages=mail&mail_id='.$row["id"].'">'.$row["email_cl"].'</a></td>
												<td class="temat">'.$row["temats_m"].'</td>
												<td class="textt">'.$row["text_m"].'</td>
											</tr>
										</table>';
   								}	
    							mysqli_free_result($result);
							}
							echo "</form>";
						}
					/*---*/


					/*ОЧИСТКА ТАБЛИЦЫ*/
					if(isset($_GET['del'])) {
						mysqli_query($link, 'TRUNCATE TABLE mails');
					}
					/*---*/

					/*УДАЛЕНИЕ ПО CHECKBOX*/
					if (isset($_POST['did']))
					{
  						$aDoor = $_POST['checkboxvar'];

  						if(empty($aDoor))
  						{
   							echo("Вы ничего не выбрали.");
  						}
  						else
  						{
    						$N = count($aDoor);
    						for($i=0; $i < $N; $i++)
    						{
								$delete = 'DELETE FROM mails WHERE id='.$aDoor[$i].'';
								mysqli_query($link, $delete);
   							}
						header("Location: admin.php?pages=mail");
  						}		
					}		
					/*---*/

					/*ОТВЕТ НА ОТЗЫВ*/

					$email_id = $_GET['mail_id'];		
						if (isset($email_id))
						{		
							$query = "SELECT * FROM mails WHERE id = ".$email_id." limit 1";	
							if ($result = mysqli_query($link, $query)) 
							{
    							while ($row = mysqli_fetch_assoc($result)) 
    							{
									echo "	<div id='modal'><form name='mail' method='POST'>
										<div class='del' onclick='clickDel();'></div>
												<input type='hidden' name='mails' value='".$row[email_cl]."'><br>
												<input type='hidden' name='idm' value='".$row[id]."'><br>
												tema <input type='text' name='tema' value='text'><br>
									<textarea name='text_a' class='textareaotvet'></textarea><br>
   									<input type='submit' name='send' value='otpravitj'><br>
									</form></div>";
   								}	
    						mysqli_free_result($result);
							}	
						}
	
						if (isset($_POST['send']))
						{
							$to       = ''.$row[email_cl].'';
							$subject  = 'Testing sendmail.exe';
							$message  = 'Hi, you just recedasdasdasdfasdfasdg using sendmail!';
							$headers  = 'From: pisalka30@gmail.com' . "\r\n" .
            							'Reply-To: pisalka30@gmail.com' . "\r\n" .
            							'MIME-Version: 1.0' . "\r\n" .
            							'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            							'X-Mailer: PHP/' . phpversion();
							mail($to, $subject, $message, $headers);
							$delete = 'DELETE FROM mails WHERE id='.$_POST['idm'].'';
							mysqli_query($link, $delete);
							header("Location: admin.php?pages=mail");
						}
					/*---*/

				?>
					</div>
</div>

