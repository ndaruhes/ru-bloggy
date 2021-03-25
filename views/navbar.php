<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <header>
        <div id="logo">
            <img src="assets/images/logos/mn-logo.png">
        </div>
        <div id="menu">
            <ul>
                <li><a href="#"><i class="fas fa-home"></i>&nbsp; Home</a></li>
                <li id="dropdown-blog"><a href="#"><i class="fas fa-rss"></i>&nbsp; Blog &nbsp;<i class="fas fa-angle-down"></i></a>
                    <ul id="dropdown-blog-content">
                        <li><a href="#"><i class="fas fa-angle-right"></i>&nbsp; Tutorial</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i>&nbsp; Pengetahuan</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i>&nbsp; Umum</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i>&nbsp; Tips & Trik</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fas fa-bullhorn"></i>&nbsp; News</a></li>
                <li><a href="#"><i class="fas fa-phone"></i>&nbsp; Contact Us</a></li>
            </ul>
        </div>
        <div id="hamburger" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </header>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome-all.min.js"></script>
    <script src="js/waypoint.min.js"></script>
    <script src="js/backtotop.js"></script>
    <script type="text/javascript">
        function myFunction(x){
            x.classList.toggle("change");
        }
        $(document).ready(function(){
            $('#hamburger').click(function(){
                $('#menu').toggle();
            })
        })
    </script>
</body>