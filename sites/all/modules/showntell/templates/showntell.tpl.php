<div class="snt-container">
  <div clas="snt-header">
    <h1>Hello showntell!</h1>
  </div>
  <div class="snt-body">
    <div class="snt-show">
      <div class="snt-show-header">
        <h2>Show</h2>
      </div>
      <div class="snt-show-body">
        <ul>
          <?php foreach ($params['show'] as $v): ?>
            <li class="snt-tell-item">
              <div class="snt-tell-item-wrapper"><?php echo $v; ?></div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="snt-right">
      <div class="snt-tell-header">
        <h2>Tell</h2>
      </div>
      <div class="snt-tell-body">
        <?php foreach ($params['tell'] as $v): ?>
          <div class="snt-tell-item">
            <div class="snt-tell-item-wrapper"><?php echo $v; ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    
  </div>
</div>

