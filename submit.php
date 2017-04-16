<?php
if(!isset($_POST["first_name"]))
{
    return;
}
$name=$_POST["first_name"]." ".$_POST["last_name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["city"]." ".$_POST["state"]." ".$_POST["zip"];

require 'connect.php';

//$coupon = random_bytes(7);
//var_dump(bin2hex($coupon));

for ($i = -1; $i <= 4; $i++) {
    $bytes = openssl_random_pseudo_bytes($i, $cstrong);
    $coupon   = bin2hex($bytes);

}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyClients (name,email,phone,address,coupon) VALUES ('$name','$email',$phone,'$address','$coupon')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for your contribution best of luck.!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$msg = "your coupon code is :".$coupon;

$to = $email;
$email_subject = "Your coupon";
$email_body = "You have received a new message from couponcode .\n\n"."Here are the details:\n\nName:".$name."\n\nEmail:".$email."\n\nPhone: $phone"."\n\nMessage:\n".$msg;
$headers = "From: demo@designdunia.com\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);

?>
<html>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'index.html';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
<body>
<p>You will be redirected in <span id="counter">10</span> second(s).</p>
</body>
</html>
