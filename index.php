
<?php
    require_once('includes/selector.inc');

    $opts = array(
      'http'=>array(
        'method'=>"GET",
        'header'=>"user-agent:Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Mobile Safari/537.36"
      )
    );
    $context = stream_context_create($opts);
    $site_content=file_get_contents("https://oporayam.com/", false, $context);

    echo $site_content;

    echo '<script type="text/javascript"> var elem = document.getElementsByClassName("login-btn btn btn-success btn-register-lg text-uppercase"); elem.remove();',
    '</script>'
?>

