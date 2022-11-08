<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
        <!--[if lt IE 9]>
            <script 
                type="text/javascript" 
                src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
            </script>
            <script 
                type="text/javascript"
                src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
            </script>
        <![endif]-->
        <meta property="og:title" content="Dietrich Architects">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <meta property="og:locale" content="en_US">
        <link rel="icon" href="img/favicon.png">
        <link rel="stylesheet" type="text/css" href="css/styles.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <title>Dietrich Architects | Message sent</title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top m-0 bg-wht">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand p-0">
                        <img src="img/navbar-logo.png"
                            class="img-responsive"
                            alt="logo">
                        <h3 class="font-logo navbar-text hidden-xs- visible-sm visible-md visible-lg">Dietrich</h3>
                    </a>
                    <button class="navbar-toggle collapsed"
                        data-target="#main-nav"
                        data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-right font-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="featured.html">Featured</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="container-fluid confirm-s1 d-flex">
            <div class="row my-auto w-100">
                <div class="col-xs-12 col-sm-8 col-md-6 col-xs-offset-0 col-sm-offset-2 col-md-offset-3 text-center">
                    <h3 class="text-center font-header">Message sent!</h3>
                    <table class="table table-hover text-left">
                        <thead>
                            <tr>
                                <th colspan="2" class="font-header">Summary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First name</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fname']))
                                        echo htmlspecialchars($_POST['fname']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Last name</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['lname']))
                                        echo htmlspecialchars($_POST['lname']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fphone']))
                                        echo htmlspecialchars($_POST['fphone']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fmail']))
                                        echo htmlspecialchars($_POST['fmail']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fmsg']))
                                        echo htmlspecialchars($_POST['fmsg']);
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="contact.html" 
                        class="btn btn-info">OK</a>
                </div>
            </div>
        </section>
        <footer class="container-fluid bg-blk text-white">
            <div class="row p-20">
                <ul class="list-inline icon-list text-center">
                    <li>
                        <a href="https://www.facebook.com"
                            rel="noreferrer noopener nofollow">
                            <span class="fa fa-facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com"
                            rel="noreferrer noopener nofollow">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com"
                            rel="noreferrer noopener nofollow">
                            <span class="fa fa-instagram"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="row text-center border-top mx-20">
                <p>
                    Copyright &copy; 2019-2021 Tomasz Pankowski | 
                    <a href="privacy.html" class="text-white link link-white">
                        Privacy &amp; cookies
                    </a>
                </p>
            </div>
        </footer> 
        <div class="modal" id="privacyModal">
            <div class="modal-dialog">
                <div class="modal-content p-20">
                    <div class="modal-header text-center">
                        <a href="#privacyModal" 
                            data-target="#privacyModal"
                            data-dismiss="modal"
                            class="close">
                            &times;
                        </a>
                        <h4 class="font-logo text-muted">GPDR Declaration</h4>
                    </div>
                    <div class="modal-body">
                        <p class="initialism">
                            This website is a <span class="text-danger"> demo version </span> of real website,  It doesn't collect and process,
                            in long term meaning (longer than needed for website operation during visitor's
                            presence), any user (visitor) data.
                        </p>
                        <p class="initialism pt-20">
                             All information collected during visitor's 
                            presence on this website is used only for technical purposes, required for 
                            correct operation of website or demonstration purposes related to technical 
                            mechanisms and presentation of its operation... 
                            <a href="privacy.html" class="badge">More about privacy</a>
                        </p>                        
                        <p class="initialism pt-20">
                            If you accept privacy policy please click button "accept". If you 
                            refuse it, leave page by closing it in your web browser, please.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button class="btn btn-default"
                                onclick="acceptPrivacyPolicy()">
                                Accept
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/main.min.js"></script>
    </body>
</html>