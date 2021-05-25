<?php
//scrip php para identificar tipo de sesión
switch ($sessiontype){
    case 'all':
        session_start();
        if($_SESSION['id']<=0){
            $pageToRedirect = "login.php";
            header ("Location: {$pageToRedirect}");
            exit;
        }
        else{
            if($_SERVER['PHP_SELF']=='/PROYECTO WEB I/pages/login.php'||$_SERVER['PHP_SELF']=='/PROYECTO WEB I/index.php'){
                $loginlogoutbutton="<div class='float-left'>
                                    <a type='button' href='/PROYECTO WEB I/pages/login.php' class='btn btn-primary'>Login</a>
                              </div>";            
            }
            else{
                $loginlogoutbutton="<div class='float-left'>
                                    <a type='button' href='/PROYECTO WEB I/pages/logout_validation.php' class='btn btn-primary'>Logout</a>
                              </div>";            
            }
        }
    break;
    case 'anfitrion':
        session_start();
        if($_SESSION['role']!=='Anfitrión'){
            $pageToRedirect = "login.php";
            header ("Location: {$pageToRedirect}");
            exit;
        }
        else{
            if($_SERVER['PHP_SELF']=='/PROYECTO WEB I/pages/login.php'||$_SERVER['PHP_SELF']=='/PROYECTO WEB I/index.php'){
                $loginlogoutbutton="<div class='float-left'>
                                    <a type='button' href='/PROYECTO WEB I/pages/login.php' class='btn btn-primary'>Login</a>
                              </div>";            
            }
            else{
                $loginlogoutbutton="<div class='float-left'>
                                    <a type='button' href='/PROYECTO WEB I/pages/logout_validation.php' class='btn btn-primary'>Logout</a>
                              </div>";            
            }
        }
    break;
    case 'index':
        if($_SERVER['PHP_SELF']=='/PROYECTO WEB I/pages/login.php'||$_SERVER['PHP_SELF']=='/PROYECTO WEB I/index.php'){
            $loginlogoutbutton="<div class='float-left'>
                                <a type='button' href='/PROYECTO WEB I/pages/login.php' class='btn btn-primary'>Login</a>
                          </div>";            
        }
        else{
            $loginlogoutbutton="<div class='float-left'>
                                <a type='button' href='/PROYECTO WEB I/pages/logout_validation.php' class='btn btn-primary'>Logout</a>
                          </div>";            
        }
    break;
}
?>