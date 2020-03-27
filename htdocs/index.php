<?php
require_once './common.php';
httpResponse::showHtmlHeader('Контроллер умного дома');
?>
<h1>Контроллер умного дома &laquo;SHCC&raquo;</h1>
<p>SHCC &mdash; сокращение от SmartHome Control Center.</p>
<p>Проект написан на языке PHP с использованием сервера баз данных PostgreSQL. Для запуска могут быть использованы любые дистрибутивы Linux.</p>
<p>Цель проекта: создать альтернативу серверу MajorDoMo на языке PHP с более простым, понятным и безопасным кодом в ООП стиле, минимальным использованием ресурса накопителей (актуально для Raspberry Pi и аналогов) и обеспечением работы оборудования, имеющегося у автора проекта.</p>
<p>Минимальные требования к версиям ПО:</p>
<ul>
    <li>PHP 7.2;</li>
    <li>PostgreSQL 10.</li>
</ul>
<p>Рекомендуемые требования:</p>
<ul>
    <li>ОС Linux с системой инициализации systemd (например, Ubuntu 18.04 LTS или новее).</li>
</ul>
<p><a href="https://github.com/fsa/shcc">Проект на Github</a>.</p>
<p>Документация доступна по адресу <a href="https://docs.shcc.ru/">docs.shcc.ru</a>.</p>
<p>Документация для версии в разработке <a href="https://github.com/fsa/shcc/blob/alpha/docs/index.md">в репозитории на Github</a>.</p>
<?php
httpResponse::showHtmlFooter();