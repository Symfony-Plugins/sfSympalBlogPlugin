<?php use_stylesheet('/sfSympalBlogPlugin/css/blog.css') ?>

<?php echo get_sympal_breadcrumbs($menuItem, null, null, true) ?>

<div id="sympal_blog">
  <div id="list">
    <h2>Sympal Blog</h2>

    <?php echo get_partial('sympal_blog/blog_list', array('menuItem' => $menuItem, 'pager' => $pager, 'content' => $content)) ?>

    <?php echo link_to('Create New', '@sympal_content_create_type?type='.$menuItem->ContentType->getSlug()) ?>
  </div>
</div>

<?php slot('sympal_right_sidebar') ?>
  <?php echo get_component('sympal_blog', 'sidebar') ?>
<?php end_slot() ?>