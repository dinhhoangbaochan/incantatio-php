<?php

namespace Nexus;

class Dokodemo
{
  public static function carve( $path, $action ) : void
  {
    echo "The path to {$path} is carved by Dokodemo, waiting to {$action}";
  }
}