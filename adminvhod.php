<?php
session_start();

class AuthClass {

    private $_login = "superuser";
    private $_password = "541451";

    public function isAuth() {
        if (isset($_SESSION["is_auth"])) {
            return $_SESSION["is_auth"];
        } else
            return false;
    }

    public function auth($login, $passwors) {
        if ($login == $this->_login && $passwors == $this->_password) {
            $_SESSION["is_auth"] = true;
            $_SESSION["login"] = $login;
            return true;
        } else {
            $_SESSION["is_auth"] = false;
            return false;
        }
    }

    public function out() {
        $_SESSION = array();
        session_destroy();
    }

}

$auth = new AuthClass();
//сначала проверяем, авторизован ли пользователь уже?
//если он авторизован, зачем проверять всё остальное?
if ($auth->isAuth()) {
    //разлогиниться можно только если уже залогинен
    if (isset($_GET["logout"])) {
        if ($_GET["logout"] == 1) {
            $auth->out();
            header("Location: ?logout=0");
        }
    }
    echo "Здравствуйте, вы авторизованы!";
    echo "<br/><br/><a href='?logout=1'>Выйти</a>";
} else {
    //если не авторизован, проверяем пришёл запрос на авторизацию, или нет (пользователь просто открыл страницу)   
    if (isset($_POST["login"]) && isset($_POST["password"])) {
        if (!$auth->auth($_POST["login"], $_POST["password"])) {
            echo "<h2>Логин или пароль введен не правильно!</h2>";
            ?>
            <h3>Вход в админку</h3>
            <form action="adminvhod.php" method="POST">
                Логин: <input type="text" name="login" value="<?php echo (isset($_POST["login"])) ? $_POST["login"] : null; ?>"/><br><br>
                Пароль: <input type="password" name="password" /><br><br>
                <input type="submit" value="Войти">
            </form>
            <?php
        } else {
            echo "Здравствуйте, вы авторизованы!";
            echo "<br/><br/><a href='?logout=1'>Выйти</a>";
        }
    } else {
        ?>
        <h3>Вход в админку</h3>
        <form action="adminvhod.php" method="POST">
            Логин: <input type="text" name="login" value="<?php echo (isset($_POST["login"])) ? $_POST["login"] : null; ?>"/><br><br>
            Пароль: <input type="password" name="password" /><br><br>
            <input type="submit" value="Войти">
        </form>
        <?php
    }
}
var_dump($_SESSION);
