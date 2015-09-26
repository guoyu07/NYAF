<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-loader.inc";
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
    0 => 'yaf-loader.registerlocalnamespace.php',
    1 => 'Yaf_Loader::registerLocalNamespace',
  ),
  'up' => 
  array (
    0 => 'class.yaf-loader.php',
    1 => 'Yaf_Loader',
  ),
  'prev' => 
  array (
    0 => 'yaf-loader.islocalname.php',
    1 => 'Yaf_Loader::isLocalName',
  ),
  'next' => 
  array (
    0 => 'yaf-loader.setlibrarypath.php',
    1 => 'Yaf_Loader::setLibraryPath',
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
<div id="yaf-loader.registerlocalnamespace" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Loader::registerLocalNamespace</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Loader::registerLocalNamespace</span> &mdash; <span class="dc-title">register local class prefix</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-loader.registerlocalnamespace-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Loader::registerLocalNamespace</strong></span>
    ( <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$prefix</code></span>
   )</div>

  <p class="para rdfs-comment">
   Register local class prefix name, <a href="class.yaf-loader.php" class="classname">Yaf_Loader</a> search
   classes in two library directories, the one is configured via <a href="yaf.appconfig.php#configuration.yaf.library" class="link">application.library.directory</a>(in
   application.ini) which is called local libraray directory; the other is
   configured via <a href="yaf.configuration.php#ini.yaf.library" class="link">yaf.library</a> (in
   php.ini) which is callled global library directory, since it can be shared
   by many applications in the same server. 
  </p>
  <p class="para">
   When an autloading is trigger, <a href="class.yaf-loader.php" class="classname">Yaf_Loader</a> will
   determine which library directory should be searched in by exame the prefix
   name of the missed classname.

   If the prefix name is registered as a localnamespack then look for it in
   local library directory, otherwise look for it in global library directory.
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     If yaf.library is not configured, then the global library directory is
     assumed to be the local library directory. in that case, all autoloading
     will look for local library directory. 

     But if you want your Yaf application be strong, then always register your
     own classes as local classes.
    </p>
   </p></blockquote>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-loader.registerlocalnamespace-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">prefix</code></dt>

    <dd>

     <p class="para">
      a string or a array of class name prefix.
      all class prefix with these prefix will be loaded in local library path.
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-loader.registerlocalnamespace-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   bool
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-loader.registerlocalnamespace-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-51">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Loader::registerLocalNamespace()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$loader&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yaf_Loader</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">(</span><span style="color: #DD0000">'/local/library/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/global/library'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$loader</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerLocalNamespace</span><span style="color: #007700">(</span><span style="color: #DD0000">"Baidu"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$loader</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerLocalNamespace</span><span style="color: #007700">(array(</span><span style="color: #DD0000">"Sina"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Weibo"</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$loader</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoload</span><span style="color: #007700">(</span><span style="color: #DD0000">"Baidu_Name"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;search&nbsp;in&nbsp;'/local/library/'<br /></span><span style="color: #0000BB">$loader</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoload</span><span style="color: #007700">(</span><span style="color: #DD0000">"Sina"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;search&nbsp;'/local/library/'<br /></span><span style="color: #0000BB">$loader</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoload</span><span style="color: #007700">(</span><span style="color: #DD0000">"Global_Name"</span><span style="color: #007700">);</span><span style="color: #FF8000">//&nbsp;search&nbsp;in&nbsp;'/global/library/'<br /></span><span style="color: #0000BB">$loader</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoload</span><span style="color: #007700">(</span><span style="color: #DD0000">"Foo_Bar"</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;search&nbsp;in&nbsp;'/global/library/'<br /><br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </div>


</div><?php manual_footer(); ?>