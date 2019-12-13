<div class="row part_sign_up roboto">

  <div class="col-4 move_down">
  </div>

  <div class="col-4 move_down">

    <h1 class="sec_headline roboto">Sign Up</h1>

    <?php
    if (isset($_SESSION['SIGN_UP_ERROR'])) {
      foreach($_SESSION['SIGN_UP_ERROR'] as $key => $value) {
        echo '<h2 class="succes">' . $value . '</h2>';
      }
    }
    if (isset($_SESSION['SIGN_UP_ERROR'])) {
      session_unset($_SESSION['SIGN_UP_ERROR']);
    }
    ?>
    <div class="sign_up_form">
      <form action="code/check_sign_up.php" method="post" autocomplete="off">
        <label for="name">Name</label><br>
        <input class="input_move" type="text" name="name"><br>
        <label for="email">E-mail</label><br>
        <input class="input_move" type="email" name="email"><br>
        <label for="password">Password</label><br>
        <input class="input_move" type="password" name="password"><br>
        <label for="re-password">Repeat password</label><br>
        <input class="input_move" type="password" name="re-password"><br>
        <div class="form_flex">
          <input class="form_submit align-self-center" type="submit" value="Sign Up">
        </div>
      </form>
    </div>

  </div>

  <div class="col-4 move_down">
  </div>

</div><!--part_sign_up end-->
