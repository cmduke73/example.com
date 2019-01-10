<?php

/**
 * Strips HTML tag that have not been whitelisted
 * @var string $html unfiltered HTML
 *  @return string Sanitized HTML
 */
function cleanHTML($html){

  $allowed = '<div><span><pre><p><br><hr><hgroup><h1><h2><h3><h4><h5><h6>
<ul><ol><li><dl><dt><dd><strong><em><b><i><u>
<img><a><abbr><address><blockquote><area><audio><video>
<form><fieldset><label><input><textarea>
<caption><table><tbody><td><tfoot><th><thead><tr>
<iframe>';

return strip_tags($html, $allowed);
}

function slug($string){

  return preg_replace(
  "/[^a-z0-9-]+/",
  "-",
  strtolower($string)
);

}
