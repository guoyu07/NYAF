<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/book.yaf.inc";
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
    0 => 'class.yaf-controller-abstract.php',
    1 => 'Yaf_Controller_Abstract',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-config-simple.valid.php',
    1 => 'Yaf_Config_Simple::valid',
  ),
  'next' => 
  array (
    0 => 'yaf-controller-abstract.clone.php',
    1 => 'Yaf_Controller_Abstract::__clone',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-controller-abstract.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-controller-abstract" class="reference">

 <h1 class="title">The Yaf_Controller_Abstract class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-controller-abstract.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    <strong class="classname">Yaf_Controller_Abstract</strong> is the heart of Yaf&#039;s 
    system. MVC stands for Model-View-Controller and is a design pattern 
    targeted at separating application logic from display logic.
   </p>
   <p class="para">
    Every custom controller shall inherit
    <strong class="classname">Yaf_Controller_Abstract</strong>.
   </p>
   <p class="para">
    You will find that you can not define __construct function for your custom
    controller, thus, <strong class="classname">Yaf_Controller_Abstract</strong> provides
    a magic method: <span class="methodname"><a href="yaf-controller-abstract.init.php" class="methodname">Yaf_Controller_Abstract::init()</a></span>.
   </p>
   <p class="para">
    If you have defined a init() method in your custom controller, it will be
    called as long as the controller was instantiated.
   </p>
   <p class="para">
    Action may have arguments, when a request coming, if there are the same
    name variable in the request parameters(see
    <span class="methodname"><a href="yaf-request-abstract.getparam.php" class="methodname">Yaf_Request_Abstract::getParam()</a></span>) after routed, 
    Yaf will pass them to the action method
    (see <span class="methodname"><a href="yaf-action-abstract.execute.php" class="methodname">Yaf_Action_Abstract::execute()</a></span>).
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      These arguments are directly fetched without filtering, it should be 
      carefully processed before use them.
     </p>
    </p></blockquote>
   </p>
  </div>


  <div class="section" id="yaf-controller-abstract.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">abstract</span>
      <strong class="classname">Yaf_Controller_Abstract</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
      <var class="varname"><a href="class.yaf-controller-abstract.php#yaf-controller-abstract.props.actions">$<var class="varname">actions</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-controller-abstract.php#yaf-controller-abstract.props.module">$<var class="varname">_module</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-controller-abstract.php#yaf-controller-abstract.props.name">$<var class="varname">_name</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-controller-abstract.php#yaf-controller-abstract.props.request">$<var class="varname">_request</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-controller-abstract.php#yaf-controller-abstract.props.response">$<var class="varname">_response</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-controller-abstract.php#yaf-controller-abstract.props.invoke-args">$<var class="varname">_invoke_args</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-controller-abstract.php#yaf-controller-abstract.props.view">$<var class="varname">_view</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.clone.php" class="methodname">__clone</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">private</span> <span class="methodname"><a href="yaf-controller-abstract.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">protected</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-controller-abstract.display.php" class="methodname">display</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$tpl</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$parameters</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.forward.php" class="methodname">forward</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$action</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$paramters</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.getinvokearg.php" class="methodname">getInvokeArg</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.getinvokeargs.php" class="methodname">getInvokeArgs</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-controller-abstract.getmodulename.php" class="methodname">getModuleName</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Request_Abstract</span> <span class="methodname"><a href="yaf-controller-abstract.getrequest.php" class="methodname">getRequest</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Response_Abstract</span> <span class="methodname"><a href="yaf-controller-abstract.getresponse.php" class="methodname">getResponse</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_View_Interface</span> <span class="methodname"><a href="yaf-controller-abstract.getview.php" class="methodname">getView</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.getviewpath.php" class="methodname">getViewpath</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.init.php" class="methodname">init</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.initview.php" class="methodname">initView</a></span>
    ([ <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-controller-abstract.redirect.php" class="methodname">redirect</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$url</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">protected</span> <span class="type">string</span> <span class="methodname"><a href="yaf-controller-abstract.render.php" class="methodname">render</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$tpl</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$parameters</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.setviewpath.php" class="methodname">setViewpath</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$view_directory</code></span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-controller-abstract.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-controller-abstract.props.actions"><var class="varname"><var class="varname">actions</var></var></dt>

     <dd>

      <p class="para">
      You can also define a action method in a separate PHP script by using
      this property and <a href="class.yaf-action-abstract.php" class="classname">Yaf_Action_Abstract</a>.
      <div class="example" id="example-32">
       <p><strong>Example #1 define action in a separate file</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">IndexController&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Controller_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;</span><span style="color: #0000BB">$actions&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;now&nbsp;dummyAction&nbsp;is&nbsp;defined&nbsp;in&nbsp;a&nbsp;separate&nbsp;file&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"dummy"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"actions/Dummy_action.php"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;action&nbsp;method&nbsp;may&nbsp;have&nbsp;arguments&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">indexAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;$name&nbsp;and&nbsp;$id&nbsp;are&nbsp;unsafe&nbsp;raw&nbsp;data&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">assert</span><span style="color: #007700">(</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getParam</span><span style="color: #007700">(</span><span style="color: #DD0000">"name"</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">assert</span><span style="color: #007700">(</span><span style="color: #0000BB">$id&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParam</span><span style="color: #007700">(</span><span style="color: #DD0000">"id"</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
        </div>

      </div>
      <div class="example" id="example-33">
       <p><strong>Example #2 Dummy_action.php</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">DummyAction&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Action_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;a&nbsp;action&nbsp;class&nbsp;shall&nbsp;define&nbsp;this&nbsp;method&nbsp;&nbsp;as&nbsp;the&nbsp;entry&nbsp;point&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">execute</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
        </div>

      </div>
      </p>
     </dd>

    
    
     <dt id="yaf-controller-abstract.props.module"><var class="varname"><var class="varname">_module</var></var></dt>

     <dd>

      <p class="para">
        module name
      </p>
     </dd>

    
    
     <dt id="yaf-controller-abstract.props.name"><var class="varname"><var class="varname">_name</var></var></dt>

     <dd>

      <p class="para">
        controller name
      </p>
     </dd>

    
    
     <dt id="yaf-controller-abstract.props.request"><var class="varname"><var class="varname">_request</var></var></dt>

     <dd>

      <p class="para">
      current request object
      </p>
     </dd>

    
    
     <dt id="yaf-controller-abstract.props.response"><var class="varname"><var class="varname">_response</var></var></dt>

     <dd>

      <p class="para">
      current response object
      </p>
     </dd>

    
    
     <dt id="yaf-controller-abstract.props.invoke-args"><var class="varname"><var class="varname">_invoke_args</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-controller-abstract.props.view"><var class="varname"><var class="varname">_view</var></var></dt>

     <dd>

      <p class="para">
      view engine object
      </p>
     </dd>

    
   </dl>

  </div>



 </div>

 

















































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-controller-abstract.clone.php">Yaf_Controller_Abstract::__clone</a> — Yaf_Controller_Abstract can not be cloned</li><li><a href="yaf-controller-abstract.construct.php">Yaf_Controller_Abstract::__construct</a> — Yaf_Controller_Abstract constructor</li><li><a href="yaf-controller-abstract.display.php">Yaf_Controller_Abstract::display</a> — The display purpose</li><li><a href="yaf-controller-abstract.forward.php">Yaf_Controller_Abstract::forward</a> — foward to another action</li><li><a href="yaf-controller-abstract.getinvokearg.php">Yaf_Controller_Abstract::getInvokeArg</a> — The getInvokeArg purpose</li><li><a href="yaf-controller-abstract.getinvokeargs.php">Yaf_Controller_Abstract::getInvokeArgs</a> — The getInvokeArgs purpose</li><li><a href="yaf-controller-abstract.getmodulename.php">Yaf_Controller_Abstract::getModuleName</a> — Get module name</li><li><a href="yaf-controller-abstract.getrequest.php">Yaf_Controller_Abstract::getRequest</a> — Retrieve current request object</li><li><a href="yaf-controller-abstract.getresponse.php">Yaf_Controller_Abstract::getResponse</a> — Retrieve current response object</li><li><a href="yaf-controller-abstract.getview.php">Yaf_Controller_Abstract::getView</a> — Retrieve the view engine</li><li><a href="yaf-controller-abstract.getviewpath.php">Yaf_Controller_Abstract::getViewpath</a> — The getViewpath purpose</li><li><a href="yaf-controller-abstract.init.php">Yaf_Controller_Abstract::init</a> — Controller initializer</li><li><a href="yaf-controller-abstract.initview.php">Yaf_Controller_Abstract::initView</a> — The initView purpose</li><li><a href="yaf-controller-abstract.redirect.php">Yaf_Controller_Abstract::redirect</a> — Redirect to a URL</li><li><a href="yaf-controller-abstract.render.php">Yaf_Controller_Abstract::render</a> — Render view template</li><li><a href="yaf-controller-abstract.setviewpath.php">Yaf_Controller_Abstract::setViewpath</a> — The setViewpath purpose</li></ul>
</div>
<?php manual_footer(); ?>