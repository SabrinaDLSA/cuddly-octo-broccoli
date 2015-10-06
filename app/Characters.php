<?php

namespace series;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model  implements SluggableInterface
{
  use SluggableTrait;

  protected $sluggable = [
      'build_from' => 'name',
      'save_to'    => 'slug',
  ];
}
