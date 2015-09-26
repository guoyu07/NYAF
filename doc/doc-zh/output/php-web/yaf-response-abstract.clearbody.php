<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-response-abstract.inc";
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
    0 => 'yaf-response-abstract.clearbody.php',
    1 => 'Yaf_Response_Abstract::clearBody',
  ),
  'up' => 
  array (
    0 => 'class.yaf-response-abstract.php',
    1 => 'Yaf_Response_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-response-abstract.appendbody.php',
    1 => 'Yaf_Response_Abstract::appendBody',
  ),
  'next' => 
  array (
    0 => 'yaf-response-abstract.clearheaders.php',
    1 => 'Yaf_Response_Abstract::clearHeaders',
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
<div id="yaf-response-abstract.clearbody" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Response_Abstract::clearBody</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Response_Abstract::clearBody</span> &mdash; <span class="dc-title">The clearBody purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-response-abstract.clearbody-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_Response_Abstract::clearBody</strong></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   Clear existsed content
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-response-abstract.clearbody-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">key</code></dt>

    <dd>

     <p class="para">
      the content key, if you don&#039;t specific, then all contents will be
      cleared.
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
       this parameter is introduced as of 2.2.0
      </p>
      </p></blockquote>
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-response-abstract.clearbody-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-response-abstract.clearbody-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-response-abstract.setbody.php" class="methodname" rel="rdfs-seeAlso">Yaf_Response_Abstract::setBody()</a> - Set content to response</span></li>
   <li class="member"><span class="methodname"><a href="yaf-response-abstract.appendbody.php" class="methodname" rel="rdfs-seeAlso">Yaf_Response_Abstract::appendBody()</a> - append to body</span></li>
   <li class="member"><span class="methodname"><a href="yaf-response-abstract.prependbody.php" class="methodname" rel="rdfs-seeAlso">Yaf_Response_Abstract::prependBody()</a> - The prependBody purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-response-abstract.getbody.php" class="methodname" rel="rdfs-seeAlso">Yaf_Response_Abstract::getBody()</a> - Retrieve a exists content</span></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>