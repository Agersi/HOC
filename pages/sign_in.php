<div class="row part_sign_in roboto">

  <div class="col-4 move_down">
    <?php
    if (isset($_SESSION['SIGN_IN_ERROR'])) {
      foreach($_SESSION['SIGN_IN_ERROR'] as $key => $value) {
        echo '<h2 class="succes roboto">' . $value . '</h2>';
      }
    }
    ?>
  </div>

  <div class="col-4 move_down">

    <h1 class="sec_headline roboto">Sign In</h1>

    <div class="sign_in_form">
      <form action="code/check_sign_in.php" method="post" autocomplete="off">
        <label for="email">E-mail</label><br>
        <input class="input_move" type="email" name="email" autocomplete="off" autofocus><br>
        <label for="password">Password</label><br>
        <input class="input_move" type="password" name="password" autocomplete="off"><br>
        <div class="form_flex">
          <div class="checkbox_flex align-self-center">
            <input class="big_checkbox" type="checkbox" name="remember">
            <label class="label_check" for="remember">Remember me</label><br>
          </div>
          <input class="form_submit align-self-center" type="submit" value="Sign In">
        </div>
      </form>
    </div>
    <div class="sign_in_links">
      <a href="index.php?page=sign_up" class="sign_up_link align-self-center">Sign up</a>
      <a href="index.php?page=forgot_pw" class="forgot_pw_link align-self-center">Forgot password?</a>
    </div>
  </div>

  <div class="col-4 move_down">
  </div>

</div><!--part_sign_in end-->
