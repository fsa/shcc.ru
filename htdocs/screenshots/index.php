<?php

require_once '../common.php';
httpResponse::showHtmlHeader('Скриншоты');
?>
<h1>Скриншоты</h1>
<p>Основной экран:</p>
<img src="pc_main.png" alt="Главный экран" class="screenshot-desktop">
<p>Отображение данных в виде графиков:</p>
<img src="pc_charts.jpg" alt="Графики" class="screenshot-desktop">
<p>Отображение списка мест установки датчиков и оборудования:</p>
<img src="pc_objects.png" alt="Объекты" class="screenshot-desktop">
<p>Отображение списка имеющегося и обнаруженного оборудования и управление им:</p>
<img src="pc_devices.png" alt="Устройства" class="screenshot-desktop">
<?php
httpResponse::showHtmlFooter();