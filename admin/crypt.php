<html>
    <head>
        <title>Crypt</title>
    </head>
    
    <body>
        
        <?php
        
        if ( (isset($_POST['pseudo'])) && (isset($_POST['pswd']))) {
			echo $_POST['pseudo'].':'.crypt($_POST['pswd']);
		}
        
        ?>
        
        <form method="post" action="crypt.php">
            <input type="text" name="pseudo">Pseudo</input>
            <input type="password" name="pswd">Password</input>
            <input type="submit" value="Submit"></input>
        </form>
    </body>  
</html>
