<?php 
if (isset($_POST['textarea_input'])) {
    $textarea_input = $_POST['textarea_input'];
}
if (isset($_POST['checkbox_input'])) {
    $checkbox_input = $_POST['checkbox_input'];
}
if (isset($_POST['radiobutton_input'])) {
    $radiobutton_input = $_POST['radiobutton_input'];
}
if (isset($_POST['select_input'])) {
    $select_input = $_POST['select_input'];
}
if (isset($_POST['password_input'])) {
    $password_input = $_POST['password_input']; 
}
if (isset($_POST['file_input'])) {
    $file_input = $_POST['file_input'];
}
    ?>
<head>
    <script src="/resources/js/jquery-3.1.1.min.js"></script>
    <script src="/resources/js/bootstrap.min.js"></script>
</head>
<form method="post" action="liyaPost.php">
    <textarea name="textarea_input" cols="50" rows="10" required><?php if (isset($_POST['textarea_input'])) echo $textarea_input; ?></textarea> <br> <br> 
    <label><input name="checkbox_input" type="checkbox" value="137" <?php if (isset($_POST['checkbox_input'])) echo 'checked'; ?> >137</label> <br> <br> 
    <label><input name="radiobutton_input" type="radio" value="345" <?php if (isset($_POST['radiobutton_input']) && ($_POST['radiobutton_input']== "345")) echo 'checked'; ?>> 345 </label>
    <label><input name="radiobutton_input" type="radio" value="765" <?php if (isset($_POST['radiobutton_input']) && ($_POST['radiobutton_input']== "765")) echo 'checked'; ?>> 765 </label><br> <br> 
    <select name="select_input" size = “1”> 
    <option <?php if (isset($_POST['select_input'])&& ($_POST['select_input']== "Полиморфизм")) echo 'selected'; ?> value="Полиморфизм">Полиморфизм</option> 
    <option <?php if (isset($_POST['select_input'])&& ($_POST['select_input']== "Инкапсуляция")) echo 'selected'; ?> value="Инкапсуляция">Инкапсуляция</option> 
    <option <?php if (isset($_POST['select_input'])&& ($_POST['select_input']== "Наследование")) echo 'selected'; ?> value="Наследование">Наследование</option> 
    </select> <br> <br> 
    <input type="password" name="password_input" size="12" maxlength="8"><br> <br> 
    Загрузить файл: <input name="file_input" type="file"> <br> <br> 
    <input type="reset" name="reset_input" value="Сбросить">
    <input type="submit" name="submit_input" value="Отправить"> 
</form>
<?php
//отлично! Есть недочёты небольшие, но в целом задание сделано правильно.
//Непонятно, зачем свехру переменные объявлены, если они нигде не испульзуются..?
//Если бы они использовались, то было бы много ошибок "indefined variable"....., так как нет значения по умолчанию.


$to='liya.krutikova@gmail.com';
$subject='test subject';
$message= $_POST['textarea_input'];
var_dump(mail($to, $subject, $message));
$to='gulkinnos@gmail.com';
var_dump(mail($to, $subject, $message));

var_dump($message);
