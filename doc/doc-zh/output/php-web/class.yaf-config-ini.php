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
    0 => 'class.yaf-config-ini.php',
    1 => 'Yaf_Config_Ini',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-config-abstract.toarray.php',
    1 => 'Yaf_Config_Abstract::toArray',
  ),
  'next' => 
  array (
    0 => 'yaf-config-ini.construct.php',
    1 => 'Yaf_Config_Ini::__construct',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-config-ini.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-config-ini" class="reference">

 <h1 class="title">The Yaf_Config_Ini class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-config-ini.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
   Yaf_Config_Ini enables developers to store configuration data in a
   familiar INI format and read them in the application by using nested object
   property syntax. The INI format is specialized to provide both the ability
   to have a hierarchy of configuration data keys and inheritance between
   configuration data sections. Configuration data hierarchies are supported
   by separating the keys with the dot or period character (&quot;.&quot;). A section
   may extend or inherit from another section by following the section name
   with a colon character (&quot;:&quot;) and the name of the section from which data are
   to be inherited.    
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
   Yaf_Config_Ini utilizes the » parse_ini_file() PHP function. Please review
   this documentation to be aware of its specific behaviors, which propagate
   to Yaf_Config_Ini, such as how the special values of &quot;<strong><code>TRUE</code></strong>&quot;, &quot;<strong><code>FALSE</code></strong>&quot;,
   &quot;yes&quot;, &quot;no&quot;, and &quot;<strong><code>NULL</code></strong>&quot; are handled. 
   </p>
  </p></blockquote>
  </p>
  </div>


  <div class="section" id="yaf-config-ini.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Config_Ini</strong>
     </span>
     
     <span class="ooclass">
      <span class="modifier">extends</span>
      <a href="class.yaf-config-abstract.php" class="classname">Yaf_Config_Abstract</a>
     </span>
     
     <span class="oointerface">implements 
      <span class="interfacename"><strong class="interfacename">Iterator</strong></span>
     </span>

     <span class="oointerface">, 
      <span class="interfacename"><strong class="interfacename">ArrayAccess</strong></span>
     </span>

     <span class="oointerface">, 
      <span class="interfacename"><strong class="interfacename">Countable</strong></span>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="yaf-config-ini.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$config_file</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$section</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.count.php" class="methodname">count</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.current.php" class="methodname">current</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.get.php" class="methodname">__get</a></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.isset.php" class="methodname">__isset</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.key.php" class="methodname">key</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.next.php" class="methodname">next</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.offsetexists.php" class="methodname">offsetExists</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.offsetget.php" class="methodname">offsetGet</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.offsetset.php" class="methodname">offsetSet</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.offsetunset.php" class="methodname">offsetUnset</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.readonly.php" class="methodname">readonly</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.rewind.php" class="methodname">rewind</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.set.php" class="methodname">__set</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="yaf-config-ini.toarray.php" class="methodname">toArray</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-ini.valid.php" class="methodname">valid</a></span>
    ( <span class="methodparam">void</span>
   )</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="yaf-config-abstract.get.php" class="methodname">Yaf_Config_Abstract::get</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-config-abstract.readonly.php" class="methodname">Yaf_Config_Abstract::readonly</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">Yaf_Config_Abstract</span> <span class="methodname"><a href="yaf-config-abstract.set.php" class="methodname">Yaf_Config_Abstract::set</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="yaf-config-abstract.toarray.php" class="methodname">Yaf_Config_Abstract::toArray</a></span>
    ( <span class="methodparam">void</span>
   )</div>


   }</div>


  </div>

  

  <div class="section" id="yaf-config-ini.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-config-ini.props.config"><var class="varname"><var class="varname">_config</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-config-ini.props.readonly"><var class="varname"><var class="varname">_readonly</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>


 <div class="section">
  <h2 class="title">Examples</h2>
  <div class="example" id="example-31">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Config_Ini()</strong></span>example</strong></p>
   <div class="example-contents"><p>
    This example illustrates a basic use of Yaf_Config_Ini for loading
    configuration data from an INI file. In this example there are
    configuration data for both a production system and for a staging system.
    Because the staging system configuration data are very similar to those
    for production, the staging section inherits from the production section.
    In this case, the decision is arbitrary and could have been written
    conversely, with the production section inheriting from the staging
    section, though this may not be the case for more complex situations.
    Suppose, then, that the following configuration data are contained in
    /path/to/config.ini:
   </p></div>
   <div class="example-contents">
<div class="inicode"><pre class="inicode">; Production site configuration data
[production]
webhost                  = www.example.com
database.adapter         = pdo_mysql
database.params.host     = db.example.com
database.params.username = dbuser
database.params.password = secret
database.params.dbname   = dbname
 
; Staging site configuration data inherits from production and
; overrides values as necessary
[staging : production]
database.params.host     = dev.example.com
database.params.username = devuser
database.params.password = devsecret</pre>
</div>
   </div>

   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$config&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Config_Ini</span><span style="color: #007700">(</span><span style="color: #DD0000">'/path/to/config.ini'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'staging'</span><span style="color: #007700">);<br />&nbsp;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">database</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">host</span><span style="color: #007700">);&nbsp;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">database</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbname</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #DD0000">"database.params.username"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
string(15) &quot;dev.example.com&quot;
string(6) &quot;dbname&quot;
string(7) &quot;devuser
</pre></div>
   </div>
  </div>
  </div>

 </div>

 

















































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-config-ini.construct.php">Yaf_Config_Ini::__construct</a> — Yaf_Config_Ini constructor</li><li><a href="yaf-config-ini.count.php">Yaf_Config_Ini::count</a> — The count purpose</li><li><a href="yaf-config-ini.current.php">Yaf_Config_Ini::current</a> — The current purpose</li><li><a href="yaf-config-ini.get.php">Yaf_Config_Ini::__get</a> — The __get purpose</li><li><a href="yaf-config-ini.isset.php">Yaf_Config_Ini::__isset</a> — The __isset purpose</li><li><a href="yaf-config-ini.key.php">Yaf_Config_Ini::key</a> — The key purpose</li><li><a href="yaf-config-ini.next.php">Yaf_Config_Ini::next</a> — The next purpose</li><li><a href="yaf-config-ini.offsetexists.php">Yaf_Config_Ini::offsetExists</a> — The offsetExists purpose</li><li><a href="yaf-config-ini.offsetget.php">Yaf_Config_Ini::offsetGet</a> — The offsetGet purpose</li><li><a href="yaf-config-ini.offsetset.php">Yaf_Config_Ini::offsetSet</a> — The offsetSet purpose</li><li><a href="yaf-config-ini.offsetunset.php">Yaf_Config_Ini::offsetUnset</a> — The offsetUnset purpose</li><li><a href="yaf-config-ini.readonly.php">Yaf_Config_Ini::readonly</a> — The readonly purpose</li><li><a href="yaf-config-ini.rewind.php">Yaf_Config_Ini::rewind</a> — The rewind purpose</li><li><a href="yaf-config-ini.set.php">Yaf_Config_Ini::__set</a> — The __set purpose</li><li><a href="yaf-config-ini.toarray.php">Yaf_Config_Ini::toArray</a> — Returns a PHP array</li><li><a href="yaf-config-ini.valid.php">Yaf_Config_Ini::valid</a> — The valid purpose</li></ul>
</div>
<?php manual_footer(); ?>