<?php
class BotModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}

    public function bot(){
        $start      = '/start';
        $find = '/find';
        $stop  = '/stop';
        $menu       = '/menu';
        $img      = '/img';
        $doc     = '/doc';
        $test='/test';
        $menu1 = [

            [['text' => 'Старт','callback_data' => '/start'],
                ['text' => 'Жанр','callback_data' => '/genre']],
            [['text' => '/song','callback_data' => '/song']],
            [['text' => '/singer','callback_data' => '/singer']],
            [['text' => '/stop','callback_data' => '/stop']],
            [['text' => '/find','callback_data' => '/find']],
            [['text' => '/img','callback_data' => '/img']],
            [['text' => '/doc','callback_data' => '/doc']]
            ,
            [['text' => '/test','callback_data' => '/test']]
        ];

        //$c = new botModule('1864987503:AAGsnrPNNSIu8ZEZAFHL9HlmPAEWNvC1p2Y');
        $t=AuthModule::instance()->getUser();
        $r = BotModule::instance()->GetUpdates('1864987503:AAGsnrPNNSIu8ZEZAFHL9HlmPAEWNvC1p2Y');
        foreach ($r as $i => $v) {
            if (BotModule::instance()->update_id('r') < $r[$i]['update_id']) {
                BotModule::instance()->update_id($r[$i]['update_id']);
                $chatID = $r[$i]['message']['chat']['id'];
                $name = $r[$i]['message']['from']['first_name'];
                $login = $r[$i]['message']['from']['last_name'];
                $userID = $r[$i]['message']['from']['id'];
                $mess = mb_strtolower($r[$i]['message']['text'], "UTF-8");
                if ($mess == $start) {

                    BotModule::instance()->SMessage($chatID, "Привіт, " . $name . " " . $login . ".\n" .
                        "Бот вiтає Вас. Оберiть меню для теми розмови!" . "\n",true,'1864987503:AAGsnrPNNSIu8ZEZAFHL9HlmPAEWNvC1p2Y'

                    );
                } elseif ($mess == $menu) {

                    BotModule::instance()->SMessage($chatID, "Ваше меню:", $menu1,'1864987503:AAGsnrPNNSIu8ZEZAFHL9HlmPAEWNvC1p2Y');
                }
                elseif ($mess == "/test") {
                    /* $keyboard = array(
                         array(
                             array('text'=>'10','callback_data'=>'/10'),
                             array('text'=>':joy:','callback_data'=>'{"action":"joy","count":0,"text":":joy:"}'),
                             array('text'=>':hushed:','callback_data'=>'{"action":"hushed","count":0,"text":":hushed:"}'),
                             array('text'=>':cry:','callback_data'=>'{"action":"cry","count":0,"text":":cry:"}'),
                             array('text'=>':rage:','callback_data'=>'{"action":"rage","count":0,"text":":rage:"}')
                         )
                     );

                     $c->SMessage1($chatID, "Как вы оцениваете наш сервис:", $keyboard);*/
                    BotModule::instance()->SMessageHTML($chatID, "<b><del>Привет</del></b><a href='google.com'>Google</a>",'1864987503:AAGsnrPNNSIu8ZEZAFHL9HlmPAEWNvC1p2Y');
                }
                elseif (ctype_digit($mess)) {
                    echo $chatID."<br>".$mess;
                    BotModule::instance()->SMessage($chatID, "Спасибо за ответ",'1864987503:AAGsnrPNNSIu8ZEZAFHL9HlmPAEWNvC1p2Y');
                }
                elseif ($mess == "/genre") {

                    $tables_list = "";

                    $result = DatabaseModule::instance()->zhanr->Select("*", "zhanr order by name");
                    $row = $result->fetchAll();
                    foreach ($row as $val) {
                        $tables_list .= $val['id'] . "-" . $val['name'] . "\n";
                        echo $tables_list;
                    }
                    BotModule::instance()->SMessage($chatID, "Жанри:\n" . $tables_list,'1864987503:AAGsnrPNNSIu8ZEZAFHL9HlmPAEWNvC1p2Y');
                } elseif ($mess == $stop) {

                    BotModule::instance()->SMessage($chatID, "Допобачення",'1864987503:AAGsnrPNNSIu8ZEZAFHL9HlmPAEWNvC1p2Y');
                } elseif ($mess == $find) {

                    BotModule::instance()->SMessage($chatID, "Введіть назву пісні або виконавця. Можно частково. Перед параметром пошуку наберіть знак запитання (приклад ?анавар):");
                } elseif (substr($mess, 0, 1) === '?') {
                    $rest = substr($mess, 1);
                    $tables_list1 = "";
                    $sql = "SELECT music.id,music.name FROM music  where name like '%" . $rest . "%'
            Union
            SELECT acter.id,acter.name FROM acter  where name like '%" . $rest . "%'";

                    $result = DatabaseModule::instance()->zhanr->query($sql);
                    $row = $result->fetchAll();
                    foreach ($row as $val) {
                        $tables_list1 .= $val['id'] . "-" . $val['name'] . "\n";

                    }
                    BotModule::instance()->SMessage($chatID, "Результати пошуку:\n" . $tables_list1);
                }
                elseif($mess == $img){
                    BotModule::instance()->SMessage($chatID,"http://bing.com/az/hprichbg/rb/LaurelMoss_EN-AU9551903343_1366x768.jpg");
                }
                elseif($mess == $doc){

                    $_document = "D:\OSPanel\domains\botStudent\doc/1.docx";
                    $document = new CURLFile(realpath($_document));
                    //  object(CURLFile)#4 (3) { ["name"]=> string(40) "D:\OSPanel\domains\botStudent\doc\11.xls" ["mime"]=> string(0) "" ["postname"]=> string(0) "" }

                    BotModule::instance()->SFile($chatID,$document);
                }

                elseif(isset($r[$i]['message']['document'])) {
                    // если пришла картинка то сохраняем ее у себя
                    $text = BotModule::instance()->getPhoto($r[$i]['message']['document'])
                        ? "Спасибо! Можете еще загрузить мне понравилось их сохранять."
                        : "Что-то пошло не так, попробуйте еще раз";
                    // отправляем сообщение о результате
                    BotModule::instance()->SMessage($chatID, $text);
                }

                else {
                    BotModule::instance()->SMessage($chatID, "Извините такой комманды не знаю. Наберите /menu:\n");
                }
            }


        }
    }

}