<?php
    include '../../links.php';
    include '../../includes/ext/db.php';

    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $pass = md5($pass . 'qweeqwweqweqweewq1123');
    
    if (isset($_POST["login"])) {
        if (isset($_GET['red_id'])) {
            $sql = mysqli_query($db_connect, "UPDATE `main` SET `login` = '{$_POST['login']}',`pass` = '$pass',`name` = '{$_POST['name']}' WHERE `ID`={$_GET['red_id']}");
        } else {
            $sql = mysqli_query($db_connect, "INSERT INTO `main` (`login`, `pass`, `name`) VALUES ('{$_POST['login']}', '$pass', '{$_POST['name']}')");
        }

        if ($sql) {
            $user_edit = '<p class="m-send message-success">Успешно, данные обновлены!</p>';
        } else {
            $user_edit_error = '<p class="m-send message-error">Произошла ошибка: ' . mysqli_error($db_connect) . '</p>';
        }
    }
    
    if (isset($_GET['del_id'])) {
        $sql = mysqli_query($db_connect, "DELETE FROM `main` WHERE `ID` = {$_GET['del_id']}");

        if ($sql) {
            $user_del = '<p class="m-send message-success">Пользователь удален.</p>';
        } else {
            $user_del_error = '<p class="m-send message-error">Произошла ошибка: ' . mysqli_error($db_connect) . '</p>';
        }
    }
    
    if (isset($_GET['red_id'])) {
        $sql = mysqli_query($db_connect, "SELECT `id`, `login`, `pass`, `name` FROM `main` WHERE `ID`={$_GET['red_id']}");
        $users = mysqli_fetch_array($sql);
    }
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="container container-users">
                    <div class="row">
                        <div class="col users"> <h1 style="color: #fff;">Редактирование сотрудников</h1>
                            <form method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="login" value="<?= isset($_GET['red_id']) ? $users['login'] : ''; ?>" id="floatingInput" placeholder="1">
                                    <label class="label-reg" for="floatingInput">Логин</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="pass" value="" id="floatingInput" placeholder="2">
                                    <label class="label-reg" for="floatingInput">Пароль</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" value="<?= isset($_GET['red_id']) ? $users['name'] : ''; ?>" id="floatingInput" placeholder="3">
                                    <label class="label-reg" for="floatingInput">Ф.И.О.</label>
                                </div>
                                <button class="btn btn-success" type="submit">Подтвердить</button>
                            </form>
                            <div>
                                <?php 
                                    if(isset($user_edit) && !empty($user_edit)) echo $user_edit;
                                    elseif (isset($user_edit_error) && !empty($user_edit_error)) echo $user_edit_error;

                                    if(isset($user_del) && !empty($user_del)) echo $user_del;
                                    elseif (isset($user_del_error) && !empty($user_del_error)) echo $user_del_error;

                                    if(isset($user_added) && !empty($user_added)) echo $user_added;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>#</th> <th>Логин</th> <th>Пароль</th> <th>Ф.И.О.</th> <th>Изменить</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = mysqli_query($db_connect, "SELECT `id`, `login`, `pass`, `name` FROM `main`");
                            while ($result = mysqli_fetch_array($sql)) {
                                echo '<tr>'.
                                    "<td>{$result['id']}</td>".
                                    "<td>{$result['login']}</td>".
                                    "<td>{$result['pass']}</td>".
                                    "<td>{$result['name']}</td>".
                                    "<td><a class='btn btn-primary btn-edit-del' href='?red_id={$result['id']}'><i class='zmdi zmdi-edit'></i></a> <a class='btn btn-primary btn-edit-del' href='?del_id={$result['id']}'><i class='zmdi zmdi-delete'></i></a></td>".
                                '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>