<?php
include "core/init.php";
include "includes/overall-header.php";
teacherLogged_in_redirect();
$sucess_flag = false;
if(isset($_GET['sucess']) === true && empty($_GET['sucess']) === true)
{
	$sucess_flag = true;
					
}	
else
{
	if(isset($_GET['email'],$_GET['emailcode']) === true)
	{
		$email 		=trim($_GET['email']);
		$emailcode  =trim($_GET['emailcode']);

		if(email_exists('teachers','T_ID',$email) === false)
		{
			$errors[] = 'Oopps, something went wrong cudnt find that email address';

		}else if(activate_teacher($email,$emailcode)===false)
		{
			$errors[] = 'We had problems activating your account';
		}

	}
	else
	{
		echo"not set";
		//echo '<META HTTP-EQUIV="Refresh" Content="0; URL= index.php">';
		//exit();
	}
	if(empty($errors) === true)
	{	
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL= teacher-activate.php?sucess">'; 
		exit();
		
	}
}
?>
<!Start of Error Displaying!>
<div class="grid_12 omega" id="errorDisplay">
   <?php 
    if(empty($errors) === false){
      echo output_errors($errors);
    }
    ?>
</div>
<!End of Error Displaying!> 
<!start of body content!>   
<?php 
if($sucess_flag === true)
{ ?>

	<div class="grid_12 omega" id="content">
	    <div class="grid_12 omega">
		    <div id="mainLinks" style="width:960px; margin:auto;">
		    	<h2 style="padding-top:20%;">YOUR ACCOUNT HAS BEEN SUCCESSFULLY ACTIVATED.</h2>
		    	<h2 style="padding-top:3%;"><a href=teacher-login.php>CLICK HERE FOR TEACHER LOGIN PAGE</a></h2> 
			</div>
	    </div> 
	</div>

<?php
}?>     
<!end of main links!>  
<?php include "includes/overall-footer.php"; ?>
