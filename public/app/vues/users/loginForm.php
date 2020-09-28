<?php
/*
  ./app/vues/users/loginForm.php
 */
 ?>

 <div class="">
   <h2>Connexion au backoffice</h2>
   <form action="users/login/submit" method="post">
  <div class="form-group">
    <label for="login">Login</label>
    <input type="login" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 </div>
