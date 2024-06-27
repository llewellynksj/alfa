<?php

function uriIs($value) {
  return $_SERVER['REQUEST_URI'] === $value ? 'bg-gray-900 text-white' : 'text-gray-300';
}