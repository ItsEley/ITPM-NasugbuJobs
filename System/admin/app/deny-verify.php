
<?php
       
       include('../constants/db_config.php');
        ?>  

<?php
	if (!isset($_GET['do']) || $_GET['do'] != 1) {
					$query = 'DELETE FROM tbl_verify WHERE id = ' . $_GET['id'];
					$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
						
?>
		<script type="text/javascript">
				alert("Verification Denied!");
					window.location = "index.php";
		</script>				
				
			<?php
				
			}
			?>