<?php 
$username=$_POST['Name'];
$usersec=$_POST['Section'];
$usercard=$_POST['CreditCard'];
if(isset($_POST['Type'])){
$cardtype=$_POST['Type'];}
if(isset($_POST['Name'])&&isset($_POST['Section'])&&isset($_POST['CreditCard'])&&isset($_POST['Type'])){
$all =$username.';'.$usersec.';'.$usercard.';'.$cardtype."\r\n";}
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
	
	<body>
<?php
	if(!($_REQUEST['Name']&&$_REQUEST['Section']&&$_REQUEST['CreditCard']&&$_REQUEST['Type'] )):
		?>
	<h1>Sorry</h1>
	<p></p>You didn't fill out the form completely <a href="buyagrade.php">Try Again!</a></p>
<?php else: ?>
	<?php
			file_put_contents("suckers.txt", $all, FILE_APPEND);
	?>
		<h1>Thanks, sucker!</h1>
		<p>Your information has been recorded.</p>
		<dl>
			<dt>Name</dt>
				<dd><?= $username ?></dd>
			<dt>Section</dt>
				<dd><?= $usersec ?></dd>
			<dt>Credit Card</dt>
				<dd><?= $usercard ?></dd>
		</dl>
		<p>Here are all the suckers who have submitted here: </p>
		<?php
		$host = file_get_contents("suckers.txt");
		echo "<pre>$host<pre>";
		?>
		<?php endif; ?>
	</body>
</html>  
