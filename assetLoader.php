<?php
function _loadAssetsJson() {
  $assetContent = file_get_contents('assets.json');
  return $assetContent ? json_decode($assetContent, true) : null;
}

function getAssetsVendor($name) {
  $assets = _loadAssetsJson();
  return $assets ? $assets['vendor'][$name] : null;
}

function getAssetsApp($name) {
  $assets = _loadAssetsJson();
  return $assets ? $assets['app'][$name] : null;
}