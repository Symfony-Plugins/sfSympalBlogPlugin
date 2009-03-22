<?php use_stylesheet('/sfSympalBlogPlugin/css/blog.css') ?>

<?php echo get_sympal_breadcrumbs($menuItem, $entity) ?>

<div id="sympal_blog">
  <div id="view">
    <h2><?php echo $entity->getHeaderTitle() ?></h2>

    <?php echo image_tag($entity->CreatedBy->Profile->getGravatarUrl(), 'align=right') ?>

    <p>
      <strong>
        Posted by <?php echo link_to($entity->CreatedBy->username, $entity->CreatedBy->Profile->Entity->getRoute()) ?> on 
        <?php echo date('m/d/Y h:i:s', strtotime($entity->created_at)) ?>
      </strong>
    </p>

    <?php echo sympal_entity_slot($entity, 'body', 'Markdown') ?>
  </div>

  <?php echo get_sympal_comments($entity) ?>
</div>

<?php slot('sympal_right_sidebar') ?>
  <?php echo get_component('sympal_blog', 'sidebar') ?>
<?php end_slot() ?>