<!DOCTYPE html>
<html lang="eng">
<head>
    <title>chatbot</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="css/welcome.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- My JavaScript files -->
    <script src="javascript/textType.js"></script>
    <script src="javascript/functions.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <script>
        $(function() {
            $("#accordion").accordion();
            $("#accordion").hide();
        });
        $(document).ready(function() {
            setTimeout(function() {
                $('#mainDiv').fadeOut('slow');
            }, 11000);

            $("#content").delay(100).fadeIn();

        });
    </script>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        /* Button used to open the chat form - fixed at the bottom of the page */

        .open-button {
            border: none;
            cursor: pointer;
            position: fixed;
            bottom: 23px;
            right: 28px;
            border-radius: 100%;
            z-index: 11;
        }

        /* The popup chat - hidden by default */

        .chat-popup {
          border: none;
          background-color: #fff;
          outline: none;
          display: none;
          position: fixed;
          bottom: 75px;
          width: 300px;
          height: 420px;
          overflow: hidden;
          right: 10px;
          z-index: 9;
          border-radius: 10px;
          box-shadow: 0px 0px 15px 11px #88888833;
        }

        #content {
          padding: 0!important;
          margin: 0!important;
          height: 100%;
          width:235%;
        }

        @media (max-width: 320px) { 
              #content{
                padding: 0!important;
          margin: 0!important;
          height: 100%;
          width:auto;
         
                 
              }  
}

        /* Add styles to the form container */

        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width textarea */

        .form-container textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
            resize: none;
            min-height: 200px;
        }

        /* When the textarea gets focus, do something */

        .form-container textarea:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/send button */

        .form-container .btn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */

        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */

        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }

        .cancel-btn {
          float: right;
          background: inherit;
          border: 0;
          margin-left: 100px;
        }

        /* company slider */

        .bx-wrapper {
            width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
            -moz-box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
        }

        .bx-wrapper .bx-viewport {
            height: 189px !important;
        }

        .bx-wrapper .bx slider li {
            margin-top: -16px !important;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

</head>

<body>

    <!--Header-->
    <header class="Heading">
     
        <h3 style="color:white; text-align: center;"><b>Sri Ramakrishna Institute of Technology - (An Autonomous Institution)</b></h3>
    </header>

    <div class="topnav" id="myTopnav">
        <!-- <a style="padding-left:100px" href="#home" class="active">Home</a>-->
        <a href="index.php" class="active">HOME</a>
        <a href="admission.php">ADMISSION</a>
        <a href="placement.php">PLACEMENT</a>
        <a href="about_us.php">ABOUT US</a>
        <a href="contact_us.php">CONTACT US</a>
        <a href="feedback.php">FEEDBACK</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    </div><br>

    <!--Images slides-->
    <div class="slideshow-container">

        <div class="mySlides fade">

            <img src="images/image1.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">

            <img src="images/image2.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">
            <img src="images/image33.jpg" style="width:100%;">

        </div>
        <div style="text-align:center; margin-top:-3%;">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
    <br><br>
    <!--Recruiters slide-->

    <div class="logo-slider">
        <div class="logo-slide-track">
            <div class="slide" style="margin-top:-30px;"><img src="images/accenture.jpg"></div>
            <div class="slide"><img src="images/lnt-logo.png"></div>
            <div class="slide"><img src="images/payoda-logo.png"></div>
            <div class="slide" style="margin-top:-20px;"><img src="images/virtusa-logo.jpg"></div>
            <div class="slide" style="padding-left:50px;"><img src="images/zoho-logo.png"></div>
            <div class="slide"><img src="images/wipro-logo.png"></div>
            <div class="slide"><img src="images/ivtl-logo.png"></div>
            <div class="slide"><img src="images/terralogic-logo.png"></div>
            <div class="slide" style="margin-top:-30px;"><img src="images/accenture.jpg"></div>
            <div class="slide"><img src="images/lnt-logo.png"></div>
            <div class="slide"><img src="images/payoda-logo.png"></div>
            <div class="slide" style="margin-top:-20px;padding-left:-80px;"><img src="images/virtusa-logo.jpg"></div>
            <div class="slide" style="padding-left:50px;"><img src="images/zoho-logo.png"></div>
            <div class="slide"><img src="images/wipro-logo.png"></div>
            <div class="slide"><img src="images/ivtl-logo.png"></div>
            <div class="slide"><img src="images/terralogic-logo.png"></div>
        </div>
    </div>

    <!--content about college-->

    <div class="w3-row-padding w3-center w3-margin-top">
        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:460px"><br>
                <h3 style="color:green;">Management</h3><br>
                <img src="images/management.png" class="img-fluid" style="width:31%;" alt="Responsive image"><br>
                <p style="text-align: justify; margin:25px;25px;">Apart from healthcare, it is education that has attracted the attention of the SNR Sons Charitable Trust. Apart from the Sophisticated medical facilities and advanced treatment methods. Our team of qualified physicians provide moral support
                    throughout the course of the treatment. Today we stand as one of the most reliable medical destinations in South India and Endeavour to maintain our excellence to continue through.</p>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:460px"><br>
                <h3 style="color:green;">Principal's Message</h3><br>
                <img src="images/msg.png" class="img-fluid" style="width:31%" alt="Responsive image"><br>
                <p style="text-align: justify; margin:25px;25px;">Dr. M. Paulraj’s vision is to make SRIT Globally Visible. Therefore, he tries to make his staff members and students globally visible by making them to contribute more on research and teaching-learning process. He is a lover of Project
                    Exhibition. He drives the staff members to publish more papers in the referred Journals and receive funds from Funding Agencies for their Project and Consultancy works.</p>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:460px"><br>
                <h3 style="color:green;">Admissions</h3><br>
                <img src="images/add.png" class="img-fluid" style="width:31%" alt="Responsive image"><br>
                <p style="text-align: justify; margin:25px;25px;">The applicants should have secured TANCET score in addtion to a pass in a degree examination. For first year ME admission, the applicants should have secured TANCET score in addition to a pass in the respective engineering degree examination
                    and obtained atleast half percentage in the qualifying degree. A valid TANCET score is required for admission under Government Quota through single window counseling.</p>
            </div>
        </div>
    </div>
    <br>




    <div class="w3-row w3-border">
        <div class="w3-half w3-container">
            <h3 style="color:green; margin:35px;35px;">College</h3>
            <p style="text-align: justify; margin:35px;35px;">Sri Ramakrishna Institute of Technology (SRIT), an Autonomous Institution, Affiliated to Anna University is one among the most eminent Educational Institutions in Coimbatore district. SRIT is recognized as one of the leaders in Engineering
                Education, Research and Application of knowledge for the betterment of the society and the country. The college has imprinted a position in the Engineering Education by creating graduates to the industry and the society. Since its inception
                in the year 2002, the institution has been continuously motivated to make a permanent mark in the education field by creating technocrats, sound in Academics and Value system.

                <br>SRIT is one of the seventeen leading institutions managed by SNR Sons Charitable Trust which includes Polytechnic College, Schools, Dental College, Colleges of Pharmacy, Physiotherapy, Arts & Science, and Advanced Training Institute.
                The institution is located in a tranquil environment appropriate for constant learning. It is situated at the outskirts of the city. Well-constructed buildings with state-of-the-art educational aids are spread over the 49.99 acres with
                built up area of 65,117 Sq.m.</p>
        </div>
        <div class="w3-half w3-container">
            <h3 style="color:green; margin:35px;35px;">Advantages</h3>
            <p style="text-align: justify; margin:35px;35px;"><b>SRIT Collaborates with IIT-Bombay</b><br>On 28 September, 2012, SRIT has become the Remote Center for IIT Bombay under “Train 10000 Teachers Programme (T10KT)” to conduct ISTE Workshops. During the main workshop, the Workshop Coordinator
                at every center supervises the conduct of tutorials and Labs. All the lectures and tutorial sessions are recorded. The final edited audio-visual contents, along with other course materials are released under Open Source. These contents
                can be freely used later by all teachers and students.</p>
            <p style="text-align: justify; margin:35px;35px;"><b>Ongoing Consultancy Work / Funded Projects</b><br>Development of acoustic based Steam Leak Detection System For Power Boilers - Micromax Systems, Trichy. Conversion of textile Dyeing Sludge into building materials - The Dyers Association
                of Tirupur.</p>
        </div>
    </div>
    <br>
    <button type="image" class="open-button" onclick="openForm()"><img src="images/chatbot1.png" width="50px" height="50px" /></button>


    <div class="chat-popup" id="myForm">
            <div class="container" id="content">
                <!-- main container with content -->
                <!-- content of the page (interaction with the robot) -->
                <div id="header-container">
                  <p id="header1">Chat with us!</p>
                  <button type="image" class="cancel-btn" onclick="closeForm()">X</button>
                </div>
                <div id="accordion">
                </div>
                <div class="row">

                    <div class="col-sm-7"></div>
                    <div class="col-sm-5">
                        <div class="form-group" id="log1">
                            <div class="welcome-msg">Welcome to SRIT chat, we are excited to help you out. Please type in your query to begin with!</div>
                        </div>
                        <div text-align="middle" style="display: none" id="smile">
                            
                            <h2>Thanks very much for using chatbot...!</h2>
                            
                        </div>

                        <div class="form-group" style="display: none" contenteditable="true" id="fees"></div>
                        <div class="form-group" style="display: none" contenteditable="true" id="reg">
                            <h2>who are you? </h2><br>
                            <form class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="name">Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="name">Address:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="name">Phone no.:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Email:</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default" id="sbmt" name="submit" value="register">Submit</button>
                                    </div>
                                </div>

                            </form>

                        </div>

                        <?PHP
                        if(isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $address = $_POST['address'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            try {
                                $host = 'localhost';
                                $dbname = 'id429119_info';
                                $user = 'id429119_root';
                                $pass = '54321root';

                                $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "INSERT INTO info (name, address, phone, email) VALUES ('$name', '$address', '$phone', '$email')";
                                $conn->exec($sql);
                            }catch(PDOException $e){
                                echo $sql . "<br>" . $e->getMessage();
                            }
                            $conn = null;
                        }
                    ?>

                            <div class="form-group" id="chat-input">
                                <input type="text" class="form-control" id="msg" placeholder="Type your query here!">
                                
                                <!-- input responsive -->
                            </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <!-- span 1 column-->
                </div>
            </div>
            <!-- end of the content -->
    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
       
    </script>

</body>


<script>
    var currentMode = '';
    var datacontent = '';
    var sentence = '';

    function output(msg) {
        $("#log1").html(function(index, currentContent){
          return `${currentContent}
          <div class="chat-msg-container">
            <div class="chat-response bot">
              <div class="label">SRIT:</div>
              <div class="msg">${msg}</div>
            </div>
          </div>`;
        });

        $("#log1").animate({
          scrollTop: $("#log1 .chat-msg-container").last().offset().top
        }, 1000);

    }



     function parseCommand(cmd) {

        if (currentMode == 'fees') {
            output('Type below option for fees details:  &emsp;&emsp;&emsp;&emsp;&emsp; 1. college fees &emsp;&emsp;&emsp;&emsp; 2. hostel fees &emsp;&emsp;&emsp;&emsp; 3. hostel bus &emsp;&emsp;&emsp;&emsp; finally exit the fees mode');
            if (cmd.includes('college fee') || cmd.includes('college fees')) {
                $('#log1').hide();
                $.post("college_fees.php", function(data) {
                    datacontent = data;
                    $('#fees').show();
                    $("#fees").html('<h4 >College Fee</h4>' + datacontent);
                });
            }

            if (cmd.includes('hostel bus')) {
                $('#log1').hide()
                $.post("hostel_bus.php", function(data) {
                    datacontent = data;
                    $('#fees').show();
                    $("#fees").html('<h4 >Hostel Outing Bus Timing</h4>' + datacontent);
                });
            }

            if (cmd.includes('hostel fees')) {
                $('#log1').hide();
                $.post("hostel_fees.php", function(data) {
                    datacontent = data;
                    $('#fees').show();
                    $("#fees").html('<h2 >Hostel Fee</h2>' + datacontent);
                });
            }

            if (cmd.includes('exit')) {
                $('#log1').show();
                $('#fees').hide();
                output('Thanks for using, I am always glad to help');
                currentMode = '';
            }
        }

        if (currentMode == 'reg') {
            $('#log1').hide();
            $('#msg').hide();
            $('#reg').show();
        }

        if (currentMode == 'faq') {
            $('#log1').hide();
            $('#accordion').show();
        }


        if (cmd.includes('exit')) {
            $('#log1').show();
            $('#fees').hide();
            $('#accordion').hide();
            $('#reg').hide();
            output('What would you like to do now? ');
        } else {

            if (cmd.includes("How are you") || cmd.includes("how are you")) {
                output("Good how can i help you");
            }

            if (cmd.includes("what is your name?") || cmd.includes("what is your name") || cmd.includes("What is your name") || cmd.includes("name")) {
                output("SRIT Chatbot");
            }


            if (cmd.includes("address") || cmd.includes("College Address") || cmd.includes("Where is SRIT located?")) {
               output("Perur, Pachapalayam");
            }  


            if (cmd.includes("degrees") || cmd.includes("degree") || cmd.includes("Degree")) {
                output("B.E, B.Tech, MBA");
            }


            if (cmd.includes("courses in B.E") || cmd.includes("Courses in B.E")) {
                output("\n\t1. Computer Science and Engineering &emsp;&emsp;&emsp; 2. Electrical and Communication Engineering  &emsp;&emsp;&emsp;&emsp;&emsp; 3. Mechanical Engineering &emsp;&emsp;&emsp;&emsp;&emsp; 4. Electrical and Electronic Engineering &ensp; 5. Information Technology &emsp;&emsp;&emsp;&emsp;&emsp; 6. Civil Engineering");
               
            }

            if(cmd.includes("canteen foods") || cmd.includes("what are the college canteen foods?")){
                    output("1. Sandwich &emsp;&emsp;&emsp;&emsp;&emsp;  2. Wraps &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 3. Salads &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 4. Hot foods &emsp;&emsp;&emsp;&emsp;&emsp; 5. Cold beverages &emsp;&emsp; 6. Snacks &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 7. Baked snacks....ects");
    
               }

             if(cmd.includes("Admission") || cmd.includes("admission")|| cmd.includes("admission documents")){
                    output("1. Class X Board Examinations Certificate(Self-Attested Photocopy)");
                    output("2. Class X Marks-sheet (Self-Attested Photocopy)");
                    output("3. Class XII Marks-sheet (Self-Attested Photocopy)");
                    output("4. Class XII Provisional Certificate (Self-Attested Photocopy) & Original Certificate");
                    output("5. Character Certificate (recent)");
                    output("6. SC/ST/PwD/ Certificate (in the name of the candidate) ");
                    output("7. OBC (Non-Creamy Layer) Certificate ");
                    output("8. Transfer Certificate ");
                    output("9. At least three passport size self-attested photographs. ");
                    output("10. Photocopy of Address proof ");
               }  

               if(cmd.includes("Bus route") || cmd.includes("bus route")|| cmd.includes("SRIT bus route") || cmd.includes("bus")){
                output("1. Thondamuthur");
                    output("2. Onampalayam");
                    output("3. PN pudur");
                    output("4. sai baba Colony");
                    output("5. Mettupalayam");
                    output("6. Thudiyalur ");
                    output("7. Gandhipuram");
                    output("8. Railway station");
               }


            if (cmd.includes("Attendance") || cmd.includes("attendance")) {
                output("Total strength of cse dept - sec(A,B)=136 students");
            }  

            if (cmd.includes("Placement") || cmd.includes("placement")|| cmd.includes("p")) {
                output("Placement companyies..  ZOHO Corporation    Infosys  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  Wipro Technologies    Paxterra Solutions   &emsp;&emsp;   Lucid Imaging  &emsp;&emsp;&emsp;   Verticurl Pvt ltd &emsp;&emsp;    Virtusa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;    CTS  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;    TCS....etcs");
            }  

            if (cmd.includes("Hostel") || cmd.includes("hostel")) {
                output("NO.of.Hostels in SRIT....Boys hostel-3     Girls hostel-3");
            }  




            if (cmd.includes("hello") || cmd.includes("hi there") || cmd.includes("Hi") || cmd.includes("hi")) {
                output("hi there");
                output("what would you like to do today?");
            }

           
            if (cmd.includes(" ") || cmd.includes("  ")) {
                output("pls type somthings...");
            }

            if (cmd.includes("Result") || cmd.includes("result")) {
                output("SRIT RESULT.... Go to the website link http://results.srit.org/");
            }

            if (cmd.includes("College Strength") || cmd.includes("College Strength") || cmd.includes("Strength")) {
                output("Strength of Students:  cse=136       Ece=122       Mech=187       It =96      Eee =120      Civil=142");
            }

          

           
            if (cmd.includes("fees") || cmd.includes("Fees") || cmd.includes("FEES")) {
                // Set the value into the text area
                output('welcome to fees details...please click enter...  ');
                currentMode = 'fees';
            }

            // if (cmd.includes("who am I?") || cmd.includes("who am i?") || cmd.includes("who am I") || cmd.includes("who am i") || cmd.includes("register")) {
            //     output('thats a good question sir/madam, you can register yourself with me:');
            //     currentMode = 'reg';
            // }

            if (cmd.includes("goodbye") || cmd.includes("bye")) {
                output("Thanks for using, I am always glad to help ;)");
                $('#log1').hide();
                $('#msg').hide();
                $('#smile').show();
            }

            if (cmd.includes("faq") || cmd.includes("show me faq")) {
                currentMode = 'faq';
            }

            if (cmd.includes('translate')) {
                output("what would you like to translate? ");
                currentlog = setence;
                translate(sentence);
            }
        }
    }


    // bind on a key up (or when its released)
    $("#msg").on('keyup', function(e) {

        // if its the enter key, (called key 13)
        if (e.keyCode == 13) {
            // get message from the text field

            var txt = document.getElementById('msg').value;
            // var currentlog = $("textarea#log").val()
            $("#log1 .welcome-msg").remove();
            $("#log1").html(function(index, currentContent){
              return `${currentContent}
              <div class="chat-msg-container">
                <div class="chat-response user">
                  <div class="label">You:</div>
                  <div class="msg">${txt}</div>
                </div>
              </div>`;
            });

            $("#log1").animate({
              scrollTop: $("#log1 .chat-msg-container").last().offset().top
            }, 1000);

            // Set the value into the text area
            // $("textarea#log").val(currentlog + '\n ' + txt + ' :me ');

            // call the main brain       
            parseCommand(txt);
            // wipe the text field        
            document.getElementById('msg').value = '';
        }
    });

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }

    //welcome page..........

    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
    }

    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>


<?php
    function translate($sentence) {
        // Add the URL for the translate API, with the KEY we have created.
        $url = "https://www.googleapis.com/language/translate/v2?key=AIzaSyCDxLVY30Hdc-jP3LGy9xgboK6KOCbpYgM&source=en&target=de&q=";

        // Take a regular string and URL Encode it so it is safe to pass via the URL
        $str = urlencode($sentence);

        // Stick both of them together to page a single string
        $url .= $str;

        // Contact the serer to get the translation by passing the URL
        $json = file_get_contents($url);

        // Dump out the JSON document to the screen.
        var_dump($json);
    }
    ?>

</html>

