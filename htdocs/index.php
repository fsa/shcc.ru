<?php
require_once './common.php';
HTML::showPageHeader('Контроллер умного дома SHCC');
?>
<h1>Контроллер умного дома &laquo;SHCC&raquo;</h1>
<p>Проект написан на языке PHP с использованием сервера баз данных PostgreSQL. Для запуска могут быть использованы любые дистрибутивы Linux. Минимальные требования к версиям ПО:</p>
<ol>
    <li>PHP-7.2;</li>
    <li>PostgreSQL-10.</li>
</ol>
<p>В ядре системы активно используется разделяемая память (Shared Memory), поэтому запуск контроллера на операционных системах не совместимых с unix невозможен, в том числе на ОС Windows.</p>
<p>Для запуска необходимых сервисов используется systemd. Использование других систем инициализации возможно, но это требует ручного создания init скрипта и задания для cron. Если вы решитесь самостоятельно запускать необходимую службу через другие системы инициализации, не забудьте обеспечить её запуск только после запуска веб-сервера и сервера баз данных.</p>
<p>Проект бы создан под впечатлением от MajorDoMo. Изначально было присвоено кодовое имя phpmd (php majordomo - PHP мажордом), но после реализации базового функционала было принято решение отказаться от этого имени и использовать SHCC (сокращение от SmartHome Control Center).</p>
<p><a href="https://github.com/fsa/shcc">Проект на Github</a>.</p>
<?php
HTML::showPageFooter();