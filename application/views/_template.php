<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{Page Title}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/lightbox.css" />
        <link rel="stylesheet" type="text/css" media="all" href="styles.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <span class="myhead"><h1>Battle Bots</h1></span>
                <span class="mynav">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                        <li><a href="/assembly">Assembly</a></li>
                        <ul style="float:right;list-style-type:none;">

                            <div>
                                {login}
                            </div>
                        </ul>


                    </ul>
                </span>
            </div>
            <div class="alone"></div>
            <div id="content">
                {content}
            </div>
            <div id="footer" class="span12">
                Copyright &copy; 2014,  <a href="mailto:someone@somewhere.com">Me</a>.
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script> 
        <script type="text/javascript" src="js/lightbox.min.js"></script> 
    </body>
</html>
