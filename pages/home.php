<div class="row part_two">
  <div class="col-2">
  </div>
  <div class="col-4 move_down">
    <h1 class="headline oswald">This is just a Headline</h1>
    <h3 class="subline roboto">
      A good logo works in the simplest form, it is a memorable
      representation of your brand and inspires confidence in your
      customers. It should be fresh and original - without visual clitches or
      amatour effects. A logo is well-designed when it looks as good on a
      business card as it does on a web page or a billboard.
   </h3>
  </div>

  <div class="col-6 move_down">
  </div>

</div><!--part_two end-->

<div class="row part_three_top">

  <div class="col-2">
  </div>

  <div class="col">
    <h1 class="part_three_headline roboto">We offer</h1>
    <h2 class="part_three_subline roboto">The following packages</h2>
  </div>

  <div class="col-2">
  </div>

</div><!--part_three_top end-->

<div class="row part_three roboto">

  <div class="col-2">
  </div>

  <div class="col part_three_small">
    <div class="offer_box">
      <?php
        $sql_product_one = "SELECT * FROM products WHERE product_id=1";
        $res_product_one = $objCon->query($sql_product_one);
        while($row_product_one = $res_product_one->fetch_object()){
          echo '<h1>'. $row_product_one->product_name . '</h1>';
          echo '<div class="offer_list">';
            echo '<ol>';
              echo '<li>'. $row_product_one->product_panel . '</li>';
              echo '<li>'. $row_product_one->product_push . '</li>';
              echo '<li>'. $row_product_one->product_users . '</li>';
              echo '<li>'. $row_product_one->product_lang . '</li>';
              echo '<li>'. $row_product_one->product_content . '</li>';
              echo '<li>'. $row_product_one->product_storage . '</li>';
              echo '<li>'. $row_product_one->product_transfer . '</li>';
              echo '<li>'. $row_product_one->product_email_support . '</li>';
            echo '</ol>';
          echo '</div>';
          echo '<div class="offer_button">';
            echo '<h3 class="offer_price">' . $row_product_one->product_price . 'DKK<span class="offer_month">/måned</span></h3>';
            echo '<h4 class="offer_moms">Ekskl. moms</h4>';
          echo '</div>';
      }
      ?>
    </div>
  </div>

  <div class="col part_three_medium">
    <div class="offer_box">
      <?php
        $sql_product_two = "SELECT * FROM products WHERE product_id=2";
        $res_product_two = $objCon->query($sql_product_two);
        while($row_product_two = $res_product_two->fetch_object()){
          echo '<h1>'. $row_product_two->product_name . '</h1>';
          echo '<div class="offer_list">';
            echo '<ol>';
              echo '<li>'. $row_product_two->product_panel . '</li>';
              echo '<li>'. $row_product_two->product_push . '</li>';
              echo '<li>'. $row_product_two->product_users . '</li>';
              echo '<li>'. $row_product_two->product_lang . '</li>';
              echo '<li>'. $row_product_two->product_content . '</li>';
              echo '<li>'. $row_product_two->product_storage . '</li>';
              echo '<li>'. $row_product_two->product_transfer . '</li>';
              echo '<li>'. $row_product_two->product_email_support . '</li>';
              echo '<li>'. $row_product_two->product_plugins . '</li>';
            echo '</ol>';
          echo '</div>';
          echo '<div class="offer_button">';
            echo '<h3 class="offer_price">' . $row_product_two->product_price . 'DKK<span class="offer_month">/måned</span></h3>';
            echo '<h4 class="offer_moms">Ekskl. moms</h4>';
          echo '</div>';
      }
      ?>
    </div>
  </div>

  <div class="col part_three_large">
    <div class="offer_box">
      <?php
        $sql_product_three = "SELECT * FROM products WHERE product_id=3";
        $res_product_three = $objCon->query($sql_product_three);
        while($row_product_three = $res_product_three->fetch_object()){
          echo '<h1>'. $row_product_three->product_name . '</h1>';
          echo '<div class="offer_list">';
            echo '<ol>';
              echo '<li>'. $row_product_three->product_panel . '</li>';
              echo '<li>'. $row_product_three->product_push . '</li>';
              echo '<li>'. $row_product_three->product_users . '</li>';
              echo '<li>'. $row_product_three->product_lang . '</li>';
              echo '<li>'. $row_product_three->product_content . '</li>';
              echo '<li>'. $row_product_three->product_storage . '</li>';
              echo '<li>'. $row_product_three->product_transfer . '</li>';
              echo '<li>'. $row_product_three->product_email_support . '</li>';
              echo '<li>'. $row_product_three->product_plugins . '</li>';
              echo '<li>'. $row_product_three->product_phone_support . '</li>';
            echo '</ol>';
          echo '</div>';
          echo '<div class="offer_button">';
            echo '<h3 class="offer_price">' . $row_product_three->product_price . 'DKK<span class="offer_month">/måned</span></h3>';
            echo '<h4 class="offer_moms">Ekskl. moms</h4>';
          echo '</div>';
      }
      ?>
    </div>
  </div>

  <div class="col part_three_enterprice">
    <div class="offer_box">
      <?php
        $sql_product_four = "SELECT * FROM products WHERE product_id=4";
        $res_product_four = $objCon->query($sql_product_four);
        while($row_product_four = $res_product_four->fetch_object()){
          echo '<h1>'. $row_product_four->product_name . '</h1>';
          echo '<div class="offer_list">';
            echo '<ol>';
              echo '<li>'. $row_product_four->product_panel . '</li>';
              echo '<li>'. $row_product_four->product_push . '</li>';
              echo '<li>'. $row_product_four->product_users . '</li>';
              echo '<li>'. $row_product_four->product_lang . '</li>';
              echo '<li>'. $row_product_four->product_content . '</li>';
              echo '<li>'. $row_product_four->product_storage . '</li>';
              echo '<li>'. $row_product_four->product_transfer . '</li>';
              echo '<li>'. $row_product_four->product_email_support . '</li>';
              echo '<li>'. $row_product_four->product_plugins . '</li>';
              echo '<li>'. $row_product_four->product_phone_support . '</li>';
            echo '</ol>';
          echo '</div>';
          echo '<div class="offer_button">';
            echo '<h3 class="offer_price">' . $row_product_four->product_price . 'DKK<span class="offer_month">/måned</span></h3>';
            echo '<h4 class="offer_moms">Ekskl. moms</h4>';
          echo '</div>';
      }
      ?>
    </div>
  </div>

  <div class="col-2">
  </div>

</div><!--part_three end-->

<div class="row part_four roboto">

  <div class="col-3">
  </div>

  <div class="col-6">
    <p>
      Advertising is telling the world how great you are, while publicity is having others
      tell the world how great you are. Companies and organizations that understand
      the importance of publicity are generally more successful than those who use
      adverticing alone to reach their target audiences.
    </p>
    <button class="contact_button"><i class="fas fa-headset"></i> Contact</button>
  </div>

  <div class="col-3">
  </div>

</div><!--part_four end-->

<div class="row align-self-start part_five">

  <div class="col-2">
  </div>

  <div class="col move_down_five">
    <h4>CVR: 36030410</h4>
    <h4>info@houseofcode.io</h4>
    <h4>+45 72 17 02 20</h4>
  </div>

  <div class="col-2">
  </div>

</div><!--part_five end-->
