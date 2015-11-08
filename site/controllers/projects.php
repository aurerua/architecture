<?php

return function($site, $pages, $page) {

  // get all projects and add pagination
  $projects = $page->children()->visible()->flip()->paginate(6);

  // add a tag filter
  if($tag = param('tag')) {
    $projects = $projects->filterBy('tags', '=', urldecode($tag), ',');
  }

  // create a shortcut for pagination
  $pagination = $projects->pagination();

  // pass $articles and $pagination to the template
  return compact('projects', 'pagination');

};