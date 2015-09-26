<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-request-http.inc";
$setup = array (
  'home' => 
  array (
    0 => 'index.php',
    1 => 'PHP Manual',
  ),
  'head' => 
  array (
    0 => 'UTF-8',
    1 => 'en',
  ),
  'this' => 
  array (
    0 => 'yaf-request-http.getcookie.php',
    1 => 'Yaf_Request_Http::getCookie',
  ),
  'up' => 
  array (
    0 => 'class.yaf-request-http.php',
    1 => 'Yaf_Request_Http',
  ),
  'prev' => 
  array (
    0 => 'yaf-request-http.get.php',
    1 => 'Yaf_Request_Http::get',
  ),
  'next' => 
  array (
    0 => 'yaf-request-http.getfiles.php',
    1 => 'Yaf_Request_Http::getFiles',
  ),
  'alternatives' => 
  array (
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="yaf-request-http.getcookie" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Request_Http::getCookie</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Request_Http::getCookie</span> &mdash; <span class="dc-title">Retrieve Cookie varialbe</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-request-http.getcookie-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>Yaf_Request_Http::getCookie</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$default</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   Retrieve Cookie variable
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-request-http.getcookie-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">name</code></dt>

    <dd>

     <p class="para">
       the cookie name   
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">default</code></dt>

    <dd>

     <p class="para">
      if this parameter is provide, this will be returned if the cookie can
      not be found
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-request-http.getcookie-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-request-http.getcookie-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><strong class="classname">Yaf_Request_Http::get</strong></li>
   <li class="member"><strong class="classname">Yaf_Request_Http::getQuery</strong></li>
   <li class="member"><strong class="classname">Yaf_Request_Http::getPost</strong></li>
   <li class="member"><strong class="classname">Yaf_Request_Http::getServer</strong></li>
   <li class="member"><strong class="classname">Yaf_Request_Http::getParam</strong></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>