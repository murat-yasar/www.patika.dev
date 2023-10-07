<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Twitter Clone - Murat Yaşar</title>
</head>
<body>
   <h1 style="text-align:center">Welcome to my Twitter-clone!</h1>

   <?php
      //* DB CONNECTION
      $server = "localhost";
      $username = "root";
      $password = "";
      $dbname = "twitter-clone";
      
      // Create connection
      $conn = new mysqli($server, $username, $password, $dbname);

      // Check connection
      echo $conn->connect_error ? die("Connection failed: ".$conn->connect_error) : "<h2 style='color: green'>Connected successfully!</h2>";
     
      // Get messages
     $post_sql = "SELECT users.name, posts.post, posts.time FROM posts INNER JOIN users ON posts.user_id = users.id;";
     $post_result = $conn->query($post_sql);

     $posts = [];

     if($post_result->num_rows > 0){

        // Output data of each row
        while($row = $post_result->fetch_assoc()){
           $n = $row["name"];
           $p = $row["post"];
           $t = $row["time"];
           array_unshift($posts, "[" . $t ."] <strong>". $n ."</strong>: ".$p); // Add name to the $names array
        }

     }else echo "0 results";

     // Print posts
     echo "<br>";
     foreach($posts as $post) echo $post."<br>";

      $message = $_POST["message"];
      $user = $_POST["user"];

     $user_sql = "SELECT * FROM users WHERE name = '$user';";
     $user_result = $conn->query($user_sql);

     $user_id = 0;
     while($row = $user_result->fetch_assoc()){
      if($user === $row["name"]) $user_id = intval($row["id"]);
     }

   //   echo ($user_id > 0)? "TRUE":"FALSE";
     if($user_id > 0){
      $message_sql = "INSERT INTO posts VALUES (NULL, '$message', '$user_id', NULL);"; 
      $conn->query($message_sql);
      header("location:index.php");
     }
   //   echo $message_sql;

      $conn->close();
   ?>
   
</body>
</html>