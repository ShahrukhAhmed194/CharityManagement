<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/css/adminLogin.css')}}">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 
</head>    
<body>    
    
<div class="loginForm"> 
    <a href="{{route('home')}}" class="logo"><img src="{{asset('assets/img/loginPageLogo.png')}}" alt=""></a>     
    @if(session()->has('fail'))
        <div class="alert alert-danger">
            {{ session()->get('fail') }}
        </div>
    @endif  
    <form id="login" method="post" action="{{route('login')}}">
        @csrf
        <label><b>Admin Name</b></label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password</b></label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
       <button type="submit" id="butt">LogIn </button>       
        <br><br>    
    </form>     
</div>    
</body>    
</html>     