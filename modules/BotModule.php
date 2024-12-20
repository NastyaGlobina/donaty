<?php

class BotModule
{
    private $user=NULL;
    private $token;
    private $apiUrl = "https://api.telegram.org/bot";
    private function __construct(){ }
    private static $instance=NULL;
    public static function instance(){
        return self::$instance===NULL
            ? self::$instance=new self()
            : self::$instance;

    }

    #=============================

    private function get($s)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $s);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

        curl_setopt($ch, CURLOPT_HEADER, 0);
        $r = curl_exec ($ch);
        if ($r == NULL) {
            return "Ошибка: ".curl_errno($ch) . " - " . curl_error($ch);
        }else{
            return $r;
        }
        curl_close($ch);
    }
    function getHTML($s)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $s);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

        curl_setopt($ch, CURLOPT_HEADER, 0);
        $r = curl_exec ($ch);
        if ($r == NULL) {
            return "Ошибка: ".curl_errno($ch) . " - " . curl_error($ch);
        }else{
            return $r;
        }
        curl_close($ch);
    }
    public function update_id($s)
    {
        switch($s)
        {
            case 'r': #чтение последнего обновления
                if(file_exists("update_id.txt")){
                    return file_get_contents("update_id.txt");
                } else return 0;
                break;

            default:
                file_put_contents("update_id.txt", $s);
                break;
        }
    }
    public function GetUpdates($token)
    {
        if(!$token) return 21;
        $r = json_decode( $this->get("https://api.telegram.org/bot".$token."/getupdates?offset"), true );

        return $r['result'];
    }

    public function SMessage($w, $s, $keyboard = true,$token)
    {
        if(!$token) return 21;
        if(is_array($keyboard))
        {
            $reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));

            return $this->get( "https://api.telegram.org/bot".$token."/sendmessage?" .
                http_build_query( array("chat_id" => $w, "text" => $s, 'reply_markup' => $reply) ) );

        }
        $str="https://api.telegram.org/bot".$token."/sendmessage?".
            http_build_query(array("chat_id" => $w, "text" => $s));
        return $this->get( "https://api.telegram.org/bot".$token."/sendmessage?".
            http_build_query(array("chat_id" => $w, "text" => $s)) );
    }
    public function SMessage1($w, $s, $keyboard,$token)
    {
        if(!$this->token) return 21;

        $reply = json_encode(array("inline_keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));

        return $this->get( "https://api.telegram.org/bot".$token."/sendmessage?" .
            http_build_query( array("chat_id" => $w, "text" => $s, 'reply_markup' => $reply) ) );



    }
    public function SMessageHTML($w, $s,$token)
    {
        return $this->getHTML( "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$w."&parse_mode=html&text={$s}&amp;parse_mode=HTML&amp;disable_web_page_preview=false&amp;disable_notification=false");




    }
    public function SFile($w, $file,$token)
    {
        if(!$token) return 21;
        $url = "https://api.telegram.org/bot1864987503:AAGsnrPNNSIu8ZEZAFHL9HlmPAEWNvC1p2Y/sendDocument";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ["chat_id" => $w, "document" => $file]);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type:multipart/form-data"]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $out = curl_exec($ch);
        curl_close($ch);

    }
    public function getPhoto($data)
    {
        // берем последнюю картинку в массиве
        echo "<br>";
        $file_id = $data['file_id'];
        // получаем file_path
        $file_path = $this->getPhotoPath($file_id);
        // возвращаем результат загрузки фото
        return $this->copyPhoto($file_path);
    }
    private function requestToTelegram($data, $type,$token)
    {
        $result = null;
        if (is_array($data)) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->apiUrl.$token.'/' . $type);
            curl_setopt($ch, CURLOPT_POST, count($data));
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            $result = curl_exec($ch);
            curl_close($ch);
        }
        return $result;
    }
    // функция получения метонахождения файла
    public function getPhotoPath($file_id) {
        // получаем объект File
        $array = json_decode($this->requestToTelegram(['file_id' => $file_id], "getFile"), TRUE);
        // возвращаем file_path
        return  $array['result']['file_path'];
    }

    // копируем фото к себе
    public function copyPhoto($file_path,$token) {
        // ссылка на файл в телеграме
        $file_from_tgrm = "https://api.telegram.org/file/bot".$token."/".$file_path;
        // достаем расширение
        $ext =  end(explode(".", $file_path));
        echo "<br>Путь к файлу";
        // назначаем свое имя здесь время_в_секундах.расширение_файла
        $name_our_new_file = time().".".$ext;
        echo $name_our_new_file;
        return copy($file_from_tgrm, "img/".$name_our_new_file);
    }
}