<div id="header">
<h1>asd</h1>
</div>

<div id="wrapper">

    <div id="dads" class="dads">
        <?php print render($page['dads']); ?>
    </div>

    <div id="deals" class="custom-class">
      <?php print render($page['Jereson']); ?>
    </div>

  <?php if ($page['sidebar_first']): ?>
    <div id="sidebar">
      <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>
</div>

<div id="footer">
  <?php if ($page['footer']): ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>
