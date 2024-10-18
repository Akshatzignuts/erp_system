<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login Form</title>
</head>
<body>

         <!-- FORMULAIRE DE CONNEXION -->
    <div class="card">
        <h2>Login Form</h2>

            <!-- SE CONNECTER / S'INSCRIRE -->
        <div class="login_register"  >
          
            <a href="{{route('login')}}" class="login" >Login</a>
            <a href="{{route('register')}}" class="register" >Signup</a>
        </div>

            <!-- FORMULAIRE -->
        <form class="form" method = "post" action = {{route('post.login')}}>
            @csrf
            <input type="email" placeholder="Email Adress" class="email" name="email">
            <input type="password" placeholder="password" name="password" class="pass">
            <button type="submit" class="login_btn">Login</button>
        </form>

            <!-- MOT DE PASSE OUBLIE ? -->
        <a href="#" class="fp">Forgot password?</a>

            <!-- BOUTTON LOGIN -->
          

            <!-- PIED DE LA CARD -->
        <div class="footer_card">
        <p>Not a member?</p>
        <a href="#">Singup now</a>
        </div>
    </div>
        
</body>
</html>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  text-decoration: none;
}

body{
  background-color: #282A36;
  display: flex;
  justify-content: center;
  align-items: center;
}

.card{
    width: auto;
    height: auto;
    background-color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    border-radius: 20px;
}

.card h2{
  margin-bottom: 10px;
}

.card a.fp{
  width: 100%;
  display: flex;
  color: #5881D0;
}

.login_register{
  display: flex;
  width: 100%;
  border: 1px solid rgba(221, 221, 221, 1);
  border-radius: 15px;
  margin: 20px 0;
}

.login_register a{
  font-size: 1em;
  padding: 10px 55px;
  border: none;
  width: 50%;
}

.login_register a.login{
  border-radius: 15px;
  background: linear-gradient(90deg, #003A74, #006AD5);
  color: white;
}

.login_register a.register{
  border-radius: 15px;
  background-color: transparent;
  color: black;
}

.form{
  display: flex;
  flex-direction: column;
  width: 100%;
}

.form input{
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #DDDDDD;
  color: #A0A6A3;
  font-family: "Roboto Mono", sans-serif;
  box-shadow: 1px 5px 9px rgba(211, 211, 211, .7);
}

.form input.email{
  margin-bottom: 15px;
}

.form input.pass{
  margin-bottom: 5px;
}

.login_btn{
  font-size: 20px;
  color: white;
  border-radius: 15px;
  border: none;
  background-color: #003A74;
  width: 100%;
  padding: 10px;
  margin-top: 15px;
  margin-bottom: 15px;
  background: linear-gradient(-90deg, #003A74, #006AD5);
  box-shadow: 1px 5px 9px rgba(211, 211, 211, .9);
}

.footer_card{
  display: flex;
  width: 100%;
  justify-content: center;
}

.footer_card p{
  margin-right: 10px;
}

.footer_card a{
  color: #5881D0;
}
</style>
