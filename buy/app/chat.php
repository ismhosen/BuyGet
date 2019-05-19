<?php

session_start();
include 'common.php';
include '../service/user_service.php';
include '../data/users_data_access.php';

// $sender_id=$_SESSION['user']['id'];
// $receiver_id = $_GET['r_id'];
$name=$_SESSION['user']['name'];
$email=$_SESSION['user']['email'];
$imgname=$_SESSION['user']['imgname'];
mylink();

if($email=="")
{
    myHeader();
    echo "<script>document.location='index.php';</script>";
}
else if($_SESSION['type']=="seller")
{
	sellerheader($name,$imgname);
}
else if($_SESSION['type']=="buyer")
{
	buyerheader($name,$imgname,$cart_rows,$bookmark_rows);
}

?>

<html>
<head>
    <title>Chat</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body style="margin-top:100px;">

    <div class="container">
    

    <div class="container">

    <div class="jumbotron">

    
        <?php
        
        $con = mysqli_connect('localhost', 'root', '', 'buy&get');

        if (!$con) {
          die("Connection Error: ".mysqli_connect_error()."<br/>");
        }

        $sender_id=$_SESSION['user']['id'];
        $receiver_id = $_SESSION['reciever'];
    

        $sql = "SELECT * FROM chat WHERE (sender='$sender_id' AND receiver='$receiver_id') OR (sender='$receiver_id' AND receiver='$sender_id')";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result)>0) {
        
            while($row = mysqli_fetch_array($result)){
                $sender_name=get_sender_name($row['sender']);
                echo $sender_name.": ".$row['message']."<br><br>";

                


                


            }
        
        }
        else
        {
            echo "No Message Yet.<br/>";
        }

          mysqli_close($con);
        
        ?>
    
    </div>




    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        <div class="form-group">
            <label>Message</label>
            <input class="form-control" type="text" name="message" placeholder="Say Hi!"/>
            <label id="email_err"></label>
        </div>

        <button type="submit" class="btn btn-primary" name="send">Send</button>

    </form>

    </div>

    </div>
    

    
</body>
</html>



<?php
  if (isset($_POST['send'])) {
    $con = mysqli_connect('localhost', 'root', '', 'buy&get');

    if (!$con) {
      die("Connection Error: ".mysqli_connect_error()."<br/>");
    }

    $message=$_POST['message'];
	
    
    $r = $_SESSION['reciever'];
    //echo $r;

    if ($message) {
        $sql = "INSERT INTO chat(sender, receiver, message) VALUES('$sender_id', '$r', '$message')";
		
		if (mysqli_query($con, $sql))
		{
            // header("Location: chat.php?r_email=$r");
	        echo "<script>document.location='chat.php?r_email=$r';</script>";
            
		}
		else
		{
			echo "Error in inserting: ".mysqli_error($con);
		}

		mysqli_close($con);

        
    }
    



  }


 ?>