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
    0 => 'class.yaf-loader.php',
    1 => 'Yaf_Loader',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-view-simple.setscriptpath.php',
    1 => 'Yaf_View_Simple::setScriptPath',
  ),
  'next' => 
  array (
    0 => 'yaf-loader.autoload.php',
    1 => 'Yaf_Loader::autoload',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-loader.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-loader" class="reference">

 <h1 class="title">The Yaf_Loader class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-loader.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    <strong class="classname">Yaf_Loader</strong> introduces a comprehensive autoloading
    solution for Yaf.
   </p>
   <p class="para">
    The first time an instance of <a href="class.yaf-application.php" class="classname">Yaf_Application</a> is retrieved, 
    <strong class="classname">Yaf_Loader</strong> will instance a singleton, and registers itself with
    spl_autoload.  You retrieve an instance using the <span class="methodname"><a href="yaf-loader.getinstance.php" class="methodname">Yaf_Loader::getInstance()</a></span>
   </p>
   <p class="para">
    <strong class="classname">Yaf_Loader</strong> attempt to load a class only one shot, if
    failed, depend on <a href="yaf.configuration.php#ini.yaf.use-spl-autoload" class="link">yaf.use_spl_auload</a>, if this
    config is On <span class="methodname"><a href="yaf-loader.autoload.php" class="methodname">Yaf_Loader::autoload()</a></span> will return 
    <strong><code>FALSE</code></strong>, thus give the chance to other autoload function. if it is Off 
    (by default), <span class="methodname"><a href="yaf-loader.autoload.php" class="methodname">Yaf_Loader::autoload()</a></span> will return 
    <strong><code>TRUE</code></strong>, and more important is that a very usefull warning will be triggerd 
    (very usefull to find out why a class could not be loaded). 
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Please keep yaf.use_spl_autoload Off unless there is some library have
      their own autoload mechanism and impossible to rewrite it.
     </p>
    </p></blockquote>
   </p>
   <p class="para">
    By default, <strong class="classname">Yaf_Loader</strong> assume all library (class
    defined script) store in the <a href="yaf.configuration.php#ini.yaf.library" class="link">global library 
     directory</a>, which is defined in the php.ini(yaf.library).
   </p>

   <p class="para">
    If you want <strong class="classname">Yaf_Loader</strong> search some
    classes(libraries) in the <a href="class.yaf-loader.php#yaf-loader.props.library" class="link">local class
     directory</a>(which is defined in application.ini, and by default,
    it is <a href="yaf.appconfig.php#configuration.yaf.directory" class="link">application.directory</a> . &quot;/library&quot;), 
    you should register the class prefix using the
    <span class="methodname"><a href="yaf-loader.registerlocalnamespace.php" class="methodname">Yaf_Loader::registerLocalNameSpace()</a></span>
   </p>

   <p class="para">
    Let&#039;s see some examples(assuming APPLICATION_PATH is <a href="yaf.appconfig.php#configuration.yaf.directory" class="link">application.directory</a>):
    <div class="example" id="example-44">
     <p><strong>Example #1 Config example</strong></p>
      <div class="example-contents">
<div class="shellcode"><pre class="shellcode">// Assuming the following configure in php.ini:
yaf.library = &quot;/global_dir&quot;

//Assuming the following configure in application.ini
application.library = APPLICATION_PATH &quot;/library&quot;</pre>
</div>
     </div>

    </div>

    Assuming the following local name space registerd:
    <div class="example" id="example-45">
     <p><strong>Example #2 Register localnamespace</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">Bootstrap&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Bootstrap_Abstract</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initLoader</span><span style="color: #007700">(</span><span style="color: #0000BB">$dispatcher</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Loader</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">registerLocalNameSpace</span><span style="color: #007700">(array(</span><span style="color: #DD0000">"Foo"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Bar"</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
     </div>

    </div>

   Then the autoload examples:
    <div class="example" id="example-46">
     <p><strong>Example #3 Load class example</strong></p>
      <div class="example-contents">
<div class="shellcode"><pre class="shellcode">class Foo_Bar_Test =&gt;
  // APPLICATION_PATH/library/Foo/Bar/Test.php
  
class GLO_Name  =&gt;
  // /global_dir/Glo/Name.php
 
class BarNon_Test
  // /global_dir/Barnon/Test.php</pre>
</div>
      </div>

    </div>

   As of PHP 5.3, you can use namespace:
   <div class="example" id="example-47">
    <p><strong>Example #4 Load namespace class example</strong></p>
    <div class="example-contents">
<div class="shellcode"><pre class="shellcode">class \Foo\Bar\Dummy =&gt;
   // APPLICATION_PATH/library/Foo/Bar/Dummy.php

class \FooBar\Bar\Dummy =&gt;
   // /global_dir/FooBar/Bar/Dummy.php</pre>
</div>
    </div>
 
   </div>
  </p>

  <p class="para">
    You may noticed that all the folder wth the first letter capitalized, you can make them
    lowercase by set <a href="yaf.configuration.php#ini.yaf.lowcase-path" class="link">yaf.lowcase_path</a> = On in php.ini
  </p>

  <p class="para">
   <strong class="classname">Yaf_Loader</strong> is also designed to load the MVC classes,
   and the rule is:
   <div class="example" id="example-48">
    <p><strong>Example #5 MVC class loading example</strong></p>
    <div class="example-contents">
<div class="shellcode"><pre class="shellcode">Controller Classes =&gt;
// APPLICATION_PATH/controllers/

Model Classes =&gt;
// APPLICATION_PATH/models/

Plugin Classes =&gt;
// APPLICATION_PATH/plugins/</pre>
</div>
    </div>

   </div>

   Yaf identify a class&#039;s suffix(this is by default, you can also change to
   the prefix by change the configure <a href="yaf.configuration.php#ini.yaf.name-suffix" class="link">yaf.name_suffix</a>) to decide whether it
   is a MVC class:
   <div class="example" id="example-49">
    <p><strong>Example #6 MVC class distinctions</strong></p>
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">Controller Classes =&gt;
    // ***Controller

