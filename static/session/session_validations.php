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
                $loginlogoutbutton="<a type='button' href='/PROYECTO WEB I/pages/login.php' class='btn btn-success'>Login</a>
                                    <a type='button' href='/PROYECTO WEB I/pages/signup.php' class='btn btn-success ms-3'>Signup</a>";            
            }
            else{
                $loginlogoutbutton="<a type='button' href='/PROYECTO WEB I/pages/profile.php' class='btn btn-success me-2'>Perfil</a>
                                    <a type='button' href='/PROYECTO WEB I/pages/logout_validation.php' class='btn btn-danger ms-1'>Logout</a>";            
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
                $loginlogoutbutton="<a type='button' href='/PROYECTO WEB I/pages/login.php' class='btn btn-success'>Login</a>
                                    <a type='button' href='/PROYECTO WEB I/pages/signup.php' class='btn btn-success ms-3'>Signup</a>";            
            }
            else{
                $loginlogoutbutton="<a type='button' href='/PROYECTO WEB I/pages/profile.php' class='btn btn-success me-2'>Perfil</a>
                                    <a type='button' href='/PROYECTO WEB I/pages/logout_validation.php' class='btn btn-danger ms-1'>Logout</a>";            
            }
        }
    break;
    case 'index':        
        session_start();           
        if(isset($_SESSION['id'])){            
            if($_SERVER['PHP_SELF']=='/PROYECTO WEB I/pages/login.php'||$_SERVER['PHP_SELF']=='/PROYECTO WEB I/index.php'){
                $loginlogoutbutton="<a type='button' href='/PROYECTO WEB I/pages/profile.php' class='btn btn-success me-2'>Perfil</a>                        
                                    <a type='button' href='/PROYECTO WEB I/pages/logout_validation.php' class='btn btn-danger ms-1'>Logout</a>";            
            }            
        }
        else{
            $loginlogoutbutton="<a type='button' href='/PROYECTO WEB I/pages/login.php' class='btn btn-success'>Login</a>
                                <a type='button' href='/PROYECTO WEB I/pages/signup.php' class='btn btn-success ms-3'>Signup</a>";            
        }
    break;
}
?>