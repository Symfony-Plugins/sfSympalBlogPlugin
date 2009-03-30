<?php

function link_to_blog_post_author($content, $slot)
{
  if (sfSympalToolkit::isEditMode())
  {
    return $content->CreatedBy->username;
  } else {
    return link_to($content->CreatedBy->username, $content->CreatedBy->Profile->Content->getRoute());
  }
}