<!DOCTYPE html>
<html>

<head>
    <title>404 NOT FOUND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-attachment: local;
        background-image: url("/assets/img/bg-404.jpg");
        backdrop-filter: blur(8px);
        background-repeat: no-repeat;
        font-family: 'Gemunu Libre', sans-serif;
        background-size: cover;
    }

    .alert{
        margin-bottom: 0%;
        padding-bottom: 5%;
    }

    .head-no {
        font-size: 5em;
        font-weight: bold;
        color: #000;
        font-family: 'Gemunu Libre', sans-serif;
    }

    .body-no {
        font-size: 1.6em;
        font-weight: bold;
        color: #000;
        font-family: 'Gemunu Libre', sans-serif;
    }

    img {
        vertical-align: text-bottom;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        display: block;
        max-width: 100%;
        height: auto;
        width: auto\9;
    }
</style>

<body>
    <div class="container mt-3">
        <div class="alert">
            <div class="alert-head">
                <div class="container mb-5">
                    <div class="alert_img">
                        <img src="/assets/img/404.gif" class="img-fluid" alt="404 not found">
                    </div>
                    <div class="text-center">
                        <div class="head-no">
                            <p>404 NOT FOUND</p>
                        </div>
                        <div class="body-no">
                            <p>Sorry, the page you are looking for could not be found.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert-body">
                <div class="container mb-5">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid gap-2">
                                    <a href="/" class="btn btn-dark p-3" style="font-size: 1.5em;">Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>