Model Classes =&gt;
    // ***Model

Plugin Classes =&gt;
    // ***Plugin</pre>
</div>
   </div>

  </div>

   some examples:
   <div class="example" id="example-50">
    <p><strong>Example #7 MVC loading example</strong></p>
    <div class="example-contents">
<div class="shellcode"><pre class="shellcode">class IndexController
    // APPLICATION_PATH/controllers/Index.php

class DataModel =&gt;
   // APPLICATION_PATH/models/Data.php

class DummyPlugin =&gt;
  // APPLICATION_PATH/plugins/Dummy.php

class A_B_TestModel =&gt;
  // APPLICATION_PATH/models/A/B/Test.php</pre>
</div>
    </div>

  </div>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    As of 2.1.18, Yaf supports Controllers autoloading for user script side,
    (which means the autoloading triggered by user php script, eg: access a
    controller static property in Bootstrap or Plugins),
    but autoloader only try to locate controller class script under the default
    module folder, which is &quot;APPLICATION_PATH/controllers/&quot;.
   </p>
  </p></blockquote>
   also, the directory will be affected by <a href="yaf.configuration.php#ini.yaf.lowcase-path" class="link">yaf.lowcase_path</a>.
  </p>
  </div>


  <div class="section" id="yaf-loader.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Loader</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-loader.php#yaf-loader.props.local-ns">$<var class="varname">_local_ns</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-loader.php#yaf-loader.props.library">$<var class="varname">_library</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-loader.php#yaf-loader.props.global-library">$<var class="varname">_global_library</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">static</span>
      <var class="varname"><a href="class.yaf-loader.php#yaf-loader.props.instance">$<var class="varname">_instance</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-loader.autoload.php" class="methodname">autoload</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-loader.clearlocalnamespace.php" class="methodname">clearLocalNamespace</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-loader.clone.php" class="methodname">__clone</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span><span class="methodname"><a href="yaf-loader.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">void</span> <span class="methodname"><a href="yaf-loader.getinstance.php" class="methodname">getInstance</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Loader</span> <span class="methodname"><a href="yaf-loader.getlibrarypath.php" class="methodname">getLibraryPath</a></span>
    ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$is_global</code><span class="initializer"> = false</span></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-loader.getlocalnamespace.php" class="methodname">getLocalNamespace</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">void</span> <span class="methodname"><a href="yaf-loader.import.php" class="methodname">import</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-loader.islocalname.php" class="methodname">isLocalName</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-loader.registerlocalnamespace.php" class="methodname">registerLocalNamespace</a></span>
    ( <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$prefix</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Loader</span> <span class="methodname"><a href="yaf-loader.setlibrarypath.php" class="methodname">setLibraryPath</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$directory</code></span>
   [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$is_global</code><span class="initializer"> = false</span></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-loader.sleep.php" class="methodname">__sleep</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-loader.wakeup.php" class="methodname">__wakeup</a></span>
    ( <span class="methodparam">void</span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-loader.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-loader.props.local-ns"><var class="varname"><var class="varname">_local_ns</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-loader.props.library"><var class="varname"><var class="varname">_library</var></var></dt>

     <dd>

      <p class="para">
       By default, this value is <a href="yaf.appconfig.php#configuration.yaf.directory" class="link">application.directory</a> . &quot;/library&quot;, 
       you can change this either in the application.ini(application.library) or call to
      <span class="methodname"><a href="yaf-loader.setlibrarypath.php" class="methodname">Yaf_Loader::setLibraryPath()</a></span>
      </p>
     </dd>

    
    
     <dt id="yaf-loader.props.global-library"><var class="varname"><var class="varname">_global_library</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-loader.props.instance"><var class="varname"><var class="varname">_instance</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>
 

 




























































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-loader.autoload.php">Yaf_Loader::autoload</a> — The autoload purpose</li><li><a href="yaf-loader.clearlocalnamespace.php">Yaf_Loader::clearLocalNamespace</a> — The clearLocalNamespace purpose</li><li><a href="yaf-loader.clone.php">Yaf_Loader::__clone</a> — The __clone purpose</li><li><a href="yaf-loader.construct.php">Yaf_Loader::__construct</a> — The __construct purpose</li><li><a href="yaf-loader.getinstance.php">Yaf_Loader::getInstance</a> — The getInstance purpose</li><li><a href="yaf-loader.getlibrarypath.php">Yaf_Loader::getLibraryPath</a> — get the library path</li><li><a href="yaf-loader.getlocalnamespace.php">Yaf_Loader::getLocalNamespace</a> — The getLocalNamespace purpose</li><li><a href="yaf-loader.import.php">Yaf_Loader::import</a> — The import purpose</li><li><a href="yaf-loader.islocalname.php">Yaf_Loader::isLocalName</a> — The isLocalName purpose</li><li><a href="yaf-loader.registerlocalnamespace.php">Yaf_Loader::registerLocalNamespace</a> — register local class prefix</li><li><a href="yaf-loader.setlibrarypath.php">Yaf_Loader::setLibraryPath</a> — Change the library path</li><li><a href="yaf-loader.sleep.php">Yaf_Loader::__sleep</a> — The __sleep purpose</li><li><a href="yaf-loader.wakeup.php">Yaf_Loader::__wakeup</a> — The __wakeup purpose</li></ul>
</div>
<?php manual_footer(); ?>