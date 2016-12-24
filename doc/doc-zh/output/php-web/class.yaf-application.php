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
    0 => 'class.yaf-application.php',
    1 => 'Yaf_Application',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf.appconfig.php',
    1 => 'Application Configuration',
  ),
  'next' => 
  array (
    0 => 'yaf-application.app.php',
    1 => 'Yaf_Application::app',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-application.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-application" class="reference">

 <h1 class="title">The Yaf_Application class</h1>
 
 

 <div class="partintro"><p class="verinfo">(No version information available, might only be in Git)</p>


  <div class="section" id="yaf-application.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
     <a href="class.yaf-application.php" class="classname">Yaf_Application</a> provides a bootstrapping facility 
     for applications which provides reusable resources, common- and 
     module-based bootstrap classes and dependency checking. 
   </p>
   <p class="para">
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
       <a href="class.yaf-application.php" class="classname">Yaf_Application</a> implements the singleton
       pattern, and <a href="class.yaf-application.php" class="classname">Yaf_Application</a> can not be
       serialized or unserialized which will cause problem when you try 
       to use PHPUnit to write some test case for Yaf.
      </p>
      <p class="para">
       You may use @backupGlobals annotation of PHPUnit to control the 
       backup and restore operations for global variables. thus can solve 
       this problem.
     </p>
    </p></blockquote>
   </p>
  </div>


  <div class="section" id="yaf-application.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <a href="class.yaf-application.php" class="classname">Yaf_Application</a>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-application.php#yaf-application.props.config">$<var class="varname">config</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-application.php#yaf-application.props.dispatcher">$<var class="varname">dispatcher</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
     <span class="modifier">static</span>
      <var class="varname"><a href="class.yaf-application.php#yaf-application.props.app">$<var class="varname">_app</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-application.php#yaf-application.props.modules">$<var class="varname">_modules</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-application.php#yaf-application.props.running">$<var class="varname">_running</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-application.php#yaf-application.props.environ">$<var class="varname">_environ</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">void</span> <span class="methodname"><a href="yaf-application.app.php" class="methodname">app</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-application.bootstrap.php" class="methodname">bootstrap</a></span>
    ([ <span class="methodparam"><span class="type"><a href="class.yaf-bootstrap-abstract.php" class="type Yaf_Bootstrap_Abstract">Yaf_Bootstrap_Abstract</a></span> <code class="parameter">$bootstrap</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Application</span> <span class="methodname"><a href="yaf-application.clearlasterror.php" class="methodname">clearLastError</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-application.clone.php" class="methodname">__clone</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="methodname"><a href="yaf-application.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$config</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$envrion</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-application.destruct.php" class="methodname">__destruct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-application.environ.php" class="methodname">environ</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-application.execute.php" class="methodname">execute</a></span>
    ( <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$entry</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$...</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Application</span> <span class="methodname"><a href="yaf-application.getappdirectory.php" class="methodname">getAppDirectory</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Config_Abstract</span> <span class="methodname"><a href="yaf-application.getconfig.php" class="methodname">getConfig</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Dispatcher</span> <span class="methodname"><a href="yaf-application.getdispatcher.php" class="methodname">getDispatcher</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-application.getlasterrormsg.php" class="methodname">getLastErrorMsg</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><a href="yaf-application.getlasterrorno.php" class="methodname">getLastErrorNo</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="yaf-application.getmodules.php" class="methodname">getModules</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-application.run.php" class="methodname">run</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Application</span> <span class="methodname"><a href="yaf-application.setappdirectory.php" class="methodname">setAppDirectory</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$directory</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-application.sleep.php" class="methodname">__sleep</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-application.wakeup.php" class="methodname">__wakeup</a></span>
    ( <span class="methodparam">void</span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-application.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-application.props.config"><var class="varname"><var class="varname">config</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-application.props.dispatcher"><var class="varname"><var class="varname">dispatcher</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-application.props.app"><var class="varname"><var class="varname">_app</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-application.props.modules"><var class="varname"><var class="varname">_modules</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-application.props.running"><var class="varname"><var class="varname">_running</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-application.props.environ"><var class="varname"><var class="varname">_environ</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-application.app.php">Yaf_Application::app</a> — Retrieve an Application instance</li><li><a href="yaf-application.bootstrap.php">Yaf_Application::bootstrap</a> — Call bootstrap</li><li><a href="yaf-application.clearlasterror.php">Yaf_Application::clearLastError</a> — Clear the last error info</li><li><a href="yaf-application.clone.php">Yaf_Application::__clone</a> — Yaf_Application can not be cloned</li><li><a href="yaf-application.construct.php">Yaf_Application::__construct</a> — Yaf_Application constructor</li><li><a href="yaf-application.destruct.php">Yaf_Application::__destruct</a> — The __destruct purpose</li><li><a href="yaf-application.environ.php">Yaf_Application::environ</a> — Retrive environ</li><li><a href="yaf-application.execute.php">Yaf_Application::execute</a> — Execute a callback</li><li><a href="yaf-application.getappdirectory.php">Yaf_Application::getAppDirectory</a> — Get the application directory</li><li><a href="yaf-application.getconfig.php">Yaf_Application::getConfig</a> — Retrive the config instance</li><li><a href="yaf-application.getdispatcher.php">Yaf_Application::getDispatcher</a> — Get Yaf_Dispatcher instance</li><li><a href="yaf-application.getlasterrormsg.php">Yaf_Application::getLastErrorMsg</a> — Get message of the last occurred error</li><li><a href="yaf-application.getlasterrorno.php">Yaf_Application::getLastErrorNo</a> — Get code of last occurred error</li><li><a href="yaf-application.getmodules.php">Yaf_Application::getModules</a> — Get defined module names</li><li><a href="yaf-application.run.php">Yaf_Application::run</a> — Start Yaf_Application</li><li><a href="yaf-application.setappdirectory.php">Yaf_Application::setAppDirectory</a> — Change the application directory</li><li><a href="yaf-application.sleep.php">Yaf_Application::__sleep</a> — Yaf_Application can not be serialized</li><li><a href="yaf-application.wakeup.php">Yaf_Application::__wakeup</a> — Yaf_Application can not be unserialized</li></ul>
</div>
<?php manual_footer(); ?>