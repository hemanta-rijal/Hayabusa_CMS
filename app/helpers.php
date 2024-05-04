
<?php

use App\Models\Meta;

if (!function_exists('getMetaByKey')) {
  function getMetaByKey($key)
  {
    $metaData = Meta::where('key', $key)->get();
    return  $metaData != null ? $metaData->first() : null;
  }
}

?>