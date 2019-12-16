<div class="row part_admin_top">

  <div class="col-2">
  </div>

  <div class="col move_down">
    <h1 class="part_three_headline roboto">Make changes</h1>
    <h2 class="part_three_subline roboto">To the packages shown on the landingpage</h2>
  </div>

  <div class="col-2">
  </div>

</div><!--part_three_top end-->

<div class="row part_admin roboto">

  <div class="col-2">
    <?php
    if (isset($_SESSION['EDIT_PRODUCT_ERROR'])) {
      foreach($_SESSION['EDIT_PRODUCT_ERROR'] as $key => $value) {
        echo '<h2 class="succes">' . $value . '</h2>';
      }
    }
    ?>
  </div>

  <div class="col part_three_small">
    <div class="offer_box_edit">
      <?php
        $sql_product_one = "SELECT * FROM products WHERE product_id=1";
        $res_product_one = $objCon->query($sql_product_one);
        while($row_product_one = $res_product_one->fetch_object()){
          echo '<form class="form_flex2" action="code/edit_product.php" method="post" autocomplete="off">';
            echo '<input class="product_name_edit" type="text" name="product_name" value="'. $row_product_one->product_name .'">';
            echo '<div class="offer_list_edit">';
              echo '<input class="product_panel_edit" type="text" name="product_panel" value="'. $row_product_one->product_panel .'"><br>';
              echo '<input class="product_push_edit" type="text" name="product_push" value="'. $row_product_one->product_push .'"><br>';
              echo '<input class="product_users_edit" type="text" name="product_users" value="'. $row_product_one->product_users .'"><br>';
              echo '<input class="product_lang_edit" type="text" name="product_lang" value="'. $row_product_one->product_lang .'"><br>';
              echo '<input class="product_content_edit" type="text" name="product_content" value="'. $row_product_one->product_content .'"><br>';
              echo '<input class="product_storage_edit" type="text" name="product_storage" value="'. $row_product_one->product_storage .'"><br>';
              echo '<input class="product_transfer_edit" type="text" name="product_transfer" value="'. $row_product_one->product_transfer .'"><br>';
              echo '<input class="product_email_support_edit" type="text" name="product_email_support" value="'. $row_product_one->product_email_support .'"><br>';
            echo '</div>';
            echo '<div class="offer_button_edit">';
              echo '<input class="product_price_edit" type="text" name="product_price" value="'. $row_product_one->product_price .'"><br>';
              echo '<input class="product_id_edit" type="hidden" name="product_id" value="'. $row_product_one->product_id .'"><br>';
              echo '<input class="edit_form_submit align-self-end" type="submit" value="Edit product one">';
            echo '</div>';
          echo '</form>';
      }
      ?>
    </div>
  </div>

  <div class="col part_three_medium">
    <div class="offer_box_edit">
      <?php
        $sql_product_two = "SELECT * FROM products WHERE product_id=2";
        $res_product_two = $objCon->query($sql_product_two);
        while($row_product_two = $res_product_two->fetch_object()){
          echo '<form class="form_flex2" action="code/edit_product.php" method="post" autocomplete="off">';
            echo '<input class="product_name_edit" type="text" name="product_name" value="'. $row_product_two->product_name .'">';
            echo '<div class="offer_list_edit">';
              echo '<input class="product_panel_edit" type="text" name="product_panel" value="'. $row_product_two->product_panel .'"><br>';
              echo '<input class="product_push_edit" type="text" name="product_push" value="'. $row_product_two->product_push .'"><br>';
              echo '<input class="product_users_edit" type="text" name="product_users" value="'. $row_product_two->product_users .'"><br>';
              echo '<input class="product_lang_edit" type="text" name="product_lang" value="'. $row_product_two->product_lang .'"><br>';
              echo '<input class="product_content_edit" type="text" name="product_content" value="'. $row_product_two->product_content .'"><br>';
              echo '<input class="product_storage_edit" type="text" name="product_storage" value="'. $row_product_two->product_storage .'"><br>';
              echo '<input class="product_transfer_edit" type="text" name="product_transfer" value="'. $row_product_two->product_transfer .'"><br>';
              echo '<input class="product_email_support_edit" type="text" name="product_email_support" value="'. $row_product_two->product_email_support .'"><br>';
              echo '<input class="product_plugins_edit" type="text" name="product_plugins" value="'. $row_product_two->product_plugins .'"><br>';
            echo '</div>';
            echo '<div class="offer_button_edit">';
              echo '<input class="product_price_edit" type="text" name="product_price" value="'. $row_product_two->product_price .'"><br>';
              echo '<input class="product_id_edit" type="hidden" name="product_id" value="'. $row_product_two->product_id .'"><br>';
              echo '<input class="edit_form_submit align-self-end" type="submit" value="Edit product two">';
            echo '</div>';
          echo '</form>';
      }
      ?>
    </div>
  </div>

  <div class="col part_three_large">
    <div class="offer_box_edit">
      <?php
        $sql_product_three = "SELECT * FROM products WHERE product_id=3";
        $res_product_three = $objCon->query($sql_product_three);
        while($row_product_three = $res_product_three->fetch_object()){
          echo '<form class="form_flex2" action="code/edit_product.php" method="post" autocomplete="off">';
            echo '<input class="product_name_edit" type="text" name="product_name" value="'. $row_product_three->product_name .'">';
            echo '<div class="offer_list_edit">';
              echo '<input class="product_panel_edit" type="text" name="product_panel" value="'. $row_product_three->product_panel .'"><br>';
              echo '<input class="product_push_edit" type="text" name="product_push" value="'. $row_product_three->product_push .'"><br>';
              echo '<input class="product_users_edit" type="text" name="product_users" value="'. $row_product_three->product_users .'"><br>';
              echo '<input class="product_lang_edit" type="text" name="product_lang" value="'. $row_product_three->product_lang .'"><br>';
              echo '<input class="product_content_edit" type="text" name="product_content" value="'. $row_product_three->product_content .'"><br>';
              echo '<input class="product_storage_edit" type="text" name="product_storage" value="'. $row_product_three->product_storage .'"><br>';
              echo '<input class="product_transfer_edit" type="text" name="product_transfer" value="'. $row_product_three->product_transfer .'"><br>';
              echo '<input class="product_email_support_edit" type="text" name="product_email_support" value="'. $row_product_three->product_email_support .'"><br>';
              echo '<input class="product_plugins_edit" type="text" name="product_plugins" value="'. $row_product_three->product_plugins .'"><br>';
              echo '<input class="product_phone_support_edit" type="text" name="product_phone_support" value="'. $row_product_three->product_phone_support .'"><br>';
            echo '</div>';
            echo '<div class="offer_button_edit">';
              echo '<input class="product_price_edit" type="text" name="product_price" value="'. $row_product_three->product_price .'"><br>';
              echo '<input class="product_id_edit" type="hidden" name="product_id" value="'. $row_product_three->product_id .'"><br>';
              echo '<input class="edit_form_submit align-self-end" type="submit" value="Edit product three">';
            echo '</div>';
          echo '</form>';
      }
      ?>
    </div>
  </div>

  <div class="col part_three_enterprice">
    <div class="offer_box_edit">
      <?php
        $sql_product_four = "SELECT * FROM products WHERE product_id=4";
        $res_product_four = $objCon->query($sql_product_four);
        while($row_product_four = $res_product_four->fetch_object()){
          echo '<form class="form_flex2" action="code/edit_product.php" method="post" autocomplete="off">';
            echo '<input class="product_name_edit" type="text" name="product_name" value="'. $row_product_four->product_name .'">';
            echo '<div class="offer_list_edit">';
              echo '<input class="product_panel_edit" type="text" name="product_panel" value="'. $row_product_four->product_panel .'"><br>';
              echo '<input class="product_push_edit" type="text" name="product_push" value="'. $row_product_four->product_push .'"><br>';
              echo '<input class="product_users_edit" type="text" name="product_users" value="'. $row_product_four->product_users .'"><br>';
              echo '<input class="product_lang_edit" type="text" name="product_lang" value="'. $row_product_four->product_lang .'"><br>';
              echo '<input class="product_content_edit" type="text" name="product_content" value="'. $row_product_four->product_content .'"><br>';
              echo '<input class="product_storage_edit" type="text" name="product_storage" value="'. $row_product_four->product_storage .'"><br>';
              echo '<input class="product_transfer_edit" type="text" name="product_transfer" value="'. $row_product_four->product_transfer .'"><br>';
              echo '<input class="product_email_support_edit" type="text" name="product_email_support" value="'. $row_product_four->product_email_support .'"><br>';
              echo '<input class="product_plugins_edit" type="text" name="product_plugins" value="'. $row_product_four->product_plugins .'"><br>';
              echo '<input class="product_phone_support_edit" type="text" name="product_phone_support" value="'. $row_product_four->product_phone_support .'"><br>';
            echo '</div>';
            echo '<div class="offer_button_edit">';
              echo '<input class="product_price_edit" type="text" name="product_price" value="'. $row_product_four->product_price .'"><br>';
              echo '<input class="product_id_edit" type="hidden" name="product_id" value="'. $row_product_four->product_id .'"><br>';
              echo '<input class="edit_form_submit align-self-end" type="submit" value="Edit product four">';
            echo '</div>';
          echo '</form>';
      }
      ?>
    </div>
  </div>

  <div class="col-2">
  </div>

</div><!--part_three end-->
