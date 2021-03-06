<?php
   
    
    
 //Validation
// define variables and set to empty values
$error=""; $successMessage = "";
$contactNameErr = $emailErr = $managementCompErr = $businessNameErr =$propAddrErr=$cityErr= $StateErr=$zip_codeErr=$phoneErr=$faxErr=$washing_companyErr="";
$contactName = $email = $managementComp = $businessName =$propAddr=$city= $State=$zip_code=$phone=$fax=$washing_company="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["contactName"])) {
    $error .= "Name is required<br/>";
  } else {
   $contactName =($_POST["contactName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$contactName)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
    if (empty($_POST["managementComp"])) {
    $error .="Management Company is required<br/>";
  } else {
               $managementComp = $_POST["managementComp"];
            }
       
    if (empty($_POST["businessName"])) {
    $error .="Business Name is required<br/>";
  } else {
               $businessName = $_POST["businessName"];
            }

           
    if (empty($_POST["businessName"])) {
    $error .="Business Name is required<br/>";
  } else {
               $businessName = $_POST["businessName"];
            }
               
    if (empty($_POST["propAddr"])) {
    $error .="Property Address is required<br/>";
  } else {   
        $propAddr=  preg_split("/ /", $_POST["propAddr"]);
       // print_r($propAddr);
        
                
            }
                  
    
    if (!preg_match("/^[a-zA-Z]+$/",$_POST["city"])) {
     $error .="City is not valid<br/>";
  } else {
               $city = $_POST["city"];
}
    
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST["State"])) {
    $error .="State is required<br/>";
  } else {
               $State = $_POST["State"];
            }
    
       if (empty($_POST["zip_code"])&&(is_numeric($_POST["zip_code"])) ){
    $error .="Zip code is required<br/>";
  } else { 
               $zip_code = $_POST["zip_code"];
            }
    
    
        if (empty($_POST["phone"])&&(is_numeric($_POST["phone"]))) {
    $error .="Phone is required<br/>";
  } else {                  
               $phone = $_POST["phone"];
            }
    
    
        if (empty($_POST["fax"])) {
    $error .="Fax is required<br/>";
  } else {
               $fax = $_POST["fax"];
            }
    
        if (empty($_POST["washing_company"])) {
    $error .="Washing company is required<br/>";
  } else {    
        $washing_company = preg_replace('/e/', 'ë',    $_POST["washing_company"]); 
           //   echo $washing_company;
            }
    
    
  if (empty($_POST["email"])&&!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $error .= "Email is not valid";;
  } else {
    $email = ($_POST["email"]);
  
  }
    
            if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
  $emailTo = "contact@mydomail.com";
            
            $contactName = $_POST['contactName'];
            
            $businessName = $_POST['businessName'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $contactName, $businessName ,$headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Thank you, '.$contactName.'. Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
        
}
 


?>





<html lang="en" manifest="manifest.appcache">

<head>
    <meta charset="utf-8">


    <title>Projekti ne WWW </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="StilizimiFW.css" />
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <script type="text/javascript">
        //pjesa e footer-->
        function toggleText6(btn, id) {
            var e = document.getElementById(id);
            if (e.style.display == 'block') {
                e.style.display = 'none';
                btn.innerHTML = "Read more &raquo;";
            } else {
                e.style.display = 'block';
                btn.innerHTML = "Read less &raquo;";
            }
        }

        function toggleText7(btn, id) {
            var e = document.getElementById(id);
            if (e.style.display == 'block') {
                e.style.display = 'none';
                btn.innerHTML = "Read more &raquo;";
            } else {
                e.style.display = 'block';
                btn.innerHTML = "Read less &raquo;";
            }
        }

        //check if values are empty or not equal
        function validate() {
            var n1 = document.getElementById("num1");
            var n2 = document.getElementById("num2");
            if (n1.value != "" && n2.value != "") {
                if (n1.value == n2.value) {
                    return true;
                }
            }
            alert("Vlerat duhet te jene te njejta dhe jo boshe");
            return false;
        }

        //find location
        var x = document.getElementById("loc");

        function findLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
        }


        function check() {
            var x;
            x = document.getElementById("num3").value;

            try {
                if (x == "") throw "is Empty";
                if (isNaN(x)) throw "not a number";
                x = Number(x);
                if (x > 100) throw "too high";
                if (x < 1) throw "too low";
            } catch (err) {
                alert("Your code is " + err);
            }
        }
    </script>


