<?php $pagerHtml = get_sympal_pager_navigation($pager, url_for($menuItem->getItemRoute())) ?>

<?php echo get_sympal_pager_header($pager, $entities) ?>

<?php echo $pagerHtml ?>

<?php foreach ($entities as $entity): ?>
  <div class="row">
    <h3><?php echo link_to($entity, $entity->getRoute()) ?></h3>
    <?php echo image_tag($entity->CreatedBy->Profile->getGravatarUrl(), 'align=right') ?>
    <p class="date">
      <strong>
        Posted by <?php echo link_to($entity->CreatedBy->username, $entity->CreatedBy->Profile->Entity->getRoute()) ?> on 
        <?php echo date('m/d/Y h:i:s', strtotime($entity->created_at)) ?>
      </strong>
    </p>
    <p class="teaser"><?php echo $entity->getRecord()->getTeaser() ?> <strong><small>[<?php echo link_to('read more', $entity->getRoute()) ?>]</small></p>
  </div>
<?php endforeach; ?>

<?php echo $pagerHtml ?>