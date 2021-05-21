<?php
$ROOT = './';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title><?= $page ?></title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= BASE_URL?>/css/style.css" />
    <style type="text/css">
       /* body{
            background-color:#126580;
        }*/
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="${pageContext.request.contextPath}/">
              <!--  <img  src="" alt="logo" class="logo" /> -->
                PHP-MVC!
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="<?= BASE_URL?>/">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASE_URL?>/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASE_URL?>/contact">Contact</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= BASE_URL?>/pages">Blog</a>
                            <a class="dropdown-item" href="<?= BASE_URL?>/users">Users</a>
                           <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href=<?= BASE_URL?>/contact"#">config..</a>-->
                        </div>
                    </li>

                </ul>

                <div class="float-right" style="color:white;">
                    <!--<c:if test="${not empty user}">
                        <i class="fa fa-user"></i> ${user}
                        <a class="nav-link" href="${pageContext.request.contextPath}/main/logout"
                           style="display:inline; color:crimson;">
                            <i class="fa fa-sign-out fa-lg"></i>
                        </a>
                    </c:if>-->

                   <a class="nav-link" href="<?= BASE_URL?>/admin"><i class="fa fa-sign-in fa-lg"></i> Login</a>

                </div>
            </div>
        </nav>
    </header>
    <div role="main" class="container">
        <h3><?=ucfirst($page)?></h3>
        <?php echo $content_for_layout;?>
    </div>

    <footer class="footer">
        <div>
            <span class="text-muted">&copy; mc.</span>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
