
    <?php //задание со звездочкой:
    //Подключить bootstrap, как на всех остальных страницах
    ?>


<form method="post" action="devNamePost.php"> 

    <?php //если нажимать на кнопку отправить много раз, то добавлются пробелы. Устранить?>
    <textarea name="textarea_input" cols="50" rows="10"> <?php if (isset($_POST['textarea_input'])) echo $_POST['textarea_input']; ?> </textarea> <br> 
    <?php 
    //Всегда чекбокс не выделен, даже если я его отметил до того, как нажать "Отправить". Устранить?>
    <label><input name="checkbox_input" type="checkbox" value="137"> 137</label> <br>
    <?php 
    //Всегда выбирается "765, я я хочу, чтобы выбиралось то, чтоя выбрал до того, как нажать "Отправить". Устранить?>
    <label><input name="radiobutton_input" type="radio" value="345"> 345 </label>
    <label><input name="radiobutton_input" type="radio" value="765" checked> 765 </label><br>
    <select name="select_input" size = “1” > 
    <?php 
    //Всегда выбирается "Инкапсуляция, я я хочу, чтобы выбиралось то, чтоя выбрал до того, как нажать "Отправить". Устранить?>
    <option value="Полиморфизм">Полиморфизм</option> 
    <option selected value="Инкапсуляция">Инкапсуляция</option> 
    <option value="Наследование">Наследование</option> 
    </select> <br>
    <input type="password" name="password_input" size="12" maxlength="8"><br>
    Загрузить файл: <input name="file_input" type="file"> <br>
    <input type="reset" name="reset_input" value="Сбросить">
    <input type="submit" name="submit_input" value="Отправить"> 
  
</form>
<?php
//1. такая форма читается легче
//if (isset($_POST['textarea_input'])) {
//    $textarea_input = $_POST['textarea_input'];
//}
//2. Если перенести эти проверки наверх, то можно использовать переменные в форме

if (isset($_POST['textarea_input'])) $textarea_input = $_POST['textarea_input'];
if (isset($_POST['checkbox_input'])) $checkbox_input = $_POST['checkbox_input'];
if (isset($_POST['radiobutton_input'])) $radiobutton_input = $_POST['radiobutton_input'];
if (isset($_POST['select_input'])) $select_input = $_POST['select_input'];
if (isset($_POST['password_input'])) $password_input = $_POST['password_input']; 
if (isset($_POST['file_input'])) $file_input = $_POST['file_input'];


var_dump($_POST);
