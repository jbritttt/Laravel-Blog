<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth
<p>Congrats you are logged in.</p>
<form action="/logout" method="POST">
@csrf
<button>Log out</button>

</form>

    @else
    <div>
<h2>Register</h2>

<form action="/register" method="post">
@csrf
<input name ='name' type="text" placeholder="name">
<input name ='email' type="text" placeholder="email">
<input name ='password' type="password" placeholder="password">

<button>register</button>
</form>
    

    </div>

    <div>
<h2>Login</h2>

<form action="/login" method="post">
@csrf
<input name ='loginname' type="text" placeholder="name">

<input name ='loginpassword' type="password" placeholder="password">

<button>Log in</button>
</form>
    

    </div>
    @endauth


   
</body>
</html>
