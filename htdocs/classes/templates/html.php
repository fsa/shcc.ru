<?php
namespace Templates;
class HTML {
  public $header;
  
  public function Header() {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?=$this->title?></title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="/style.css">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<?=$this->header?>
</head>
<body>
<div class="MenuWrap">
Хаб умного дома Neohome
</div>
<div class="MainContent">
<?php
    }

    public function Footer() {
?>
</div>
<div class="Footer">
    <span class="LastItem">&copy; <a href="https://tavda.net/">Сергей Федотов</a>, 2019.</span>
</div>
</body>
</html>
<?php
    }
}