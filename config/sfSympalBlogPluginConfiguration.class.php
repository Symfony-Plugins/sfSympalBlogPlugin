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
    $installVars['content']['BlogPost']['title'] = 'Sample Sympal Blog Post';
    $installVars['content']['BlogPost']['teaser'] = 'This is the teaser line for the sample blog post';
    $installVars['content']->save();
    $installVars['contentType']->save();

    $menuItem = new MenuItem();
    $menuItem->name = 'Blog';
    $menuItem->is_published = true;
    $menuItem->label = 'Blog';
    $menuItem->ContentType = $installVars['contentType'];
    $menuItem->has_many_content = true;

    $invoker->addToMenu($menuItem);

    $contentTemplate = new ContentTemplate();
    $contentTemplate->name = 'View BlogPost';
    $contentTemplate->type = 'View';
    $contentTemplate->ContentType = $installVars['contentType'];
    $contentTemplate->partial_path = 'sympal_blog/view';
    $contentTemplate->save();

    $contentTemplate = new ContentTemplate();
    $contentTemplate->name = 'List BlogPost';
    $contentTemplate->type = 'List';
    $contentTemplate->ContentType = $installVars['contentType'];
    $contentTemplate->partial_path = 'sympal_blog/list';
    $contentTemplate->save();
  }
}