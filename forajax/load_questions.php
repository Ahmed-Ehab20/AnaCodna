<?php
session_start();
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "exams";

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$question_no="";
$question="";
$opt1="";
$opt2="";
$opt3="";
$opt4="";
$answer="";
$count="";
$ans="";

$queno=$_GET["questionno"];

if(isset($_SESSION["answer"][$queno]))
{
    $ans=$_SESSION["answer"][$queno];
}
$res=mysqli_query($con,"select * from questions where category='$_SESSION[exam_category]' && question_no=$_GET[questionno]");
$count=mysqli_num_rows($res);

if($count==0)
{
    echo"over";
}
else{
    while($row=mysqli_fetch_array($res))
    {
        $question_no=$row["question_no"];
        $question=$row["question"];
        $opt1=$row["opt1"];
        $opt2=$row["opt2"];
        $opt3=$row["opt3"];
        $opt4=$row["opt4"];
    }
}
?>
<br>
<table>
    <tr>
        <td style="font-weight: bold; font-size: 18px; padding-left:5px" colspan="2">
        <?php echo "(".question_no.")".$question;?>
</td>
</tr>
</table>
<table>
    <tr>
        <td>
            <input type="radio" name="rl" id="rl" value="<?php echo $opt1; ?>">
            <?php
            if($ans=$opt1)
            {
                echo "checked";
            }
            ?>
            </td>
            <td style="padding-left: 10px">
            <?php
            echo $opt1;
            ?>
            </td>
        </table>
