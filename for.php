<html>
<body>
<H1> * Important Field </h1>
<form method="post">
<table>
<tr>
<td>Name: </td>
<td><input type="text" name="name"  required>*</td></tr>
<tr>
<td>E-mail: </td>
<td><input type="email" name="email"  required>*</td></tr>
<tr>
<td>Dob:</td>
<td> <input type="date" name="dob"></td></tr>
<tr>
<td>ADD:</td> 
<td><textarea name="comment" required rows="5" cols="40"></textarea></td><tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="gender" required value="female">Female
<input type="radio" name="gender" required value="male">Male
<input type="radio" name="gender" required value="other">Other</td></tr>
<tr>
<td>Choice:</td>
<td><input type = "checkbox" name="check[]" value="Student">Student
<input type = "checkbox" name="check[]" value="Gamer">Gamer
<input type = "checkbox" name="check[]" value="Sportsmen">Sportsmen</td></tr>
<tr>
<td>City:</td>
<td> <input type="text" name="city" required>*</td></tr>
<tr>
<td>Zip code:</td>
<td> <input type="text" name="zc" required>*</td></tr>
<tr>
<td>Country:</td>
<td><select name="c" >
    <option value="IND">IND</option>
    <option value="UK">UK</option>
    <option value="USA">USA</option>
   </select></td></tr>
<tr><td><input type="submit" name="submit" value="Submit"></td></tr>
<tr><td><input type="reset" name ="reset" value="Reset">
</tds></tr>
</table> 
</form>
<?php
$namee = $name = $email = $dob = $comment = $gender = $check[] = $city = $zc = $c = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$name = $_POST["name"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$ADD = $_POST["comment"];
$gender = $_POST["gender"];
$check = $_POST['check'];
$city = $_POST["city"];
$zc = $_POST["zc"];
$country = $_POST["c"];
if(preg_match("/^([a-z A-Z]+)$/",$name)){
echo "Name ".$name;
}
else
{
echo "Name cannot contain numbers";
}
echo "<br>";
echo "Email ".$email;
echo "<br>";
echo "DOB ".$dob;
echo "<br>";
echo "ADD ".$ADD;
echo "<br>";
echo "GEN ".$gender;
echo "<br>";
echo "Choice ";
foreach($check as $ch)
{
echo $ch."<br>";
}
echo "City ".$city;
echo "<br>";
if(preg_match("/^([0-9]+)$/",$zc)){
echo "ZC ".$zc;
}
else
{
echo "Zip Code connot contain alphabets";
}
echo "<br>";
echo "Country ".$country;
}
?>
</body>
</html>
