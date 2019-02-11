<?php
    $action = (isset($_GET['a'])) ? $_GET['a'] : '';
    $search = (isset($_GET['b'])) ? $_GET['b'] : '';
    session_start();
    date_default_timezone_set('EST');
    include 'DB.php';
    include './Class/Class.php';
    include './Parts/Header.php';
 /************************************************************************************************************/
if ($action == 'login') {
        include './parts/Login.php';
} else if ($action == 'logout') {
            session_destroy();
            $i='';
            header('Location: index.php');
}else if ($action == 'goRegister') {
        $u = User::loadFromUsername($_POST['username']);
    if ($u) {
        showError('The username already exist.');
        include './Parts/register.php';
    } else {
        $u = new User();
        
        $u->username = $_POST['username'];
        $u->password = $_POST['password1'];
        $u->first_name = $_POST['first_name'];
          $u->last_name = $_POST['last_name'];
        $u->email = $_POST['email'];
        
        $u->save();
    }
} else if ($action == 'doLogin') {
    $u = User::loadFromUsername($_POST['username']);
        
        if (is_null($u)) {
                showError('The user doesn\'t exist.');
                include './parts/Login.php';
        } else if ($u->validatePassword($_POST['password'])) {
                $loggedUser= $u;
                $_SESSION['userID'] = $u->id;
                $_SESSION['loginTime'] = time();
                $_SESSION['loginIP'] = $_SERVER['REMOTE_ADDR'];
                header('Location: index.php');
        } else {
                showError('The entered password is incorrect!');
                include './parts/Login.php';
        }
} else if ($action == 'goUPRP-information') {
        /*if (empty($_SESSION)) {
                showError('pleass log in.');
                include './parts/Login.php';
        }else {*/
                include './parts/MENU.php';
                include './parts/WEB-BACE/UPRP-INFORMATION.php';
        
}else if ($action == 'goUPRP-PI') {
        /*if (empty($_SESSION)) {
                showError('pleass log in.');
                include './parts/Login.php';
        }else {*/
                include './parts/MENU.php';
                include './parts/WEB-BACE/UPRP-PROGRAM-INFORMATION.php';
                
}else if ($action == 'goAssesmentData') {
        /*if (empty($_SESSION)) {
                showError('pleass log in.');
                include './parts/Login.php';
        }else {*/
                include './parts/MENU.php';
                include './parts/WEB-BACE/ASSESSMENT-DATA.php';
  }else if ($action == 'goDOC') {
        /*if (empty($_SESSION)) {
                showError('pleass log in.');
                include './parts/Login.php';
        }else {*/
                include './parts/MENU.php';
                include './parts/WEB-BACE/DOCUMENTS-FILE.php';      

} else {
   /* if (empty($_SESSION)) {
                $action='login';
                include './parts/Login.php';
        }else {*/
    include './parts/body.php';
}
//*****************************************************************

//*****************************************************************
include './parts/footer.php';
?> 