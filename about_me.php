<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>проект по информатике/main page</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/ico.css">
</head>
<body id="#top">
                                        <!-- main header -->
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/shablons/header.php';?>
<main>
  <div class="main_pagetext">
    <h4 style="text-align:center;">There is <i class="htd">How To Do</i> page!</h4>
    <div class="spliter_y">

    <div class="themes-list">
  <p>Сейчас я перечислю минимально необходимые темы, которые нужно изучить, чтобы воссоздать подобную страницу:</p>
  <ul class="liguides">
    <div class="libox libox-1">
      <li style="justify-self:start;">Понимание расположение элементов страницы:</li>
      <div class="licontent">Чтение страницы осуществляется с начала кода бразумером.</div>
    </div>

    <div class="libox libox-2">
      <li style="justify-self:start;">Основные возможности css:</li>
      <div class="licontent">Видоизменение объектов: position, display, height, width, left, right, float, border, border-radius color, bg-color/image, linear-gradient, pseudoclasses</div>
    </div>

    <div class="libox libox-3">
      <li style="justify-self:start;">Основы html5:</li>
      <div class="licontent">Понимание зависисмостей тегов друг от друга:div, p, i, h1/2/3/4/5/6, navbar, footer, span</div>
    </div>

    <div class="libox libox-4">
      <li style="justify-self:start;">Метод flexbox и grid:</li>
      <div class="licontent">Понимание отличий между flex и grid, принципальное устройство методов: display:flex/grid, justify-content, align-content, flex-direction, flex-wrap grid-templates/columns/row-start/end, fr meaning </div>
    </div>

    <div class="libox libox-5">
      <li style="justify-self:start;">Использование transition:</li>
      <div class="licontent">Форма записи transiton и случаев его применения.</div>
    </div>

    <div class="libox libox-6">
      <li style="justify-self:start;">Оператор @keyframes:</li>
      <div class="licontent">Структура оператора и атрибуты в нем и объекте.</div>
    </div>

    <div class="libox libox-7">
      <li style="justify-self:start;">backdrop и filter свойства</li>
      <div class="licontent">Применение фильтров на объекты с использование различных эффектов</div>
    </div>

    <div class="libox libox-8">
      <li style="justify-self:start;">Базовое понимание запрос-startответ веб-сервера</li>
      <div class="licontent"></div>
    </div>

    <div class="libox libox-9">
      <li style="justify-self:start;">Примерное представление TCP протокола</li>
      <div class="licontent"></div>
    </div>
      </ul>
      <div class="conc">
        <p>
        Все выше приведенные требования необходимы для разработки frontend, то есть внешней оболочки сайта, что подойдет для сайта резюме. Но если вы захотите углубиться в более логическую часть, то лучше будет изучить язык программирования js вместе с веб-фреймворком React, кроме него существуют и другие, но в данный момент специалисты на данном фреймворке наиболее востребованы. Серверную часть можно написать и на других языках, к примеру python с его веб-фреймворком Django, тут все дело в удобстве. Каждый находит его в разных вещах. Тут остается только пробовать себя и стремится совершенствоваться в том, что кажется интересным конкретно для вас. 
        </p>
      </div>
    </div>
  </div>

 </div>
</main>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/shablons/footer.php';?>
  </body>

</html>