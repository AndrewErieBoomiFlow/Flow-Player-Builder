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
$customcss .=
"
    .mw-bs .btn-default {
        background: ".$_POST["btn_default_bg"].";
        color: ".$_POST["btn_default_txt"].";
    }
     
    .mw-bs .btn-default:hover, .mw-bs .btn-default:focus, .mw-bs .btn-default:active, .mw-bs .btn-default.active, .open > .dropdown-toggle.btn-default {
        background: ".$_POST["btn_default_bghover"]."
    }
     
    .mw-bs .btn-default:active, .mw-bs .btn-default.active {
        background: #007299;
        box-shadow: none;
    }

";

$customcss .= "</style>". PHP_EOL;
?>

<?php 
	
	$p_open = "include/player/p_open.php";
	$p_close = "include/player/p_close.php";
	$loadtheme = "include/player/loadtheme/default.html";
	$jquery = '<script src="https://assets.manywho.com/js/vendor/jquery-2.1.4.min.js"></script>';
	$mainloader = '<script src="https://assets.manywho.com/js/loader.min.js"></script>';
	$customcssfile = $_POST["player_customcssfile"];

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