<?php

    session_start();
    require_once 'Classes/Token.php';

    setcookie("name","cryptopal2",time() + 40000 );
    

    $error="";
    $success="";

    if(isset($_POST['username'])) {
        $uname = $_POST['username'];
    }

    if(isset($_POST['password'])) {
        $pass = $_POST['password'];
    }

    if(isset($_POST['submit'])){
        if($uname == "cryptopal2"){
            if($pass == "Matta"){

                $_SESSION['username'] = "cryptopal2";
                $_SESSION['start']= time();
                            
                //capture Logged In Times
                $_SESSION['expire']= $_SESSION['start'] + (1 * 5);
                header('Location: welcome.php');

                $token = Token::generate(session_id());
			    setcookie("id", session_id());
			    setcookie("token", $token);
            }
              
            else{
                $error = "Invalid Password";
                $success = "";
            }
        }

        else{

            $error = "Invalid Username";
            $success = "";
            
        }
    }
?>


<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="pro.css">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>




   
   
    <section class="container-fluid bg img-responsive">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form method="POST" class="form-con">
                    <div class="form-group">
                    <p class="error"><?php echo $error; ?><p class="success"><?php echo $success; ?></p>
                       <h2>Login</h2>
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" type="username" class="form-control" aria-describedby="Username Help">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password"  type="username" class="form-control" id="exampleInputPassword1">
                        <small id="emailHelp" class="form-text text-muted">data is encrypted with AES-256-bit encryption</small>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <small id="emailHelp" class="form-text text-muted">Remember This Computer</small>
                        <label class="form-check-label" for="exampleCheck1"> </label>
                        </br>
                        </br><a href="#"> Forget Password ?</a></br>
                        </br>
                        <a href="#"> Sign up </a></br>
                    </div>
                    
                    
                    

                    
                    <button type="submit" name="submit"   class="btn btn-primary btn-block">Submit</button>
                    
                </form>

            </section>
        </section>
    </section>
    
    <div class="footer">
        <p>-| USERNAME = cryptopal2 ||| PASSWORD = Matta |-</p>
    </div>
    





</html>