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
    0 => 'class.yaf-router.php',
    1 => 'Yaf_Router',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-rewrite.route.php',
    1 => 'Yaf_Route_Rewrite::route',
  ),
  'next' => 
  array (
    0 => 'yaf-router.addconfig.php',
    1 => 'Yaf_Router::addConfig',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-router.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-router" class="reference">

 <h1 class="title">The Yaf_Router class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-router.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
   <strong class="classname">Yaf_Router</strong> is the standard framework router. Routing is
   the process of taking a URI endpoint (that part of the URI which comes
   after the base URI: see <span class="methodname"><a href="yaf-request-abstract.setbaseuri.php" class="methodname">Yaf_Request_Abstract::setBaseUri()</a></span>)
   and decomposing it into parameters to determine which module, controller, and
   action of that controller should receive the request. This values of the module,
   controller, action and other parameters are packaged into a
   <a href="class.yaf-request-abstract.php" class="classname">Yaf_Request_Abstract</a> object which is then processed by
   <a href="class.yaf-dispatcher.php" class="classname">Yaf_Dispatcher</a>. Routing occurs only once: when the request
   is initially received and before the first controller is dispatched.

   <strong class="classname">Yaf_Router</strong> is designed to allow for mod_rewrite-like
   functionality using pure PHP structures. It is very loosely based on Ruby
   on Rails routing and does not require any prior knowledge of webserver URL
   rewriting. It is designed to work with a single Apache mod_rewrite rule
   (one of):
   <div class="example" id="example-71">
    <p><strong>Example #1 Rewrite rule for Apache</strong></p>
   <div class="example-contents">
<div class="confcode"><pre class="confcode">RewriteEngine on
RewriteRule !\.(js|ico|gif|jpg|png|css|html)$ index.php</pre>
</div>
   </div>

   </div>
   or (preferred):
   <div class="example" id="example-72">
   <p><strong>Example #2 Rewrite rule for Apache</strong></p>
   <div class="example-contents">
<div class="confcode"><pre class="confcode">RewriteEngine On
RewriteCond %{REQUEST_FILENAME} -s [OR]
RewriteCond %{REQUEST_FILENAME} -l [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^.*$ - [NC,L]
RewriteRule ^.*$ index.php [NC,L]</pre>
</div>
   </div>

  </div>
   If using Lighttpd, the following rewrite rule is valid:
   <div class="example" id="example-73">
    <p><strong>Example #3 Rewrite rule for Lighttpd</strong></p>
   <div class="example-contents">
<div class="confcode"><pre class="confcode">url.rewrite-once = (
  &quot;.*\?(.*)$&quot; =&gt; &quot;/index.php?$1&quot;,
  &quot;.*\.(js|ico|gif|jpg|png|css|html)$&quot; =&gt; &quot;$0&quot;,
  &quot;&quot; =&gt; &quot;/index.php&quot;
)</pre>
</div>
   </div>

  </div>
   If using Nginx, use the following rewrite rule:
   <div class="example" id="example-74">
    <p><strong>Example #4 Rewrite rule for Nginx</strong></p>
   <div class="example-contents">
<div class="confcode"><pre class="confcode">server {
  listen ****;
  server_name  yourdomain.com;
  root   document_root;
  index  index.php index.html;

  if (!-e $request_filename) {
    rewrite ^/(.*)  /index.php/$1 last;
  }
}</pre>
</div>
   </div>

  </div>
   </p>
  </div>


  <div class="section" id="yaf-router.default">
   <h2 class="title">Default route</h2>
   <p class="para">
    <strong class="classname">Yaf_Router</strong> comes preconfigured with a default route
    <a href="class.yaf-route-static.php" class="classname">Yaf_Route_Static</a>, which will match URIs in the shape of 
    controller/action. Additionally, a module name may be specified as the first
    path element, allowing URIs of the form module/controller/action. Finally, 
    it will also match any additional parameters appended to the URI by default 
    - controller/action/var1/value1/var2/value2.
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Module name must be defined in config, considering application.module=&quot;Index,Foo,Bar&quot;,
      in this case, only index, foo and bar can be considerd as a module name.
      if doesn&#039;t config, there is only one module named &quot;Index&quot;. 
     </p>
    </p></blockquote>
   </p>

   <p class="para">
   Some examples of how such routes are matched:
   <div class="example" id="example-75">
    <p><strong>Example #5 <a href="class.yaf-route-static.php" class="classname">Yaf_Route_Static</a>(default route)example</strong></p>
   <div class="example-contents">
<div class="confcode"><pre class="confcode">// Assuming the following configure:
$conf = array(
   &quot;application&quot; =&gt; array(
      &quot;modules&quot; =&gt; &quot;Index,Blog&quot;,
   ),
);

Controller only:
http://example/news
    controller == news
Action only(when defined yaf.action_prefer=1 in php.ini)
    action  == news
 
Invalid module maps to controller name:
http://example/foo
    controller == foo
 
Module + controller:
http://example/blog/archive
    module     == blog
    controller == archive
 
Module + controller + action:
http://example/blog/archive/list
    module     == blog
    controller == archive
    action     == list
 
Module + controller + action + params:
http://example/blog/archive/list/sort/alpha/date/desc
    module     == blog
    controller == archive
    action     == list
    sort       == alpha
    date       == desc</pre>
</div>
   </div>

  </div>

  </p>
  </div>

  <div class="section" id="yaf-router.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Router</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-router.php#yaf-router.props.routes">$<var class="varname">_routes</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-router.php#yaf-router.props.current">$<var class="varname">_current</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-router.addconfig.php" class="methodname">addConfig</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-config-abstract.php" class="type Yaf_Config_Abstract">Yaf_Config_Abstract</a></span> <code class="parameter">$config</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-router.addroute.php" class="methodname">addRoute</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type"><span class="type Yaf_Route_Abstract">Yaf_Route_Abstract</span></span> <code class="parameter">$route</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="methodname"><a href="yaf-router.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-router.getcurrentroute.php" class="methodname">getCurrentRoute</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Route_Interface</span> <span class="methodname"><a href="yaf-router.getroute.php" class="methodname">getRoute</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="yaf-router.getroutes.php" class="methodname">getRoutes</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-router.route.php" class="methodname">route</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-router.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-router.props.routes"><var class="varname"><var class="varname">_routes</var></var></dt>

     <dd>

      <p class="para">
      registered routes stack
      </p>
     </dd>

    
    
     <dt id="yaf-router.props.current"><var class="varname"><var class="varname">_current</var></var></dt>

     <dd>

      <p class="para">
       after routing phase, this indicated the name of which route
       is used to route current request.

       you can get this name by
       <span class="methodname"><a href="yaf-router.getcurrentroute.php" class="methodname">Yaf_Router::getCurrentRoute()</a></span>.
      </p>
     </dd>

    
   </dl>

  </div>



 </div>

 


















































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-router.addconfig.php">Yaf_Router::addConfig</a> — Add config-defined routes into Router</li><li><a href="yaf-router.addroute.php">Yaf_Router::addRoute</a> — Add new Route into Router</li><li><a href="yaf-router.construct.php">Yaf_Router::__construct</a> — Yaf_Router constructor</li><li><a href="yaf-router.getcurrentroute.php">Yaf_Router::getCurrentRoute</a> — Get the effective route name</li><li><a href="yaf-router.getroute.php">Yaf_Router::getRoute</a> — Retrieve a route by name</li><li><a href="yaf-router.getroutes.php">Yaf_Router::getRoutes</a> — Retrieve registered routes</li><li><a href="yaf-router.route.php">Yaf_Router::route</a> — The route purpose</li></ul>
</div>
<?php manual_footer(); ?>