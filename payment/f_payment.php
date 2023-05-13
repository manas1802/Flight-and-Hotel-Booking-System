<html>
<head><title>Payment Successful</title>
<link rel="shortcut icon" href="https://image.freepik.com/free-icon/g-logo-circle_318-26775.jpg"></head>
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
            $Name=$_POST["name"];
            $email=$_POST['email'];
            $mode=$_POST['t1'];
            $d=$_POST['date'];
            echo $d;

            $a=$_SESSION['name'];
            $check = "SELECT * from signup where name='$a'";
            $result = mysqli_query($conn, $check);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $id=$row['id'];
                }
            }

            $selected=$_SESSION['f_select'];

            $check = "SELECT * from flight where f_id='$selected'";
            $result = mysqli_query($conn, $check);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        $f_id = $row['f_id'];
                        $f_name = $row['f_name'];
                        $depart = $row['depart'];
                        $arrival = $row['arrival'];
                        $arrival_time=$row['arrival_time'];
                        $departure_time=$row['depart_time'];
                        $price = $row['price'];

                        $_SESSION['f_id'] = $row['f_id'];
                        $_SESSION['f_name'] = $row['f_name'];
                        $_SESSION['depart'] = $row['depart'];
                        $_SESSION['arrival'] = $row['arrival'];
                        $_SESSION['arrival_time']=$row['arrival_time'];
                        $_SESSION['departure_time']=$row['depart_time'];
                        $_SESSION['price'] = $row['price'];
}
}
        if(empty($Name)||empty($email)||empty($mode))
        {
            echo "Oops! can't leave any field blank";
        }
        else
        {
            $sql="insert into flight_booking(id,f_id,name,email,flight_name,arrival,arrival_time,departure,departure_time,Charges,pay_mode,date_booked)"."values('$id','$f_id','$Name','$email','$f_name','$arrival','$arrival_time','$depart','$departure_time','$price','$mode','$d')";
            $repasswordes=mysqli_query($conn,$sql);
            echo "<p style='text-align:center;font-size:50px;'>"."Thankyou<br>Successfully Booked"."</p>";
            echo "<a href = 'http://localhost/Dreamtravels/mail.php'>"."<p style='text-align:center;'>"."<img src='gb.png'/>"."</p>"."</a>";
        }
    }
    ?>
</body>
</html>