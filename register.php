
<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
include 'core/init.php';
include 'include/head.php';
?>
   <body>

         <div class="page-container">
            <h1>Register</h1>
			   <form action="registered.php" method="post">
                <input type="text" name="username" class="username" placeholder="Username, at least 5 charachers">
                <input type="password" name="password" class="password" placeholder="Password, at least 6 charachers">
				<input type="text" name="firstname" class="firstname" placeholder="Firstname">
                <input type="text" name="lastname" class="lastname" placeholder="Lastname">
                <input type="text" name="email" class="email" placeholder="Email, important">
                <button type="submit">SIGN UP</button> 
				<div class="error"><span>+</span></div>
				</form>
			    <button type="sbumit" onClick="window.location.href='index.php';">BACK TO LOG IN</button>
			
			
			
			
			
			        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

