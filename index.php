<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Buy An Elephant</title>

        <!-- Bootstrap core CSS -->
<!--        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="css/elephant.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger active text-info" href="#page-top">Buy An Elephant</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse " id="navbarResponsive">
                    <ul class="navbar-nav ml-auto ">
                        <li class="active nav-item">
                            <a class="nav-link js-scroll-trigger text-white bg-info" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger text-white bg-info" href="#contact">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger text-info bg-white" href="orders-list.php">Orders-list</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Intro Header -->
        <header class="masthead">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h1 class="brand-heading">Buy An Elephant</h1>
                            <p class="intro-text">Everybody says, I don't want to buy an elephant, but please, buy an elephant!</p>
                            <a href="#about" class="btn btn-circle js-scroll-trigger">
                                <i class="fa fa-info animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- About Section -->
        <section id="about" class="content-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>About Buy An Elephant</h2>
                        <!--                        <p>This web page is used for checking my programming knowledge using PHP OOP and MySQL.</p>-->
                        <p>Sometimes you think that a sales manager can offer anything. Even such an object as it does not have. However, the main reason for this idea is my childhood. In the childhood with the friends of the yard, sometimes we played such a game, when we needed to say - "Do you want to buy an elephant?"</p>
                        <p>So, Everybody says, I don't want to buy an elephant, but please, buy an elephant! </p>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2 mx-auto">
                        <a href="#contact" class="btn btn-lg btn-outline js-scroll-trigger">
                            <i class="fa fa-shopping-cart "></i> Order Now
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section content-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <h2>Order Now</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form  id="myForm" class="form-horizontal" role="form" method="post"  data-toggle="validator" action="create.php">
                            <div class="controls">
                                <div class="row">
                                    <div class="form-group col-lg-12 floating-label-form-group messages ">
                                    </div>
                                    <div class="form-group col-lg-12 floating-label-form-group">
                                        <input type="text" class="form-control" maxlength="50" placeholder="Firstname *" name="firstname" id="firstname" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-lg-12 floating-label-form-group">
                                        <input type="text" class="form-control" maxlength="50" placeholder="Lastname *" name="lastname" id="lastname" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-lg-12 floating-label-form-group">
                                        <input type="email" class="form-control" maxlength="100" placeholder="Email Address *" name="email" id="email"required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-lg-12 floating-label-form-group">
                                        <input type="tel" class="form-control" maxlength="20" placeholder="Phone Number *" name="phone" id="phone" required >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-lg-12 floating-label-form-group">
                                        <textarea rows="4" class="form-control" maxlength="250" placeholder="Message *" name="message" id="message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-lg-12 floating-label-form-group text-left">
                                        <p><strong>*</strong> These fields are required.</p>
                                    </div>
                                    <div class="form-group col-lg-12 floating-label-form-group">
                                        <button type="submit" class="btn btn-create btn-send"  name="create" value="Send message">Send your info</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="container text-center">
                <p>Copyright &copy; Buy An Elephant 2017</p>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
<!--        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>-->
        <!--        <script src="vendor/jquery/jquery.min.js"></script>-->
        <script src="vendor/popper/popper.min.js"></script>
<!--        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->

       
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
       
        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/elephant.min.js"></script>

    </body>

</html>
