<?php
	  require_once('config/database.php');

	if(isset($_POST['id'])){
		foreach ($_POST['id'] as $id):
			mysqli_query($conn,"delete from names where id='$id'");
		endforeach;

    ?>
    <script>
      window.alert('Deleted Successfuly');
      window.location.href='quizresult.php';
    </script>
    <?php
	}
	else{
		?>
		<script>
			window.alert('Please check Result to Delete');
            window.location.href='quizresult.php'
		</script>
		<?php
	}

?>
