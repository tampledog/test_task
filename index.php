<?php


require_once __DIR__.'/init.php';

$cards = [
  [
    "symbol"  => "M",
    "text"    => "Merriweather project is led by Sorkin Type",
    "color"   => "green",
  ],
  [
    "symbol"  => "R",
    "text"    => "Roboto doesn't",
    "color"   => "pink",
  ],
  [
    "symbol"  => "NS",
    "text"    => "Merriweather project is led by Sorkin Type",
    "color"   => "blue",
  ],
];

$buttons = [
  [
    "text"  => "My fonts",
  ],
  [
    "text"  => "Buy fonts",
  ]
];

$tabs = [
  [
    "content" => $cards,
    "type"    => "cards"
  ],
  [
    "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
    "type"    => ""
  ]
];

echo $twig->render('index.html', ['tabs' => $tabs, 'buttons' => $buttons] );
