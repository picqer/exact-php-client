// ==UserScript==
// @name        PHP SDK Entity generator
// @namespace   php
// @description Generates php class that can be used in SDK
// @include     https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?*
// @version     1
// @grant       none
// ==/UserScript==

(function() {
  /** Initialize variables **/
  var primarykey = 'ID';
  var data = {};
  // Fetch entity URL and strip '/api/v1/{division}/'
  var url = $('#serviceUri').text().replace(/^\/api\/v[0-9]\/[^/]+\//, '');
  var classname = url.replace(/.+\/(.+?)s?$/,'$1'); // Last part after slash should be the (plural) classname.
  
  /** Fetch attribute information **/
  $('#referencetable tr input').each(function() {
    data[$(this).attr('name')] = {
      'type' : $(this).attr('data-type').replace('Edm.', ''),
      'description' : $(this).parent().siblings('td:last-child').text().trim()
    };
    
    // Set primarykey when found. Should be first itteration.
    if ($(this).attr('data-key') == "True") {
      primarykey = $(this).attr('name');
    }
  });

  /** Build php code **/
  phptxt = "<?php namespace Picqer\\Financials\\Exact;\n\n/**";
  
  // Build docblock
  phptxt += "\n * Class " + classname;
  phptxt += "\n *\n * @package Picqer\\Financials\\Exact";
  phptxt += "\n * @see " + window.location.href;
  phptxt += "\n *";
  $.each(data,function(attribute, info){
    phptxt += "\n * @property " + info.type + " $" + attribute + " " + info.description;
  });
  phptxt += "\n */";
  
  // Build class
  phptxt += "\nclass " + classname + " extends Model\n{\n\n    use Query\\Findable;\n    use Persistance\\Storable;";
  if (primarykey != 'ID') {
    phptxt += "\n\n    protected $primaryKey = " + primarykey + ";";
  }
  phptxt += "\n\n    protected $fillable = [";
  $.each(Object.keys(data), function(){
    phptxt += "\n        '" + this + "',";
  });
  phptxt += "\n    ];";
  phptxt += "\n\n    protected $url = '" + url + "';";
  phptxt += "\n\n}";
  
  // Present the php code as a download
  $("<a />", {
    // if supported , set name of file
    download: classname + ".php",
    // set `href` to `objectURL` of `Blob` of `textarea` value
    href: URL.createObjectURL(
      new Blob([phptxt], {
        type: "text/plain"
      })
    )
  }).appendTo("body")[0].click();
  
  // remove appended `a` element after "Save File" dialog,
  // `window` regains `focus` 
  $(window).one("focus", function() {
    $("a").last().remove()
  })

})();
