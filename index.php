<?php 
include "core/init.php";
include "includes/overall-header.php";
studentLogged_in_redirect();
teacherLogged_in_redirect();
?>

<!start of body content!>
    <div class="grid_12 omega" id="content">
        <div class="grid_12 omega">
        <h2 style="padding-top:30px;">WHICH ONE ARE YOU?</h2>
        </div>
        <div id="mainLinks" style="width:960px; margin:auto;">
          <div id="teachersLink"><a href="teacher-login.php"><img src="images/teachers_icon_large_389x389.png"></a></div>
          <div id="studentsLink"><a href="student-login.php"><img src="images/parents_icon_large_389x389.png"></a></div>    
        </div>
    </div>
<!end of body content!>


<?php include "includes/overall-footer.php"; ?>
