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
    0 => 'yaf.appconfig.php',
    1 => 'Application Configuration',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf.tutorials.php',
    1 => 'Examples',
  ),
  'next' => 
  array (
    0 => 'class.yaf-application.php',
    1 => 'Yaf_Application',
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
<div id="yaf.appconfig" class="chapter">
 <h1>Application Configuration</h1>

 <p class="para">
  You should give an array of config or an ini config file(see
  <a href="class.yaf-config-ini.php" class="classname">Yaf_Config_Ini</a>) path to
  <span class="methodname"><a href="yaf-application.construct.php" class="methodname">Yaf_Application::__construct()</a></span>. 
 </p>
 <p class="para">
  Yaf will merge the application configurations and user configurations
  automatically. The application configurations have prefix &quot;yaf.&quot; or
  &quot;application.&quot;. If both &quot;yaf.&quot; and &quot;application.&quot; exist, &quot;application.&quot;
  will be accepcted preferentially.
  <div class="example" id="example-8">
   <p><strong>Example #1 An PHP array example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;&nbsp;$configs&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"application"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"directory"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"dispatcher"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"catchException"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"view"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"ext"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"phtml"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
  <div class="example" id="example-9">
   <p><strong>Example #2 An ini file example</strong></p>
   <div class="example-contents">
<div class="inicode"><pre class="inicode">[yaf]
yaf.directory = APPLICATION_PATH &quot;/appliation&quot;
yaf.dispatcher.catchException = 0

[product : yaf]
; user configuration list here</pre>
</div>
   </div>

  </div>
  </p>
  <p class="para">
  <table class="doctable table">
   <caption><strong>Yaf Application Config</strong></caption>
   
    <thead>
     <tr>
      <th>Name</th>
      <th>Default</th>
      <th>Changelog</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>application.directory</td>
      <td class="empty">&nbsp;</td>
      <td></td>
     </tr>

     <tr>
      <td>application.ext</td>
      <td>&quot;php&quot;</td>
      <td></td>
     </tr>

     <tr>
      <td>application.view.ext</td>
      <td>&quot;phtml&quot;</td>
      <td></td>
     </tr>

     <tr>
      <td>application.modules</td>
      <td>&quot;index&quot;</td>
      <td></td>
     </tr>

     <tr>
      <td>application.library</td>
      <td>application.directory . &quot;/library&quot;</td>
      <td></td>
     </tr>

     <tr>
      <td>application.library.directory</td>
      <td>application.directory . &quot;/library&quot;</td>
      <td></td>
     </tr>

     <tr>
      <td>application.library.namespace</td>
      <td>&quot;&quot;</td>
      <td></td>
     </tr>

     <tr>
      <td>application.bootstrap</td>
      <td>application.directory . &quot;/Bootstrap&quot; . application.ext</td>
      <td></td>
     </tr>

     <tr>
      <td>application.baseUri</td>
      <td>&quot;&quot;</td>
      <td></td>
     </tr>

     <tr>
      <td>application.dispatcher.defaultRoute</td>
      <td class="empty">&nbsp;</td>
      <td></td>
     </tr>

     <tr>
      <td>application.dispatcher.throwException</td>
      <td>1</td>
      <td></td>
     </tr>

     <tr>
      <td>application.dispatcher.catchException</td>
      <td>0</td>
      <td></td>
     </tr>

     <tr>
      <td>application.dispatcher.defaultModule</td>
      <td>&quot;index&quot;</td>
      <td></td>
     </tr>

     <tr>
      <td>application.dispatcher.defaultController</td>
      <td>&quot;index&quot;</td>
      <td></td>
     </tr>

     <tr>
      <td>application.dispatcher.defaultAction</td>
      <td>&quot;index&quot;</td>
      <td></td>
     </tr>

     <tr>
      <td>application.system</td>
      <td class="empty">&nbsp;</td>
      <td></td>
     </tr>

    </tbody>
   
  </table>

 </p>

 <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>

 <p class="para">
  <dl>

   
     <dt id="configuration.yaf.directory">
      <code class="parameter">application.directory</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       The directory of the application, that is the folder which contains the
       &quot;controllers&quot;, &quot;views&quot;, &quot;models&quot;, &quot;plugins&quot; folders.
      </p>
      <p class="para">
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
            This config entry is the only one which doesn&#039;t has a default value.
            You should always define it manually.
        </p>
       </p></blockquote>
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.ext">
      <code class="parameter">application.ext</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       The file ext of the PHP script, used in class autoloading(
       <a href="class.yaf-loader.php" class="classname">Yaf_Loader</a>).
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.view.ext">
      <code class="parameter">application.view.ext</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       The file ext of the view template scripts.
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.modules">
      <code class="parameter">application.modules</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       A comma-separated list of the registered modules, used in the route
       process, especially while there are more than three segments in the PATH_INFO, 
      </p>
      <p class="para">
       Yaf need a way to find out whether the first segment is a module name or not.
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.library">
      <code class="parameter">application.library</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       The local library directory, see <a href="class.yaf-loader.php" class="classname">Yaf_Loader</a> and
       <a href="yaf.configuration.php#ini.yaf.library" class="link">yaf.library</a>.
       </p>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
            After Yaf 2.1.6, this config entry can be an array. The library path
            will try to use the items setted in <a href="yaf.appconfig.php#configuration.yaf.library.directory" class="link">application.library.directory</a>
        </p>
       </p></blockquote>
     </dd>

    
    
     <dt id="configuration.yaf.library.directory">
      <code class="parameter">application.library.directory</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       Alias of <a href="yaf.appconfig.php#configuration.yaf.library" class="link">application.library</a>. Introduced
       in Yaf 2.1.6
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.library.namespace">
      <code class="parameter">application.library.namespace</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       A comma-separated prefix of local library namespace.
      </p>
      <p class="para">
       Introduced in Yaf 2.1.6
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.bootstrap">
      <code class="parameter">application.bootstrap</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       A absolute path of the Bootstrap class script.
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.baseuri">
      <code class="parameter">application.baseUri</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       Used to remove a fixed prefix of request uri in route process. 
       Take a example, comes a request with request uri
       &quot;/prefix/controller/action&quot;. if you set application.baseUri to
       &quot;/prefix&quot;, then only &quot;/controller/action&quot; will take as the PATH_INFO in
       route process.
      </p>
      <p class="para">
       In generally, there is no need to set this value. 
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.dispatcher.throwexception">
      <code class="parameter">application.dispatcher.throwException</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>

     <dd>

      <p class="para">
        If it set to On, Yaf will throw an exception while some error occurring.
        See also <span class="methodname"><a href="yaf-dispatcher.throwexception.php" class="methodname">Yaf_Dispatcher::throwException()</a></span>.
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.dispatcher.catchexception">
      <code class="parameter">application.dispatcher.catchException</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>

     <dd>

      <p class="para">
       If it set to On, Yaf will forward to Error controller/Action while
       there is an unhandled exception. See also
       <span class="methodname"><a href="yaf-dispatcher.catchexception.php" class="methodname">Yaf_Dispatcher::catchException()</a></span>.
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.dispatcher.defaulRoute">
      <code class="parameter">application.dispatcher.defaultRoute</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       The default Route, if it is not specificed, Static route will be used
       as default. See:
       <span class="methodname"><a href="yaf-router.addroute.php" class="methodname">Yaf_Router::addRoute()</a></span>.
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.dispatcher.defaultmodule">
      <code class="parameter">application.dispatcher.defaultModule</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       The default module name, see also
       <span class="methodname"><a href="yaf-dispatcher.setdefaultmodule.php" class="methodname">Yaf_Dispatcher::setDefaultModule()</a></span>.
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.dispatcher.defaultcontroller">
      <code class="parameter">application.dispatcher.defaultController</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       The default controller name, see also
       <span class="methodname"><a href="yaf-dispatcher.setdefaultcontroller.php" class="methodname">Yaf_Dispatcher::setDefaultController()</a></span>.
      </p>
     </dd>

    
    
     <dt id="configuration.yaf.dispatcher.defaultaction">
      <code class="parameter">application.dispatcher.defaultAction</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       The default action name, see also
       <span class="methodname"><a href="yaf-dispatcher.setdefaultaction.php" class="methodname">Yaf_Dispatcher::setDefaultAction()</a></span>.
      </p>
     </dd>

    

    
     <dt id="configuration.yaf.system">
      <code class="parameter">application.system</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       Set yaf runtime configure in application.ini, like:
       <a href="yaf.configuration.php#ini.yaf.lowcase-path" class="link">application.system.lowcase_path</a>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
        only those PHP_INI_ALL configures can be set in this way
       </p>
       </p></blockquote>
      </p>
     </dd>

    

  </dl>

 </p>
</div>
<?php manual_footer(); ?>