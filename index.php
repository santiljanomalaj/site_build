
<?php
    require_once('includes/selector.inc');

    $opts = array(
      'http'=>array(
        'method'=>"GET",
        'header'=>"Accept-language: en\r\n" .
                  "Cookie: foo=bar\r\n"
      )
    );
    $site_content=file_get_contents("https://oporayam.com/");
    echo $site_content;
    echo '<script type="text/javascript">',
    'var elem = document.getElementsByClassName("hamburger is-closed"); elem.remove();',
    '</script>'
?>

