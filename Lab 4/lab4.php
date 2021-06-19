<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$password="";
	$err_password="";
	$cpassword="";
	$err_cpassword="";	
	$email="";
	$err_email="";
	$Code="";
	$err_Code="";
	$number="";
	$err_number="";
	$street="";
	$err_Street="";
	$City="";
	$err_City="";
	$state="";
	$err_state="";
	$postal="";
	$err_postal="";
	$gender="";
	$err_gender="";
	$date="";
	$err_date="";
    $Month="";
	$err_Month="";
    $year="";
	$err_year="";
	$about_us=[];
	$err_about_us="";
	$bio="";
	$err_bio="";
	
	$hasError=false;
	$array= array("Jaunary","February","March","April","May","June", "July" ,"August","September","Octobar","November","December");
	
	$profs = array("Service","Business","Teaching");
	
	function about_usExist($about_us){
		global $about_us;
		foreach($about_us as $u){
			if ($u == $about_us) return true;
		}
		return false;
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required*";
		}
		elseif (strlen($_POST["name"]) <=4){
			$hasError = true;
			$err_name = "Name must be greater than 4 characters";
		}
		else
		{
			$name = $_POST["name"];
		}
		if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname = "Username Required";
		}
		else if(strlen($_POST["uname"]) <= 6){
			$hasError = true;
			$err_uname="Username must be greater than 6 character";
		}
		else if(strpos($_POST["username"]," ")){
            $hasError=true;
            $err_uname="In username space is not allowed";
		}
		else{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		else if(isset($_POST[""])){
		       echo htmlspecialchars($_POST["pass"]);
		}
		else if(strlen($_POST["password"])<8){
            $hasError=true;
			$err_password="Password Must Be 8 Charachter Long";
		}
		else if(!strpos($_POST["password"],"@^Aa")){
            $hasError=true;
			$err_password="Password should contain special character, upercase,lowecase alphabets ";
		}
		 else if(!strpos($_POST["password"],"5")){
            $hasError=true;
			$err_password="Password should contain Numeric values";
		}
		
		else{
			$password=$_POST["password"];
		}
		if(empty($_POST["cpassword"])){
			$hasError = true;
			$err_cpassword = "confirm password Required";
		}
		else{
			$cpassword = $_POST["cpassword"];
		}
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "email Required";
		}
		else if(strpos($_POST["Email"],"@.")){
            $hasError=true;
			$err_Email="Email must contain @ and .";
		 }
		else{
			$email = $_POST["email"];
		}
		if(empty($_POST["code"])){
			$hasError = true;
			$err_Code="Code Required";
		}
		else if(!is_numeric($_POST["code"])){
            $hasError = true;
            $err_code="Enter a number";
        }
		
		else{
			$Code = $_POST["code"];
		}
		if(empty($_POST["number"])){
			$hasError = true;
			$err_number="Number Required";
		}
		else if(!is_numeric($_POST["number"])){
	        $hasError = true;
	        $err_phone="Phone number Required";
        }
		else{
			$number = $_POST["number"];
		}
		
		if(empty($_POST["street"])){
			$hasError = true;
			$err_Street="street Required";
		}
		else{
			$street = $_POST["street"];
		}
		if(empty($_POST["City"])){
			$hasError = true;
			$err_City="City Required";
		}
		else{
			$City = $_POST["City"];
		}
		
		if(empty($_POST["state"])){
			$hasError = true;
			$err_state="State Required";
		}
		
		else{
			$state = $_POST["state"];
		}
		
		if(empty($_POST["postal"])){
			$hasError = true;
			$err_postal="Postal code or zip Required";
		}
		
		else{
			$postal = $_POST["postal"];
		}
		
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if (!isset($_POST["date"])){
			$hasError = true;
			$err_dating="Date Required";
		}
		else{
			$dating = $_POST["date"];
		}
        if(!isset($_POST["Month"])){
            $hasError = true;
            $err_Month="Month Required";
        }
        else{
            $Month = $_POST["Month"];
        }
        if (!isset($_POST["year"])){
            $hasError = true;
            $err_year="year Required";
        }
        else{
            $year = $_POST["year"];
        }
		if(!isset($_POST["about_us"])){
			$hasError = true;
			$err_about_us="Qurries Required";
		}
		else{
			$about_us = $_POST["about_us"];
		}
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["uname"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["cpassword"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["Code"]."<br>";
			echo $_POST["number"]."<br>";
			echo $_POST["street"]."<br>";
			echo $_POST["City"]."<br>";
			echo $_POST["state"]."<br>";
			echo $_POST["postal"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["date"] ."<br>";
			echo $_POST["Month"] ."<br>";
			echo $_POST["year"] ."<br>";
			echo $_POST["bio"]."<br>";
			
			$arr = $_POST["us"];
			foreach($arr as $u){
				echo "$u<br>";
			}
		}
		
	}
	
?>
<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
			<table>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>"
					<span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" value="<?php echo $uname; ?>"
					<span> <?php echo $err_uname;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" value="<?php echo $password; ?>"
					<span> <?php echo $err_password;?> </span></td>
				</tr>
				<tr>
					<td> Confirm Password</td>
					<td>: <input type="password" name="confirmpassword" value="<?php echo $cpassword; ?>"
					<span> <?php echo $cpassword;?> </span></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>: <input type="text" name="Email" value="<?php echo $email; ?>" 
					<span> <?php echo $err_email;?> </span></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td>: <input type="text" name="code" value="<?php echo $Code; ?>" placeholder="Code"> <input type="text" name="number" value="<?php echo $number; ?>" placeholder="Number"> </td>
					<td><span> <?php echo $err_Code;?> </span></td>
					<td><span> <?php echo $err_number;?> </span></td>
				</tr>
				<tr>
					<td>Address</td>
					<td>: <input type="text" name="street" value="<?php echo $street; ?>" placeholder="Street Address"> <input type="text" name="City" value="<?php echo $City; ?>" placeholder="City"><input type="text" name="state" value="<?php echo $state; ?>" placeholder="State"> <br> <input type="text" name="postal" value="<?php echo $postal; ?>" placeholder="Postal/Zip Code">  </td>
					<td><span> <?php echo $err_Street;?> </span></td>
					<td><span> <?php echo $err_City;?> </span></td>
					<td><span> <?php echo $err_state;?> </span></td>
					<td><span> <?php echo $err_postal;?> </span></td>
					
				</tr>			
				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
				<td>Birth Date</td>
					<td>: <select name="date">
					<option disabled selected>Day</option>
  
  
  
    <?php
        for($d=1; $d<=31; $d++)
        {
          echo "<option> $d </option>";
        }
    ?>
         </select>
         <select name="Month"> 
		 <option disabled selected>Month</option>
    <?php
  		foreach($array as $m)
		{
  			echo "<option selected>$m</option>";
  		}
    ?>
            </select>
            <select name="year">
            <option disabled selected>year</option>
     <?php
        for($y=1940; $y<=2015; $y++)
        {
            echo "<option> $y </option>";
        }
      ?>

					</select>
					</td>
					<td><span> <?php echo $err_date;?></span>
                    <span><?php echo $err_Month;?></span>
                    <span><?php echo $err_year;?> </span></td>
				    </tr>
				    <tr>
					<td>Where Did you hear about us?</td>
					<td>: <input type="checkbox" name="learnings[]" <?php if(about_usExist("A Frind or Colleague")) echo "checked";?> value="A Frind or Colleague"> A Frind or Colleague
					<input type="checkbox" name="learnings[]" <?php if(about_usExist("Google")) echo "checked";?> value="Google"> Google<br>
					<input type="checkbox" name="learnings[]" <?php if(about_usExist("Blog Post")) echo "checked";?> value="Blog Post"> Blog Post
					<input type="checkbox" name="learnings[]" <?php if(about_usExist("New Article")) echo "checked";?> value="New Article"> New Article
					</td>
					<td><span> <?php echo $err_about_us;?> </span></td>
				    </tr>
				    <tr>
					<td>Bio</td>
					<td>: <textarea name="bio" placeholder="Write here..." ><?php echo $bio; ?></textarea>
					<td><span> <?php echo $err_bio;?> </span></td>
					</td>
				    </tr>
				    <tr>
					<td colspan="1" align="right" ><input type="submit" name="submit" value="register" ></td>
					
				</tr>
			</table>
		</fieldset>
		</form>
	</body>
</html>