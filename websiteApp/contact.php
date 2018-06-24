<?php

  include './includes/header.php';

?>
<main id='<?php echo $current_page?>'>
  <!-- contact section -->
  <div class="contact-section-wrapper">
    <div class="container">
      <div class="modal-send-message">
        <form action="./includes/mail.php" id='form_sendMessage' method='post'>
          <h2>Contact Us</h2>
          <div class="input-fields">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name='name_sendMessage'>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" name='email_sendMessage'>
            </div>
            <div class='form-group'>
              <label for="">Your message</label>
              <textarea name="text_sendMessage" id="" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class='form-group'>
            <input type="submit" class='submit-buttons' value='send' name='send_sendMessage'>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php

  include "./includes/footer.php";

?>