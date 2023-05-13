<html>
<head><title>Signup</title><link rel="shortcut icon" href="https://image.freepik.com/free-icon/g-logo-circle_318-26775.jpg"></head>
<body>
    <?php
    session_start();
    
        $host="localhost";
        $dbuser="root";
        $password="";
        $dbname="makemytrip";
        $conn=mysqli_connect($host,$dbuser,$password,$dbname);
        if(mysqli_connect_errno())
        {
            die("Connection lost");
        }
        else
        {
            $start = date("Y-m-d", strtotime($_POST['order_contractStart']));
            $end = date("Y-m-d", strtotime($_POST['order_contractEnd']));

            $Name=$_POST["name"];
            $email=$_POST['email'];
            $mobile=$_POST['mobile'];
            $mode=$_POST['t1'];

            $a=$_SESSION['name'];
            $check = "SELECT * from signup where name='$a'";
            $result = mysqli_query($conn, $check);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $id=$row['id'];

                }
            }

            $selected=$_SESSION['h_select'];

            $check = "SELECT * from hotel where id='$selected'";
            $result = mysqli_query($conn, $check);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        $hotel_id = $row['id'];
                        $location = $row['location'];
                        $guest = $row['guest'];
                        $Charges = $row['Charges'];
                        $detail=$row['detail'];

                        $_SESSION['hotel_id'] = $row['id'];
                        $_SESSION['location'] = $row['location'];
                        $_SESSION['guest'] = $row['guest'];
                        $_SESSION['Charges'] = $row['Charges'];
                        $_SESSION['detail']=$row['detail'];


}
}
        if(empty($Name)||empty($email)||empty($mode)||empty($mobile))
        {
            echo "Oops! can't leave any field blank";
        }
        else
        {
            $sql="insert into booking(h_id,id,name,location,email,mobile,guest,payment_mode,cost,detail,check_in,check_out)"."values('$hotel_id','$id','$Name','$location','$email','$mobile','$guest','$mode','$Charges','$detail','$start', '$end')";
            
            $repasswordes=mysqli_query($conn,$sql);
            echo "<p style='text-align:center;font-size:50px;'>"."Thankyou<br>Successfully Booked"."</p>";
            echo "<a href = 'http://localhost/Dreamtravels/hotelmail.php'>"."<p style='text-align:center;'>"."<img src='gb.png'/>"."</p>"."</a>";
        }
    }
    ?>
</body>
</html>