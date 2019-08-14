<?php
    $maxSessionTime = 60 * 30; //30 minutes
    $action = (isset($_GET['a'])) ? $_GET['a'] : '';
    $search = (isset($_GET['b'])) ? $_GET['b'] : '';
    $BYmajor = (isset($_GET['c'])) ? $_GET['c'] : '';
    session_start();
    date_default_timezone_set('EST');
    include 'DB.php';
    include './Class/Class.php';
/************************************************************************************************************/
if (isset($_SESSION['userID'])) {
    $loggedUser = User::loadFromID($_SESSION['userID']);
    
    if (is_null($loggedUser)) {
        session_destroy();
        session_start();
    } else {
        if ((time() - $_SESSION['loginTime']) >= $maxSessionTime) {
            session_destroy();
            session_start();
            $loggedUser = null;
        } else if ($_SESSION['loginIP'] != $_SERVER['REMOTE_ADDR']) {
            session_destroy();
            session_start();
            $loggedUser = null;
            //showError('Unauthorized access! Session destroyed!');
        }
    }
}
/************************************************************************************************************/
    include './Parts/Header.php';
/************************************************************************************************************/
if ($action == 'login') {
        include './parts/Login.php';
} else if ($action == 'logout') {
            session_destroy();
            $i='';
            header('Location: index.php');
} else if ($action == 'doLogin') {
    $u = User::loadFromUsername($_POST['username']);
        
        if (is_null($u)) {
                //showError('The user doesn\'t exist.');
                include './parts/Login.php';
        } else if ($u->validatePassword($_POST['password'])) {
                $loggedUser= $u;
                $_SESSION['userID'] = $u->id;
                $_SESSION['loginTime'] = time();
                $_SESSION['loginIP'] = $_SERVER['REMOTE_ADDR'];
                header('Location: index.php');
        } else {
                //showError('The entered password is incorrect!');
                include './parts/Login.php';
        }
} else if ($action == 'goUPRP-information') {
        if (empty($_SESSION)) {
                include './parts/Login.php';
        }else {
                include './parts/MENU.php';
                include './parts/WEB-BACE/UPRP-INFORMATION.php';
        }
}else if ($action == 'goUPRP-PI') {
        if (empty($_SESSION)) {
                include './parts/Login.php';
        }else {
                include './parts/MENU.php';
                include './parts/WEB-BACE/UPRP-PROGRAM-INFORMATION.php';
        }   
}else if ($action == 'goAssesmentData') {
        if (empty($_SESSION)) {
                include './parts/Login.php';
        }else {
                $Depa = $loggedUser->departament;
                include './parts/MENU.php';
                include './parts/WEB-BACE/ASSESSMENT-DATA.php';
        }
}else if ($action == 'goDOC') {
        if (empty($_SESSION)) {
                include './parts/Login.php';
        }else {
                include './parts/MENU.php';
                include './parts/WEB-BACE/DOCUMENTS-FILE.php';      
        }
}else if ($action == 'goREPORT') {
        if (empty($_SESSION)) {
                include './parts/Login.php';
        }else {
                include './parts/MENU.php';
                include './parts/WEB-BACE/PAGE-REPORT/ASSESSMENT-REPORT.PHP';
        }
} else if ($action == 'goRESULT'){
        if (empty($_SESSION)) {
                include './parts/Login.php';
        }else {
               include './parts/MENU.php';
               include './parts/WEB-BACE/PAGE-REPORT/ASSESSMENT-RESULT.PHP';
                
        }
} else {
         if (empty($_SESSION)) {
                $action='login';
               include './parts/Login.php';
        }else {
               include './parts/body.php';}
}

//*****************************************************************
include './parts/footer.php';
?> 