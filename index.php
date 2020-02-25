
<?php
    $page="https://oporayam.com/";
    $opts = array(
      'http'=>array(
        'method'=>"GET",
        'header'=>"user-agent:Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Mobile Safari/537.36\r\n".
                  "Content-Type: application/json; charset=utf-8\r\n"
      )
    );
    $context = stream_context_create($opts);
    $site_content=file_get_contents($page, false, $context);

    echo $site_content;
   ?>

   
    <script type="text/javascript">
        $(document).ready(function(){
        $(".btn-register-lg").hide();
        $(".hamburger").hide();
        $(".quick-footer").hide();
        var click_events = $(".mt-10")
        page_urls=click_events[1].children;
        $(page_urls[0]).click(function(e){
          e.preventDefault();
          window.open("http://localhost/thailand/pages/sportsbook.php","_self");
        })
        $(page_urls[2]).click(function(e){
          e.preventDefault();
          window.open("http://localhost/thailand/pages/slots.php","_self");
        })
        $(page_urls[3]).click(function(e){
          e.preventDefault();
          window.open("http://localhost/thailand/pages/casino.php","_self");
        })
        $(page_urls[5]).click(function(e){
          e.preventDefault();
          window.open("http://localhost/thailand/pages/promotion.php","_self");
        })
    });
    </script>