</head>
<style>
    #Other hr {
        margin-top: 0px;
        margin-bottom: 0px;
        margin: 0px 50px 10px 50px;
        border-top: 1px solid #eee;
    }
</style>

<body>
    <div class="Margin">
        <div id="mydiv">CorporateClean</div>
        <header>
            <span> Free PSD Website Template &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		Call Us: xxxxx xxxxxxxxxx  &emsp;&emsp;&emsp;&emsp; Email Us: contact@mydomain.com</span>
        </header>


        <div class="nav">
            <ul>

                <li> <a href="HomePage.php">Homepage</a></li>

                <li> <a href="StyleDemo.php">Our Company</a></li>

                <li> <a href="FullWidth.php">Book Now</a></li>

                <li> <a href="Gallery.php">Gallery</a></li>

                <li> <a href="#">About Us</a>
                    <ul>
                        <li><a href="AboutUs.php">&emsp;Service</a></li>
                        <li><a href="#">Safety</a></li>
                        <li><a href="#">Area</a></li>
                    </ul>
                </li>

                <li> <a href="signup.php">User Login</a></li>

                <li> <a href="#">Link text</a></li>

            </ul>



        </div>

        <div class="firstline">
            <p id="date">Date: 
                <span id="datetime"></span><br>
                <span id="time"></span>
                <?php
                    $time = (int)date("h");
                    $str = "Good evening visitors!!!";
                    if($time >=5 && $time < 12){
                        $str = str_replace("evening", "morning", $str);            
                    }
                    else if($time >=12 && $time < 18){
                        $str = str_replace("evening", "afternoon", $str);
                    }
                    echo '<script>document.getElementById("time").innerHTML="'.$str.'";</script>';
                ?>
            </p>

            <table class="table_1">
             <div id="error" style="text-align:center;  background-color: lightblue;
                    opacity: 50%;"><?php print( $error.$successMessage); ?></div>
             
                <form action="" autocomplete="on"  method="post">

                    <tr>
                        <td>
                            <br>
                            <h6>Please complete all required contact fields.</h6>
                            <em><mark><u>* Required</u></mark></em>
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <td><label id="ContactName">Contact Name <span class="field_required" style="color:#ee0000;">*</span><br><input type="text" name="contactName" id="title" class="required hilightable" required ></label>
                            <p>
                                <label id="label">Management Company <span class="field_required" style="color:#ee0000;">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Bussines Name <span class="field_required" style="color:#ee0000;">*</span><br>
				<input type="text" name="managementComp" id="title1" class="required hilightable" required ><input type="text" name="businessName" id="title1" class="required hilightable"  required ></label></p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h2>Property Adress</h2>
                            <hr>
                            <label id="PropertyAdress">Property Adress <span class="field_required" style="color:#ee0000;">*</span><br><input type="text" name="propAddr" id="titlee" class="required hilightable" required ></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                <label id="label" name="title">City <span class="field_required" style="color:#ee0000;">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;State
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Zip Code<span class="field_required" style="color:#ee0000;">*</span>
					<br>
					  <input type="text" name="city" id="title2" class="required hilightable"  required ></label>
                                <label id="State">
                     <select name="State"  class="formControl" id="state" required="required">
										<option value="Alabama"  >Alabama</option>
										<option value="Alaska">Alaska</option>
										<option value="Arizona">Arizona</option>						
										<option value="California">California</option>
										<option value="Hawaii"  >Hawaii</option>
										<option value="Kansas"  >Kansas</option>
										<option value="Kentucky"  >Kentucky</option>
										<option value="Louisiana"  >Louisiana</option>										
										<option value="Mississippi" >Mississippi</option>
										<option value="Montana"  >Montana</option>
										<option value="New Jersey"  >New Jersey</option>
										<option value="New Mexico" >New Mexico</option>
										<option value="New York" >New York</option>
										<option value="North Carolina"  >North Carolina</option>
										<option value="North Dakota" North Dakota></option>
										<option value="Ohio"  >Ohio</option>
										<option value="Oklahoma"  >Oklahoma</option>
										<option value="Oregon"  >Oregon</option>
										<option value="Tennessee"  >Tennessee</option>
										<option value="Texas">Texas</option>						
										<option value="Washington">Washington</option>
							</select>
                                                
					</label>
                                <input type="text" name="zip_code" id="title2" class="required hilightable" autocomplete="off" required>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="PhoneNumber">
                                <label id="Phone">PhoneNumber <span class="field_required" style="color:#ee0000;">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Fax &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Email <span class="field_required" style="color:#ee0000;">*</span><br>
					<input  placeholder="123-45-678" type="tel" name="phone"  required>
					 <input  placeholder="123-45-678" type="tel" name="fax" >
					<input type="email" name="email" id="title2" class="required hilightable" autocomplete="off" required></label>
                            </div>
                            <hr>
                        </td>
                    </tr>


                    <tr>
                        <td><label id="">Who is your current window washing company?<br><input type="text" name="washing_company" id="title" class="required hilightable"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="pw">
                                <span> Number/ID: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Again:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Code:</span><br>
                                <input type="text" name="num1" id="num1">
                                <input type="password" name="num2" id="num2">
                                <input type="text" name="num3" id="num3"><br>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>

                            <div class="Services">
                                <div id="Requested">
                                    <h3>Requested Services</h3>
                                    <hr>
                                </div>
                                <div class="fieldwrp">
                                    <label>
                      <input type="checkbox" data-type="checkbox" name="cc[]" value="1" /> Wash exterior windows of building above 1st <br>floor, outside only                                  
					</label>
                                    <label>
                     <input type="checkbox" data-type="checkbox" name="cc[]" value="2" /> Wash exterior windows of building above 1st<br> floor, inside only                 
					</label>
                                    <div id="Other">
                                        <h3>Other Services</h3>
                                        <hr>
                                        <label><input type="radio" value="Inside"> Lobby Inside</label>
                                        <label>	<input type="radio" value="Outside"> Lobby Outside</label>
                                        <label>	<input type="radio" value="other"> Other </label>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>

                            <p><input id="submit" name="submit" type="submit"></p>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
        <br><br>
        <div id="Anash">
            <div class="radial_gradient"></div>
            <h2>Contact<br> Information</h2>
            <hr>
            <table border="1" cellspacing="10" cellpadding="5">
                <tr>
                    <td bgcolor="#F1FAFC"><b>Corporate Cleaning</b></td>
                    <td bgcolor="#F1FAFC"><b> Services, Inc.</b></td>
                </tr>

            </table>
            <address><?php
				$address=array("21 West Elm Street, Second ","Floor","Chicago, IL 60610");
				sort($address);

				$clength=count($address);
				for($x=0;$x<$clength;$x++)
				{	
					echo "<br>";
					echo $address[$x];
					echo "<br>";
				}
			?>
				<p><b>Email</b></p>
				<p><a href=mailto: >info@corporatecleaning.com</a></p>
					<dl>
						<dt><b>Main Phone:</b> 312-573-3333</dt>
				        <dd><b>Fax: </b> 312-573-5730</dd>
				</dl>
					</address>
        </div>



        <div id="location">
            <h2 id="loc_t">Please let us know your location so we can help you:</h2>
            <button onclick="findLocation()">Click here for location</button>
            <p id="loc"></p>

        </div>



        <div class="wrapper row3">
            <div id="footer" class="clear">

                <section class="block">
                    <h2>Contact Details</h2>
                    <nav>
                        <ul>
                            <li>Company: Corporate Clean</li>
                            <li>Street name&amp; Number</li>
                            <li>Town: Shqip&#xEB;ri</li>
                            <li>Postcode/Zip</li>
                            <li><br> </li>
                            <li>Tel:xxxxxx</li>
                            <li>Fax:xxxxxx</li>
                            <li>Email:<a href=mailto:>contact@mydomail.com</a> </li>
                            <br>
                            <li><strong>Office Hours</strong></li>
                            <li>Monday- Friday :08:00-17:30</li>
                            <li>Saturday: 08-13:00</li>
                        </ul>
                    </nav>

                </section>


                <section class="block" id="block2">
                    <nav>
                        <h2>Stay Social</h2>
                        <ul>
                            <li><img src="images/linkedin.jpg" width="25px"><a href="https://www.linkedin.com/" target="_blank">Get linked up in Linkeldn</a></li>
                            <li><img src="images/twitter.png" width="25px"><a href="https://twitter.com/" target="_blank">Keep up with our Tweets</a></li>
                            <li><img src="images/pinterest.png" width="25px"><a href="https://www.pinterest.com/" target="_blank">Photos on Pinterest</a></li>
                            <li><img src="images/rss.jpg" width="25px"><a href="https://rss.com/" target="_blank">RSS Feed</a></li>
                        </ul>
                    </nav>
                </section>

                <section class="block" id="block3">
                    <h2>From The Blog</h2>
                    <nav>
                        <ul>
                            <?php
