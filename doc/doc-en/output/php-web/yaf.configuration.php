<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/yaf.setup.inc";
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
    0 => 'yaf.configuration.php',
    1 => 'Runtime Configuration',
  ),
  'up' => 
  array (
    0 => 'yaf.setup.php',
    1 => 'Installing/Configuring',
  ),
  'prev' => 
  array (
    0 => 'yaf.installation.php',
    1 => 'Installation',
  ),
  'next' => 
  array (
    0 => 'yaf.resources.php',
    1 => 'Resource Types',
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
<div id="yaf.configuration" class="section">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>Yaf Configure Options</strong></caption>
   
    <thead>
     <tr>
      <th>Name</th>
      <th>Default</th>
      <th>Changeable</th>
      <th>Changelog</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><a href="yaf.configuration.php#ini.yaf.library" class="link">yaf.library</a></td>
      <td class="empty">&nbsp;</td>
      <td>its PHP_INI_ALL value</td>
      <td></td>
     </tr>

     <tr>
      <td><a href="yaf.configuration.php#ini.yaf.action-prefer" class="link">yaf.action_prefer</a></td>
      <td>0</td>
      <td>its PHP_INI_ALL value</td>
      <td></td>
     </tr>

     <tr>
      <td><a href="yaf.configuration.php#ini.yaf.lowcase-path" class="link">yaf.lowcase_path</a></td>
      <td>0</td>
      <td>its PHP_INI_ALL value</td>
      <td></td>
     </tr>

     <tr>
      <td><a href="yaf.configuration.php#ini.yaf.use-spl-autoload" class="link">yaf.use_spl_autoload</a></td>
      <td>0</td>
      <td>its PHP_INI_ALL value</td>
      <td></td>
     </tr>

     <tr>
      <td><a href="yaf.configuration.php#ini.yaf.forward-limit" class="link">yaf.forward_limit</a></td>
      <td>5</td>
      <td>its PHP_INI_ALL value</td>
      <td></td>
     </tr>

     <tr>
      <td><a href="yaf.configuration.php#ini.yaf.name-suffix" class="link">yaf.name_suffix</a></td>
      <td>1</td>
      <td>its PHP_INI_ALL value</td>
      <td></td>
     </tr>

     <tr>
      <td><a href="yaf.configuration.php#ini.yaf.name-separator" class="link">yaf.name_separator</a></td>
      <td class="empty">&nbsp;</td>
      <td>its PHP_INI_ALL value</td>
      <td></td>
     </tr>

     <tr>
      <td><a href="yaf.configuration.php#ini.yaf.cache-config" class="link">yaf.cache_config</a></td>
      <td>0</td>
      <td>its PHP_INI_SYSTEM value</td>
      <td></td>
     </tr>

     <tr>
      <td><a href="yaf.configuration.php#ini.yaf.environ" class="link">yaf.environ</a></td>
      <td>product</td>
      <td>its PHP_INI_SYSTEM value</td>
      <td></td>
     </tr>

     <tr>
      <td><a href="yaf.configuration.php#ini.yaf.use-namespace" class="link">yaf.use_namespace</a></td>
      <td>0</td>
      <td>its PHP_INI_ALL value</td>
      <td></td>
     </tr>

    </tbody>
   
  </table>

 </p>

 <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>

 <p class="para">
  <dl>

   
     <dt id="ini.yaf.library">
      <code class="parameter">yaf.library</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
        The global library path, Yaf_loader will search global library in this
        directory.      
      </p>
     </dd>

    
    
     <dt id="ini.yaf.action-prefer">
      <code class="parameter">yaf.action_prefer</code>
      <span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>
     </dt>

     <dd>

      <p class="para">
        If there is only one part in PATH_INFO, should it consider as a
        controller or action.
      </p>
      <p class="para">
        If this configure On, it will be considered as a Action name.
      </p>
     </dd>

    
    
     <dt id="ini.yaf.lowcase-path">
      <code class="parameter">yaf.lowcase_path</code>
      <span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>
     </dt>

     <dd>

      <p class="para">
       Whether lowercase all the path during the class autoloading.
      </p>
     </dd>

    
    
     <dt id="ini.yaf.use-spl-autoload">
      <code class="parameter">yaf.use_spl_autoload</code>
      <span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>
     </dt>

     <dd>

      <p class="para">
        When this value is On, if <a href="class.yaf-loader.php" class="classname">Yaf_Loader</a> can not
        find a class, it will return <strong><code>FALSE</code></strong>, then give chance to other auto
        load function to be called.      
      </p>
      <p class="para">
        When this value is Off, if <a href="class.yaf-loader.php" class="classname">Yaf_Loader</a> can not
        find a class, it will return <strong><code>TRUE</code></strong>, and make the class autoloading
        failed immediately.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        Yaf will register its loader during a instantiation of  
        <a href="class.yaf-application.php" class="classname">Yaf_Application</a>, so any other auto loaders
        which is register before the instantiation will be called before
        <span class="methodname"><a href="yaf-loader.autoload.php" class="methodname">Yaf_Loader::autoload()</a></span>.
       </p>
      </p></blockquote>
      <p class="para">
        When this value is Off(default),
        <span class="methodname"><a href="yaf-loader.autoload.php" class="methodname">Yaf_Loader::autoload()</a></span> will always return
        <strong><code>TRUE</code></strong>.
      </p>
     </dd>

    
    
     <dt id="ini.yaf.forward-limit">
      <code class="parameter">yaf.forward_limit</code>
      <span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>
     </dt>

     <dd>

      <p class="para">
        The max forward count,  default is 5. that means you can have a max
        value of 5 in the forward stack.
       </p>
      <p class="para">
       This is a protection for prevent recursive
       <span class="methodname"><a href="yaf-controller-abstract.forward.php" class="methodname">Yaf_Controller_Abstract::forward()</a></span>.
      </p>
     </dd>

    
    
     <dt id="ini.yaf.name-suffix">
      <code class="parameter">yaf.name_suffix</code>
      <span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>
     </dt>

     <dd>

      <p class="para">
       When this On, Yaf_Loader will identify a class by it&#039;s suffix to decide
       whether it is a MVC Class.
      </p>
      <p class="para">
       When this Off, Yaf_Loader will look at the prefix of the class name.
      </p>
     </dd>

    
    
     <dt id="ini.yaf.name-separator">
      <code class="parameter">yaf.name_separator</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
       When this is not empty, Yaf_Loader will identify the class suffix and
       string value of this.
      </p>
      <p class="para">
       For example, when this value is &quot;_&quot;, Yaf_Loader will take Index_Controller as
       a Controller Class, IndexController as a normal class.
      </p>
     </dd>

    
    
     <dt id="ini.yaf.cache-config">
      <code class="parameter">yaf.cache_config</code>
      <span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>
     </dt>

     <dd>

      <p class="para">
        If this is On, and in the meantime you are using ini config file as the
        parameter of <span class="methodname"><strong>Yaf_Application()</strong></span>, the
        compiling result of the ini config file will be cached in the PHP
        process.
        <blockquote class="note"><p><strong class="note">Note</strong>: 
         <p class="para">
          Yaf examine the mtime of the ini file, if it was changed since
          last compiling, Yaf will reload it.
         </p>
        </p></blockquote>
        <div class="warning"><strong class="warning">Warning</strong>
         <p class="para">
          Yaf use the ini file path as the cache entry key, so do use the
          absolute path in ini file path, otherwise there might be some
          conflicts if two application use the same relative path of ini
          config.
         </p>
        </div>
      </p>
     </dd>

    
    
     <dt id="ini.yaf.environ">
      <code class="parameter">yaf.environ</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>

     <dd>

      <p class="para">
        This value is &quot;product&quot; by default, used for Yaf to fetch the config
        section of a ini config file.
       </p>
       <p class="para">
        That is, if this value is &quot;product&quot;, Yaf will use the section named
        &quot;product&quot; in the ini config file(the first parameter of the
        <a href="class.yaf-application.php" class="classname">Yaf_Application</a>) as the final config of the
        <a href="class.yaf-application.php" class="classname">Yaf_Application</a>.
      </p>
     </dd>

    

    
     <dt id="ini.yaf.use-namespace">
      <code class="parameter">yaf.use_namespace</code>
      <span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>
     </dt>

     <dd>

      <p class="para">
       Only works as of PHP 5.3, if this value is On, All classes of Yaf will
       named in namespace style.
      </p>
      <p class="para">
       For example:
       <div class="example-contents screen">
        <div class="cdata"><pre>
Yaf_Route_Rewrite =&gt; \Yaf\Route\Rewrite
Yaf_Request_Http  =&gt; \Yaf\Request\Http
        </pre></div>
       </div>
       There is a exception, that is some classes like
       <a href="class.yaf-controller-abstract.php" class="classname">Yaf_Controller_Abstract</a>.
       The last component is a keyword of PHP, could not be used as a class
       name, so for such classes:
       <div class="example-contents screen">
        <div class="cdata"><pre>
Yaf_Controller_Abstract =&gt; \Yaf\Controller_Abstract
Yaf_Route_Static =&gt; \Yaf\Route_Static
        </pre></div>
       </div>
      </p>
     </dd>

    

  </dl>

 </p>
</div><?php manual_footer(); ?>