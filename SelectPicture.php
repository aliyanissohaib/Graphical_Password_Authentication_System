<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Pictures</title>
</head>
<style>
    body {
        background-color: blue;
    }

    h2 {
        color: white;
    }

    .container input {
        width: 150px;
        height: 30px;
        align-content: center;
        background-color: blue;
        color: white;
        margin-center: 600px;
        border-radius: 20px;
        text-decoration: none;
    }

    img:hover {
        color: white;
    }
</style>

<body>
    <h2 style="text-align: center;">Select You Pictures</h2>

    <?php
    include("image.php");

    $qry1 = "SELECT * FROM `images`WHERE 1";
    $run = mysqli_query($con, $qry1);

    while ($row = mysqli_fetch_array($run)) {

    ?>



        <img onclick="third()" src="images/<?php echo $row['picture3'] ?>" width="11%" height="150px" align="left">
        <img onclick="test1()" src="DB_images/db1.png" width="15%" height="150px"  align="center">
        <img onclick="test2()" src="DB_images/db2.jpg" width="15%" height="150px"  align="center">
        <img onclick="test3()" src="DB_images/db3.jpg" width="15%" height="150px"  align="center">
        <img onclick="test4()" src="DB_images/db4.jpg" width="15%" height="150px"  align="center">
        <img onclick="test5()" src="DB_images/db5.jfif" width="15%" height="150px"  align="center">
        <img onclick="test6()" src="DB_images/db6.png" width="12%" height="150px"  align="right">
        <img onclick="test7()" src="DB_images/db7.jpg" width="11%" height="150px"  align="left">
        <img onclick="test8()" src="DB_images/db8.jpg" width="15%" height="150px"  align="center">
        <img onclick="test9()" src="DB_images/db9.jpg" width="15%" height="150px"  align="center">
        <img onclick="fourth()" src="images/<?php echo $row['picture4'] ?>" width="150px" height="150px" align="center">
        <img onclick="test10()" src="DB_images/db10.jpg" width="15%" height="150px" align="center">
        <img onclick="test11()" src="DB_images/db11.jfif" width="15%" height="150px" align="center">
        <img onclick="test12()" src="DB_images/db12.png" width="12%" height="150px" align="right">
        <img onclick="test13()" src="DB_images/db13.jfif" width="11%" height="150px" align="left">
        <img onclick="second()" src="images/<?php echo $row['picture2'] ?>" width="15%" height="105px"  align="center">
        <img onclick="test14()" src="DB_images/db14.jfif" width="15%" height="150px" align="center">
        <img onclick="test15()" src="DB_images/db15.png" width="15%" height="150px" align="center">
        <img onclick="test16()" src="DB_images/db16.png" width="15%" height="150px" align="center">
        <img onclick="test17()" src="DB_images/db17.jpeg" width="15%" height="150px" align="center">
        <img onclick="test18()" src="DB_images/db18.jpg" width="12%" height="150px" align="right">
        <img onclick="test19()" src="DB_images/db19.jfif" width="11%" height="150px" align="left">
        <img onclick="test20()" src="DB_images/db20.jfif" width="15%" height="150px" align="center">
        <img onclick="test21()" src="DB_images/db21.jfif" width="15%" height="150px" align="center">
        <img onclick="test22()" src="DB_images/db22.jfif" width="15%" height="150px" align="center">
        <img onclick="first()" src="images/<?php echo $row['picture1'] ?>" width="15%" height="150px" align="center">
        <img onclick="test23()" src="DB_images/db23.jfif" width="15%" height="150px" align="center">
        <img onclick="test24()" src="DB_images/db24.jfif" width="12%" height="150px" align="right">

    <?php
    }


    ?>
    <div class="container">
        <a href="loginpage.php">
            <input type="button" value="LOG OUT">
        </a>
    </div>

</body>
<script type="text/javascript">
    
    var count1=0;
    var count2=0;
    var count3=0;
    var count4=0;

    function third() {
        alert("You Selected Correct Picture")
        count3=1;
        if(count1==1 && count2==1 && count3==1 && count4==1){
            window.location.replace("last.php");
        }
    }

    function first() {
        alert("You Selected Correct Picture")
        count1=1;
        if(count1==1 && count2==1 && count3==1 && count4==1){
            window.location.replace("last.php");
        }
    }

    function second() {
        alert("You Selected Correct Picture")
        count2=1;
        if(count1==1 && count2==1 && count3==1 && count4==1){
            window.location.replace("last.php");
        }
    }

    function fourth() {
        alert("You Selected Correct Picture")
        count4=1;
        if(count1==1 && count2==1 && count3==1 && count4==1){
             window.location.replace("last.php");
        }
    }

    function test1() {
        alert("Wrong Picture Selected")
    }

    function test2() {
        alert("Wrong Picture Selected")
    }

    function test3() {
        alert("Wrong Picture Selected")
    }

    function test4() {
        alert("Wrong Picture Selected")
    }

    function test5() {
        alert("Wrong Picture Selected")
    }

    function test6() {
        alert("Wrong Picture Selected")
    }

    function test7() {
        alert("Wrong Picture Selected")
    }

    function test8() {
        alert("Wrong Picture Selected")
    }

    function test9() {
        alert("Wrong Picture Selected")
    }

    function test10() {
        alert("Wrong Picture Selected")
    }

    function test11() {
        alert("Wrong Picture Selected")
    }

    function test12() {
        alert("Wrong Picture Selected")
    }

    function test13() {
        alert("Wrong Picture Selected")
    }

    function test14() {
        alert("Wrong Picture Selected")
    }

    function test15() {
        alert("Wrong Picture Selected")
    }

    function test16() {
        alert("Wrong Picture Selected")
    }

    function test17() {
        alert("Wrong Picture Selected")
    }

    function test18() {
        alert("Wrong Picture Selected")
    }

    function test19() {
        alert("Wrong Picture Selected")
    }

    function test20() {
        alert("Wrong Picture Selected")
    }

    function test21() {
        alert("Wrong Picture Selected")
    }

    function test22() {
        alert("Wrong Picture Selected")
    }
    
    function test23() {
        alert("Wrong Picture Selected")
    }
    function test24() {
        alert("Wrong Picture Selected")
    }

</script>

</html>