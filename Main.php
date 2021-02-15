<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home || Kratigence</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .navbar-brand img {
            border-radius: 50%;
            position: topleft;
            width: 45px;
            height: 45px;
            margin-top: -13px;
            margin-left: -80px;
        }

        .navbar {
            margin-bottom: 0;
            background-color: black;
            z-index: 9999;
            border: 0;
            font-size: 20px !important;
            line-height: 1.42857143 !important;
            border-radius: 0;

        }

        #navbar-1 {
            margin-bottom: 0;
            background-color: rgb(216, 209, 209);
            z-index: 9999;
            border: 0;
            font-size: 20px !important;
            line-height: 1.42857143 !important;
            border-radius: 0;

        }

        .nav.navbar-nav.navbar-right li a {
            color: white;
        }

        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            color: #6d6765 !important;
            background-color: #fff !important;
        }

        .jumbotron {
            background-image: url("bg.jpg");
            color: black;
            padding: 100px 25px;
            font-family: Montserrat, sans-serif;
        }

        .jumbotron h1 {
            color: blue;
            font-family: 'Courier New', Courier, monospace;
        }

        .jumbotron h1 span {
            color: red;
        }

        .jumbotron p {
            color: black;
            font-family: cursive;
        }

        .jumbotron a {
            color: black;
        }

        #about {
            text-align: center;
            background-image: linear-gradient(to right, #FFCC00, #FFFFCC);
            padding: 60px 100px;
        }

        .container-fluid h2 {
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .container-fluid h2 span {
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .container-fluid-1 {
            background-color: white;
            padding: 60px 60px;
        }

        .col-sm-8 p {
            background-color: rgba(26, 78, 247, 0.596);
            padding: 50px 50px;
        }

        .col-sm-4 h2 {
            color: red;
            text-align: center;
            padding-top: 50px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .container-1 {
            margin: 60px;
            background-color: rgb(216, 209, 209);
        }

        .container-2 h2 {
            margin: 60px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .text-block {
            position: absolute;
            color: rgb(216, 209, 209);
            padding-left: 20px;
            padding-right: 20px;
        }

        .text-block h1 {
            color: black;
        }

        #row2 .col-sm-4 {
            height: 200px;
            width: 400px;

        }

        .row .col-sm-4 h4 {
            margin-left: 40px;
            margin-top: 30px;
        }

        .row .col-sm-4 p {
            text-align: left;
            margin-left: 40px;
            margin-top: 20px;
        }

        #progress1 {
            margin: 60px;
            width: 100px;
            height: 10px;

        }

        #progress5 {
            margin: 60px;
            width: 100px;
            height: 10px;

        }

        #progress2 {
            margin: 60px;
            width: 100px;
            height: 10px;

        }

        #progress3 {
            margin: 60px;
            width: 100px;
            height: 10px;

        }

        #progress4 {
            margin: 60px;
            width: 100px;
            height: 10px;

        }

        #progress {
            width: 100%;
            height: 10px;
        }

        mark {
            margin: 60px;
            background-color: rgba(230, 134, 105, 0.808);
        }

        .container-3 {
            text-align: center;
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-image: linear-gradient(to right, rgb(31, 65, 45), rgb(45, 139, 84), rgb(31, 65, 45));
        }

        .container-3 .row {
            background-color: white;
            color: black;
        }

        .footer {
            background-color: black;
            color: white;
        }

        .social li {

            border: 2px solid #B5B5B5;

            -webkit-border-radius: 50%;

            -moz-border-radius: 50%;

            -o-border-radius: 50%;

            -ms-border-radius: 50%;

            border-radius: 50%;

            float: left;

            height: 36px;

            line-height: 36px;

            margin: 0 8px 0 0;

            padding: 0;

            text-align: center;

            width: 36px;

            transition: all 0.5s ease 0s;

            -moz-transition: all 0.5s ease 0s;

            -webkit-transition: all 0.5s ease 0s;

            -ms-transition: all 0.5s ease 0s;

            -o-transition: all 0.5s ease 0s;

        }



        .social li a {

            color: #EDEFF1;

        }

        .social li:hover {

            border: 2px solid #b8c9da;

            background: #a6b8ca;

        }

        .social li a i {

            font-size: 16px;

            margin: 0 0 0 5px;

            color: #EDEFF1 !important;

        }
    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage"><img src="logo.jpeg" alt="logo"></img></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#myPage">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#event">Events</a></li>
                    <li><a href="#intern">Internships</a></li>
                    <li><a href="#project">Project</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#sponser">Sponsors</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1><b>KRAti<span>GENCE</span></b></h1>
        <h2>IIIT BHOPAL</h2>
        <p><b>WE AIM TOWARDS SOLVING REAL WORLD PROBLEMS THROUGH ARTIFICIAL INTELLIGENCE.</b></p>
        <a href="#myPage" title="To Down">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
    </div>
    <div id="about" class="container-fluid">
        <div class="row">
            <h2><b>ABOUT US</b></h2>
            <h2><span>Kratigence</span></h2>
            <p>Kratigence is the technical society of Indian Institute of Information Technology Bhopal. Kratigence
                provides students a platform to pursue their interest in AI, IOT, Robotics etc by working on small and
                large scale projects. However, the society provides much more than just technical growth to its members,
                from team-building to cooperation, from perseverance to sincerity, the society teaches you a myriad of
                interpersonal skills essential in daily life.

                <br>The society is open to students with or without experience because, believe it or not, none of us
                had any idea of AI when we first stepped into the society room, neither do we expect anything from you.
                You just need to show up and the society and its people will take care of the rest.
                <br>We help the students to integrate and help each other, learn from each other and do well each other.
                We conduct various innovative competitions, workshop, quizzes and invite speakers from various domains
                to inspire and assist students on their journey to start their career in the field of Artificial
                Intelligence and Internet of Things.</p>
        </div>
    </div>
    <div class="container-fluid-1">
        <div class="row">
            <div class="col-sm-4">
                <h2>OUR VISION</h2>
            </div>
            <div class="col-sm-8">
                <P>Kratigence is the technical society of Indian Institute of Information Technology Bhopal. Kratigence
                    provides students a platform to pursue their interest in AI, IOT, Robotics etc by working on small
                    and
                    large scale projects. However, the society provides much more than just technical growth to its
                    members,
                    from team-building to cooperation, from perseverance to sincerity, the society teaches you a myriad
                    of
                    interpersonal skills essential in daily life.</P>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-8">
                <P>We help the students to integrate and help each other, learn from each other and do well each other.
                    We conduct various innovative competitions, workshop, quizzes and invite speakers from various
                    domains
                    to inspire and assist students on their journey to start their career in the field of Artificial
                    Intelligence and Internet of Things.</P>
            </div>
            <div class="col-sm-4">
                <h2>OUR MISSION</h2>
            </div>
        </div>
    </div>
    <div class="container-2">
        <div class="progress" id="progress5">
            <div class="progress-bar progress-bar-success" role="progressbar" style="width:50%">
            </div>
            <div class="progress-bar progress-bar-danger" role="progressbar" style="width:50%">
            </div>
        </div>
        <h2><b>Process</b></h2>
        <div id="process" class="container-1">
            <div class="row">
                <div class="col-sm-4">
                    <img src="pro2.jpg" alt="join us" width="400px" height="200px"></img>
                    <div class="text-block" style="bottom: -7px;">
                        <h1 style="color: white;">0</h1>
                        <h1 style="color: white;">1</h1>
                        <span class="glyphicon glyphicon-triangle-top" style="bottom: 5px;"></span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h4><b>Join Our Webinars</b></h4>
                    <p>Note everything you learnt from speakers and follow the best things you feel suits you best.</p>
                </div>
                <div class="col-sm-4">
                    <img src="pro3.jpg" alt="join us" width="400px" height="200px"></img>
                    <div class="text-block" style="bottom: -7px;">
                        <h1 style="color: white;">0</h1>
                        <h1 style="color: white;">3</h1>
                        <span class="glyphicon glyphicon-triangle-top" style="bottom: 5px;"></span>
                    </div>
                </div>
            </div>
            <div class="row" id="row2">
                <div class="col-sm-4">
                    <h4><b>Join Us</b></h4>
                    <p>Join Us and feel the power of healthy community we have and get exposure of your insights.</p>
                </div>
                <div class="col-sm-4">
                    <img src="pro1.jpg" alt="join us" width="420px" height="200px"></img>
                    <div class="text-block" style="top:0px;">
                        <span class="glyphicon glyphicon-triangle-bottom" style="top:-5px;"></span>
                        <h1>0</h1>
                        <h1>2</h1>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h4><b>Create New Project</b></h4>
                    <p>Create new projects to out cast yourself from common public and get yourself a good startup
                        ideas.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-2" id="team">
        <nav class="navbar" id="navbar-1"></nav>
        <div class="row" style="padding-top: 50px;">
            <div class="col-sm-6">
                <div class="progress" id="progress1">
                    <div class="progress-bar progress-bar-success" role="progressbar" style="width:50%">
                    </div>
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:50%">
                    </div>
                </div>
                <h2><b>Team</b></h2>
                <p style="margin: 60px;">Core Team - We believe that our team is our biggest strength.<br>Student
                    working towards a Bachelor of Technology (B.Tech) focused in Information Technology from IIIT
                    Bhopal.</p>

            </div>
            <div class="col-sm-2">
                <img src="team1.jpg" alt="founder" width="225px" height="400px"></img>
            </div>
            <div class="col-sm-2">
                <img src="team2.jpg" alt="co-founder" width="225px" height="400px"></img>
            </div>
            <div class="col-sm-2">
                <img src="team3.jpg" alt="AF" width="225px" height="400px"></img>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container-2">
        <nav class="navbar" id="navbar-1"></nav>
        <div class="row" style="padding-top: 50px;">
            <div class="col-sm-7">
                <div class="progress" id="progress2">
                    <div class="progress-bar progress-bar-success" role="progressbar" style="width:50%">
                    </div>
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:50%">
                    </div>
                </div>
                <h4 style="margin: 60px;">Founder</h4>
                <h2><b>Vishwajeet Singh Yadav</b></h2>
                <p style="margin: 60px;">Student working towards a Bachelor of Technology (B.Tech) focused in
                    information Technology from IIT Bhopal.</p>
                <h3><mark>Git and social media links</mark></h3>
                <table class="table table-borderless" style="margin: 60px;">

                    <tbody>
                        <tr>

                            <td style="width: 80px;">Skill A</td>
                            <td>
                                <div class="progress" id="progress" style="color: darkgrey;">
                                    <div class="progress-bar" role="progressbar" style="width:90%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">90%</td>
                        </tr>
                        <tr>

                            <td style="width: 80px;">Skill B</td>
                            <td>
                                <div class="progress" id="progress" style="color: darkgrey;">
                                    <div class="progress-bar" role="progressbar" style="width:85%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">85%</td>
                        </tr>
                        <tr>

                            <td style="width: 80px;">Skill C</td>
                            <td>
                                <div class="progress" id="progress" style="color: darkgrey;">
                                    <div class="progress-bar" role="progressbar" style="width:83%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">83%</td>
                        </tr>
                        <tr>

                            <td style="width: 80px;">Skill D</td>
                            <td>
                                <div class="progress" id="progress" style="color: darkgrey;">
                                    <div class="progress-bar" role="progressbar" style="width:65%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">65%</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-5">
                <img src="team1.jpg" alt="founder" width="550px" height="600px"></img>
            </div>

        </div>
    </div>
    <br><br>
    <div class="container-2">
        <nav class="navbar" id="navbar-1"></nav>
        <div class="row" style="padding-top: 50px;">
            <div class="col-sm-7">
                <div class="progress" id="progress3">
                    <div class="progress-bar progress-bar-success" role="progressbar" style="width:50%">
                    </div>
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:50%">
                    </div>
                </div>
                <h4 style="margin: 60px;">Co-Founder</h4>
                <h2><b>Shubham Singh</b></h2>
                <p style="margin: 60px;">Student working towards a Bachelor of Technology (B.Tech) focused in
                    information Technology from IIT Bhopal.</p>
                <h3><mark>Git and social media links</mark></h3>
                <table class="table table-borderless" style="margin: 60px;">

                    <tbody>
                        <tr>

                            <td style="width: 80px;">Skill A</td>
                            <td>
                                <div class="progress" id="progress" style="color: darkgrey;">
                                    <div class="progress-bar" role="progressbar" style="width:90%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">90%</td>
                        </tr>
                        <tr>

                            <td style="width: 80px;">Skill B</td>
                            <td>
                                <div class="progress" id="progress" style="color: darkgrey;">
                                    <div class="progress-bar" role="progressbar" style="width:85%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">85%</td>
                        </tr>
                        <tr>

                            <td style="width: 80px;">Skill C</td>
                            <td>
                                <div class="progress" id="progress" style="color: darkgrey;">
                                    <div class="progress-bar" role="progressbar" style="width:83%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">83%</td>
                        </tr>
                        <tr>

                            <td style="width: 80px;">Skill D</td>
                            <td>
                                <div class="progress" id="progress" style="color: darkgrey;">
                                    <div class="progress-bar" role="progressbar" style="width:65%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">65%</td>
                        </tr>
                    </tbody>
                </table>



            </div>

            <div class="col-sm-5">
                <img src="team2.jpg" alt="co-founder" width="550px" height="600px"></img>
            </div>

        </div>
    </div>
    <br><br>
    <div class="container-2">
        <nav class="navbar" id="navbar-1"></nav>
        <div class="row" style="padding-top: 50px;">
            <div class="col-sm-7">
                <div class="progress" id="progress4">
                    <div class="progress-bar progress-bar-success" role="progressbar" style="width:50%">
                    </div>
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:50%">
                    </div>
                </div>
                <h4 style="margin: 60px;">Associate Founder</h4>
                <h2><b>Anmol Porwal</b></h2>
                <p style="margin: 60px;">Student working towards a Bachelor of Technology (B.Tech) focused in
                    information Technology from IIT Bhopal.</p>
                <h3><mark>Git and social media links</mark></h3>
                <table class="table table-borderless" style="margin: 60px;">

                    <tbody>
                        <tr>

                            <td style="width: 80px;">Skill A</td>
                            <td>
                                <div class="progress" id="progress" style="color: darkgrey;">
                                    <div class="progress-bar" role="progressbar" style="width:90%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">90%</td>
                        </tr>
                        <tr>

                            <td style="width: 80px;">Skill B</td>
                            <td>
                                <div class="progress" id="progress" style="color: darkgrey;">
                                    <div class="progress-bar" role="progressbar" style="width:85%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">85%</td>
                        </tr>
                        <tr>

                            <td style="width: 80px;">Skill C</td>
                            <td>
                                <div class="progress" id="progress" style="color: darkgrey;">
                                    <div class="progress-bar" role="progressbar" style="width:83%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">83%</td>
                        </tr>
                        <tr>

                            <td style="width: 80px;">Skill D</td>
                            <td>
                                <div class="progress" id="progress" style="color: darkgrey;">
                                    <div class="progress-bar" role="progressbar" style="width:65%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 150px;">65%</td>
                        </tr>
                    </tbody>
                </table>



            </div>
            <div class="col-sm-5">
                <img src="team3.jpg" alt="AF" width="550px" height="600px"></img>
            </div>
        </div>
    </div>
    <div class="container-3">
        <i class="glyphicon glyphicon-bookmark" style="font-size:60px;color:red;padding-left: 1200px;"></i>
        <h1 style="padding-top: 20px ;">Support Section</h1>
        <div class="row">
            <h3>..YOU CAN HELP US IN MANY WAYS..</h3>
            <div class="col-sm-4">
                <i class="glyphicon glyphicon-piggy-bank" style="font-size:60px;color:rgb(187, 14, 14)"></i>
                <h4>Promote Us</h4>
                <p style="margin: 60px;">The society is open to students with or without experience because, believe it
                    or not, none of us had any idea of AI when we first stepped into the society room, neither do we
                    expect anything from you. You just need to show up and the society and its people will take care of
                    the rest.</p>

            </div>
            <div class="col-sm-4">
                <i class="glyphicon glyphicon-heart" style="font-size:60px;color:yellow"></i>
                <h4>Support Us</h4>
                <p style="margin: 60px;">The society is open to students with or without experience because, believe it
                    or not, none of us had any idea of AI when we first stepped into the society room, neither do we
                    expect anything from you. You just need to show up and the society and its people will take care of
                    the rest.</p>
            </div>
            <div class="col-sm-4">
                <i class="glyphicon glyphicon-user" style="font-size:60px;color:green"></i>
                <h4>Become Volunteer</h4>
                <p style="margin: 60px;">The society is open to students with or without experience because, believe it
                    or not, none of us had any idea of AI when we first stepped into the society room, neither do we
                    expect anything from you. You just need to show up and the society and its people will take care of
                    the rest.</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="row" style="margin: 100px;">
            <div class="col-sm-4">
                <h3>MAIN MENU</h3>
                <ul>
                    <li><a href="#myPage">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#event">Events</a></li>
                    <li><a href="#intern">Internships</a></li>
                    <li><a href="#project">Project</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#sponser">Sponsors</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>

            </div>
            <div class="col-sm-4">
                <h4><b>Address:</b></h4>
                <p>New Teaching Block<br>
                    IIIT Bhopal | MANIT Campus<br>
                    Bhopal, Madhya Pradesh - 462003</p>

                <h4><b>E-mail:</b></h4>
                <p><a>info@kratigence.com</a></p>
            </div>
            <div class="col-sm-4">
                <h4>Get Social</h4>
                <p>Follow Us On</p>
                <ul class="social">
                    <li>
                        <a href="https://m.facebook.com/kratigence">
                            <i class=" fa fa-facebook"> </i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/kratigence">
                            <i class="fa fa-twitter"> </i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/kratigence">
                            <i class="fa fa-linkedin"> </i>
                        </a>

                    </li>
                    <li>
                        <a href="https://www.instagram.com/kratigence">
                            <i class="fa fa-instagram"> </i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/kratigence">
                            <i class="fa fa-github"> </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>


</html>