class Blog {
  public $name;
  public function __construct($name) {
    $this->name = $name;
    //$this->color = $color; 
  }
  public function intro() {
    echo "<strong>Title{$this->name}</strong>"; 
  }
}

// Title is inherited from Blog
class Title extends Blog {
  public function message() {
    echo "<strong>&nbsp;&nbsp;&nbsp;Blog Post</strong> "; 
  }
}

$t = new Title(" ");
$t->message();
$t->intro();
?>
                            <li>Posted by Admin on 03.01.2020</li>
                            <li>
                                <p>Cleanliness must be observed in a learning envionment. Clean environment</p>
                                <p id="more0" style="display: none;">can motivate students.</p>
                            </li>
                            <li><a href="#" onclick="toggleText6(this, 'more0'); return false;">Read More &raquo;</a></li>
                            <li></li>
                            <li><strong>Blog Post Title</strong></li>
                            <li>Posted by Admin on 02.01.2020</li>
                            <li>
                                <p>A commercial office cleaning company will also ensure the public area</p>
                                <p id="more01" style="display: none;">is appealing and empty waste bins. </p>
                            </li>
                            <li><a href="#" onclick="toggleText7(this, 'more01'); return false;">Read More &raquo;</a></li>
                        </ul>
                    </nav>
                </section>

                <section class="block" id="block4">
                    <h2>Contact Us</h2>
                    <nav>
                    <form method="post">
                            <p><input id="nameinput" name="name" type="text" placeholder="Name"></p>
                            <p><input id="email" name="emaili" type="text" placeholder="Email"></p>
                            <p><textarea placeholder="Message" name="message" rows="3"></textarea></p>
                            <p><input id="submit" type="submit" value="send" name="send"></p>
                        </form>
                        <?php
                            if(isset($_POST['send'])){
                                $name = $_POST["name"];
                                $emaili = $_POST["emaili"];
                                $msg = $_POST["message"];
                                $myfile = "contactMessages.txt";
                                
                                $txt = $name.' tried to contact the company, with email '.$emaili.', and message "'.$msg.'", at '.date("H:i:s d/m/Y.");
                                $line = '=======================================================================================================================';
                                file_put_contents($myfile, $txt. "\r\n".$line."\r\n", FILE_APPEND);

                                echo '<script type="text/javascript">'; 
                                echo 'alert("Message has been successfully sent");'; 
                                echo '</script>';  
                            }
                        ?>
                    </nav>
                </section>

            </div>
        </div>
        <script>
            /*date*/
            var dt = new Date();
            document.getElementById("datetime").innerHTML = (("0" + (dt.getMonth() + 1)).slice(-2)) + "/" + (("0" + dt.getDate()).slice(-2)) + "/" + (dt.getFullYear());
        </script>
</body>

</html>

<?php
if(isset($_POST['submit'])){
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'CorporateClean'; 

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection error: " . $connection->connect_error);
}

$contactName=$_POST['contactName'];
$managementComp=$_POST['managementComp'];
$businessName=$_POST['businessName'];
$propAddr=$_POST['propAddr'];
$city=$_POST['city'];
$tel=$_POST['phone'];

$sqlQuery = "INSERT INTO Bookings (contactName,managementComp,businessName,propAddress,city,tel)
            VALUES('$contactName','$managementComp','$businessName','$propAddr','$city','$tel')";

if ($conn->query($sqlQuery) === TRUE) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Data successfully saved");'; 
    echo '</script>';  
} else {
    $error = 'Error: ' . $sqlQuery . $conn->error;
    echo '<script type="text/javascript">'; 
    echo 'alert("'.$error.'");'; 
    echo '</script>'; 
}

$conn->close();
}
    
    
    
    
?>


