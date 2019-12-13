<div class="row part_forgot_pw roboto">

  <div class="col-4 move_down">
  </div>

  <div class="col-4 move_down">

    <h1 class="sec_headline roboto">Forgot password?</h1>

    <?php
    if (isset($_SESSION['FORGOT_PW_ERROR'])) {
      foreach($_SESSION['FORGOT_PW_ERROR'] as $key => $value) {
        echo '<h2 class="succes">' . $value . '</h2>';
      }
    }
    if (isset($_SESSION['FORGOT_PW_ERROR'])) {
      session_unset($_SESSION['FORGOT_PW_ERROR']);
    }
    ?>

    <div class="forgot_pw_form">
      <h2 class="forgot_headline roboto">Provide your e-mail and we request a reset link for you.</h1>
      <form action="code/check_forgot_pw.php" method="post" autocomplete="off">
        <label for="email">E-mail</label><br>
        <input class="input_move" type="email" name="email"><br>
        <div class="form_flex">
          <input class="form_submit align-self-center forgot_move" type="submit" value="Send instructions">
        </div>
      </form>
    </div>

  </div>

  <div class="col-4 move_down">
  </div>

</div><!--part_forgot_pw end-->
