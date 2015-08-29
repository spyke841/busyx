
<script src="/assets/js/vendor/jquery-1.11.3.min.js"></script>
<script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="assets/js/ZeroClipboard.min.js"></script>
<?php if (isset($script_js) && is_array($script_js)): ?>
  <?php foreach ($script_js as $key => $value): ?>
    <script src="/assets/js/<?= $value ?>"></script>
  <?php endforeach; ?>
<?php endif; ?>
<script src="/assets/js/function.js"></script>

<?php if (isset($script) && is_array($script)): ?>
  <?php foreach ($script as $k => $v): ?>
    <script type="text/javascript">
      <?= $v ?>
    </script>
  <?php endforeach; ?>
<?php endif; ?>
