<?php if(count($errors) > 0) : ?>
  <div class="error">
    <?php foreach($errors as $error) : ?>
      <p><?php echo $error ?></p>
    <?php endforeach ?>
    <p>Ovo je neki text</p>
  </div>
<?php endif ?>
