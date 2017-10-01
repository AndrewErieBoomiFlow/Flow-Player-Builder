<?php include 'include/functions.php';?>
<?php include 'include/head.php';?>
<?php include 'include/head2.php';?>

<link rel="stylesheet" href="theme/highlight/styles/monokai-sublime.css">
<script src="theme/highlight/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php include 'include/nav.php';?>
		
<h4>Player Code</h4>

<?php 

//Replace URL
if($_POST["player_replaceurl"]){
	$replaceURL = "true";
} else {
	$replaceURL = "false";
}

//Fixed
if($_POST["player_fixednav"]){
	$fixednav = "true";
} else {
	$fixednav = "false";
}

//IsWizard
if($_POST["player_iswizard"]){
	$iswizard = "true";
} else {
	$iswizard = "false";
}

//theme
if($_POST["player_theme"] == "default"){
	$theme = "queryParameters['theme']";
} else {
	$theme = "'".$_POST["player_theme"]."'";
}

$scriptOut = 
"
<script>
    var manywho = {
        cdnUrl: 'https://assets.manywho.com',
        requires: ['core', 'bootstrap3'],
        initialize: function () {

            var queryParameters = manywho.utils.parseQueryString(window.location.search.substring(1));

            manywho.settings.initialize({
                adminTenantId: 'da497693-4d02-45db-bc08-8ea16d2ccbdf',
                playerUrl: [ location.protocol, '//', location.host, location.pathname ].join(''),
                joinUrl: [ location.protocol, '//', location.host, location.pathname ].join('')
            });

            var options = {
                authentication: {
                    sessionId: queryParameters['session-token'],
                    sessionUrl: queryParameters['session-url']
                },
                navigationElementId: queryParameters['navigation-element-id'],
                mode: queryParameters['mode'],
                reportingMode: queryParameters['reporting-mode'],
                replaceUrl: ".$replaceURL.",
                collaboration: {
                    isEnabled: false
                },
                inputs: null,
                annotations: null,
                navigation: {
                    isFixed: ".$fixednav.",
                    isWizard: ".$iswizard."
                },
                callbacks: [],
                theme: ".$theme."
            };

            var tenantId = queryParameters['tenant-id'];
            if (!tenantId) {
                tenantId = window.location.pathname
                            .split('/')
                            .filter(function (path) {
                                return path && path.length > 0;
                            })[0];
            }

            manywho.engine.initialize(
                tenantId,
                queryParameters['flow-id'],
                queryParameters['flow-version-id'],
                'main',
                queryParameters['join'],
                queryParameters['authorization'],
                options,
                queryParameters['initialization']
            );

        }
    };
</script>
";

$customcss = "<style>". PHP_EOL;


///////////////////////////
// Nav Overides
///////////////////////////

$customcss .=
"
    /****************/
    /* Nav          */
    /****************/
    .mw-bs .navbar-default {
        border-radius:0px;
";

if($_POST["nav_bg"]){
    $customcss .= "        background: ".$_POST["nav_bg"].";";
}

$customcss .=
"
    }

    .mw-bs .navbar-default .navbar-nav>li>a {
";

if($_POST["nav_link"]){
    $customcss .= "        color: ".$_POST["nav_link"].";". PHP_EOL;
}

if($_POST["nav_link_bg"]){
    $customcss .= "        background: ".$_POST["nav_link_bg"].";";
}

$customcss .=
"
    }

    .mw-bs .navbar-default .navbar-nav>li>a:focus, .mw-bs .navbar-default .navbar-nav>li>a:hover {
";

if($_POST["nav_link_hover"]){
    $customcss .= "        color: ".$_POST["nav_link_hover"].";". PHP_EOL;
}

if($_POST["nav_link_bghover"]){
    $customcss .= "        background: ".$_POST["nav_link_bghover"].";";
}

$customcss .=
"
    }

    .mw-bs .navbar-default .navbar-brand {
";

if($_POST["nav_brandtxt"]){
    $customcss .= "        color: ".$_POST["nav_brandtxt"].";";
}

$customcss .=
"
    }

    .mw-bs .navbar-default .navbar-brand:focus, .mw-bs .navbar-default .navbar-brand:hover {
";

if($_POST["nav_brandtxthov"]){
    $customcss .= "        color: ".$_POST["nav_brandtxthov"].";";
}

$customcss .=
"
    }

    .mw-bs .navbar-default .navbar-nav>.active>a, .mw-bs .navbar-default .navbar-nav>.active>a:focus, .mw-bs .navbar-default .navbar-nav>.active>a:hover {
";

if($_POST["nav_linkactive"]){
    $customcss .= "        color: ".$_POST["nav_linkactive"].";";
}

if($_POST["nav_linkactivebg"]){
    $customcss .= "        background: ".$_POST["nav_linkactivebg"].";";
}

$customcss .=
"
    }

