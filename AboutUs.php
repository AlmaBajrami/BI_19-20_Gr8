<!DOCTYPE html>
<html lang="en">
<html lang="en" manifest="manifest.appcache">

<head>
    <meta charset="utf-8">

    <title>Projekti ne WWW </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="StilizimiAU.css" />

</head>

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
                        <li><a href="AboutUs.php">&emsp;Service</li>
						<li><a href="#">Safety</li>
						<li><a href="#">Area</li>
						</ul> 
				  </li>  
				  
                  <li> <a href="signup.php">User Login</a></li>

                        <li> <a href="#">Link text</a></li>

                    </ul>
        </div>
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
        <div class="pjesa_pare">

            <h1>How our cleaning service works</h1>
            <div class="rreshti">
                <div class="fotot">
                    <img src="images/nr1.png" width="80" id="nr1" alt="numri 1">
                    <h2>Choose a cleaning service &amp; book it online</h2>
                </div>
                <div class="fotot">
                    <img src="images/nr2.png" width="85" id="nr2" alt="numri 2">
                    <h2>We send a professional to your place</h2>
                </div>
                <div class="fotot">
                    <img src="images/nr3.png" width="90" id="nr3" alt="numri 3">
                    <h2>The cleaner takes care of everything</h2>
                </div>
                <div class="fotot">

                    <img src="images/nr4.png" width="81" id="nr4" alt="numri 4">
                    <h2>Enjoy amazing results &amp; more free time</h2>

                </div>

            </div>
        </div>



        <div class="w-washing">
            <div class="window_washing_text">
                <h2>Window Washing</h2>
                <p>Property managers, hotel executive housekeepers, building owners, developers, general contractors and project managers rely on Corporate Cleaning Services to keep their buildings and windows looking great. Our many long-term client relationships
                    have been built through the company’s reliability, attention to detail, responsiveness, extra effort, focus on safety, quality assurance and follow-through on projects that range in scope and size. The company utilizes a variety of
                    window cleaning methods and equipment to meet our client’s needs, including Custom Scaffold; Genie “Bosun’s Chair”; Industrial Rope Access (IRA); Hi-lift; House Rigs; Ladder; Pole; Rolling Stage and Scaffolds. To fit each client’s
                    scheduling needs, interior and exterior window cleaning services can be provided year-round seven days a week.</p>
            </div>
            <div class="window_washing_img">
                <img src="images/window_washing.jpg" height="700px" width="620px" alt="window washing">



            </div>

        </div>

        <div class="spider_ab">
            <div class="spider_img">
                <img src="images/spider.png" height="400" width="620px" alt="spider abatement">
            </div>
            <div class="spider_text">
                <h2>Spider Abatement</h2>
                <p>We are state approved. In order to acquire insurance for applying insecticide a company must be licensed. Corporate Cleaning Services has the license and insurance necessary to perform this service.</p>

            </div>
        </div>


        <div class="equipment">
            <div class="equipment_text">
                <h2> State-of-the-art Equipment</h2>
                <p>Corporate Cleaning Services has within its inventory lifts with state-of-the-art features to better serve your needs. The lifts are designed to have the most innovative safety features. They also have the ability to reach high areas and
                    narrow crevices.</p>
            </div>
            <div class="equipment_img">
                <img src="images/equipment.png" width="622px" height="600px" alt="equipment">

            </div>

        </div>

        <div class="screen_handling">
            <div class="screen_img">
                <img src="images/screen.png" width="622px" height="600px" alt="screen handling">

            </div>


            <div class="screen_text">
                <h2> Screen Handling</h2>
                <p>As an experienced window washing company we have come to encounter all kinds of screen situations. We include the handling of your screens, so long as they are maneuverable from the exterior with the wash. We do notify you, however, whenever
                    screens must be removed from the inside in order to avoid damaging the screens. We also can provide service of screen removal and cleaning at an additional cost.</p>

            </div>

        </div>
        <div class="ice_removal">

            <div class="ice_img">
                <img src="images/ice.png" width="622px" height="600px" alt="ice removal">

            </div>
            <div class="ice_text">
                <h2>Ice Removal⁬</h2>
                <p>We work year-round on windows, and we also can assist with the removal of ice from the building facade. Icicles can be particularly dangerous and pose a serious liability for buildings. The danger is not limited to high rises. Many of
                    our clients have opted for us to come in on an emergency basis to conduct ice removal prior to rush hour pedestrian traffic. This helps the building minimize exposure to cold weather accidents of this nature.</p>

            </div>



        </div>
        <div class="caulking">
            <div class="caulking_img">
                <img src="images/caulking.png" width="622px" height="600px" alt="caulking">

            </div>

            <div class="caulking_text">
                <h2> Remedial Caulking </h2>
                <p>We attempt to provide cost-efficient solutions for other scopes of work, including remedial caulking. Since we have the ability to rappel ourselves on the sides of the building and place ourselves in front of the windows or areas that
                    may need caulking, you may find us to be a more accessible solution when in need of remedial caulking.</p>

            </div>

        </div>
        <canvas id="canvas1"></canvas>
        <canvas id="canvas2"></canvas>
        <canvas id="canvas3"></canvas>

        <div class="markets">
            <div class="market_text" id="box1" ondrop="dragDrop(event)" ondragover="allowDrop(event)">
                <h2 id="text" draggable="true" ondragstart="dragStart(event)">Markets <br>We <br> Serve</h2>
            </div>
            <div class="list">
                <ul type="square">
                    <li>Office</li>
                    <li>Residential</li>
                    <li>Hotels</li>
                    <li>Hospitals</li>
                </ul>
            </div>
            <div class="list">

                <ul type="square">
                    <li>Schools</li>
                    <li>Construction Sites</li>
                    <li>Cultural Facilities</li>
                    <li>Airports</li>
                </ul>

            </div>

            <div class="market_text" id="box2" ondrop="dragDrop(event)" ondragover="allowDrop(event)">

            </div>
        </div>
        <div class="multicolumn">
            <h2 id="multicolumn"></h2>
            <?php
                $text='                       We recognise the importance of having a perfectly clean environment 
                as this can influence your customers’ perception of your business and brand. We have extensive experience in delivering high-quality 
                contract cleaning services in a diverse range of commercial environments. The same is true of the domestic environment and we strive to 
                help keep your home in immaculate condition. Using our specialist knowledge and experience, we help our clients considerably improve the 
                standard of cleanliness in their home or work environment. Our primary concern is to give all our current and potential customers a competitive
                price and sought-after services that anyone would recommend. We have become a highly respected cleaning company across the areas we serve 
                and we have built a reputation for our reliability. The result is an offering with an extensive range of specialist services that is 
                guaranteed to leave you with a job well done.                                                                 ';
                $len = strlen($text);
                printf('<p>'.$text.'<br><br><br>Length of text with spaces on sides: '.$len.'.</p>'); 
                $len = strlen(trim($text," "));
                printf('<p>Length of text after trim: '.$len.'.</p>'); 

                $str = "Frequently Asked Questions";
                $exp = explode(" ", $str);
                $i=0;
                $sub=array();

                while($i < 3){
                    array_push($sub, substr($exp[$i++],0,1));
                }
                $imp = implode(".", $sub);
                printf('<p>'.$str.' a.k.a '.$imp.'.</p>');
            ?>

        </div>

        <div class="vid2">
            <h2>A short video of our services. Enjoy!</h2>
            <video width="700" height="550" controls id="video2">
      <source src="videos/video2.mp4" type="video/mp4">

    </video>

        </div>

        <div class="statistics">
            <h3> Our company has a 5 year experience. During this time this is the number of our clients for every year.</h3>
            <p id="firstyear"> First year we had 203 costumers.<button onclick="max()">Click if you want to see the max number</button><button onclick="min()">Click if you want to see the min number</button></p>
            <p id="secondyear"> Second year we had a number of 350 costumers.<button onclick="eksponent()">Click if you want to see the exponential version.</button></p>
            <p id="thirdyear">Third year the number doubled by reaching a number of 702 costumers.<button onclick="func_match()">Click to find matching</button></p>

            <p id="fourthyear">Fourth year we also had an increase by reaching a number of 850 costumers.<input type="text" id="replace"><button onclick=" func_replace() ">Click to replace this whole sentence</button></p>
            <p id="fifthyear">This year we are proud to have reached 1100 costumers.<button onclick="sqrt()">Click for the square root</button></p>
            <p><input type="text" id="uri_text"><button onclick="globalconst()& string()">Click to encode and decode an URI</button></p>
            <p id="uri_result"></p>
            <p>The number of our income this year has reached:
                <p id="num"><button id="floor" onclick="floor()">Floor</button>3876985.548<button id="ceil" onclick="ceil()">Ceil</button></p>
                <?php
