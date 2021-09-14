<?php

require_once __DIR__ . '/models/theme.php';

Kirby::plugin('ckkr/basics', [

  'pageMethods' => [
    'bodyClass' => function (): string {

      $slugParent = "";
      if ($this->parent()) {
          $slugParent = ' slug-parent-'. $this->parent()->slug();
      }


      $class = 'page-'.$this->intendedTemplate()->name().
        ' template-'.$this->template()->name().
        ' slug-'.$this->slug().
        $slugParent.
        ' status-'.$this->status();

      $class = str_replace('page_','',$class);
      $class = str_replace('pool_','',$class);

      return $class;
    },
  ],

]);