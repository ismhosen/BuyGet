<?php
session_start();
include_once 'common.php';
include '../service/user_service.php';
include '../service/product_services.php';
$id=$_SESSION['user']['id'];
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


$con = mysqli_connect('localhost', 'root', '', 'buy&get');

        if (!$con) {
          die("Connection Error: ".mysqli_connect_error()."<br/>");
        }

        // $sender_id=$_SESSION['user']['id'];
        // $receiver_id = $_SESSION['reciever'];
    

        $sql = "SELECT * FROM chat WHERE receiver='$id'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result)>0) {
        
            while($row = mysqli_fetch_array($result)){
                $sender = $row['sender'];


                $con = mysqli_connect('localhost', 'root', '', 'buy&get');

                if (!$con) {
                    die("Connection Error: ".mysqli_connect_error()."<br/>");
                }

                $sql = "SELECT * FROM customers WHERE id='$sender'";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)>0) {
        
                while($row = mysqli_fetch_array($result)){
                    ?>
                    
                    <button> <a href="chat.php?r_id=<?php echo $row['id'] ?>"><?php echo $row['name']; ?></a> </button>

                    <?php
                    $_SESSION['reciever'] = $row['id'];
                }

            }
        
         }

        }
        else
        {
            echo "No Message Yet.<br/>";
        }

          mysqli_close($con);
        

?>