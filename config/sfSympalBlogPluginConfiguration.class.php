<?php
class sfSympalBlogPluginConfiguration extends sfPluginConfiguration
{
  public static
    $dependencies = array(
      'sfSympalPlugin',
      'sfSympalSecurityPlugin',
      'sfSympalUserProfilePlugin',
    );

  public function install($installVars, $invoker)
  {
    $installVars['entity']['BlogPost']['title'] = 'Sample Sympal Blog Post';
    $installVars['entity']['BlogPost']['teaser'] = 'This is the teaser line for the sample blog post';
    $installVars['entity']->save();
    $installVars['entityType']->save();

    $menuItem = new MenuItem();
    $menuItem->name = 'Blog';
    $menuItem->is_published = true;
    $menuItem->label = 'Blog';
    $menuItem->EntityType = $installVars['entityType'];
    $menuItem->has_many_entities = true;

    $invoker->addToMenu($menuItem);

    $entityTemplate = new EntityTemplate();
    $entityTemplate->name = 'View BlogPost';
    $entityTemplate->type = 'View';
    $entityTemplate->EntityType = $installVars['entityType'];
    $entityTemplate->partial_path = 'sympal_blog/view';
    $entityTemplate->save();

    $entityTemplate = new EntityTemplate();
    $entityTemplate->name = 'List BlogPost';
    $entityTemplate->type = 'List';
    $entityTemplate->EntityType = $installVars['entityType'];
    $entityTemplate->partial_path = 'sympal_blog/list';
    $entityTemplate->save();
  }
}