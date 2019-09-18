<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Хаб умного дома Неохом</title>
</head>
<body>
<p>Это сайт проекта хаба умного дома &laquo;Неохом&raquo;.</p>
<p>Проект написан на языке PHP с использованием сервера баз данных PostgreSQL. Для запуска могут быть использованы любые дистрибутивы Linux. Минимальные требования к версиям ПО:</p>
<ol>
    <li>PHP-7.2</li>
    <li>PostgreSQL-10</li>
</ol>
<p>В ядре системы активно используется разделяемая память (Shared Memory), поэтому запуск хаба на операционных системах не совместимых с unix невозможен, в том числе на ОС Windows.</p>
<p>Для запуска необходимых сервисов используется systemd. Использование других систем инициализации возможно, но это требует ручного создания init скрипта и задания для cron. Если вы решитесь самостоятельно запускать необходимую службу через другие системы инициализации, не забудьте обеспечить её запуск только после запуска веб-сервера и сервера баз данных.</p>
<p>Проект бы создан под впечатлением от MajorDoMo. Изначально было присвоено кодовое имя phpmd (php majordomo - PHP мажордом), но после реализации базового функционала было принято решение отказаться от этого имени и использовать Neohome<!-- (сокращение от Neuron OpenSource Smarthome, Neuron - кодовое имя наработок, использованных в качестве ядра проекта)-->.</p>
<p>Git репозиторий проекта: <a href="https://github.com/fsa/neohome">https://github.com/fsa/neohome</a>.</p>
<p>Документация: <a href="https://docs.neohome.net/">https://docs.neohome.net/</a></p>
</body>
</html>
