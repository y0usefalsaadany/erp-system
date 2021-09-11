<?php require "inc/header.php"; ?>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form action="register.php" method="POST">
    <h1>Add Admin</h1>
    <div class="content">
     <div class="input-field">
        <input type="text" name="name" placeholder="Name" autocomplete="nope" required>
      </div>
      <div class="input-field">
        <input type="email" name="mail" placeholder="Email" autocomplete="nope" >
      </div>
      <div class="input-field">
        <input type="password" name="password" placeholder="Password" autocomplete="new-password" required>
      <br>
    <div class="action">
      <button type="submit" name="send">Send</button>
    </div>
  </form>
</div>

<?php require "inc/footer.php"; ?>