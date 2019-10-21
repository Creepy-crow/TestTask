
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sing In</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
</head>

<body>
<form class="form-signin">
    <div class="text-center mb-4">
        <img class="mb-4" src="http://icons.iconarchive.com/icons/papirus-team/papirus-apps/512/github-icon.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Sing In</h1>
        <p>Use Github authentication please</p>
    </div>


    <a href="{{ url('/login/github') }}" class="btn btn-lg btn-primary btn-block">Sign in</a>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
</form>
</body>
</html>
