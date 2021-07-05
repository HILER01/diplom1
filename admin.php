
<link rel="stylesheet" href="/assets/css/2.css">
<nav class="top-menu" >
        <ul class="nav nav-tabs">
            <div class="start" id="active-div">
                <li class="nav-item" >
                    <a class="nav-link <? if ($_SERVER['PHP_SELF'] == '/includes/admin/general.php') echo 'act'; ?>" href="/includes/admin/general.php"><i class="zmdi zmdi-home"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <? if ($_SERVER['PHP_SELF'] == '/includes/admin/docx.php') echo 'act'; ?>" href="/includes/admin/docx.php">Документы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <? if ($_SERVER['PHP_SELF'] == '/includes/admin/users.php') echo 'act'; ?>" href="/includes/admin/users.php">Пользователи</a>
                </li>
            </div>
            <div class="end">
                <li class="nav-user">
                    <a><?=$_COOKIE['user']?></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/includes/ext/exit.php"><i class="zmdi zmdi-sign-in"></i></a>
                </li>
            </div>
        </ul>
    <!-- <ul  class="menu-main " >
        <li class="js-link left-item"><a class="" href="/includes/admin/general.php" ><i class="zmdi zmdi-home zmdi-header"></i></a></li>
        <li class="js-link left-item"><a class="" href="/includes/admin/docx.php" >Документы</a></li>
        <li class="js-link left-item"><a href="/includes/admin/users.php" >Пользователи</a></li>
        <li class="js-link right-item"><a href="/includes/ext/exit.php"><i class="zmdi zmdi-sign-in zmdi-header"></i></a></li>
        <li class="js-link right-item"><a><?=$_COOKIE['user']?></a></li>
        </ul> -->
</nav>

