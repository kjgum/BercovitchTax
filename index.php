<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Contact Form'; 
    $to = 'stephen@bercovitchtax.com'; 
    $subject = 'Message from BercovitchTax.com';
    
    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
      $errHuman = 'Your anti-spam is incorrect';
    }
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
  }
}
  }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Bercovitch Tax Law</title>
        <meta name="description" content="">
        <meta name="keywords" content="
    bercovitch,
    new york,
    nyc,
    midtown,
    manhattan,
    tax law, 
    accounting firms,
    accounting,
    tax accountant,
    tax service,,
    hedge fund,
    private equity accounting,
    Fintech,
    Outsourced accounting,
    Outsourced CFO,
    SALT,
    State and local tax,
    Unicorporated Business Tax (UBT),
    State tax,
    Combined return,
    Sales and use tax or sales/use tax,
    Tax Consultant,
    State and local tax consultant">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Saira+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/octicons/1024/law-512.png">
    </head>

    <body id="top" data-spy="scroll">
        <!--top header-->
        <header id="home">
            <section class="top-nav hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top-left">
                                <ul>
                                    <!-- <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> -->
                                    <li><a href="https://www.linkedin.com/in/stephen-bercovitch-a21b1a1a/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="mailto:stephen@bercovitchtax.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li><a href="tel:201-618-3431"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                                    <!-- <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li> -->
                                    <!-- <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-right">
                                <a href='https://www.google.com/maps/place/232+Madison+Ave,+New+York,+NY+10016/@40.7499309,-73.9840445,17z/data=!3m1!4b1!4m5!3m4!1s0x89c259074b5d1551:0xee7286688b7d51e!8m2!3d40.7499309!4d-73.9818558' style="font-size: 16px;" target="_blank">
                                    <p>Location:<span>NY, NY</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--main-nav-->
            <div id="main-nav">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="index.html" class="navbar-brand">
                                <!-- <span>Bercovitch Tax Law</span> -->
                                <img src="images/about/theLogoGreen3.png"></a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
                                <span class="sr-only">Toggle</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse" id="ftheme">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#home">home</a></li>
                                <li><a href="#about">about</a></li>
                                <li><a href="#service">services</a></li>
                                <li><a href="#theSuccesses">successes</a></li>
                                <li><a href="#get-touch">contact</a></li>
                            </ul>
                        </div>
                        <!-- <div class="search-form">
                        <form>
                            <input type="text" id="s" size="40" placeholder="Search..." />
                        </form>
                    </div> -->
                    </div>
                </nav>
            </div>
        </header>
        <!--slider-->
        <div id="slider" class="flexslider">
            <ul class="slides">
                <li>
                    <!-- <img src="images/about/about3.jpg"> -->
                    <!-- <img src="https://www.sia.psu.edu/sites/default/files/styles/content_header/public/nyc_skyline.jpg?itok=0Lk7TAnG"> -->
                    <!-- <img src="http://wikitravel.org/upload/shared//f/f9/Manhattan_Banner.jpg"> -->
                    <img src="https://mabrycampbell.files.wordpress.com/2014/05/i-am-lower-manhattan-golden-skyline-mabry-campbell-lr.jpg">
                    <div class="caption">
                        <h2><span>
                    Stephen J. Bercovitch is a highly regarded, practiced state and 
                    local tax attorney with both large public accounting firm and 
                    Fortune 500 corporate industry background. </span></h2>
                    </div>
                </li>
        </div>
        <!--about-->
        <div id="about">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="heading">
                        <br/>
                        <br/>
                        <h2 class="text-center">overview</h2>
                        <p class="text-left">
                            <div class="hideMe">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stephen J. Bercovitch is a highly regarded, practiced state and local tax attorney with both large public accounting firm and Fortune 500 corporate industry background.
                                <br/>
                                <br/>
                                <br/>
                            </div>
                            <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The challenge of multiple and overlapping demands is presented by a dynamic state and local tax environment: state tax laws change frequently, many states have conflicting rules that can result in double taxation, technology is rapidly evolving and operations can inadvertently trigger tax nexus, and the states are becoming more sophisticated in their enforcement of laws. The job of a SALT specialist is to pro-actively develop return filing positions, mitigate risk, implement tax saving compliance procedures, and defend existing positions under audit. </br>
                            </br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stephen has provided professional services and legal guidance to clients and their financial advisors for more than 30 years. His practice offers a model of leveraged assistance and expert support to both small and mid-size public accounting firms, law firms, high net worth individuals, as well as closely held companies in management of SALT issues. </br>
                            </br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stephen is a graduate of New York University School of Law, Juris Doctorate, and of the University of California, Berkeley, Bachelor of Arts, History, Cum Laude. He is a member of the New York State Bar and the New York City Bar Association State & Local Tax Committee.</br>
                            </br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stephen J. Bercovitch is a highly regarded, practiced state and local tax attorney with both large public accounting firm and Fortune 500 corporate industry background.</br>
                            </br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The practice offers a full range of state and local tax support and consulting, tax planning, and audit defense work. Clients include individuals, closely held corporations, as well as other professionals: tax law firms, accounting firms, and tax consultants needing cost-effective and reliable SALT expertise in state sales/use, income/franchise, and payroll taxes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="service">
            <section class="services-style-one">
                <!-- <div class="outer-box clearfix">
                <div class="services-column">
                    <div class="content-outer"> -->
                <div class="row">
                    <div class="col-md-8">
                        <h3><span>Multi</span>-state Tax Planning</h3>
                        <br/>
                        <br/>
                    </div>
                </div>
                <div class="row clearfix fadeIn media wow">
                    <div class="service-block  col-md-5 col-md-offset-1">
                        <div class="inner-box">
                            <div class="icon-box"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                            <!-- <h4>i can do this</h4> -->
                            <div class="text">Conduct nexus reviews and managed sales, use and income tax compliance for a wide variety of firms expanding in the national market to minimize collections obligations and effective tax rate. Typical companies include internet retailers, investment advisors, managed services providers, and software vendors
                            </div>
                        </div>
                    </div>
                    <div class="service-block  col-md-5 ">
                        <div class="inner-box">
                            <div class="icon-box"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
                            <!-- <h4>and this</h4> -->
                            <div class="text">Address revenue sourcing, unitary rules, ASC-740 (FIN 48) issues, state NOLs and credits, and composition of state corporate groups
                                <br/>
                                <br/> Advise on state and city tax credits and incentives
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="service-block col-md-5 col-md-offset-1">
                        <div class="inner-box">
                            <div class="icon-box"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
                            <!-- <h4>yaay</h4> -->
                            <div class="text">Implement numerous voluntary disclosure agreements to successfully mitigate potential state tax liabilities and to further client compliance with state income and sales/use taxes
                            </div>
                        </div>
                    </div>
                    <div class="service-block col-md-5">
                        <div class="inner-box">
                            <div class="icon-box"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></div>
                            <!-- <h4>titles</h4> -->
                            <div class="text">Advise high net worth individuals on change of domicile Conduct buy- and sell-side SALT due diligence projects in mergers and acquisitions. This value-added service can save buyers from needless state tax exposure; and, can provide sellers with leverage to realize full value when state taxes are minimized
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h3><span>Tax C</span>ontroversy & Audit Defense</h3>
                        <br/>
                        <br/>
                    </div>
                </div>
                <div class="row">
                    <div class="service-block col-md-5 col-md-offset-1">
                        <div class="inner-box">
                            <div class="icon-box"><i class="fa fa-building" aria-hidden="true"></i></div>
                            <!-- <h4>work!</h4> -->
                            <div class="text">
                                Conducted New York State sales and use tax audit defense as examples, for a medical device manufacturer, infrastructure as a service (“IaaS”) firm; online hosting and software firm; software developer
                            </div>
                        </div>
                    </div>
                    <div class="service-block col-md-5">
                        <div class="inner-box">
                            <div class="icon-box"><i class="fa fa-money" aria-hidden="true"></i></div>
                            <!-- <h4>work!</h4> -->
                            <div class="text">
                                Negotiated New York State withholding tax audits for a wide variety of industries including a large digital production company, an event planner, and an asset management firm
                                <br/>
                                <br/> Negotiate New York State residency audits for a hedge fund executive, a bank executive, a closely held business owner
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        <!-- <img src="images/about/skyline1.jpg"> -->
        <img src="http://www.servcorp.com/media/2962/one-world-trade-center-new-york-banner.jpg">
        <div id="theSuccesses">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="heading">
                        <br/>
                        <br/>
                        <br/>
                        <h2 class="text-center">SAMPLING OF SUCCESSES</h2>
                        <p class="text-left">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resolved sell-side liabilities and dealt with multistate corporate tax consequences under Section 338(h)(10) for divested CBS, Inc. lines of business in numerous large transactions, including sales of toys, musical instruments, magazines, publishing, and records divisions, saving millions of state tax dollars.
                            <br/>
                            <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Initiated review of $3 billion New York investment portfolio, resulting in tax savings of $2.5 million annually based on recommendation to change investments.
                            <br/>
                            <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Defended combined return filing position with New York State, saving closely held digital production company one million annually.
                            <br/>
                            <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Negotiated changes of domicile from Connecticut to Florida and from New York to Florida for high net worth individuals saving six figures annually and insulating sales of their businesses from state income taxes.
                            <br/>
                            <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Negotiated UBT refund of nearly $1million for investment advisory firm based on analysis of special allocation rules that their former practitioner had overlooked.
                            <br/>
                            <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Negotiated New York State voluntary disclosure for a construction contractor, saving six figures in sales taxes based on a limited look back period.
                            <br/>
                            <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Initiated New York City Unincorporated Business Tax (“UBT”) planning for music rights holder selling its portfolio of licenses.</p>
                        <br/>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--services wrapper-->
        <!--service gapping-->
        <div class="service-footer hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="service-footer-left">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="service-footer-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact form-->
        <div id="get-touch">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2 class="text-center">CONTACT</h2>
                        <br/>
                        <form class="form-horizontal" role="form" method="post" action="index.php">
                            <div class="form-group">
                                <label class="sr-only" for="name">Name</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </div>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                    </div>
                                    <?php echo "<p class='text-danger'>$errName</p>";?>
                                
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>"></div>
                                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="message">Message</label>
                                <textarea class="form-control" rows="4" name="message">
                                    <?php echo htmlspecialchars($_POST['message']);?>
                                </textarea></div>
                                <?php echo "<p class='text-danger'>$errMessage</p>";?>
                            
                            <div class="row">
                            <div class="form-group">
                                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                    <?php echo "<p class='text-danger'>$errHuman</p>";?>
                                </div>
                            </div>
                            <div class="btn-group pull-right" role="group">
                                <!-- <button type="submit" class="btn btn-primary submit" style="background-color: #128D15;"> -->
                                <input id="submit" name="submit" type="submit" value="Send" class="btn">
                                <!-- <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> -->
                                <!-- </button> -->
                            </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <?php echo $result; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row text-center">
                <div class="col-md-4">
                    <!-- <div class="get-touch-heading "> -->
                    <h1 style="color: #128D15">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        </h1>
                    <a href="mailto:stephen@bercovitchtax.com" style="font-size: 16px;">stephen@bercovitchtax.com</a>
                </div>
                <div class="col-md-4 ">
                    <h1 style="color: #128D15">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> </h1>
                    <a href='https://www.google.com/maps/place/232+Madison+Ave,+New+York,+NY+10016/@40.7499309,-73.9840445,17z/data=!3m1!4b1!4m5!3m4!1s0x89c259074b5d1551:0xee7286688b7d51e!8m2!3d40.7499309!4d-73.9818558' style="font-size: 16px;" target="_blank">
                        Stephen J. Bercovitch, J.D., Bercovitch Tax Law<br/>
                            232 Madison Avenue, 7th Floor <br/>
                            New York, NY  10016
                   </a>
                   <br/>
                        <span style="border-bottom: 2px solid #008e00;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <br/><br/>
                    <a href="https://www.google.com/maps/place/8550+Boulevard+E+%233h,+North+Bergen,+NJ+07047/@40.8018504,-73.99801,17.27z/data=!4m5!3m4!1s0x89c2f7d98bbe5d8f:0xa05313d518b29b3b!8m2!3d40.8018484!4d-73.9957885" style="font-size: 16px;" target="_blank">
                        8550 Boulevard East #3H<br/>
                        North Bergen, NJ 07047<br/>
                    </a>

                       
                </div>
                <div class="col-md-4 ">
                    <h1 style="color: #128D15">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        </h1> office: <a href="tel:212-651-4382" style="font-size: 16px;">212-651-4382 <br/></a> cell: <a href="tel:201-618-3431" style="font-size: 16px;">201-618-3431 </a>
                </div>
            </div>
        </div>
        <!--footer-->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-heading spacePlease">
                            <h3 class="footSpan"><span>about</span> us</h3>
                            <br/>
                            <small>Stephen J. Bercovitch is a highly regarded, practiced state and local tax (“SALT”) attorney with both large public accounting firm and Fortune 500 corporate industry background. The practice offers a full range of state and local tax support and consulting, tax planning, and audit defense work. Clients have included individuals, closely held corporations, as well as other professionals: tax law firms, accounting firms, and tax consultants needing cost-effective and reliable SALT expertise in state sales/use, income/franchise, and payroll taxes.</small>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- <div class="footer-heading">
                        <h3><span>latest</span> news</h3>
                        <ul>
                            <li><a href="#">this is a link.</a></li>
                            <li><a href="#">this is a link.</a></li>
                            <li><a href="#">this is a link.</a></li>
                            <li><a href="#">this is a link.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4"> -->
                        <div class="footer-heading">
                            <h3 class="footSpan"><span>discla</span>imer</span></h3>
                            <small>
                        <br/>This web site is a public resource of general information which is not intended to be a source of legal advice provided under an attorney-client relationship.  Instead, always seek the advice of competent counsel in the reader's state. Moreover, any reader who sends an e-mail to Stephen@Bercovitchtax.com must realize that this unilateral action and any reply thereto, do not, in and of themselves, create an attorney-client relationship.  <br/><br/>Circular 230 and related Notice<br/>To ensure compliance with requirements imposed by the IRS, any information contained on this website or any attachments that may constitute U.S. federal tax advice is not intended, written, or posted to be used, and cannot be used, for the purpose of (1) avoiding penalties under the Internal Revenue Code or (2) promoting, marketing or recommending to another party any transaction or matter so addressed.  <br/><br/>Notwithstanding the sampling of successes, prior results do not guarantee a similar outcome. </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--bottom footer-->
        <div id="bottom-footer" class="hidden-xs">
            <div class="container" style="color:#747474;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-left">
                            <a href='mailto:kristinjgumbert@gmail.com' style="color:#747474;">Kristin J. Gumbert</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="footer-right">
                            <ul class="list-unstyled list-inline pull-right">
                                <li><a href="#home" style="color:#747474;">Home</a></li>
                                <li><a href="#about" style="color:#747474;">About</a></li>
                                <li><a href="#service" style="color:#747474;">Services</a></li>
                                <li><a href="#successes" style="color:#747474;">Successes</a></li>
                                <li><a href="#get-touch" style="color:#747474;">Contact</a></li>
                                <!-- <li><a href="#contact">Contact</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/jquery.inview.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/script.js"></script>
        <script src="contactform/contactform.js"></script>
    </body>

    </html>