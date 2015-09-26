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
    0 => 'yaf.constants.php',
    1 => 'Predefined Constants',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf.resources.php',
    1 => 'Resource Types',
  ),
  'next' => 
  array (
    0 => 'yaf.tutorials.php',
    1 => 'Examples',
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
<div id="yaf.constants" class="appendix">
 <h1>Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <p class="para">
  <dl>

   
    <dt id="constant.yaf-version">
     <strong><code>YAF_VERSION</code></strong>
     (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
    </dt>

    <dd>

     <span class="simpara">
     </span>
    </dd>

   
   
    <dt id="constant.yaf-environ">
     <strong><code>YAF_ENVIRON</code></strong>
     (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
    </dt>

    <dd>

     <span class="simpara">
     </span>
    </dd>

   
   
    <dt id="constant.yaf-err-startup-failed">
     <strong><code>YAF_ERR_STARTUP_FAILED</code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>)
    </dt>

    <dd>

     <span class="simpara">
     </span>
    </dd>

   
   
    <dt id="constant.yaf-err-route-failed">
     <strong><code>YAF_ERR_ROUTE_FAILED</code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>)
    </dt>

    <dd>

     <span class="simpara">
     </span>
    </dd>

   
   
    <dt id="constant.yaf-err-dispatch-failed">
     <strong><code>YAF_ERR_DISPATCH_FAILED</code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>)
    </dt>

    <dd>

     <span class="simpara">
     </span>
    </dd>

   
   
    <dt id="constant.yaf-err-autoload-failed">
     <strong><code>YAF_ERR_AUTOLOAD_FAILED</code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>)
    </dt>

    <dd>

     <span class="simpara">
     </span>
    </dd>

   
   
    <dt id="constant.yaf-err-notfound-module">
     <strong><code>YAF_ERR_NOTFOUND_MODULE</code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>)
    </dt>

    <dd>

     <span class="simpara">
     </span>
    </dd>

   
   
    <dt id="constant.yaf-err-notfound-controller">
     <strong><code>YAF_ERR_NOTFOUND_CONTROLLER</code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>)
    </dt>

    <dd>

     <span class="simpara">
     </span>
    </dd>

   
   
    <dt id="constant.yaf-err-notfound-action">
     <strong><code>YAF_ERR_NOTFOUND_ACTION</code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>)
    </dt>

    <dd>

     <span class="simpara">
     </span>
    </dd>

   
   
    <dt id="constant.yaf-err-notfound-view">
     <strong><code>YAF_ERR_NOTFOUND_VIEW</code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>)
    </dt>

    <dd>

     <span class="simpara">
     </span>
    </dd>

   
   
    <dt id="constant.yaf-err-call-failed">
     <strong><code>YAF_ERR_CALL_FAILED</code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>)
    </dt>

    <dd>

     <span class="simpara">
     </span>
    </dd>

   
   
    <dt id="constant.yaf-err-type-error">
     <strong><code>YAF_ERR_TYPE_ERROR</code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span>)
    </dt>

    <dd>

     <span class="simpara">
     </span>
    </dd>

   
  </dl>

 </p>
</div>
<?php manual_footer(); ?>