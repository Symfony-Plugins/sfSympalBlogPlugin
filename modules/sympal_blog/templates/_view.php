<?php use_stylesheet('/sfSympalBlogPlugin/css/blog.css') ?>

<?php echo get_sympal_breadcrumbs($menuItem, $content) ?>

<div id="sympal_blog">
  <div id="view">
    <h2><?php echo $content->getHeaderTitle() ?></h2>

    <?php echo image_tag($content->CreatedBy->Profile->getGravatarUrl(), 'align=right') ?>

    <p>
      <strong>
        Posted by <?php echo link_to($content->CreatedBy->username, $content->CreatedBy->Profile->Content->getRoute()) ?> on 
        <?php echo date('m/d/Y h:i:s', strtotime($content->created_at)) ?>
      </strong>
    </p>

    <?php echo get_sympal_content_slot($content, 'body', 'Markdown') ?>
  </div>

  <?php echo get_sympal_comments($content) ?>
</div>

<?php slot('sympal_right_sidebar') ?>
  <?php echo get_component('sympal_blog', 'sidebar') ?>
<?php end_slot() ?>