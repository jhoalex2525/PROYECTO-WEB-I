<?php
//scrip php para identificar tipo de sesión y mostrar boton (login/logout/profile/signup) segun corresponda
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
                $loginlogoutbutton="<a type='button' href='/PROYECTO WEB I/pages/signup.php' class='btn btn-outline-primary signup'>Signup</a>
                                    <a type='button' href='/PROYECTO WEB I/pages/login.php' class='btn btn-outline-primary login'>Login</a>";            
            }
            else{
                $loginlogoutbutton="<a type='button' href='/PROYECTO WEB I/pages/profile.php' class='btn btn-outline-primary signup'>Perfil</a>
                                    <a type='button' href='/PROYECTO WEB I/pages/logout_validation.php' class='btn btn-outline-primary logout'>Logout</a>";            
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
                $loginlogoutbutton="<a type='button' href='/PROYECTO WEB I/pages/signup.php' class='btn btn-outline-primary signup'>Signup</a>
                                    <a type='button' href='/PROYECTO WEB I/pages/login.php' class='btn btn-outline-primary login'>Login</a>";            
            }
            else{
                $loginlogoutbutton="<a type='button' href='/PROYECTO WEB I/pages/profile.php' class='btn btn-outline-primary signup'>Perfil</a>
                                    <a type='button' href='/PROYECTO WEB I/pages/logout_validation.php' class='btn btn-outline-primary logout'>Logout</a>";            
            }
        }
    break;
    case 'index':        
        session_start();           
        if(isset($_SESSION['id'])){            
            if($_SERVER['PHP_SELF']=='/PROYECTO WEB I/pages/login.php'||$_SERVER['PHP_SELF']=='/PROYECTO WEB I/index.php'){
                $loginlogoutbutton="<a type='button' href='/PROYECTO WEB I/pages/profile.php' class='btn btn-outline-primary signup'>Perfil</a>                        
                                    <a type='button' href='/PROYECTO WEB I/pages/logout_validation.php' class='btn btn-outline-primary logout'>Logout</a>";            
            }            
        }
        else{
            $loginlogoutbutton="<a type='button' href='/PROYECTO WEB I/pages/signup.php' class='btn btn-outline-primary signup'>Signup</a>
                                <a type='button' href='/PROYECTO WEB I/pages/login.php' class='btn btn-outline-primary login'>Login</a>";            
        }
    break;
}
?>