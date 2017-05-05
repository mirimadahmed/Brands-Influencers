<?php 
session_start();
echo $_SESSION['b_id'];
/*
include 'connection.php.inc';
$id = $_GET['i'];?>

<?php 
if(isset($_SESSION['b_id'])) {
header("location:../chat/chat_view.php?i=$id");
exit();
}
else {
header("location:login.php");
exit();
}

 ?>

 <script type="text/javascript">
	/*function goToLogin() {
	window.location.href = "login.php";
	
	}*/?>
	</script>
	<script type="text/javascript">
	//function goToChat() {
	<?php// if(isset($_SESSION['b_id'])) { ?>
	//window.location.href = "../chat/chat_view.php?i=<?php //echo $id;?>";
	//<?php //} ?>
	}
	</script>
	

 
