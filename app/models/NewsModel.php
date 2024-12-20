<?php
class NewsModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
const COUNT_PER_PAGE = 3;
public function getNews(){
    $tmp=DatabaseModule::instance()->news->select();
    return $tmp;
}
    public function getNewsPage($pagenum){
    $cpc=self::COUNT_PER_PAGE;
       $offset = ($pagenum-1)*self::COUNT_PER_PAGE;
       return DatabaseModule::instance()->news->select("1 ORDER BY `id` ASC LIMIT {$cpc} OFFSET {$offset}");
    }
    public function getCountPage(){
        $count=DatabaseModule::instance()->news->getCount();
        return ceil($count/self::COUNT_PER_PAGE);
    }
    public function gettovar($id){
        $tmp=DatabaseModule::instance()->kat_tov->select("id_k={$id}");
             return $tmp;
    }
   public function addImage($name,$url,$title2,$text,$big_text){
    DatabaseModule::instance()->kat_tov->insert(
        ["title"=>$name,
       "img"=>$url,
            "title2"=>$title2,
            "text"=>$text,
            "big_text"=>$big_text
        ]
    );
   }
}