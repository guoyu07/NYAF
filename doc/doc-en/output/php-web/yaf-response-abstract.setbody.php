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
    0 => 'yaf-response-abstract.setbody.php',
    1 => 'Yaf_Response_Abstract::setBody',
  ),
  'up' => 
  array (
    0 => 'class.yaf-response-abstract.php',
    1 => 'Yaf_Response_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-response-abstract.setallheaders.php',
    1 => 'Yaf_Response_Abstract::setAllHeaders',
  ),
  'next' => 
  array (
    0 => 'yaf-response-abstract.setheader.php',
    1 => 'Yaf_Response_Abstract::setHeader',
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
<div id="yaf-response-abstract.setbody" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Response_Abstract::setBody</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Response_Abstract::setBody</span> &mdash; <span class="dc-title">Set content to response</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-response-abstract.setbody-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_Response_Abstract::setBody</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$content</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   Set content to response
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-response-abstract.setbody-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">body</code></dt>

    <dd>

     <p class="para">
      content string
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">key</code></dt>

    <dd>

     <p class="para">
      the content key, you can set a content with a key, if you don&#039;t
      specific, then Yaf_Response_Abstract::DEFAULT_BODY will be used
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
       this parameter is introduced as of 2.2.0
      </p>
      </p></blockquote>
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-response-abstract.setbody-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-response-abstract.setbody-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-58">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Response_Abstract::setBody()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$response&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Response_Http</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setBody</span><span style="color: #007700">(</span><span style="color: #DD0000">"Hello"</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setBody</span><span style="color: #007700">(</span><span style="color: #DD0000">"&nbsp;World"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"footer"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
Yaf_Response_Http Object
(
    [_header:protected] =&gt; Array
        (
        )

    [_body:protected] =&gt; Array
        (
            [content] =&gt; Hello
            [footer] =&gt;  World
        )

    [_sendheader:protected] =&gt; 1
    [_response_code:protected] =&gt; 200
)
Hello World
</pre></div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-response-abstract.setbody-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-response-abstract.getbody.php" class="methodname" rel="rdfs-seeAlso">Yaf_Response_Abstract::getBody()</a> - Retrieve a exists content</span></li>
   <li class="member"><span class="methodname"><a href="yaf-response-abstract.appendbody.php" class="methodname" rel="rdfs-seeAlso">Yaf_Response_Abstract::appendBody()</a> - append to body</span></li>
   <li class="member"><span class="methodname"><a href="yaf-response-abstract.prependbody.php" class="methodname" rel="rdfs-seeAlso">Yaf_Response_Abstract::prependBody()</a> - The prependBody purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-response-abstract.clearbody.php" class="methodname" rel="rdfs-seeAlso">Yaf_Response_Abstract::clearBody()</a> - The clearBody purpose</span></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>