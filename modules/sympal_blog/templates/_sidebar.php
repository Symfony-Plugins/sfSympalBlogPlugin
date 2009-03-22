<h2>Latest 5 Posts</h2>

<ul>
  <?php foreach ($latestPosts as $entity): ?>
    <li><?php echo link_to($entity, $entity->getRoute()) ?></li>
  <?php endforeach; ?>
</ul>

<h2>Top 5 Authors</h2>

<ul>
  <?php foreach ($authors as $entity): ?>
    <li><?php echo link_to($entity, $entity->getRoute()) ?> (<?php echo $entity->num_posts ?>)</li>
  <?php endforeach; ?>
</ul>

<h2>History</h2>

<ul>
  <?php foreach ($months as $month): ?>
    <li><?php echo link_to(date('M Y', strtotime($month)), '@sympal_blog_month?m='.date('m', strtotime($month)).'&y='.date('Y', strtotime($month))) ?></li>
  <?php endforeach; ?>
</ul>