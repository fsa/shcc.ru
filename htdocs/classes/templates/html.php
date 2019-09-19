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
<link rel="stylesheet" href="/styles.css">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<?=$this->header?>
</head>
<body>
<div class="MenuWrap">
    <a href="https://neohome.net/" class="ListItem">Хаб умного дома Neohome</a>
    <a href="https://github.com/fsa/neohome" class="ListItem">Git репозиторий</a>
    <a href="https://docs.neohome.net/" class="ListItem">Документация</a>
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