<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>NayWinHtun</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('/css/bluma.min.css') }}">

</head>
<body>
  <nav class="navbar is-transparent">
    <div class="navbar-brand">
      <a class="navbar-item">
        <img src="/images/logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
      </a>
      <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="field is-grouped">
            <p class="control">
              <a class="button is-primary" href="/register">    
                <span>Register</span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div id="app" class="container" style="padding-top:20px;">

    <h2 align="center" class="title is-3">User Login</h2>

    <form method="POST" action="/login" @submit.prevent="onLogin" @keydown="form.errors.clear($event.target.name)">

     <div class="field">
       <label for="email" class="label">Email:</label>
       <input id="email" name="email" class="input" v-model="form.email">
       <span class="help is-danger" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
     </div>

     <div class="field">
       <label for="password" class="label">Password:</label>
       <input type="password" id="password" name="password" class="input" v-model="form.password">
       <span class="help is-danger" v-if="form.errors.has('password')" v-text="form.errors.get('password')"></span>
     </div>

     <div class="field">
       <button class="button is-primary" :disabled="form.errors.any()">Login</button>
     </div>

   </form>

 </div>

 <script src="/js/login.js"></script>
</body>
</html>
