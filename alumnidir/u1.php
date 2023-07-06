<?php
$con = mysqli_connect('localhost','id19075547_localhost', 'Jh/NuIPn+Ds}4\o4','id19075547_mp');

if($_POST['action']=='n') {
    mysqli_query($con,"UPDATE alumnidir SET name='$_POST[NAME]' WHERE rno='$_POST[RNO]'");
    echo "<div style='text-align:center; background-color: #4CAF50; color: white;'><p>NAME UPDATED</p></div>";
} elseif($_POST['action']=='p') {
    mysqli_query($con,"UPDATE alumnidir SET phoneno='$_POST[PHONENO]' WHERE rno='$_POST[RNO]'");
    echo "<div style='text-align:center; background-color: #4CAF50; color: white;'><p>PHONE NO UPDATED</p></div>";
} elseif($_POST['action']=='m') {
    mysqli_query($con,"UPDATE alumnidir SET MAILID='$_POST[MAILID]' WHERE rno='$_POST[RNO]'");
    echo "<div style='text-align:center; background-color: #4CAF50; color: white;'><p>MAILID UPDATED</p></div>";
} elseif($_POST['action']=='ci') {
    mysqli_query($con,"UPDATE alumnidir SET cior='$_POST[cior]' WHERE rno='$_POST[RNO]'");
    echo "<div style='text-align:center; background-color: #4CAF50; color: white;'><p>CITY OF RESIDENCE UPDATED</p></div>";
} elseif($_POST['action']=='co') {
    mysqli_query($con,"UPDATE alumnidir SET cor='$_POST[cor]' WHERE rno='$_POST[RNO]'");
    echo "<div style='text-align:center; background-color: #4CAF50; color: white;'><p>COUNTRY OF RESIDENCE UPDATED</p></div>";
} elseif($_POST['action']=='cd') {
    mysqli_query($con,"UPDATE alumnidir SET cd='$_POST[cd]' WHERE rno='$_POST[RNO]'");
    echo "<div style='text-align:center; background-color: #4CAF50; color: white;'><p>DESIGNATION UPDATED</p></div>";
} elseif($_POST['action']=='cp') {
    mysqli_query($con,"UPDATE alumnidir SET cpow='$_POST[cp]' WHERE rno='$_POST[RNO]'");
    echo "<div style='text-align:center; background-color: #4CAF50; color: white;'><p>PLACE OF WORK UPDATED</p></div>";
}
?>
<div style="text-align: center;">
    <a href="index.html" style="color: white; text-decoration: none; background-color: #4CAF50; padding: 10px;">Back to Home</a>
</div>


?>

