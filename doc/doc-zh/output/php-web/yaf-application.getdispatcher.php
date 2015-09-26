<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-application.inc";
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
    0 => 'yaf-application.getdispatcher.php',
    1 => 'Yaf_Application::getDispatcher',
  ),
  'up' => 
  array (
    0 => 'class.yaf-application.php',
    1 => 'Yaf_Application',
  ),
  'prev' => 
  array (
    0 => 'yaf-application.getconfig.php',
    1 => 'Yaf_Application::getConfig',
  ),
  'next' => 
  array (
    0 => 'yaf-application.getlasterrormsg.php',
    1 => 'Yaf_Application::getLastErrorMsg',
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
<div id="yaf-application.getdispatcher" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Application::getDispatcher</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Application::getDispatcher</span> &mdash; <span class="dc-title">Get Yaf_Dispatcher instance</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-application.getdispatcher-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-dispatcher.php" class="type Yaf_Dispatcher">Yaf_Dispatcher</a></span> <span class="methodname"><strong>Yaf_Application::getDispatcher</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">

  </p>



 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-application.getdispatcher-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-application.getdispatcher-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-application.getdispatcher-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-19">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Application::getDispatcher()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$config&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"application"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"directory"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #DD0000">"/application"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />);<br /><br /></span><span style="color: #FF8000">/**&nbsp;Yaf_Application&nbsp;*/<br /></span><span style="color: #0000BB">$application&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$application</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDispatcher</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
Yaf_Dispatcher Object
(
    [_router:protected] =&gt; Yaf_Router Object
        (
            [_routes:protected] =&gt; Array
                (
                    [_default] =&gt; Yaf_Route_Static Object
                        (
                        )

                )

            [_current:protected] =&gt; 
        )

    [_view:protected] =&gt; 
    [_request:protected] =&gt; Yaf_Request_Http Object
        (
            [module] =&gt; 
            [controller] =&gt; 
            [action] =&gt; 
            [method] =&gt; Cli
            [params:protected] =&gt; Array
                (
                )

            [language:protected] =&gt; 
            [_exception:protected] =&gt; 
            [_base_uri:protected] =&gt; 
            [uri:protected] =&gt; 
            [dispatched:protected] =&gt; 
            [routed:protected] =&gt; 
        )

    [_plugins:protected] =&gt; Array
        (
        )

    [_auto_render:protected] =&gt; 1
    [_return_response:protected] =&gt; 
    [_instantly_flush:protected] =&gt; 
    [_default_module:protected] =&gt; Index
    [_default_controller:protected] =&gt; Index
    [_default_action:protected] =&gt; index
    [_response] =&gt; Yaf_Response_Cli Object
        (
            [_header:protected] =&gt; Array
                (
                )

            [_body:protected] =&gt; 
            [_sendheader:protected] =&gt; 
        )

)
</pre></div>
   </div>
  </div>
 </div>



</div><?php manual_footer(); ?>