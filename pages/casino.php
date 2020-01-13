
<?php
   
    $context = stream_context_create($opts);
    $site_content=file_get_contents($page, false, $context);

    echo $site_content;
   ?>

   
    <script type="text/javascript">
        $(document).ready(function(){
        $(".btn-register-lg").hide();
        $(".hamburger").hide();
        $(".quick-footer").hide();
    });
    </script>

