<?php
session_start();
class FpassController extends Controller
{
public function action_index(){
    $v=new View("fpass");
    $v->title="Електронний реєстр хворих цукровим діабетом";
    $c=new FpassController();

if(isset($_POST['email'])){

    $gipadress=$_SERVER['REMOTE_ADDR'];
    $grecaptcha=$_POST['g-recaptcha-response'];
    $postdata = http_build_query(
        array(
            'secret' => '6Lel6ekUAAAAAP7GgRXMz_OOnyB2bvVrY4_M1r-m',
            'response' => $grecaptcha,
            'remoteip' => $gipadress
        )
    );
    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $postdata
        )
    );


    $gcontents = stream_context_create($opts);

    $gresults = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $gcontents);

    $jsonresults = json_decode($gresults);

    if ($jsonresults->{'success'}===false ) {
        // the code was incorrect
        print "<font color=\"red\">Помилка: ввели невірний код перевірки!</font><br /><br />";
    }
    else if ($jsonresults->{'success'}=== true )
    {
        $subject = "Зміна пароля";
        $datt=date('yy-m-d');
        $massage= "Доброго дня! Якщо ви хочете поміняти пароль на сайті Електронний реєстр хворих цукровим діабетом! 
              
                 Для цього перейдіть за посиланням https://diabetTest/changepass?email=".$_POST['email']." З повагою, Адміністрація";
        mail($_POST['email'], $subject, $massage);
$v->res='Вам на пошту буде надіслано посилання для зміни паролю';
    }
}
else{
    $v->res='';
}
     $v->viewTemplate('first');
     $this->responce($v);
}
    public function action_logaut(){
        $user=MainModel::Instance()->logout();
        $this->redirect(Url::local("main"));
    }




}