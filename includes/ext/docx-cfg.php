<?php
    $sender = 'Отправитель';
    $doctype = 'Тип документа';
    $docdate = '№, дата документа';
    $delloc = 'Место доставки';
    $deldate = 'Дата доставки';
    $receipt = 'Дата поступления';
    $edit_button = 'Изменить';
    
    include '../../includes/ext/db.php';

    if (isset($_POST["sender"])) {
        if (isset($_GET['red_id'])) {
            $sql = mysqli_query($db_connect, "UPDATE `documents`
            SET `sender` = '{$_POST['sender']}', `doctype` = '{$_POST['doctype']}', `docdate` = '{$_POST['docdate']}', `delloc` = '{$_POST['delloc']}', `deldate` = '{$_POST['deldate']}', `receipt` = '{$_POST['receipt']}'
            WHERE `ID`={$_GET['red_id']}");
        } else {
            $sql = mysqli_query($db_connect, "INSERT INTO `documents` (`sender`, `doctype`, `docdate`, `delloc`, `deldate`, `receipt`)
            VALUES ('{$_POST['sender']}', '{$_POST['doctype']}', '{$_POST['docdate']}', '{$_POST['delloc']}', '{$_POST['deldate']}', '{$_POST['receipt']}')");
        }

        if ($sql) {
            $user_edit = '<p class="m-send message-success">Успешно, данные обновлены!</p>';
        } else {
            $user_edit_error = '<p class="m-send message-error">Произошла ошибка: ' . mysqli_error($db_connect) . '</p>';
        }

        header('Location:/includes/admin/docx.php');
    }

    if (isset($_GET['red_id'])) {
        $sql = mysqli_query($db_connect, "SELECT `id`, `sender`, `doctype`, `docdate`, `delloc`, `deldate`, `receipt` FROM `documents` WHERE `ID`={$_GET['red_id']}");
        $documents = mysqli_fetch_array($sql);
    }
?>