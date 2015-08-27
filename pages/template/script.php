
<script src="/assets/js/vendor/jquery-1.11.3.min.js"></script>
<script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<?php if (isset($script_js) && is_array($script_js)): ?>
  <?php foreach ($script_js as $key => $value): ?>
    <script src="/assets/js/<?= $value ?>"></script>
  <?php endforeach; ?>
<?php endif; ?>
<script src="/assets/js/function.js"></script>

<script>hljs.initHighlightingOnLoad();</script>
