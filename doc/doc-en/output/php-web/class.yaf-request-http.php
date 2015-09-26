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
    0 => 'class.yaf-request-http.php',
    1 => 'Yaf_Request_Http',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-request-abstract.setrouted.php',
    1 => 'Yaf_Request_Abstract::setRouted',
  ),
  'next' => 
  array (
    0 => 'yaf-request-http.clone.php',
    1 => 'Yaf_Request_Http::__clone',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-request-http.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-request-http" class="reference">

 <h1 class="title">The Yaf_Request_Http class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-request-http.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Any request from client is initialized as a
    <strong class="classname">Yaf_Request_Http</strong>.
    you can get the rquest infomations like, uri query and 
    post parameters via methods of this class.
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      For security, $_GET/$_POST are readonly in Yaf, which means
      if you set a value to these global variables, you can not get it from
      <span class="methodname"><strong>Yaf_Request_Http::getQurey()</strong></span> or
      <span class="methodname"><a href="yaf-request-http.getpost.php" class="methodname">Yaf_Request_Http::getPost()</a></span>. 
     </p>
     <p class="para">
      But there do is some usage need such feature, like unit testing. thus
      Yaf can be built with --enable-yaf-debug, which will allow Yaf read the
      value user set via script.
     </p>
     <p class="para">
      in such case, Yaf will throw a E_STRICT warning to remind you about
      that:  Strict Standards: you are running yaf in debug mode
     </p>
    </p></blockquote>
   </p>
  </div>


  <div class="section" id="yaf-request-http.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Request_Http</strong>
     </span>
     
     <span class="ooclass">
      <span class="modifier">extends</span>
      <a href="class.yaf-request-abstract.php" class="classname">Yaf_Request_Abstract</a>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-http.clone.php" class="methodname">__clone</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="methodname"><a href="yaf-request-http.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="yaf-request-http.get.php" class="methodname">get</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$default</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="yaf-request-http.getcookie.php" class="methodname">getCookie</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$default</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-http.getfiles.php" class="methodname">getFiles</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="yaf-request-http.getpost.php" class="methodname">getPost</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$default</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="yaf-request-http.getquery.php" class="methodname">getQuery</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$default</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-http.getrequest.php" class="methodname">getRequest</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-request-http.isxmlhttprequest.php" class="methodname">isXmlHttpRequest</a></span>
    ( <span class="methodparam">void</span>
   )</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getactionname.php" class="methodname">Yaf_Request_Abstract::getActionName</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getbaseuri.php" class="methodname">Yaf_Request_Abstract::getBaseUri</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getcontrollername.php" class="methodname">Yaf_Request_Abstract::getControllerName</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getenv.php" class="methodname">Yaf_Request_Abstract::getEnv</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$default</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getexception.php" class="methodname">Yaf_Request_Abstract::getException</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getlanguage.php" class="methodname">Yaf_Request_Abstract::getLanguage</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getmethod.php" class="methodname">Yaf_Request_Abstract::getMethod</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getmodulename.php" class="methodname">Yaf_Request_Abstract::getModuleName</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getparam.php" class="methodname">Yaf_Request_Abstract::getParam</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$default</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getparams.php" class="methodname">Yaf_Request_Abstract::getParams</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getrequesturi.php" class="methodname">Yaf_Request_Abstract::getRequestUri</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.getserver.php" class="methodname">Yaf_Request_Abstract::getServer</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$default</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.iscli.php" class="methodname">Yaf_Request_Abstract::isCli</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.isdispatched.php" class="methodname">Yaf_Request_Abstract::isDispatched</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.isget.php" class="methodname">Yaf_Request_Abstract::isGet</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.ishead.php" class="methodname">Yaf_Request_Abstract::isHead</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.isoptions.php" class="methodname">Yaf_Request_Abstract::isOptions</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.ispost.php" class="methodname">Yaf_Request_Abstract::isPost</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.isput.php" class="methodname">Yaf_Request_Abstract::isPut</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.isrouted.php" class="methodname">Yaf_Request_Abstract::isRouted</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.isxmlhttprequest.php" class="methodname">Yaf_Request_Abstract::isXmlHttpRequest</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setactionname.php" class="methodname">Yaf_Request_Abstract::setActionName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$action</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-request-abstract.setbaseuri.php" class="methodname">Yaf_Request_Abstract::setBaseUri</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$uir</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setcontrollername.php" class="methodname">Yaf_Request_Abstract::setControllerName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$controller</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setdispatched.php" class="methodname">Yaf_Request_Abstract::setDispatched</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setmodulename.php" class="methodname">Yaf_Request_Abstract::setModuleName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$module</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setparam.php" class="methodname">Yaf_Request_Abstract::setParam</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setrequesturi.php" class="methodname">Yaf_Request_Abstract::setRequestUri</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$uir</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-request-abstract.setrouted.php" class="methodname">Yaf_Request_Abstract::setRouted</a></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$flag</code></span>
  ] )</div>


   }</div>


  </div>

  

  <div class="section" id="yaf-request-http.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-request-http.props.module"><var class="varname"><var class="varname">module</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-http.props.controller"><var class="varname"><var class="varname">controller</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-http.props.action"><var class="varname"><var class="varname">action</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-http.props.method"><var class="varname"><var class="varname">method</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-http.props.params"><var class="varname"><var class="varname">params</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-http.props.language"><var class="varname"><var class="varname">language</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-http.props.exception"><var class="varname"><var class="varname">_exception</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-http.props.base-uri"><var class="varname"><var class="varname">_base_uri</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-http.props.uri"><var class="varname"><var class="varname">uri</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-http.props.dispatched"><var class="varname"><var class="varname">dispatched</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-request-http.props.routed"><var class="varname"><var class="varname">routed</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 
































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-request-http.clone.php">Yaf_Request_Http::__clone</a> — The __clone purpose</li><li><a href="yaf-request-http.construct.php">Yaf_Request_Http::__construct</a> — The __construct purpose</li><li><a href="yaf-request-http.get.php">Yaf_Request_Http::get</a> — Retrieve variable from client</li><li><a href="yaf-request-http.getcookie.php">Yaf_Request_Http::getCookie</a> — Retrieve Cookie varialbe</li><li><a href="yaf-request-http.getfiles.php">Yaf_Request_Http::getFiles</a> — The getFiles purpose</li><li><a href="yaf-request-http.getpost.php">Yaf_Request_Http::getPost</a> — Retrieve POST variable</li><li><a href="yaf-request-http.getquery.php">Yaf_Request_Http::getQuery</a> — Fetch a query parameter</li><li><a href="yaf-request-http.getrequest.php">Yaf_Request_Http::getRequest</a> — The getRequest purpose</li><li><a href="yaf-request-http.isxmlhttprequest.php">Yaf_Request_Http::isXmlHttpRequest</a> — Whether a Ajax Request</li></ul>
</div>
<?php manual_footer(); ?>