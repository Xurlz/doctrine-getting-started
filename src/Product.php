<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'Products')]
class Product {

  #[ORM\Id]
  #[ORM\Column(type: 'integer', unique: true)]
  #[ORM\GeneratedValue]
  private ?integer $id = null;

  #[ORM\Column(type: 'string')]
  private string $name;
}
