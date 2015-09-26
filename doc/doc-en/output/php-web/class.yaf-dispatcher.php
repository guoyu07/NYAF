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
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-bootstrap-abstract.php',
    1 => 'Yaf_Bootstrap_Abstract',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.autorender.php',
    1 => 'Yaf_Dispatcher::autoRender',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-dispatcher.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-dispatcher" class="reference">

 <h1 class="title">The Yaf_Dispatcher class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-dispatcher.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    <strong class="classname">Yaf_Dispatcher</strong> purpose is to initialize 
    the request environment, route the incoming request, and then dispatch
    any discovered actions; it aggregates any responses and returns them 
    when the process is complete.
   </p>
   <p class="para">
    <strong class="classname">Yaf_Dispatcher</strong> also implements the Singleton pattern, 
    meaning only a single instance of it may be available at any given time. This
    allows it to also act as a registry on which the other objects in the
    dispatch process may draw.
   </p>
  </div>


  <div class="section" id="yaf-dispatcher.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <strong class="classname">Yaf_Dispatcher</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-dispatcher.php#yaf-dispatcher.props.router">$<var class="varname">_router</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-dispatcher.php#yaf-dispatcher.props.view">$<var class="varname">_view</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-dispatcher.php#yaf-dispatcher.props.request">$<var class="varname">_request</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-dispatcher.php#yaf-dispatcher.props.plugins">$<var class="varname">_plugins</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
     <span class="modifier">static</span>
      <var class="varname"><a href="class.yaf-dispatcher.php#yaf-dispatcher.props.instance">$<var class="varname">_instance</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-dispatcher.php#yaf-dispatcher.props.auto-render">$<var class="varname">_auto_render</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-dispatcher.php#yaf-dispatcher.props.return-response">$<var class="varname">_return_response</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-dispatcher.php#yaf-dispatcher.props.instantly-flush">$<var class="varname">_instantly_flush</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-dispatcher.php#yaf-dispatcher.props.default-module">$<var class="varname">_default_module</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-dispatcher.php#yaf-dispatcher.props.default-controller">$<var class="varname">_default_controller</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-dispatcher.php#yaf-dispatcher.props.default-action">$<var class="varname">_default_action</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.autorender.php" class="methodname">autoRender</a></span>
    ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$flag</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.catchexception.php" class="methodname">catchException</a></span>
    ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$flag</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-dispatcher.clone.php" class="methodname">__clone</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="methodname"><a href="yaf-dispatcher.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-dispatcher.disableview.php" class="methodname">disableView</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Response_Abstract</span> <span class="methodname"><a href="yaf-dispatcher.dispatch.php" class="methodname">dispatch</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.enableview.php" class="methodname">enableView</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.flushinstantly.php" class="methodname">flushInstantly</a></span>
    ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$flag</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Application</span> <span class="methodname"><a href="yaf-dispatcher.getapplication.php" class="methodname">getApplication</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.getinstance.php" class="methodname">getInstance</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Request_Abstract</span> <span class="methodname"><a href="yaf-dispatcher.getrequest.php" class="methodname">getRequest</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Router</span> <span class="methodname"><a href="yaf-dispatcher.getrouter.php" class="methodname">getRouter</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_View_Interface</span> <span class="methodname"><a href="yaf-dispatcher.initview.php" class="methodname">initView</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$templates_dir</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.registerplugin.php" class="methodname">registerPlugin</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-plugin-abstract.php" class="type Yaf_Plugin_Abstract">Yaf_Plugin_Abstract</a></span> <code class="parameter">$plugin</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.returnresponse.php" class="methodname">returnResponse</a></span>
    ( <span class="methodparam"><span class="type">bool</span> <code class="parameter">$flag</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.setdefaultaction.php" class="methodname">setDefaultAction</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$action</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.setdefaultcontroller.php" class="methodname">setDefaultController</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$controller</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.setdefaultmodule.php" class="methodname">setDefaultModule</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$module</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.seterrorhandler.php" class="methodname">setErrorHandler</a></span>
    ( <span class="methodparam"><span class="type"><span class="type call">call</span></span> <code class="parameter">$callback</code></span>
   , <span class="methodparam"><span class="type">int</span> <code class="parameter">$error_types</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.setrequest.php" class="methodname">setRequest</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.setview.php" class="methodname">setView</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-view-interface.php" class="type Yaf_View_Interface">Yaf_View_Interface</a></span> <code class="parameter">$view</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-dispatcher.sleep.php" class="methodname">__sleep</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-dispatcher.throwexception.php" class="methodname">throwException</a></span>
    ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$flag</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-dispatcher.wakeup.php" class="methodname">__wakeup</a></span>
    ( <span class="methodparam">void</span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-dispatcher.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-dispatcher.props.router"><var class="varname"><var class="varname">_router</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-dispatcher.props.view"><var class="varname"><var class="varname">_view</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-dispatcher.props.request"><var class="varname"><var class="varname">_request</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-dispatcher.props.plugins"><var class="varname"><var class="varname">_plugins</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-dispatcher.props.instance"><var class="varname"><var class="varname">_instance</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-dispatcher.props.auto-render"><var class="varname"><var class="varname">_auto_render</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-dispatcher.props.return-response"><var class="varname"><var class="varname">_return_response</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-dispatcher.props.instantly-flush"><var class="varname"><var class="varname">_instantly_flush</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-dispatcher.props.default-module"><var class="varname"><var class="varname">_default_module</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-dispatcher.props.default-controller"><var class="varname"><var class="varname">_default_controller</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-dispatcher.props.default-action"><var class="varname"><var class="varname">_default_action</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 









































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-dispatcher.autorender.php">Yaf_Dispatcher::autoRender</a> — Switch on/off autorendering</li><li><a href="yaf-dispatcher.catchexception.php">Yaf_Dispatcher::catchException</a> — Switch on/off exception catching</li><li><a href="yaf-dispatcher.clone.php">Yaf_Dispatcher::__clone</a> — Yaf_Dispatcher can not be cloned</li><li><a href="yaf-dispatcher.construct.php">Yaf_Dispatcher::__construct</a> — Yaf_Dispatcher constructor</li><li><a href="yaf-dispatcher.disableview.php">Yaf_Dispatcher::disableView</a> — Disable view rendering</li><li><a href="yaf-dispatcher.dispatch.php">Yaf_Dispatcher::dispatch</a> — Dispatch a request</li><li><a href="yaf-dispatcher.enableview.php">Yaf_Dispatcher::enableView</a> — enable view rendering</li><li><a href="yaf-dispatcher.flushinstantly.php">Yaf_Dispatcher::flushInstantly</a> — Switch on/off the instant flushing</li><li><a href="yaf-dispatcher.getapplication.php">Yaf_Dispatcher::getApplication</a> — Retrive the application</li><li><a href="yaf-dispatcher.getinstance.php">Yaf_Dispatcher::getInstance</a> — Retrive the dispatcher instance</li><li><a href="yaf-dispatcher.getrequest.php">Yaf_Dispatcher::getRequest</a> — Retrive the request instance</li><li><a href="yaf-dispatcher.getrouter.php">Yaf_Dispatcher::getRouter</a> — Retrive router instance</li><li><a href="yaf-dispatcher.initview.php">Yaf_Dispatcher::initView</a> — Initialize view and return it</li><li><a href="yaf-dispatcher.registerplugin.php">Yaf_Dispatcher::registerPlugin</a> — Register a plugin</li><li><a href="yaf-dispatcher.returnresponse.php">Yaf_Dispatcher::returnResponse</a> — The returnResponse purpose</li><li><a href="yaf-dispatcher.setdefaultaction.php">Yaf_Dispatcher::setDefaultAction</a> — Change default action name</li><li><a href="yaf-dispatcher.setdefaultcontroller.php">Yaf_Dispatcher::setDefaultController</a> — Change default controller name</li><li><a href="yaf-dispatcher.setdefaultmodule.php">Yaf_Dispatcher::setDefaultModule</a> — Change default module name</li><li><a href="yaf-dispatcher.seterrorhandler.php">Yaf_Dispatcher::setErrorHandler</a> — Set error handler</li><li><a href="yaf-dispatcher.setrequest.php">Yaf_Dispatcher::setRequest</a> — The setRequest purpose</li><li><a href="yaf-dispatcher.setview.php">Yaf_Dispatcher::setView</a> — Set a custom view engine</li><li><a href="yaf-dispatcher.sleep.php">Yaf_Dispatcher::__sleep</a> — Yaf_Dispatcher can not be serialized</li><li><a href="yaf-dispatcher.throwexception.php">Yaf_Dispatcher::throwException</a> — Switch on/off exception throwing</li><li><a href="yaf-dispatcher.wakeup.php">Yaf_Dispatcher::__wakeup</a> — Yaf_Dispatcher can not be unserialized</li></ul>
</div>
<?php manual_footer(); ?>