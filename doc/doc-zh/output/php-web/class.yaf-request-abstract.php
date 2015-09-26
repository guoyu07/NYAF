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
    0 => 'class.yaf-request-abstract.php',
    1 => 'Yaf_Request_Abstract',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-registry.set.php',
    1 => 'Yaf_Registry::set',
  ),
  'next' => 
  array (
    0 => 'yaf-request-abstract.getactionname.php',
    1 => 'Yaf_Request_Abstract::getActionName',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-request-abstract.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-request-abstract" class="reference">

 <h1 class="title">The Yaf_Request_Abstract class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-request-abstract.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="yaf-request-abstract.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Request_Abstract</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type">string</span>
      <var class="fieldsynopsis_varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.constants.scheme-http"><var class="varname">SCHEME_HTTP</var></a></var>
     <span class="initializer"> = http</span>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type">string</span>
      <var class="fieldsynopsis_varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.constants.scheme-https"><var class="varname">SCHEME_HTTPS</var></a></var>
     <span class="initializer"> = https</span>
    ;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
      <var class="varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.props.module">$<var class="varname">module</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">public</span>
      <var class="varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.props.controller">$<var class="varname">controller</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">public</span>
      <var class="varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.props.action">$<var class="varname">action</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">public</span>
      <var class="varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.props.method">$<var class="varname">method</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.props.params">$<var class="varname">params</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.props.language">$<var class="varname">language</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.props.exception">$<var class="varname">_exception</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.props.base-uri">$<var class="varname">_base_uri</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.props.uri">$<var class="varname">uri</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.props.dispatched">$<var class="varname">dispatched</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-request-abstract.php#yaf-request-abstract.props.routed">$<var class="varname">routed</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getactionname.php" class="methodname">getActionName</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getbaseuri.php" class="methodname">getBaseUri</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getcontrollername.php" class="methodname">getControllerName</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getenv.php" class="methodname">getEnv</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$default</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getexception.php" class="methodname">getException</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getlanguage.php" class="methodname">getLanguage</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getmethod.php" class="methodname">getMethod</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getmodulename.php" class="methodname">getModuleName</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getparam.php" class="methodname">getParam</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$default</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getparams.php" class="methodname">getParams</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getrequesturi.php" class="methodname">getRequestUri</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getserver.php" class="methodname">getServer</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$default</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.iscli.php" class="methodname">isCli</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.isdispatched.php" class="methodname">isDispatched</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.isget.php" class="methodname">isGet</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.ishead.php" class="methodname">isHead</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.isoptions.php" class="methodname">isOptions</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.ispost.php" class="methodname">isPost</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.isput.php" class="methodname">isPut</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.isrouted.php" class="methodname">isRouted</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.isxmlhttprequest.php" class="methodname">isXmlHttpRequest</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setactionname.php" class="methodname">setActionName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$action</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-request-abstract.setbaseuri.php" class="methodname">setBaseUri</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$uir</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setcontrollername.php" class="methodname">setControllerName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$controller</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setdispatched.php" class="methodname">setDispatched</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setmodulename.php" class="methodname">setModuleName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$module</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setparam.php" class="methodname">setParam</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setrequesturi.php" class="methodname">setRequestUri</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$uir</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setrouted.php" class="methodname">setRouted</a></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$flag</code></span>
  ] )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-request-abstract.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-request-abstract.props.module"><var class="varname"><var class="varname">module</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-abstract.props.controller"><var class="varname"><var class="varname">controller</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-abstract.props.action"><var class="varname"><var class="varname">action</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-abstract.props.method"><var class="varname"><var class="varname">method</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-abstract.props.params"><var class="varname"><var class="varname">params</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-abstract.props.language"><var class="varname"><var class="varname">language</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-abstract.props.exception"><var class="varname"><var class="varname">_exception</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-abstract.props.base-uri"><var class="varname"><var class="varname">_base_uri</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-abstract.props.uri"><var class="varname"><var class="varname">uri</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-abstract.props.dispatched"><var class="varname"><var class="varname">dispatched</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-abstract.props.routed"><var class="varname"><var class="varname">routed</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>


  

  <div class="section" id="yaf-request-abstract.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>


    
     <dt id="yaf-request-abstract.constants.scheme-http"><strong><code>Yaf_Request_Abstract::SCHEME_HTTP</code></strong></dt>

     <dd>

      <p class="para"/>
     </dd>

    

    
     <dt id="yaf-request-abstract.constants.scheme-https"><strong><code>Yaf_Request_Abstract::SCHEME_HTTPS</code></strong></dt>

     <dd>

      <p class="para"/>
     </dd>

    

   </dl>

  </div>



 </div>

 












































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-request-abstract.getactionname.php">Yaf_Request_Abstract::getActionName</a> — The getActionName purpose</li><li><a href="yaf-request-abstract.getbaseuri.php">Yaf_Request_Abstract::getBaseUri</a> — The getBaseUri purpose</li><li><a href="yaf-request-abstract.getcontrollername.php">Yaf_Request_Abstract::getControllerName</a> — The getControllerName purpose</li><li><a href="yaf-request-abstract.getenv.php">Yaf_Request_Abstract::getEnv</a> — Retrieve ENV varialbe</li><li><a href="yaf-request-abstract.getexception.php">Yaf_Request_Abstract::getException</a> — The getException purpose</li><li><a href="yaf-request-abstract.getlanguage.php">Yaf_Request_Abstract::getLanguage</a> — The getLanguage purpose</li><li><a href="yaf-request-abstract.getmethod.php">Yaf_Request_Abstract::getMethod</a> — The getMethod purpose</li><li><a href="yaf-request-abstract.getmodulename.php">Yaf_Request_Abstract::getModuleName</a> — The getModuleName purpose</li><li><a href="yaf-request-abstract.getparam.php">Yaf_Request_Abstract::getParam</a> — The getParam purpose</li><li><a href="yaf-request-abstract.getparams.php">Yaf_Request_Abstract::getParams</a> — The getParams purpose</li><li><a href="yaf-request-abstract.getrequesturi.php">Yaf_Request_Abstract::getRequestUri</a> — The getRequestUri purpose</li><li><a href="yaf-request-abstract.getserver.php">Yaf_Request_Abstract::getServer</a> — Retrieve SERVER variable</li><li><a href="yaf-request-abstract.iscli.php">Yaf_Request_Abstract::isCli</a> — The isCli purpose</li><li><a href="yaf-request-abstract.isdispatched.php">Yaf_Request_Abstract::isDispatched</a> — The isDispatched purpose</li><li><a href="yaf-request-abstract.isget.php">Yaf_Request_Abstract::isGet</a> — The isGet purpose</li><li><a href="yaf-request-abstract.ishead.php">Yaf_Request_Abstract::isHead</a> — The isHead purpose</li><li><a href="yaf-request-abstract.isoptions.php">Yaf_Request_Abstract::isOptions</a> — The isOptions purpose</li><li><a href="yaf-request-abstract.ispost.php">Yaf_Request_Abstract::isPost</a> — The isPost purpose</li><li><a href="yaf-request-abstract.isput.php">Yaf_Request_Abstract::isPut</a> — The isPut purpose</li><li><a href="yaf-request-abstract.isrouted.php">Yaf_Request_Abstract::isRouted</a> — The isRouted purpose</li><li><a href="yaf-request-abstract.isxmlhttprequest.php">Yaf_Request_Abstract::isXmlHttpRequest</a> — The isXmlHttpRequest purpose</li><li><a href="yaf-request-abstract.setactionname.php">Yaf_Request_Abstract::setActionName</a> — The setActionName purpose</li><li><a href="yaf-request-abstract.setbaseuri.php">Yaf_Request_Abstract::setBaseUri</a> — set base URI</li><li><a href="yaf-request-abstract.setcontrollername.php">Yaf_Request_Abstract::setControllerName</a> — The setControllerName purpose</li><li><a href="yaf-request-abstract.setdispatched.php">Yaf_Request_Abstract::setDispatched</a> — The setDispatched purpose</li><li><a href="yaf-request-abstract.setmodulename.php">Yaf_Request_Abstract::setModuleName</a> — The setModuleName purpose</li><li><a href="yaf-request-abstract.setparam.php">Yaf_Request_Abstract::setParam</a> — The setParam purpose</li><li><a href="yaf-request-abstract.setrequesturi.php">Yaf_Request_Abstract::setRequestUri</a> — The setRequestUri purpose</li><li><a href="yaf-request-abstract.setrouted.php">Yaf_Request_Abstract::setRouted</a> — The setRouted purpose</li></ul>
</div>
<?php manual_footer(); ?>