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
    0 => 'class.yaf-session.php',
    1 => 'Yaf_Session',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-supervar.route.php',
    1 => 'Yaf_Route_Supervar::route',
  ),
  'next' => 
  array (
    0 => 'yaf-session.clone.php',
    1 => 'Yaf_Session::__clone',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-session.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-session" class="reference">

 <h1 class="title">The Yaf_Session class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-session.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="yaf-session.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Session</strong>
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
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
     <span class="modifier">static</span>
      <var class="varname"><a href="class.yaf-session.php#yaf-session.props.instance">$<var class="varname">_instance</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-session.php#yaf-session.props.session">$<var class="varname">_session</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-session.php#yaf-session.props.started">$<var class="varname">_started</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.clone.php" class="methodname">__clone</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="methodname"><a href="yaf-session.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.count.php" class="methodname">count</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.current.php" class="methodname">current</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.del.php" class="methodname">del</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.get.php" class="methodname">__get</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.getinstance.php" class="methodname">getInstance</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.has.php" class="methodname">has</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.isset.php" class="methodname">__isset</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.key.php" class="methodname">key</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.next.php" class="methodname">next</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.offsetexists.php" class="methodname">offsetExists</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.offsetget.php" class="methodname">offsetGet</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.offsetset.php" class="methodname">offsetSet</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.offsetunset.php" class="methodname">offsetUnset</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.rewind.php" class="methodname">rewind</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.set.php" class="methodname">__set</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.sleep.php" class="methodname">__sleep</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.start.php" class="methodname">start</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.unset.php" class="methodname">__unset</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.valid.php" class="methodname">valid</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-session.wakeup.php" class="methodname">__wakeup</a></span>
    ( <span class="methodparam">void</span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-session.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-session.props.instance"><var class="varname"><var class="varname">_instance</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-session.props.session"><var class="varname"><var class="varname">_session</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-session.props.started"><var class="varname"><var class="varname">_started</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 



























































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-session.clone.php">Yaf_Session::__clone</a> — The __clone purpose</li><li><a href="yaf-session.construct.php">Yaf_Session::__construct</a> — The __construct purpose</li><li><a href="yaf-session.count.php">Yaf_Session::count</a> — The count purpose</li><li><a href="yaf-session.current.php">Yaf_Session::current</a> — The current purpose</li><li><a href="yaf-session.del.php">Yaf_Session::del</a> — The del purpose</li><li><a href="yaf-session.get.php">Yaf_Session::__get</a> — The __get purpose</li><li><a href="yaf-session.getinstance.php">Yaf_Session::getInstance</a> — The getInstance purpose</li><li><a href="yaf-session.has.php">Yaf_Session::has</a> — The has purpose</li><li><a href="yaf-session.isset.php">Yaf_Session::__isset</a> — The __isset purpose</li><li><a href="yaf-session.key.php">Yaf_Session::key</a> — The key purpose</li><li><a href="yaf-session.next.php">Yaf_Session::next</a> — The next purpose</li><li><a href="yaf-session.offsetexists.php">Yaf_Session::offsetExists</a> — The offsetExists purpose</li><li><a href="yaf-session.offsetget.php">Yaf_Session::offsetGet</a> — The offsetGet purpose</li><li><a href="yaf-session.offsetset.php">Yaf_Session::offsetSet</a> — The offsetSet purpose</li><li><a href="yaf-session.offsetunset.php">Yaf_Session::offsetUnset</a> — The offsetUnset purpose</li><li><a href="yaf-session.rewind.php">Yaf_Session::rewind</a> — The rewind purpose</li><li><a href="yaf-session.set.php">Yaf_Session::__set</a> — The __set purpose</li><li><a href="yaf-session.sleep.php">Yaf_Session::__sleep</a> — The __sleep purpose</li><li><a href="yaf-session.start.php">Yaf_Session::start</a> — The start purpose</li><li><a href="yaf-session.unset.php">Yaf_Session::__unset</a> — The __unset purpose</li><li><a href="yaf-session.valid.php">Yaf_Session::valid</a> — The valid purpose</li><li><a href="yaf-session.wakeup.php">Yaf_Session::__wakeup</a> — The __wakeup purpose</li></ul>
</div>
<?php manual_footer(); ?>