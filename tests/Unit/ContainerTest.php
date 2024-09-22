<?php

use Core\Container;

test('it can resolve something out of the container', function () {
  // Arrange
  $container = new Container();


  $container->bind('foo', fn() => 'bar');

  // Act
  $result = $container->resolve('foo');

  // Assert / expect
  expect($result)->toEqual('bar');

});
