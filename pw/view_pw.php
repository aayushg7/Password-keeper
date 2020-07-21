<?php	include("./includes/session_check.php");	
include("./includes/connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
				<h4>Password manager</h4><hr>
				<?php
					$sql = "SELECT * FROM pw_data";
					$result = mysqli_query($con,$sql);
					$count=1;
					while($rs = mysqli_fetch_array($result)){
						?>
						<a>
							<div>
								<span><?php echo $count.") ".$rs['name']; ?></span>
							</div>
						</a>
						<?php
						$count++;
					}
				?>
			</div>
		</div>
	</div>
	<?php	
</body>
</html>
