
<?php

use App\Models\Meta;

if (!function_exists('getMetaByKey')) {
  function getMetaByKey($key)
  {
    $metaData = Meta::where('key', $key)->get();
    return  $metaData != null ? $metaData->first() : null;
  }
}

if (!function_exists('createButtonJson')) {
  function createButtonJson($buttonArray)
  {
    return json_encode([
      'title_en' => $buttonArray['title_en'],
      'title_jp' => $buttonArray['title_jp'],
      'link' => $buttonArray['link'],
      'target' => $buttonArray['target']
    ]);
  }
}
// i am normally use this function to get button from metas table json value. 

if (!function_exists('convertJsonToButton')) {
  function convertJsonToButton($buttonJson, $type)
  {
    $buttonArray = $buttonJson;
    if ($buttonArray != null) {
      return sprintf(
        '<%s href="%s" class="button" target="%s">%s</%s>',
         $type == 'a' ? 'a' : 'button',
         $buttonJson->link, 
         $buttonJson->target, 
         $buttonJson->{'title_' . config('app.locale')}, 
         $type == 'a' ? 'a' : 'button');
    }
  }
}



?>