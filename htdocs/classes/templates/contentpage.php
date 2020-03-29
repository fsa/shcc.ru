<?php
namespace Templates;

class ContentPage {

    public $title;
    public $site_info;
    public $header;

  public function Header() {
        $title=is_null($this->title)?$this->site_info['title']:$this->title.' :: '.$this->site_info['title'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title><?=$title?></title>
<meta name="viewport" content="width=device-width">
<meta name="theme-color" content="#527779">
<link rel="stylesheet" href="/styles.css">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<?=$this->header?>
</head>
<body>
<header>
<nav class="listrow">
    <a href="https://shcc.ru/" class="listitem">Контроллер умного дома SHCC</a>
    <a href="/screenshots/" class="listitem">Скриншоты</a>
    <a href="https://github.com/fsa/shcc" class="listitem">Git репозиторий</a>
    <a href="https://docs.shcc.ru/" class="listitem">Документация</a>
</nav>
</header>
<main>
<?php
    }

    public function Footer() {
?>
</main>
<footer>
<p>&copy; <a href="https://tavda.net/">Сергей Федотов</a>, 2019-2020.</p>
</footer>
</body>
</html>
<?php
    }
}