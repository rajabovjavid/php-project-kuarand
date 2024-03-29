

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kuarand Panel</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">


                <form action="../../api_routes/panel_routes/signin_route.php" method="POST">

                    <h1>Panel Login</h1>

                    <div>
                        <input type="text" name="email" class="form-control"
                               placeholder="Kullanıcı Adınız (Mail)" required=""/>
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Şifreniz"
                               required=""/>
                    </div>
                    <br>
                    <div>
                        <select name="panel_type" required>
                            <option value="0">Admin</option>
                            <option value="1">Hairdresser</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <button style="width: 100%; background-color: #73879C; color:white;" type="submit"
                                name="admingiris" class="btn btn-default"> Login
                        </button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">
                            <?php
                            echo apcu_fetch("message");
                            apcu_clear_cache()
                            ?>
                        </p>

                        <div class="clearfix"></div>
                        <br/>

                        <div>
                            <p>©2020 Kuarand</p>
                        </div>
                    </div>
                </form>


            </section>
        </div>

    </div>
</div>
</body>
</html>
