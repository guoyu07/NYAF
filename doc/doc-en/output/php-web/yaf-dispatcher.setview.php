<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-dispatcher.inc";
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
    0 => 'yaf-dispatcher.setview.php',
    1 => 'Yaf_Dispatcher::setView',
  ),
  'up' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'prev' => 
  array (
    0 => 'yaf-dispatcher.setrequest.php',
    1 => 'Yaf_Dispatcher::setRequest',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.sleep.php',
    1 => 'Yaf_Dispatcher::__sleep',
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
<div id="yaf-dispatcher.setview" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Dispatcher::setView</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Dispatcher::setView</span> &mdash; <span class="dc-title">Set a custom view engine</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-dispatcher.setview-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-dispatcher.php" class="type Yaf_Dispatcher">Yaf_Dispatcher</a></span> <span class="methodname"><strong>Yaf_Dispatcher::setView</strong></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-view-interface.php" class="type Yaf_View_Interface">Yaf_View_Interface</a></span> <code class="parameter">$view</code></span>
   )</div>

  <p class="para rdfs-comment">
     This method proviods a solution for that if you want use a custom view
     engine instead of <a href="class.yaf-view-simple.php" class="classname">Yaf_View_Simple</a>
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-dispatcher.setview-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">view</code></dt>

    <dd>

     <p class="para">
       A Yaf_View_Interface instance
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-dispatcher.setview-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-dispatcher.setview-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-27">
   <p><strong>Example #1 <span class="function"><strong>A custom View engine()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">require&nbsp;</span><span style="color: #DD0000">"/path/to/smarty/Smarty.class.php"</span><span style="color: #007700">;<br /><br />class&nbsp;</span><span style="color: #0000BB">Smarty_Adapter&nbsp;</span><span style="color: #007700">implements&nbsp;</span><span style="color: #0000BB">Yaf_View_Interface<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Smarty&nbsp;object<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@var&nbsp;Smarty<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">$_smarty</span><span style="color: #007700">;<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Constructor<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;string&nbsp;$tmplPath<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;array&nbsp;$extraParams<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;void<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$tmplPath&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$extraParams&nbsp;</span><span style="color: #007700">=&nbsp;array())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_smarty&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Smarty</span><span style="color: #007700">;<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">$tmplPath</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setScriptPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$tmplPath</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$extraParams&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_smarty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Set&nbsp;the&nbsp;path&nbsp;to&nbsp;the&nbsp;templates<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;string&nbsp;$path&nbsp;The&nbsp;directory&nbsp;to&nbsp;set&nbsp;as&nbsp;the&nbsp;path.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;void<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setScriptPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_readable</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_smarty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">template_dir&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$path</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'Invalid&nbsp;path&nbsp;provided'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Assign&nbsp;a&nbsp;variable&nbsp;to&nbsp;the&nbsp;template<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;string&nbsp;$key&nbsp;The&nbsp;variable&nbsp;name.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;mixed&nbsp;$val&nbsp;The&nbsp;variable&nbsp;value.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;void<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__set</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$val</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_smarty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assign</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Allows&nbsp;testing&nbsp;with&nbsp;empty()&nbsp;and&nbsp;isset()&nbsp;to&nbsp;work<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;string&nbsp;$key<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;boolean<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__isset</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_smarty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get_template_vars</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Allows&nbsp;unset()&nbsp;on&nbsp;object&nbsp;properties&nbsp;to&nbsp;work<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;string&nbsp;$key<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;void<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__unset</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_smarty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clear_assign</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Assign&nbsp;variables&nbsp;to&nbsp;the&nbsp;template<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Allows&nbsp;setting&nbsp;a&nbsp;specific&nbsp;key&nbsp;to&nbsp;the&nbsp;specified&nbsp;value,&nbsp;OR&nbsp;passing<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;an&nbsp;array&nbsp;of&nbsp;key&nbsp;=&gt;&nbsp;value&nbsp;pairs&nbsp;to&nbsp;set&nbsp;en&nbsp;masse.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@see&nbsp;__set()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;string|array&nbsp;$spec&nbsp;The&nbsp;assignment&nbsp;strategy&nbsp;to&nbsp;use&nbsp;(key&nbsp;or<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;array&nbsp;of&nbsp;key&nbsp;=&gt;&nbsp;value&nbsp;pairs)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;mixed&nbsp;$value&nbsp;(Optional)&nbsp;If&nbsp;assigning&nbsp;a&nbsp;named&nbsp;variable,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;use&nbsp;this&nbsp;as&nbsp;the&nbsp;value.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;void<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">assign</span><span style="color: #007700">(</span><span style="color: #0000BB">$spec</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$spec</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_smarty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assign</span><span style="color: #007700">(</span><span style="color: #0000BB">$spec</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_smarty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assign</span><span style="color: #007700">(</span><span style="color: #0000BB">$spec</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Clear&nbsp;all&nbsp;assigned&nbsp;variables<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Clears&nbsp;all&nbsp;variables&nbsp;assigned&nbsp;to&nbsp;Yaf_View&nbsp;either&nbsp;via<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;{@link&nbsp;assign()}&nbsp;or&nbsp;property&nbsp;overloading<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;({@link&nbsp;__get()}/{@link&nbsp;__set()}).<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;void<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">clearVars</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_smarty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clear_all_assign</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Processes&nbsp;a&nbsp;template&nbsp;and&nbsp;returns&nbsp;the&nbsp;output.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;string&nbsp;$name&nbsp;The&nbsp;template&nbsp;to&nbsp;process.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;string&nbsp;The&nbsp;output.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">NULL</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_smarty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">display</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">NULL</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_smarty</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
  <div class="example" id="example-28">
   <p><strong>Example #2 <span class="function"><strong>Yaf_Dispatcher::setView()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">Bootstrap&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Bootstrap_Abstract&nbsp;</span><span style="color: #007700">{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;there&nbsp;are&nbsp;some&nbsp;config&nbsp;for&nbsp;smarty&nbsp;in&nbsp;the&nbsp;config:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;smarty.left_delimiter&nbsp;&nbsp;&nbsp;=&nbsp;"{{"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;smarty.right_delimiter&nbsp;&nbsp;=&nbsp;"}}"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;smarty.template_dir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;APPLICATION_PATH&nbsp;"/views/scripts/"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;smarty.compile_dir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;APPLICATION_PATH&nbsp;"/views/templates_c/"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;smarty.cache_dir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;APPLICATION_PATH&nbsp;"/views/templates_d/"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initConfig</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getConfig</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Registry</span><span style="color: #007700">::</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #DD0000">"config"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initLocalName</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;we&nbsp;put&nbsp;class&nbsp;Smarty_Adapter&nbsp;under&nbsp;the&nbsp;local&nbsp;library&nbsp;directory&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Loader</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">registerLocalNamespace</span><span style="color: #007700">(</span><span style="color: #DD0000">'Smarty'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initSmarty</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Dispatcher&nbsp;$dispatcher</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$smarty&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Smarty_Adapter</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Yaf_Registry</span><span style="color: #007700">::</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #DD0000">"config"</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #DD0000">"smarty"</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dispatcher</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setView</span><span style="color: #007700">(</span><span style="color: #0000BB">$smarty</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;now&nbsp;the&nbsp;Smarty&nbsp;view&nbsp;engine&nbsp;become&nbsp;the&nbsp;default&nbsp;view&nbsp;engine&nbsp;of&nbsp;Yaf&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-dispatcher.setview-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><a href="class.yaf-view-interface.php" class="classname">Yaf_View_Interface</a></li>
   <li class="member"><a href="class.yaf-view-simple.php" class="classname">Yaf_View_Simple</a></li>
  </ul>
 </div>

</div><?php manual_footer(); ?>