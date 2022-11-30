<?php include('../../../connect/connection.php'); ?>
<?php
    // getting all values from the HTML form
        $cname = $_GET['cname'];
        $cbday = $_GET['cbday'];
        $cgender = $_GET['cgender'];
        $ccv = $_GET['ccv'];
        $creligion = $_GET['creligion'];
        $caddress = $_GET['caddress'];
        $cbo = $_GET['cbo'];
        $chouse = $_GET['chouse'];
        $cbarangay = $_GET['cbarangay'];
        $ctowncity = $_GET['ctowncity'];
        $province = $_GET['province'];
        $cemail = $_GET['cemail'];
        $mobilenumber = $_GET['mobilenumber'];

    // database details
    // include('../../../connect/connection.php');
    

    // to ensure that the connection is made
    if (!$connect)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    // $sql = "INSERT INTO contactform_entries (id, fname, lname, email) VALUES ('0', '$fname', '$lname', '$email')";
    // $sql = "INSERT INTO `form1`(FullName, Birthday, Gender, CivilStatus, Religion, BirthOrder, Address, HouseNo, Barangay, TownCity, Province, MobileNumber, EmailAddres) VALUES ('$cname','$cbday','$cgender','$ccv','$creligion','$cbo','chouse','$cbarangay','$ctowncity','province','$mobilenumber','$cemail')";
    // $sql = "INSERT INTO `form1`(ID, FullName, Birthday, Gender, CivilStatus, Religion, BirthOrder, Address, HouseNo, Barangay, TownCity, Province, MobileNumber, EmailAddres) VALUES ('2','testname','test_bday','test_gender','test_civil_status','test_religion','test_birthorder','testaddress','test_house_No','test_barangay','test_town','test_province','test_mb','test_email');";
    $sql = "INSERT INTO `form1`(ID, FullName, Birthday, Gender, CivilStatus, Religion, BirthOrder, Address, HouseNo, Barangay, TownCity, Province, MobileNumber, EmailAddres) VALUES ('3','$cname','$cbday','$cgender','$ccv','$creligion','$cbo','$caddress','$chouse','$cbarangay','$ctowncity','$province','$mobilenumber','$cemail');";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($connect, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
    else
    {
        
    }
  
    // close connection
    mysqli_close($connect);

?>