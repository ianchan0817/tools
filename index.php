<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Online Tools, Unix Timestamp Convert, URL encode, URL decode, 繁簡轉換, 繁體, 简体">
    <meta name="description" content="Online Tools is a useful websites for solving common problems. Unix timestamp coverts to human readable time string, URL encode and decode, Traditional Chiense and Simplified Chinese exchange and etc.">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="Ian Chan">

    <title>Online Tools - Unix timestamp Convertor - URL Encoder/Decoder - 繁简转换 - 繁簡轉換</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/freelancer.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link href="css/style.css" rel="stylesheet" type="text/css">
    
</head>

<body id="page-top" class="index" onload=display_ct();>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Online Tools</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#timestamp_convert">Timestamp Convertor</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#url_encode_decode">URL ENCODER/DECODER</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#traditional_simplified_chinese">繁簡轉換</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Online Tools</span>
                        <hr class="star-light">
                        <div id="ct"></div>
                        <span class="skills">One website - Mulitple tools</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="timestamp_convert">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Unix TimeStamp Convertor</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="form-group col-xs-12 floating-label-form-group text-center">
                        <label for="timestamp">Unix Timestamp</label>
                        <input class="form-control" type="text" name="timestamp" placeholder="Unix Timestamp" id="timestamp" >
                    </div>
                </div>
                <div class="row text-center">
                    <form class="form-inline" role="form">
                        <div class="form-group  " >
                            <label class="sr-only" for="year">Year</label>
                            <input type="number" name="year" class="form-control" id="year" placeholder="yyyy" max="9999" min="0">
                        </div>
                        <div class="form-group " >
                            <label class="sr-only" for="month">Month</label>
                            <input type="number" name="month" class="form-control" id="month" placeholder="mm" max="12" min="1">
                        </div>
                        <div class="form-group " >
                            <label class="sr-only" for="day">Day</label>
                            <input type="number" name="day" class="form-control" id="day" placeholder="dd" max="31" min="1">
                        </div>
                        <div class="form-group " >
                            <label class="sr-only" for="hours">Hours</label>
                            <input type="number" name="hours" class="form-control" id="hours" placeholder="hh" max="24" min="0">
                        </div>
                        <div class="form-group " >
                            <label class="sr-only" for="minutes">Minutes</label>
                            <input type="number" name="minutes" class="form-control" id="minutes" placeholder="mm" max="60" min="0">
                        </div>
                        <div class="form-group " >
                            <label class="sr-only" for="seconds">Seconds</label>
                            <input type="number" name="seconds" class="form-control" id="seconds" placeholder="ss" max="60" min="0">
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center" id="localtime"></div>
                </div><br/>
                <div class="row text-center">
                    <button type="button" class="btn btn-primary" id="timestamp2Date">
                    <i class="fa fa-calendar"></i> To Date</button>
                    <button type="button" class="btn btn-warning" id="date2Timestamp">
                    <i class="fa fa-clock-o"></i> To Timestamp</button>
                </div>
            </div>
        </div>
    </section>

    <section class="success" id="url_encode_decode">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>URL Encoder / Decoder</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <textarea id="url" class="form-control" rows="6"></textarea>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="" class="btn btn-lg btn-outline" id="encode">
                        <i class="fa fa-refresh"></i> Encode
                    </a>
                    <a href="" class="btn btn-lg btn-outline" id="decode">
                        <i class="fa fa-refresh"></i> Decode
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="traditional_simplified_chinese">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>繁简轉換</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form role="form" name="myForm">
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="name">繁體 / 简体</label>
                                <input class="form-control" type="text" placeholder="繁體 / 简体" name="S1" autocomplete="off">
                            </div>
                        </div>
                        
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12 text-center">
                                <button type="button" class="btn btn-lg btn-success" onClick="BIGtoGB=1;toCode()">繁體</button>
                                <button type="button" class="btn btn-lg btn-danger" onClick="BIGtoGB=0;toCode()">简体</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
 <!--        <div class="footer-above">
            
        </div> -->
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2014 - Online Tools. <br/>
                        These tools are provided without warranty or guarantee. We would not compensate any becasue of the correctness.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
  

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/freelancer.js"></script>
    <script language="javascript" src="js/GB2312TOBIG5.js"></script>
    <script language="javascript" src="js/GBCodeUnicode.js"></script>
    <script language="javascript" src="js/GB2312TOBIGGB.js"></script>
    <script language="javascript" src="js/BIG5TOGB2312.js"></script>
    <script language="javascript" src="js/BIGCodeUnicode.js"></script>
    <script language="javascript" src="js/BIG5TOGBBIG.js"></script>
    <script src="js/common.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-43619057-2', 'ianchan.info');
        ga('send', 'pageview');

    </script>
</body>

</html>