";

///////////////////////////
// Theme Overides (btns)
///////////////////////////


//////////  btn-default  ////////////////

$customcss .=
"
    /****************/
    /* btn-default  */
    /****************/
    .mw-bs .btn-default {
";

if($_POST["btn_default_bg"]){
    $customcss .= "        background: ".$_POST["btn_default_bg"].";". PHP_EOL;
}

if($_POST["btn_default_txt"]){
    $customcss .= "        color: ".$_POST["btn_default_txt"].";";
}

if($_POST["btn_default_brdwidth"]){
    $customcss .= "        border: ".$_POST["btn_default_brdwidth"]."px solid ";
    if($_POST["btn_default_brdcolor"]){
        $customcss .= $_POST["btn_default_brdcolor"];
    }
} else if($_POST["btn_default_brdcolor"]){
    $customcss .= "        border: ".$_POST["btn_default_brdcolor"].";";
}

if($_POST["btn_default_brdrad"]){
    $customcss .= "        border-radius: ".$_POST["btn_default_brdrad"].";";
}

$customcss .="  
    }
     
    .mw-bs .btn-default:hover, .mw-bs .btn-default:focus, .mw-bs .btn-default:active, .mw-bs .btn-default.active, .open > .dropdown-toggle.btn-default {
";

if($_POST["btn_default_bghover"]){
    $customcss .= "        background: ".$_POST["btn_default_bghover"].";";
}

 $customcss .= "
    }
     
    .mw-bs .btn-default:active, .mw-bs .btn-default.active {
";

if($_POST["btn_default_bg"]){
    $customcss .= "        background: ".adjustBrightness($_POST["btn_default_bg"], -50).";";
}

$customcss .= "       
        box-shadow: none;
    }
";


//////////  btn-primary  ////////////////

$customcss .=
"
    /****************/
    /* btn-primary  */
    /****************/
    .mw-bs .btn-primary {
";

if($_POST["btn_primary_bg"]){
    $customcss .= "        background: ".$_POST["btn_primary_bg"].";". PHP_EOL;
}

if($_POST["btn_primary_txt"]){
    $customcss .= "        color: ".$_POST["btn_primary_txt"].";";
}

if($_POST["btn_primary_brdwidth"]){
    $customcss .= "        border: ".$_POST["btn_primary_brdwidth"]."px solid ";
    if($_POST["btn_primary_brdcolor"]){
        $customcss .= $_POST["btn_primary_brdcolor"];
    }
} else if($_POST["btn_primary_brdcolor"]){
    $customcss .= "        border: ".$_POST["btn_primary_brdcolor"].";";
}

if($_POST["btn_primary_brdrad"]){
    $customcss .= "        border-radius: ".$_POST["btn_primary_brdrad"].";";
}

$customcss .="  
    }
     
    .mw-bs .btn-primary:hover, .mw-bs .btn-primary:focus, .mw-bs .btn-primary:active, .mw-bs .btn-primary.active, .open > .dropdown-toggle.btn-primary {
";

if($_POST["btn_primary_bghover"]){
    $customcss .= "        background: ".$_POST["btn_primary_bghover"].";";
}

 $customcss .= "
    }
     
    .mw-bs .btn-primary:active, .mw-bs .btn-primary.active {
";

if($_POST["btn_primary_bg"]){
    $customcss .= "        background: ".adjustBrightness($_POST["btn_primary_bg"], -50).";";
}

$customcss .= "       
        box-shadow: none;
    }
";



//////////  btn-success  ////////////////

