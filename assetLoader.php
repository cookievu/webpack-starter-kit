<?php
function _loadAssetsJson() {
  $assetContent = file_get_contents('assets.json');
  return $assetContent ? json_decode($assetContent, true) : null;
}

function _getAssetsVendor($name) {
  $assets = _loadAssetsJson();
  return $assets['vendor'][$name];
}

function _getAssetsApp($name) {
  $assets = _loadAssetsJson();
  return $assets['app'][$name];
}