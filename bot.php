<?php 
    
    include 'Telegram.php';

    $telegram = new Telegram('5940638836:AAEtoJSXbVRcQs1aVycTxCdjdYmxm7BKT-M');
    $chat_id = $telegram->ChatID();
    // echo $chat_id;
    $text = $telegram->Text();
    $username = $telegram->UserName();
    $phone = $telegram->PhoneNumber();

   if($text == "/start")
   {
     $ulash = mysqli_connect("localhost","id20153853_rootbot","g)Ubi\^S[6~4wk4#","id20153853_kokandtelebot") or die("Bazaga ulanmadi");
                 $yoz = "insert into user (username,chat_id,phone) values ({$username}','{$chat_id}','{$text}')";
                 $r = mysqli_query($ulash,$yoz) or die(mysqli_error($ulash));
             

                $option = array(
                    array($telegram->buildKeyboardButton("🇺🇿 Uzbek 🇺🇿"), $telegram->buildKeyboardButton("🇺🇸 English 🇺🇸"))
                );
                $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
                $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Kerakli tilni tanlang");
                $telegram->sendMessage($content);
   }

   elseif($text == "🇺🇿 Uzbek 🇺🇿")
{
   $option = array( 
    //First row
    array($telegram->buildKeyboardButton("Telefon raqamini yuborish", $request_contact=true)) );
    
$keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
$content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Botdan foydalanish uchun telefon raqamingizni ro'yxatdan o'tkazish zarur. 📱

Quyidagi tugma orqali telefon raqamingizni yuboring. ⬇️

Tadiqlash kodi SMS tarzida yuboriladi. 📩");
$telegram->sendMessage($content); 
   }

   elseif($text == "🇺🇸 English 🇺🇸")
   {
      $option = array( 
       //First row
       array($telegram->buildKeyboardButton("Send phone number", $request_contact=true)) );
       
   $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);
   $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "To use the bot, you need to register your phone number. 📱

   Submit your phone number using the button below. ⬇️
   
   The verification code will be sent as an SMS. 📩");
   $telegram->sendMessage($content); 
      }

 
   elseif($text == $request_contect)
    {
    
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "OK.Telefon raqam tasdiqlandi");
    $telegram->sendMessage($content);
    }   
    
      elseif($text == "/help")
   {
        $content = array('chat_id' => $chat_id, 'text' => "Adminga murojat qiling!
    👇👇👇
    @mus1im_0
        "); 
       $telegram->sendMessage($content); 
   }
    
?>