$customcss .=
"
    /****************/
    /* btn-success  */
    /****************/
    .mw-bs .btn-success {
";

if($_POST["btn_success_bg"]){
    $customcss .= "        background: ".$_POST["btn_success_bg"].";". PHP_EOL;
}

if($_POST["btn_success_txt"]){
    $customcss .= "        color: ".$_POST["btn_success_txt"].";";
}

if($_POST["btn_success_brdwidth"]){
    $customcss .= "        border: ".$_POST["btn_success_brdwidth"]."px solid ";
    if($_POST["btn_success_brdcolor"]){
        $customcss .= $_POST["btn_success_brdcolor"];
    }
} else if($_POST["btn_success_brdcolor"]){
    $customcss .= "        border: ".$_POST["btn_success_brdcolor"].";";
}

if($_POST["btn_success_brdrad"]){
    $customcss .= "        border-radius: ".$_POST["btn_success_brdrad"].";";
}

$customcss .="  
    }
     
    .mw-bs .btn-success:hover, .mw-bs .btn-success:focus, .mw-bs .btn-success:active, .mw-bs .btn-success.active, .open > .dropdown-toggle.btn-success {
";

if($_POST["btn_success_bghover"]){
    $customcss .= "        background: ".$_POST["btn_success_bghover"].";";
}

 $customcss .= "
    }
     
    .mw-bs .btn-success:active, .mw-bs .btn-success.active {
";

if($_POST["btn_success_bg"]){
    $customcss .= "        background: ".adjustBrightness($_POST["btn_success_bg"], -50).";";
}

$customcss .= "       
        box-shadow: none;
    }
";


//////////  btn-info  ////////////////

$customcss .=
"
    /****************/
    /* btn-info  */
    /****************/
    .mw-bs .btn-info {
";

if($_POST["btn_info_bg"]){
    $customcss .= "        background: ".$_POST["btn_info_bg"].";". PHP_EOL;
}

if($_POST["btn_info_txt"]){
    $customcss .= "        color: ".$_POST["btn_info_txt"].";";
}

if($_POST["btn_info_brdwidth"]){
    $customcss .= "        border: ".$_POST["btn_info_brdwidth"]."px solid ";
    if($_POST["btn_info_brdcolor"]){
        $customcss .= $_POST["btn_info_brdcolor"];
    }
} else if($_POST["btn_info_brdcolor"]){
    $customcss .= "        border: ".$_POST["btn_info_brdcolor"].";";
}

if($_POST["btn_info_brdrad"]){
    $customcss .= "        border-radius: ".$_POST["btn_info_brdrad"].";";
}

$customcss .="  
    }
     
    .mw-bs .btn-info:hover, .mw-bs .btn-info:focus, .mw-bs .btn-info:active, .mw-bs .btn-info.active, .open > .dropdown-toggle.btn-info {
";

if($_POST["btn_info_bghover"]){
    $customcss .= "        background: ".$_POST["btn_info_bghover"].";";
}

 $customcss .= "
    }
     
    .mw-bs .btn-info:active, .mw-bs .btn-info.active {
";

if($_POST["btn_info_bg"]){
    $customcss .= "        background: ".adjustBrightness($_POST["btn_info_bg"], -50).";";
}

$customcss .= "       
        box-shadow: none;
    }
";


//////////  btn-warning  ////////////////

$customcss .=
"
    /****************/
    /* btn-warning  */
    /****************/
    .mw-bs .btn-warning {
";

if($_POST["btn_warning_bg"]){
    $customcss .= "        background: ".$_POST["btn_warning_bg"].";". PHP_EOL;
}

if($_POST["btn_warning_txt"]){
    $customcss .= "        color: ".$_POST["btn_warning_txt"].";";
}

if($_POST["btn_warning_brdwidth"]){
    $customcss .= "        border: ".$_POST["btn_warning_brdwidth"]."px solid ";
    if($_POST["btn_warning_brdcolor"]){
        $customcss .= $_POST["btn_warning_brdcolor"];
    }
} else if($_POST["btn_warning_brdcolor"]){
    $customcss .= "        border: ".$_POST["btn_warning_brdcolor"].";";
}

if($_POST["btn_warning_brdrad"]){
    $customcss .= "        border-radius: ".$_POST["btn_warning_brdrad"].";";
}

$customcss .="  
    }
     
    .mw-bs .btn-warning:hover, .mw-bs .btn-warning:focus, .mw-bs .btn-warning:active, .mw-bs .btn-warning.active, .open > .dropdown-toggle.btn-warning {
";

if($_POST["btn_warning_bghover"]){
    $customcss .= "        background: ".$_POST["btn_warning_bghover"].";";
}

 $customcss .= "
    }
     
    .mw-bs .btn-warning:active, .mw-bs .btn-warning.active {
";

if($_POST["btn_warning_bg"]){
    $customcss .= "        background: ".adjustBrightness($_POST["btn_warning_bg"], -50).";";
}

$customcss .= "       
        box-shadow: none;
    }
