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
    0 => 'yaf-response-abstract.getbody.php',
    1 => 'Yaf_Response_Abstract::getBody',
  ),
  'up' => 
  array (
    0 => 'class.yaf-response-abstract.php',
    1 => 'Yaf_Response_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-response-abstract.destruct.php',
    1 => 'Yaf_Response_Abstract::__destruct',
  ),
  'next' => 
  array (
    0 => 'yaf-response-abstract.getheader.php',
    1 => 'Yaf_Response_Abstract::getHeader',
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
<div id="yaf-response-abstract.getbody" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Response_Abstract::getBody</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Response_Abstract::getBody</span> &mdash; <span class="dc-title">Retrieve a exists content</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-response-abstract.getbody-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>Yaf_Response_Abstract::getBody</strong></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   Retrieve a exists content
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-response-abstract.getbody-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">key</code></dt>

    <dd>

     <p class="para">
      the content key, if you don&#039;t specific, then Yaf_Response_Abstract::DEFAULT_BODY
      will be used. if you pass in a <strong><code>NULL</code></strong>, then all contents will be returned
      as a array
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
       this parameter is introduced as of 2.2.0
      </p>
      </p></blockquote>
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-response-abstract.getbody-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-response-abstract.getbody-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-55">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Response_Abstract::getBody()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$response&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Response_Http</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setBody</span><span style="color: #007700">(</span><span style="color: #DD0000">"Hello"</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setBody</span><span style="color: #007700">(</span><span style="color: #DD0000">"&nbsp;World"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"footer"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBody</span><span style="color: #007700">());&nbsp;</span><span style="color: #FF8000">//default&nbsp;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBody</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Response_Abstract</span><span style="color: #007700">::</span><span style="color: #0000BB">DEFAULT_BODY</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//same&nbsp;as&nbsp;above<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBody</span><span style="color: #007700">(</span><span style="color: #DD0000">"footer"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBody</span><span style="color: #007700">(</span><span style="color: #0000BB">NULL</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//get&nbsp;all<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
string(5) &quot;Hello&quot;
string(5) &quot;Hello&quot;
string(6) &quot; World&quot;
array(2) {
  [&quot;content&quot;]=&gt;
  string(5) &quot;Hello&quot;
  [&quot;footer&quot;]=&gt;
  string(6) &quot; World&quot;
}
</pre></div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-response-abstract.getbody-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-response-abstract.setbody.php" class="methodname" rel="rdfs-seeAlso">Yaf_Response_Abstract::setBody()</a> - Set content to response</span></li>
   <li class="member"><span class="methodname"><a href="yaf-response-abstract.appendbody.php" class="methodname" rel="rdfs-seeAlso">Yaf_Response_Abstract::appendBody()</a> - append to body</span></li>
   <li class="member"><span class="methodname"><a href="yaf-response-abstract.prependbody.php" class="methodname" rel="rdfs-seeAlso">Yaf_Response_Abstract::prependBody()</a> - The prependBody purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-response-abstract.clearbody.php" class="methodname" rel="rdfs-seeAlso">Yaf_Response_Abstract::clearBody()</a> - The clearBody purpose</span></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>