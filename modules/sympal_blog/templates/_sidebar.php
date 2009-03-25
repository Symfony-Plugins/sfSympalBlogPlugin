<h2>Latest 5 Posts</h2>

<ul>
  <?php foreach ($latestPosts as $content): ?>
    <li><?php echo link_to($content, $content->getRoute()) ?></li>
  <?php endforeach; ?>
</ul>

<h2>Top 5 Authors</h2>

<ul>
  <?php foreach ($authors as $content): ?>
    <li><?php echo link_to($content, $content->getRoute()) ?> (<?php echo $content->num_posts ?>)</li>
  <?php endforeach; ?>
</ul>

<h2>History</h2>

<ul>
  <?php foreach ($months as $month): ?>
    <li><?php echo link_to(date('M Y', strtotime($month)), '@sympal_blog_month?m='.date('m', strtotime($month)).'&y='.date('Y', strtotime($month))) ?></li>
  <?php endforeach; ?>
</ul>