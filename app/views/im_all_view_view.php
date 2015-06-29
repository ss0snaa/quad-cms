<?php
/**
 * Created by PhpStorm.
 * User: ss0snaa
 * Date: 25.06.2015
 * Time: 9:51
 */


echo 'im_all_view';
var_dump($data);

?>


<html>
<head>
    <style type="text/css">
        #code
        {
            background-color:#fffDBD;
            margin:10px;
            padding:5px;
        }
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

//Пишите код здесь
            $("#but1").click(function(){$("#par1").css("color", "green").css("font-size", "20px");});
            $("#href1").mouseover(function(){$("#href1").css("color", "orange")});
            $("#href1").mouseout(function(){$("#href1").css("color", "#adadad")});
            $("#text1").select(function(){$("#text1").css("color", "red").css("font-size", "20px");});

            $("#but2").toggle(function(){
                $("#par2").css("color","red").css("font-family", "times new roman");},function(){
                $("#par2").css("color","blue").css("font-family", "Arial");},function(){
                $("#par2").css("font-weight","bold").css("font-family", "Verdana").css("border-style", "1px");},function(){
            });
});
    </script>
</head>
<body>
<p><b>1. После одинарного нажатия на кнопку с id="but1" цвет текста абзаца с id="par1" должен измениться на зеленый, а размер его шрифта должен стать равным 20px. При двойном нажатии на кнопку с id="but1" оформление абзаца с id="par1" должно сбрасываться на стандартное.</b></p>
<div id="code">
    <h3 id="par1">Я первый заголовок на странице.</h3>
    <p id="par1">Я первый абзац на странице.</p>
    <input id="but1" type="button" value="Нажмите на меня" />
</div>
<p><b>2. При наведении указателя мыши на ссылку c id="href1" ее цвет должен измениться на оранжевый. При выведении указателя мыши за ее пределы оформление должно сбросится на стандартное.</b></p>
<div id="code">
    <a id="href1" href="http://www.wisdomweb.ru/">wisdomweb.ru</a>
</div>
<p><b>3. При выделении текста элемента с id="text1" его цвет должен измениться на красный, а размер шрифта должен стать равным 20px.</b></p>
<div id="code">
    <input type="text" id="text1" value="Выделите мой текст" />
</div>
<p><b>4. При каждом щелчке по кнопке с id=but2 оформление абзаца с id=par2 должно меняться следующим образом:</b></p>
<ul>
    <li>Текст должен быть отображен шрифтом Times New Roman красного цвета;</li>
    <li>Текст должен быть отображен шрифтом Arial синего цвета;</li>
    <li>Текст должен быть отображен жирным шрифтом Verdana, с рамкой толщиной 1 пиксель (<i>используйте свойство font-weight:bold для того, чтобы сделать текст
            жирным и свойство border-style для задания толщины границы</i>)</li>
</ul>
<div id="code">
    <p id="par2">Мое оформление будет меняться после каждого нажатия на кнопку ниже.</p>
    <input id="but2" type="button" value="Изменить оформление абзаца" />
</div>
</body>
</html>
