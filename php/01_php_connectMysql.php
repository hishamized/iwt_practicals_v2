<!-- Write some php code to connect a web app to MySQL server -->
<?php 
 define("server", "localhost");
 define("username", "root");
 define("password", "");
 define("db_name", "iwt_practical");

 $conn = mysqli_connect(server, username, password, db_name);
 if($conn){
   /*
    echo "Connected to mySQL server successfully! <br>";
    printf("<br>MySQL server version: %s\n", mysqli_get_server_info($conn));
    printf("<br>MySQL client: %s\n", mysqli_get_client_info($conn));
    printf("<br>MySQL host: %s\n", mysqli_get_host_info($conn));
    printf("<br>MySQL protocol: %s\n", mysqli_get_proto_info($conn));
    printf("<br>Using the followiing version of PHP: %s\n", phpversion());
    printf("<br>Connected to the following database: ");
    echo(db_name);
    */
 } else {
    echo "Could not connect to mySQL server! <br>" . mysqli_connect_error($conn);
 }
?>