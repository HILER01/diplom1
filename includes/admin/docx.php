<?php 
    include '../../links.php';
    include '../../includes/ext/docx-cfg.php';
?>

<nav class="top-menu container-fluid">
    <ul class="menu-main">
        <li class="left-item"><a href="/includes/admin/docx.php">Заказы и поставки</a></li>
        <li class="left-item"><a href="/includes/admin/el_printing.php">Электронная печать</a></li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th><?php echo $sender ?></th>
                        <th><?php echo $doctype ?></th>
                        <th><?php echo $docdate ?></th>
                        <th><?php echo $delloc ?></th>
                        <th><?php echo $deldate ?></th>
                        <th><?php echo $receipt ?></th>
                        <th style="text-align: center;"><?php echo $edit_button ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = mysqli_query($db_connect, "SELECT `id`, `sender`, `doctype`, `docdate`, `delloc`, `deldate`, `receipt` FROM `documents`");
                        while ($result = mysqli_fetch_array($sql)) {
                            echo '<tr>'.
                                "<td>{$result['sender']}</td>".
                                "<td>{$result['doctype']}</td>".
                                "<td>{$result['docdate']}</td>".
                                "<td>{$result['delloc']}</td>".
                                "<td>{$result['deldate']}</td>".
                                "<td>{$result['receipt']}</td>".
                                "<td style='text-align: center;'><a class='btn btn-primary btn-edit-del' href='../../includes/admin/docx_edit.php?red_id={$result['id']}'><i class='zmdi zmdi-edit'></i></a></td>".
                            '</tr>';
                        }
                    ?>
                </tbody>
            </table>

            </div>
        </div>
    </div>
</div>