//create function with an exception
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum(2);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>
		<form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
                    <input type="range" id="a" value="50">100 <br>&emsp;+&emsp;
                    <input style="background-color:skyblue" type="number1" id="b" value="50"> =
                    <output name="x" for="a b"></output>
					 <?php include 'error.php';?>  
                </form>

        </div>

        <script type="text/javascript">
            var canvas = document.getElementById("canvas1");
            var ctx1 = canvas.getContext("2d");
            for (let i = 0; i < 50; i++) {
                for (let j = 0; j < 50; j++) {
                    ctx1.fillStyle = `rgb(${i*10}, ${j * 5}, ${(200-(j*5))})`
                    ctx1.fillRect(j * 10, i * 10, 5, 5)

                    var c = document.getElementById("canvas2");
                    var ctx2 = c.getContext("2d");

                    function allowDrop(ev) {
                        ev.preventDefault();
                    }

                    function dragStart(ev) {
                        ev.dataTransfer.setData("text", ev.target.id);
                    }

                    function dragDrop(ev) {
                        ev.preventDefault();
                        var data = ev.dataTransfer.getData("text");
                        ev.target.appendChild(document.getElementById(data));
                    }


                }

                function max() {

                    var a = Math.max(203, 350, 702, 850, 1100);
                    alert(Number.MAX_VALUE + " The maximum number is " + a + ". ");

                }

                function min() {

                    var a = Math.min(203, 350, 702, 850, 1100);
                    alert(" The minimum number is " + a + ". ");

                }

                function sqrt() {

                    var num = 1100;
                    alert(Math.sqrt(num));
                }

                function nan() {
                    x = document.getElementById("num").value;
                    var res = "";
                    if (isNaN(x) == true);
                    alert(isNaN);
                }


                function eksponent() {
                    var num = 350;
                    var n = num.toExponential();
                    alert(n);
                }


                function floor() {
                    document.getElementById("num").innerHTML = Math.floor(3876985.548);
                }


                function ceil() {
                    document.getElementById("num").innerHTML = Math.ceil(3876985.548);
                }


                function string() {
                    num = document.getElementById("uri_text").value;
                    var y = num.toString();
                }


                function func_match() {
                    var str = "";
                    str += document.getElementById("thirdyear").value;
                    var res = str.match(/e/g);
                    alert(res);
                }


                function func_replace() {
                    var str = "";
                    str += document.getElementById("fourthyear").innerHTML;
                    var repl = "";
                    repl += document.getElementById("replace").value;
                    var res = str.replace(str, repl);
                    document.getElementById("fourthyear").innerHTML = res;
                }


                function globalconst() {
                    //my test.asp?name=ståle&car=saab
                    //var uri = "";
                    uri = document.getElementById("uri_text").value;
                    var enc = encodeURI(uri);
                    var dec = decodeURI(enc);
                    var res = "Encoded URI: " + enc + "<br>" + "Decoded URI: " + dec;
                    document.getElementById("uri_result").innerHTML = res;
                }
            }

            // Create gradient
            var grd = ctx2.createLinearGradient(80, 50, 200, 40);
            grd.addColorStop(0, "#68b0f2");
            grd.addColorStop(1, "#0231a1");

            // Fill with gradient
            ctx2.fillStyle = grd;
            ctx2.fillRect(0, 0, 1200, 300);
            ctx2.font = "12px Presley Slab";
            ctx2.fillStyle = "black";
            ctx2.fillText("Chicago's Leading Window Washing Company", 30, 80);

            var canvas3 = document.getElementById('canvas1');
            var context = canvas3.getContext('2d');
            var imageObj = new Image();

            imageObj.onload = function() {
                context.drawImage(imageObj, 110, 0, 80, 150);
            };
            imageObj.src = "clean.png";

            //per footer 
            function validateForm() {
                var x = document.forms["formfooter"]["nameinput"].value;
                if (x == "") {
                    alert("Name must be filled out");
                    return false;
                } else if (x.length > 200) {
                    alert("name has to many characters")
                }
            }

            function validateForm2() {
                var x = document.forms["formfooter"];
                ["email"].value;
                if (x == "") {
                    alert("Email must be filled out");
                    return false;
                } else if (x.length > 200) {
                    alert("Email has to many characters")
                } else if (x.length < 7) {
                    alert("Email doesn't exist");

                }
            }

            function validateForm3() {
                var x = document.forms["formfooter"];
                ["message"].value;
                if (x == "") {
                    alert("Message is empty");
                    return false;
                } else if (x.length > 500) {
                    alert("Message has to many characters")
                }
            }
        </script>


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
                                                      <?php
						   class Office {
  // Properties
  public $name;
 // public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  }

$mf = new Office();
$s = new Office();
$mf->set_name('Monday- Friday :08:00-17:30');
$s->set_name('Saturday: 08-13:00');

echo $mf->get_name();
echo "<br>";
echo $s->get_name();
?>
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
                    <h2 id="destructEl">From The Blog</h2>
                    <nav>
                        <ul>
                                              
							<?php
class B {
  public $name;
 // public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    $str="Blog Post {$this->name}.....";
    echo '<script>document.getElementById("destructEl").innerHTML = "'.$str.'"</script>';
  }
}

$b = new B("Destruct");
?>
   			<li><strong>Blog Post Title</strong></li>
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

                        <form method="post" id="formfooter" onsubmit="return validateForm() & validateForm2() & validateForm3()">
                            <p><input id="nameinput" name="text" type="text" placeholder="Name"></p>
                            <p><input id="email" name="text" type="text" placeholder="Email"></p>
                            <p><textarea placeholder="Message" rows="3"></textarea></p>
                            <p><input id="submit" name="submit" type="submit"></p>
                        </form>

                        <?php
                            if(isset($_POST['submit'])){
                                $name = $_POST["name"];
                                $email = $_POST["email"];
                                $msg = $_POST["message"];
                                $myfile = "contactMessages.txt";
                                
                                $txt = $name.' tried to contact the company, with email '.$email.', and message "'.$msg.'", at '.date("H:i:s d/m/Y.");
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

            /*date*/
            var dt = new Date();
            document.getElementById("datetime").innerHTML = (("0" + (dt.getMonth() + 1)).slice(-2)) + "/" + (("0" + dt.getDate()).slice(-2)) + "/" + (dt.getFullYear());
        </script>
</body>

</html>
