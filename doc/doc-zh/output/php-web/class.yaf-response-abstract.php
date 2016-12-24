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
    0 => 'class.yaf-response-abstract.php',
    1 => 'Yaf_Response_Abstract',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-request-simple.isxmlhttprequest.php',
    1 => 'Yaf_Request_Simple::isXmlHttpRequest',
  ),
  'next' => 
  array (
    0 => 'yaf-response-abstract.appendbody.php',
    1 => 'Yaf_Response_Abstract::appendBody',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-response-abstract.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-response-abstract" class="reference">

 <h1 class="title">The Yaf_Response_Abstract class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-response-abstract.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="yaf-response-abstract.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Response_Abstract</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div> 
    <div class="fieldsynopsis"> 
     <span class="modifier">const</span> 
     <span class="type">string</span> 
      <var class="fieldsynopsis_varname"><var class="varname">DEFAULT_BODY</var></var> 
     <span class="initializer"> = &quot;content&quot;</span> 
    ;</div>
 

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-response-abstract.php#yaf-response-abstract.props.header">$<var class="varname">_header</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-response-abstract.php#yaf-response-abstract.props.body">$<var class="varname">_body</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-response-abstract.php#yaf-response-abstract.props.sendheader">$<var class="varname">_sendheader</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-response-abstract.appendbody.php" class="methodname">appendBody</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$content</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-response-abstract.clearbody.php" class="methodname">clearBody</a></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-response-abstract.clearheaders.php" class="methodname">clearHeaders</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-response-abstract.clone.php" class="methodname">__clone</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="yaf-response-abstract.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-response-abstract.destruct.php" class="methodname">__destruct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="yaf-response-abstract.getbody.php" class="methodname">getBody</a></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-response-abstract.getheader.php" class="methodname">getHeader</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-response-abstract.prependbody.php" class="methodname">prependBody</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$content</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-response-abstract.response.php" class="methodname">response</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">protected</span> <span class="type">void</span> <span class="methodname"><a href="yaf-response-abstract.setallheaders.php" class="methodname">setAllHeaders</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-response-abstract.setbody.php" class="methodname">setBody</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$content</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$key</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-response-abstract.setheader.php" class="methodname">setHeader</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-response-abstract.setredirect.php" class="methodname">setRedirect</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-response-abstract.tostring.php" class="methodname">__toString</a></span>
    ( <span class="methodparam">void</span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-response-abstract.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-response-abstract.props.header"><var class="varname"><var class="varname">_header</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-response-abstract.props.body"><var class="varname"><var class="varname">_body</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-response-abstract.props.sendheader"><var class="varname"><var class="varname">_sendheader</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 










































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-response-abstract.appendbody.php">Yaf_Response_Abstract::appendBody</a> — append to body</li><li><a href="yaf-response-abstract.clearbody.php">Yaf_Response_Abstract::clearBody</a> — The clearBody purpose</li><li><a href="yaf-response-abstract.clearheaders.php">Yaf_Response_Abstract::clearHeaders</a> — The clearHeaders purpose</li><li><a href="yaf-response-abstract.clone.php">Yaf_Response_Abstract::__clone</a> — The __clone purpose</li><li><a href="yaf-response-abstract.construct.php">Yaf_Response_Abstract::__construct</a> — The __construct purpose</li><li><a href="yaf-response-abstract.destruct.php">Yaf_Response_Abstract::__destruct</a> — The __destruct purpose</li><li><a href="yaf-response-abstract.getbody.php">Yaf_Response_Abstract::getBody</a> — Retrieve a exists content</li><li><a href="yaf-response-abstract.getheader.php">Yaf_Response_Abstract::getHeader</a> — The getHeader purpose</li><li><a href="yaf-response-abstract.prependbody.php">Yaf_Response_Abstract::prependBody</a> — The prependBody purpose</li><li><a href="yaf-response-abstract.response.php">Yaf_Response_Abstract::response</a> — send response</li><li><a href="yaf-response-abstract.setallheaders.php">Yaf_Response_Abstract::setAllHeaders</a> — The setAllHeaders purpose</li><li><a href="yaf-response-abstract.setbody.php">Yaf_Response_Abstract::setBody</a> — Set content to response</li><li><a href="yaf-response-abstract.setheader.php">Yaf_Response_Abstract::setHeader</a> — The setHeader purpose</li><li><a href="yaf-response-abstract.setredirect.php">Yaf_Response_Abstract::setRedirect</a> — The setRedirect purpose</li><li><a href="yaf-response-abstract.tostring.php">Yaf_Response_Abstract::__toString</a> — The __toString purpose</li></ul>
</div>
<?php manual_footer(); ?>