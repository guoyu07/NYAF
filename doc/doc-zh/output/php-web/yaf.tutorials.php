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
    0 => 'yaf.tutorials.php',
    1 => 'Examples',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf.constants.php',
    1 => 'Predefined Constants',
  ),
  'next' => 
  array (
    0 => 'yaf.appconfig.php',
    1 => 'Application Configuration',
  ),
  'alternatives' => 
  array (
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="yaf.tutorials" class="chapter">
 <h1>Examples</h1>


 <div class="section">
  <div class="example" id="example-1">
   <p><strong>Example #1 A classic Application directory layout</strong></p>
   <div class="example-contents screen">
<div class="cdata"><pre>
- index.php 
- .htaccess 
+ conf
  |- application.ini //application config
- application/
  - Bootstrap.php   
  + controllers
     - Index.php //default controller
  + views    
     |+ index   
        - index.phtml //view template for default action
  + modules 
  - library
  - models  
  - plugins 
</pre></div>
   </div>
  </div>
 </div>

 <div class="section">
 <div class="example" id="example-2">
  <p><strong>Example #2 Entry</strong></p>
  <div class="example-contents"><p>index.php in the top directory is the only way in of the application, you should rewrite all request to it(you can use .htaccess in Apache+php_mod) </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />define</span><span style="color: #007700">(</span><span style="color: #DD0000">"APPLICATION_PATH"</span><span style="color: #007700">,&nbsp;&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$app&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">(</span><span style="color: #0000BB">APPLICATION_PATH&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"/conf/application.ini"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">()&nbsp;</span><span style="color: #FF8000">//call&nbsp;bootstrap&nbsp;methods&nbsp;defined&nbsp;in&nbsp;Bootstrap.php<br />&nbsp;</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

 </div>
 </div>

 <div class="section">
 <div class="example" id="example-3">
  <p><strong>Example #3 Rewrite rule</strong></p>
  <div class="example-contents screen">
<div class="cdata"><pre>
#for apache (.htaccess)
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule .* index.php

#for nginx
server {
  listen ****;
  server_name  domain.com;
  root   document_root;
  index  index.php index.html index.htm;

  if (!-e $request_filename) {
    rewrite ^/(.*)  /index.php/$1 last;
  }
}

#for lighttpd
$HTTP[&quot;host&quot;] =~ &quot;(www.)?domain.com$&quot; {
  url.rewrite = (
     &quot;^/(.+)/?$&quot;  =&gt; &quot;/index.php/$1&quot;,
  )
}
</pre></div>
  </div>
 </div>
 </div>

 <div class="section">
 <div class="example" id="example-4">
  <p><strong>Example #4 Application config</strong></p>
   <div class="example-contents">
<div class="inicode"><pre class="inicode">[yaf]
;APPLICATION_PATH is the constant defined in index.php
application.directory=APPLICATION_PATH &quot;/application/&quot; 

;product section inherit from yaf section
[product:yaf]
foo=bar</pre>
</div>
   </div>

 </div>
 </div>

 <div class="section">
 <div class="example" id="example-5">
  <p><strong>Example #5 Default controller</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">IndexController&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Controller_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;default&nbsp;action&nbsp;*/<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">indexAction</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_view</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">word&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"hello&nbsp;world"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//or<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;$this-&gt;getView()-&gt;word&nbsp;=&nbsp;"hello&nbsp;world";<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

 </div>
 </div>

 <div class="section">
 <div class="example" id="example-6">
  <p><strong>Example #6 Default view template</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
&lt;html&gt;<br />&nbsp;&lt;head&gt;<br />&nbsp;&nbsp;&nbsp;&lt;title&gt;Hello&nbsp;World&lt;/title&gt;<br />&nbsp;&lt;/head&gt;<br />&nbsp;&lt;body&gt;<br />&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$word</span><span style="color: #007700">;</span><span style="color: #0000BB">?&gt;<br /></span>&nbsp;&lt;/body&gt;<br />&lt;/html&gt;</span>
</code></div>
   </div>

  </div>
  </div>

 <div class="section">
  <div class="example" id="example-7">
   <p><strong>Example #7 Run the Applicatioin</strong></p>
    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
&lt;html&gt;
 &lt;head&gt;
   &lt;title&gt;Hello World&lt;/title&gt;
 &lt;/head&gt;
 &lt;body&gt;
   hello world
 &lt;/body&gt;
&lt;/html&gt;
</pre></div>
   </div> 
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     you can also generate above example by use Yaf codes generator, which
     could be found here yaf@github.
    </p>
   </p></blockquote>
  </div>
 </div>

</div>
<?php manual_footer(); ?>