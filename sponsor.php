<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <style>
        body
        {
            padding: 10px;
            padding-top: 60px;
            padding-bottom: 40px;
        }
    #youcss {
	background-color:#CCC;
	margin: auto;
	margin-left:2em;
	margin-right:2em;
	
}
 </style>

<link href="boot/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    <link href="boot/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

    
</head>
<body>
    <div class="span6">
        <div class="tabbable tabs-right">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#rA" data-toggle="tab">Gloria Apio</a></li>
                <li><a href="#rB" data-toggle="tab">Gloria </a></li>
                <li><a href="#rC" data-toggle="tab">Section 3</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="rA">
                    <p>I'm in Section 1.</p>
                    <img src="images/naomi.jpg" alt="">
                </div>
                <div class="tab-pane" id="rB">
                    <p>Howdy, </p>
                </div>
                <div class="tab-pane" id="rC">
                    <p>sponser</p>
                </div>
            </div>
        </div>
        <!-- /tabbable -->
    </div>


<!-- /container -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

<script>
    $('#toggle').click(function () {
        if ($('#blacktheme').length) {
            $('#blacktheme').remove();
            $('.navbar-fixed-top').removeClass('navbar-inverse');
        }
        else {
            $('head').append('<link id="blacktheme" rel="stylesheet" href="css/darkbootstrap.css" />');
            $('.navbar-fixed-top').addClass('navbar-inverse');
        }
    });
</script>

        <script src="boot/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="boot/bootstrap/js/bootstrap.min.js"></script>
    

</body>