";


//////////  btn-danger  ////////////////

$customcss .=
"
    /****************/
    /* btn-danger  */
    /****************/
    .mw-bs .btn-danger {
";

if($_POST["btn_danger_bg"]){
    $customcss .= "        background: ".$_POST["btn_danger_bg"].";". PHP_EOL;
}

if($_POST["btn_danger_txt"]){
    $customcss .= "        color: ".$_POST["btn_danger_txt"].";";
}

if($_POST["btn_danger_brdwidth"]){
    $customcss .= "        border: ".$_POST["btn_danger_brdwidth"]."px solid ";
    if($_POST["btn_danger_brdcolor"]){
        $customcss .= $_POST["btn_danger_brdcolor"];
    }
} else if($_POST["btn_danger_brdcolor"]){
    $customcss .= "        border: ".$_POST["btn_danger_brdcolor"].";";
}

if($_POST["btn_danger_brdrad"]){
    $customcss .= "        border-radius: ".$_POST["btn_danger_brdrad"].";";
}

$customcss .="  
    }
     
    .mw-bs .btn-danger:hover, .mw-bs .btn-danger:focus, .mw-bs .btn-danger:active, .mw-bs .btn-danger.active, .open > .dropdown-toggle.btn-danger {
";

if($_POST["btn_danger_bghover"]){
    $customcss .= "        background: ".$_POST["btn_danger_bghover"].";";
}

 $customcss .= "
    }
     
    .mw-bs .btn-danger:active, .mw-bs .btn-danger.active {
";

if($_POST["btn_danger_bg"]){
    $customcss .= "        background: ".adjustBrightness($_POST["btn_danger_bg"], -50).";";
}

$customcss .= "       
        box-shadow: none;
    }
";

// End Button Themes
///////////////////////////


$customcss .= "</style>". PHP_EOL;
?>

<?php 
	
	$p_open = "include/player/p_open.php";
	$p_close = "include/player/p_close.php";
	$loadtheme = "include/player/loadtheme/default.html";
	$jquery = '<script src="https://assets.manywho.com/js/vendor/jquery-2.1.4.min.js"></script>';
	$mainloader = '<script src="https://assets.manywho.com/js/loader.min.js"></script>';
	$customcssfile = $_POST["player_customcssfile"];
    $custompastecss = $_POST["player_pastecss"];

	$playerOut = "";
	$playerOut .= file_get_contents($p_open);
	$playerOut .= "<title>".htmlspecialchars($_POST["player_title"])."</title>". PHP_EOL;
	$playerOut .= '  <link rel="icon" href="'.htmlspecialchars($_POST["player_favicon"]).'">'. PHP_EOL;
	$playerOut .= file_get_contents($loadtheme);
	$playerOut .= $jquery. PHP_EOL;
	$playerOut .= $scriptOut;
	$playerOut .= $customStyles;
	$playerOut .= $mainloader. PHP_EOL;
    $playerOut .= $customcss. PHP_EOL;

    //Paste CSS
    if($custompastecss){
        $playerOut .= "<style>". PHP_EOL;
        $playerOut .= $custompastecss;
        $playerOut .= "</style>". PHP_EOL;
    }

    //CSS URL (CDN)
	if($customcssfile){
		$playerOut .= '<link rel="stylesheet" href="'.$customcssfile.'">';
	}
	
	$playerOut .= file_get_contents($p_close);

?>

<pre class="code">
	<code class=""><?php echo htmlspecialchars($playerOut); ?></code>
</pre>

<?php include 'include/footer.php';?>
<?php include 'include/footer_close.php';?>