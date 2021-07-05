<?php 
    include '../../links.php';
    include '../../includes/ext/docx-cfg.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card docx">
                <form method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text docx-input" id="inputGroup-sizing-default"><?php echo $sender ?></span>
                        <input type="text" class="form-control" name="sender" value="<?= isset($_GET['red_id']) ? $documents['sender'] : ''; ?>" disabled> <br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text docx-input" id="inputGroup-sizing-default"><?php echo $doctype ?></span>
                        <input type="text" class="form-control" name="doctype" value="<?= isset($_GET['red_id']) ? $documents['doctype'] : ''; ?>" disabled> <br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text docx-input" id="inputGroup-sizing-default"><?php echo $docdate ?></span>
                        <input type="text" class="form-control" name="docdate" value="<?= isset($_GET['red_id']) ? $documents['docdate'] : ''; ?>" disabled> <br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text docx-input" id="inputGroup-sizing-default"><?php echo $delloc ?></span>
                        <input type="text" class="form-control" name="delloc" value="<?= isset($_GET['red_id']) ? $documents['delloc'] : ''; ?>" disabled> <br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text docx-input" id="inputGroup-sizing-default"><?php echo $deldate ?></span>
                        <input type="text" class="form-control" name="deldate" value="<?= isset($_GET['red_id']) ? $documents['deldate'] : ''; ?>" disabled> <br>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text docx-input" id="inputGroup-sizing-default"><?php echo $receipt ?></span>
                        <input type="text" class="form-control" name="receipt" value="<?= isset($_GET['red_id']) ? $documents['receipt'] : ''; ?>" disabled> <br>
                    </div>
                        <button type="submit" class="btn btn-success">Обновить</button>
                        <a class="btn btn-secondary" href="../../includes/admin/docx.php">Назад</a>
                </form>
            </div>
        </div>
    </div>
</div>