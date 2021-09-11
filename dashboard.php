<?php require "inc/header.login.php"; 

?>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form action="login.php" method="POST">
    <h1>Dashboard Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" name="mail" placeholder="Email" autocomplete="nope" >
      </div>
      <div class="input-field">
        <input type="password" name="password" placeholder="Password" autocomplete="new-password" required>
      <br>
    <div class="action">
      <button type="submit" name="send">Login</button>
    </div>
  </form>
</div>

<?php require "inc/footer.login.php"; ?>