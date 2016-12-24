<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();

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
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'up' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'prev' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'next' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/book.yaf.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="book.yaf" class="book">
 <h1 class="title">Yet Another Framework</h1>
 

 

 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 





     
 






 





       
 






 






 





  
 





  

<ul class="chunklist chunklist_book"><li><a href="intro.yaf.php">Introduction</a></li><li><a href="yaf.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf.requirements.php">Requirements</a></li><li><a href="yaf.installation.php">Installation</a></li><li><a href="yaf.configuration.php">Runtime Configuration</a></li><li><a href="yaf.resources.php">Resource Types</a></li></ul></li><li><a href="yaf.constants.php">Predefined Constants</a></li><li><a href="yaf.tutorials.php">Examples</a></li><li><a href="yaf.appconfig.php">Application Configuration</a></li><li><a href="class.yaf-application.php">Yaf_Application</a> — The Yaf_Application class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-application.app.php">Yaf_Application::app</a> — Retrieve an Application instance</li><li><a href="yaf-application.bootstrap.php">Yaf_Application::bootstrap</a> — Call bootstrap</li><li><a href="yaf-application.clearlasterror.php">Yaf_Application::clearLastError</a> — Clear the last error info</li><li><a href="yaf-application.clone.php">Yaf_Application::__clone</a> — Yaf_Application can not be cloned</li><li><a href="yaf-application.construct.php">Yaf_Application::__construct</a> — Yaf_Application constructor</li><li><a href="yaf-application.destruct.php">Yaf_Application::__destruct</a> — The __destruct purpose</li><li><a href="yaf-application.environ.php">Yaf_Application::environ</a> — Retrive environ</li><li><a href="yaf-application.execute.php">Yaf_Application::execute</a> — Execute a callback</li><li><a href="yaf-application.getappdirectory.php">Yaf_Application::getAppDirectory</a> — Get the application directory</li><li><a href="yaf-application.getconfig.php">Yaf_Application::getConfig</a> — Retrive the config instance</li><li><a href="yaf-application.getdispatcher.php">Yaf_Application::getDispatcher</a> — Get Yaf_Dispatcher instance</li><li><a href="yaf-application.getlasterrormsg.php">Yaf_Application::getLastErrorMsg</a> — Get message of the last occurred error</li><li><a href="yaf-application.getlasterrorno.php">Yaf_Application::getLastErrorNo</a> — Get code of last occurred error</li><li><a href="yaf-application.getmodules.php">Yaf_Application::getModules</a> — Get defined module names</li><li><a href="yaf-application.run.php">Yaf_Application::run</a> — Start Yaf_Application</li><li><a href="yaf-application.setappdirectory.php">Yaf_Application::setAppDirectory</a> — Change the application directory</li><li><a href="yaf-application.sleep.php">Yaf_Application::__sleep</a> — Yaf_Application can not be serialized</li><li><a href="yaf-application.wakeup.php">Yaf_Application::__wakeup</a> — Yaf_Application can not be unserialized</li></ul></li><li><a href="class.yaf-bootstrap-abstract.php">Yaf_Bootstrap_Abstract</a> — The Yaf_Bootstrap_Abstract class</li><li><a href="class.yaf-dispatcher.php">Yaf_Dispatcher</a> — The Yaf_Dispatcher class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-dispatcher.autorender.php">Yaf_Dispatcher::autoRender</a> — Switch on/off autorendering</li><li><a href="yaf-dispatcher.catchexception.php">Yaf_Dispatcher::catchException</a> — Switch on/off exception catching</li><li><a href="yaf-dispatcher.clone.php">Yaf_Dispatcher::__clone</a> — Yaf_Dispatcher can not be cloned</li><li><a href="yaf-dispatcher.construct.php">Yaf_Dispatcher::__construct</a> — Yaf_Dispatcher constructor</li><li><a href="yaf-dispatcher.disableview.php">Yaf_Dispatcher::disableView</a> — Disable view rendering</li><li><a href="yaf-dispatcher.dispatch.php">Yaf_Dispatcher::dispatch</a> — Dispatch a request</li><li><a href="yaf-dispatcher.enableview.php">Yaf_Dispatcher::enableView</a> — enable view rendering</li><li><a href="yaf-dispatcher.flushinstantly.php">Yaf_Dispatcher::flushInstantly</a> — Switch on/off the instant flushing</li><li><a href="yaf-dispatcher.getapplication.php">Yaf_Dispatcher::getApplication</a> — Retrive the application</li><li><a href="yaf-dispatcher.getinstance.php">Yaf_Dispatcher::getInstance</a> — Retrive the dispatcher instance</li><li><a href="yaf-dispatcher.getrequest.php">Yaf_Dispatcher::getRequest</a> — Retrive the request instance</li><li><a href="yaf-dispatcher.getrouter.php">Yaf_Dispatcher::getRouter</a> — Retrive router instance</li><li><a href="yaf-dispatcher.initview.php">Yaf_Dispatcher::initView</a> — Initialize view and return it</li><li><a href="yaf-dispatcher.registerplugin.php">Yaf_Dispatcher::registerPlugin</a> — Register a plugin</li><li><a href="yaf-dispatcher.returnresponse.php">Yaf_Dispatcher::returnResponse</a> — The returnResponse purpose</li><li><a href="yaf-dispatcher.setdefaultaction.php">Yaf_Dispatcher::setDefaultAction</a> — Change default action name</li><li><a href="yaf-dispatcher.setdefaultcontroller.php">Yaf_Dispatcher::setDefaultController</a> — Change default controller name</li><li><a href="yaf-dispatcher.setdefaultmodule.php">Yaf_Dispatcher::setDefaultModule</a> — Change default module name</li><li><a href="yaf-dispatcher.seterrorhandler.php">Yaf_Dispatcher::setErrorHandler</a> — Set error handler</li><li><a href="yaf-dispatcher.setrequest.php">Yaf_Dispatcher::setRequest</a> — The setRequest purpose</li><li><a href="yaf-dispatcher.setview.php">Yaf_Dispatcher::setView</a> — Set a custom view engine</li><li><a href="yaf-dispatcher.sleep.php">Yaf_Dispatcher::__sleep</a> — Yaf_Dispatcher can not be serialized</li><li><a href="yaf-dispatcher.throwexception.php">Yaf_Dispatcher::throwException</a> — Switch on/off exception throwing</li><li><a href="yaf-dispatcher.wakeup.php">Yaf_Dispatcher::__wakeup</a> — Yaf_Dispatcher can not be unserialized</li></ul></li><li><a href="class.yaf-config-abstract.php">Yaf_Config_Abstract</a> — The Yaf_Config_Abstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-config-abstract.get.php">Yaf_Config_Abstract::get</a> — Getter</li><li><a href="yaf-config-abstract.readonly.php">Yaf_Config_Abstract::readonly</a> — Find a config whether readonly</li><li><a href="yaf-config-abstract.set.php">Yaf_Config_Abstract::set</a> — Setter</li><li><a href="yaf-config-abstract.toarray.php">Yaf_Config_Abstract::toArray</a> — Cast to array</li></ul></li><li><a href="class.yaf-config-ini.php">Yaf_Config_Ini</a> — The Yaf_Config_Ini class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-config-ini.construct.php">Yaf_Config_Ini::__construct</a> — Yaf_Config_Ini constructor</li><li><a href="yaf-config-ini.count.php">Yaf_Config_Ini::count</a> — The count purpose</li><li><a href="yaf-config-ini.current.php">Yaf_Config_Ini::current</a> — The current purpose</li><li><a href="yaf-config-ini.get.php">Yaf_Config_Ini::__get</a> — The __get purpose</li><li><a href="yaf-config-ini.isset.php">Yaf_Config_Ini::__isset</a> — The __isset purpose</li><li><a href="yaf-config-ini.key.php">Yaf_Config_Ini::key</a> — The key purpose</li><li><a href="yaf-config-ini.next.php">Yaf_Config_Ini::next</a> — The next purpose</li><li><a href="yaf-config-ini.offsetexists.php">Yaf_Config_Ini::offsetExists</a> — The offsetExists purpose</li><li><a href="yaf-config-ini.offsetget.php">Yaf_Config_Ini::offsetGet</a> — The offsetGet purpose</li><li><a href="yaf-config-ini.offsetset.php">Yaf_Config_Ini::offsetSet</a> — The offsetSet purpose</li><li><a href="yaf-config-ini.offsetunset.php">Yaf_Config_Ini::offsetUnset</a> — The offsetUnset purpose</li><li><a href="yaf-config-ini.readonly.php">Yaf_Config_Ini::readonly</a> — The readonly purpose</li><li><a href="yaf-config-ini.rewind.php">Yaf_Config_Ini::rewind</a> — The rewind purpose</li><li><a href="yaf-config-ini.set.php">Yaf_Config_Ini::__set</a> — The __set purpose</li><li><a href="yaf-config-ini.toarray.php">Yaf_Config_Ini::toArray</a> — Returns a PHP array</li><li><a href="yaf-config-ini.valid.php">Yaf_Config_Ini::valid</a> — The valid purpose</li></ul></li><li><a href="class.yaf-config-simple.php">Yaf_Config_Simple</a> — The Yaf_Config_Simple class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-config-simple.construct.php">Yaf_Config_Simple::__construct</a> — The __construct purpose</li><li><a href="yaf-config-simple.count.php">Yaf_Config_Simple::count</a> — The count purpose</li><li><a href="yaf-config-simple.current.php">Yaf_Config_Simple::current</a> — The current purpose</li><li><a href="yaf-config-simple.get.php">Yaf_Config_Simple::__get</a> — The __get purpose</li><li><a href="yaf-config-simple.isset.php">Yaf_Config_Simple::__isset</a> — The __isset purpose</li><li><a href="yaf-config-simple.key.php">Yaf_Config_Simple::key</a> — The key purpose</li><li><a href="yaf-config-simple.next.php">Yaf_Config_Simple::next</a> — The next purpose</li><li><a href="yaf-config-simple.offsetexists.php">Yaf_Config_Simple::offsetExists</a> — The offsetExists purpose</li><li><a href="yaf-config-simple.offsetget.php">Yaf_Config_Simple::offsetGet</a> — The offsetGet purpose</li><li><a href="yaf-config-simple.offsetset.php">Yaf_Config_Simple::offsetSet</a> — The offsetSet purpose</li><li><a href="yaf-config-simple.offsetunset.php">Yaf_Config_Simple::offsetUnset</a> — The offsetUnset purpose</li><li><a href="yaf-config-simple.readonly.php">Yaf_Config_Simple::readonly</a> — The readonly purpose</li><li><a href="yaf-config-simple.rewind.php">Yaf_Config_Simple::rewind</a> — The rewind purpose</li><li><a href="yaf-config-simple.set.php">Yaf_Config_Simple::__set</a> — The __set purpose</li><li><a href="yaf-config-simple.toarray.php">Yaf_Config_Simple::toArray</a> — Returns a PHP array</li><li><a href="yaf-config-simple.valid.php">Yaf_Config_Simple::valid</a> — The valid purpose</li></ul></li><li><a href="class.yaf-controller-abstract.php">Yaf_Controller_Abstract</a> — The Yaf_Controller_Abstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-controller-abstract.clone.php">Yaf_Controller_Abstract::__clone</a> — Yaf_Controller_Abstract can not be cloned</li><li><a href="yaf-controller-abstract.construct.php">Yaf_Controller_Abstract::__construct</a> — Yaf_Controller_Abstract constructor</li><li><a href="yaf-controller-abstract.display.php">Yaf_Controller_Abstract::display</a> — The display purpose</li><li><a href="yaf-controller-abstract.forward.php">Yaf_Controller_Abstract::forward</a> — foward to another action</li><li><a href="yaf-controller-abstract.getinvokearg.php">Yaf_Controller_Abstract::getInvokeArg</a> — The getInvokeArg purpose</li><li><a href="yaf-controller-abstract.getinvokeargs.php">Yaf_Controller_Abstract::getInvokeArgs</a> — The getInvokeArgs purpose</li><li><a href="yaf-controller-abstract.getmodulename.php">Yaf_Controller_Abstract::getModuleName</a> — Get module name</li><li><a href="yaf-controller-abstract.getrequest.php">Yaf_Controller_Abstract::getRequest</a> — Retrieve current request object</li><li><a href="yaf-controller-abstract.getresponse.php">Yaf_Controller_Abstract::getResponse</a> — Retrieve current response object</li><li><a href="yaf-controller-abstract.getview.php">Yaf_Controller_Abstract::getView</a> — Retrieve the view engine</li><li><a href="yaf-controller-abstract.getviewpath.php">Yaf_Controller_Abstract::getViewpath</a> — The getViewpath purpose</li><li><a href="yaf-controller-abstract.init.php">Yaf_Controller_Abstract::init</a> — Controller initializer</li><li><a href="yaf-controller-abstract.initview.php">Yaf_Controller_Abstract::initView</a> — The initView purpose</li><li><a href="yaf-controller-abstract.redirect.php">Yaf_Controller_Abstract::redirect</a> — Redirect to a URL</li><li><a href="yaf-controller-abstract.render.php">Yaf_Controller_Abstract::render</a> — Render view template</li><li><a href="yaf-controller-abstract.setviewpath.php">Yaf_Controller_Abstract::setViewpath</a> — The setViewpath purpose</li></ul></li><li><a href="class.yaf-action-abstract.php">Yaf_Action_Abstract</a> — The Yaf_Action_Abstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-action-abstract.execute.php">Yaf_Action_Abstract::execute</a> — Action entry point</li><li><a href="yaf-action-abstract.getcontroller.php">Yaf_Action_Abstract::getController</a> — Retrieve controller object</li></ul></li><li><a href="class.yaf-view-interface.php">Yaf_View_Interface</a> — The Yaf_View_Interface class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-view-interface.assign.php">Yaf_View_Interface::assign</a> — Assign value to View engine</li><li><a href="yaf-view-interface.display.php">Yaf_View_Interface::display</a> — Render and output a template</li><li><a href="yaf-view-interface.getscriptpath.php">Yaf_View_Interface::getScriptPath</a> — The getScriptPath purpose</li><li><a href="yaf-view-interface.render.php">Yaf_View_Interface::render</a> — Render a template</li><li><a href="yaf-view-interface.setscriptpath.php">Yaf_View_Interface::setScriptPath</a> — The setScriptPath purpose</li></ul></li><li><a href="class.yaf-view-simple.php">Yaf_View_Simple</a> — The Yaf_View_Simple class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-view-simple.assign.php">Yaf_View_Simple::assign</a> — Assign values</li><li><a href="yaf-view-simple.assignref.php">Yaf_View_Simple::assignRef</a> — The assignRef purpose</li><li><a href="yaf-view-simple.clear.php">Yaf_View_Simple::clear</a> — Clear Assigned values</li><li><a href="yaf-view-simple.construct.php">Yaf_View_Simple::__construct</a> — Constructor of Yaf_View_Simple</li><li><a href="yaf-view-simple.display.php">Yaf_View_Simple::display</a> — Render and display</li><li><a href="yaf-view-simple.eval.php">Yaf_View_Simple::eval</a> — Render template</li><li><a href="yaf-view-simple.get.php">Yaf_View_Simple::__get</a> — Retrieve assigned variable</li><li><a href="yaf-view-simple.getscriptpath.php">Yaf_View_Simple::getScriptPath</a> — Get templates directory</li><li><a href="yaf-view-simple.isset.php">Yaf_View_Simple::__isset</a> — The __isset purpose</li><li><a href="yaf-view-simple.render.php">Yaf_View_Simple::render</a> — Render template</li><li><a href="yaf-view-simple.set.php">Yaf_View_Simple::__set</a> — Set value to engine</li><li><a href="yaf-view-simple.setscriptpath.php">Yaf_View_Simple::setScriptPath</a> — Set tempaltes directory</li></ul></li><li><a href="class.yaf-loader.php">Yaf_Loader</a> — The Yaf_Loader class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-loader.autoload.php">Yaf_Loader::autoload</a> — The autoload purpose</li><li><a href="yaf-loader.clearlocalnamespace.php">Yaf_Loader::clearLocalNamespace</a> — The clearLocalNamespace purpose</li><li><a href="yaf-loader.clone.php">Yaf_Loader::__clone</a> — The __clone purpose</li><li><a href="yaf-loader.construct.php">Yaf_Loader::__construct</a> — The __construct purpose</li><li><a href="yaf-loader.getinstance.php">Yaf_Loader::getInstance</a> — The getInstance purpose</li><li><a href="yaf-loader.getlibrarypath.php">Yaf_Loader::getLibraryPath</a> — get the library path</li><li><a href="yaf-loader.getlocalnamespace.php">Yaf_Loader::getLocalNamespace</a> — The getLocalNamespace purpose</li><li><a href="yaf-loader.import.php">Yaf_Loader::import</a> — The import purpose</li><li><a href="yaf-loader.islocalname.php">Yaf_Loader::isLocalName</a> — The isLocalName purpose</li><li><a href="yaf-loader.registerlocalnamespace.php">Yaf_Loader::registerLocalNamespace</a> — register local class prefix</li><li><a href="yaf-loader.setlibrarypath.php">Yaf_Loader::setLibraryPath</a> — Change the library path</li><li><a href="yaf-loader.sleep.php">Yaf_Loader::__sleep</a> — The __sleep purpose</li><li><a href="yaf-loader.wakeup.php">Yaf_Loader::__wakeup</a> — The __wakeup purpose</li></ul></li><li><a href="class.yaf-plugin-abstract.php">Yaf_Plugin_Abstract</a> — The Yaf_Plugin_Abstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-plugin-abstract.dispatchloopshutdown.php">Yaf_Plugin_Abstract::dispatchLoopShutdown</a> — The dispatchLoopShutdown purpose</li><li><a href="yaf-plugin-abstract.dispatchloopstartup.php">Yaf_Plugin_Abstract::dispatchLoopStartup</a> — The dispatchLoopStartup purpose</li><li><a href="yaf-plugin-abstract.postdispatch.php">Yaf_Plugin_Abstract::postDispatch</a> — The postDispatch purpose</li><li><a href="yaf-plugin-abstract.predispatch.php">Yaf_Plugin_Abstract::preDispatch</a> — The preDispatch purpose</li><li><a href="yaf-plugin-abstract.preresponse.php">Yaf_Plugin_Abstract::preResponse</a> — The preResponse purpose</li><li><a href="yaf-plugin-abstract.routershutdown.php">Yaf_Plugin_Abstract::routerShutdown</a> — The routerShutdown purpose</li><li><a href="yaf-plugin-abstract.routerstartup.php">Yaf_Plugin_Abstract::routerStartup</a> — RouterStartup hook</li></ul></li><li><a href="class.yaf-registry.php">Yaf_Registry</a> — The Yaf_Registry class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-registry.clone.php">Yaf_Registry::__clone</a> — The __clone purpose</li><li><a href="yaf-registry.construct.php">Yaf_Registry::__construct</a> — Yaf_Registry implements singleton</li><li><a href="yaf-registry.del.php">Yaf_Registry::del</a> — Remove an item from registry</li><li><a href="yaf-registry.get.php">Yaf_Registry::get</a> — Retrieve an item from registry</li><li><a href="yaf-registry.has.php">Yaf_Registry::has</a> — Check whether an item exists</li><li><a href="yaf-registry.set.php">Yaf_Registry::set</a> — Add an item into registry</li></ul></li><li><a href="class.yaf-request-abstract.php">Yaf_Request_Abstract</a> — The Yaf_Request_Abstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-request-abstract.getactionname.php">Yaf_Request_Abstract::getActionName</a> — The getActionName purpose</li><li><a href="yaf-request-abstract.getbaseuri.php">Yaf_Request_Abstract::getBaseUri</a> — The getBaseUri purpose</li><li><a href="yaf-request-abstract.getcontrollername.php">Yaf_Request_Abstract::getControllerName</a> — The getControllerName purpose</li><li><a href="yaf-request-abstract.getenv.php">Yaf_Request_Abstract::getEnv</a> — Retrieve ENV varialbe</li><li><a href="yaf-request-abstract.getexception.php">Yaf_Request_Abstract::getException</a> — The getException purpose</li><li><a href="yaf-request-abstract.getlanguage.php">Yaf_Request_Abstract::getLanguage</a> — The getLanguage purpose</li><li><a href="yaf-request-abstract.getmethod.php">Yaf_Request_Abstract::getMethod</a> — The getMethod purpose</li><li><a href="yaf-request-abstract.getmodulename.php">Yaf_Request_Abstract::getModuleName</a> — The getModuleName purpose</li><li><a href="yaf-request-abstract.getparam.php">Yaf_Request_Abstract::getParam</a> — The getParam purpose</li><li><a href="yaf-request-abstract.getparams.php">Yaf_Request_Abstract::getParams</a> — The getParams purpose</li><li><a href="yaf-request-abstract.getrequesturi.php">Yaf_Request_Abstract::getRequestUri</a> — The getRequestUri purpose</li><li><a href="yaf-request-abstract.getserver.php">Yaf_Request_Abstract::getServer</a> — Retrieve SERVER variable</li><li><a href="yaf-request-abstract.iscli.php">Yaf_Request_Abstract::isCli</a> — The isCli purpose</li><li><a href="yaf-request-abstract.isdispatched.php">Yaf_Request_Abstract::isDispatched</a> — The isDispatched purpose</li><li><a href="yaf-request-abstract.isget.php">Yaf_Request_Abstract::isGet</a> — The isGet purpose</li><li><a href="yaf-request-abstract.ishead.php">Yaf_Request_Abstract::isHead</a> — The isHead purpose</li><li><a href="yaf-request-abstract.isoptions.php">Yaf_Request_Abstract::isOptions</a> — The isOptions purpose</li><li><a href="yaf-request-abstract.ispost.php">Yaf_Request_Abstract::isPost</a> — The isPost purpose</li><li><a href="yaf-request-abstract.isput.php">Yaf_Request_Abstract::isPut</a> — The isPut purpose</li><li><a href="yaf-request-abstract.isrouted.php">Yaf_Request_Abstract::isRouted</a> — The isRouted purpose</li><li><a href="yaf-request-abstract.isxmlhttprequest.php">Yaf_Request_Abstract::isXmlHttpRequest</a> — The isXmlHttpRequest purpose</li><li><a href="yaf-request-abstract.setactionname.php">Yaf_Request_Abstract::setActionName</a> — The setActionName purpose</li><li><a href="yaf-request-abstract.setbaseuri.php">Yaf_Request_Abstract::setBaseUri</a> — set base URI</li><li><a href="yaf-request-abstract.setcontrollername.php">Yaf_Request_Abstract::setControllerName</a> — The setControllerName purpose</li><li><a href="yaf-request-abstract.setdispatched.php">Yaf_Request_Abstract::setDispatched</a> — The setDispatched purpose</li><li><a href="yaf-request-abstract.setmodulename.php">Yaf_Request_Abstract::setModuleName</a> — The setModuleName purpose</li><li><a href="yaf-request-abstract.setparam.php">Yaf_Request_Abstract::setParam</a> — The setParam purpose</li><li><a href="yaf-request-abstract.setrequesturi.php">Yaf_Request_Abstract::setRequestUri</a> — The setRequestUri purpose</li><li><a href="yaf-request-abstract.setrouted.php">Yaf_Request_Abstract::setRouted</a> — The setRouted purpose</li></ul></li><li><a href="class.yaf-request-http.php">Yaf_Request_Http</a> — The Yaf_Request_Http class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-request-http.clone.php">Yaf_Request_Http::__clone</a> — The __clone purpose</li><li><a href="yaf-request-http.construct.php">Yaf_Request_Http::__construct</a> — The __construct purpose</li><li><a href="yaf-request-http.get.php">Yaf_Request_Http::get</a> — Retrieve variable from client</li><li><a href="yaf-request-http.getcookie.php">Yaf_Request_Http::getCookie</a> — Retrieve Cookie varialbe</li><li><a href="yaf-request-http.getfiles.php">Yaf_Request_Http::getFiles</a> — The getFiles purpose</li><li><a href="yaf-request-http.getpost.php">Yaf_Request_Http::getPost</a> — Retrieve POST variable</li><li><a href="yaf-request-http.getquery.php">Yaf_Request_Http::getQuery</a> — Fetch a query parameter</li><li><a href="yaf-request-http.getrequest.php">Yaf_Request_Http::getRequest</a> — The getRequest purpose</li><li><a href="yaf-request-http.isxmlhttprequest.php">Yaf_Request_Http::isXmlHttpRequest</a> — Whether a Ajax Request</li></ul></li><li><a href="class.yaf-request-simple.php">Yaf_Request_Simple</a> — The Yaf_Request_Simple class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-request-simple.clone.php">Yaf_Request_Simple::__clone</a> — The __clone purpose</li><li><a href="yaf-request-simple.construct.php">Yaf_Request_Simple::__construct</a> — The __construct purpose</li><li><a href="yaf-request-simple.get.php">Yaf_Request_Simple::get</a> — The get purpose</li><li><a href="yaf-request-simple.getcookie.php">Yaf_Request_Simple::getCookie</a> — The getCookie purpose</li><li><a href="yaf-request-simple.getfiles.php">Yaf_Request_Simple::getFiles</a> — The getFiles purpose</li><li><a href="yaf-request-simple.getpost.php">Yaf_Request_Simple::getPost</a> — The getPost purpose</li><li><a href="yaf-request-simple.getquery.php">Yaf_Request_Simple::getQuery</a> — The getQuery purpose</li><li><a href="yaf-request-simple.getrequest.php">Yaf_Request_Simple::getRequest</a> — The getRequest purpose</li><li><a href="yaf-request-simple.isxmlhttprequest.php">Yaf_Request_Simple::isXmlHttpRequest</a> — The isXmlHttpRequest purpose</li></ul></li><li><a href="class.yaf-response-abstract.php">Yaf_Response_Abstract</a> — The Yaf_Response_Abstract class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-response-abstract.appendbody.php">Yaf_Response_Abstract::appendBody</a> — append to body</li><li><a href="yaf-response-abstract.clearbody.php">Yaf_Response_Abstract::clearBody</a> — The clearBody purpose</li><li><a href="yaf-response-abstract.clearheaders.php">Yaf_Response_Abstract::clearHeaders</a> — The clearHeaders purpose</li><li><a href="yaf-response-abstract.clone.php">Yaf_Response_Abstract::__clone</a> — The __clone purpose</li><li><a href="yaf-response-abstract.construct.php">Yaf_Response_Abstract::__construct</a> — The __construct purpose</li><li><a href="yaf-response-abstract.destruct.php">Yaf_Response_Abstract::__destruct</a> — The __destruct purpose</li><li><a href="yaf-response-abstract.getbody.php">Yaf_Response_Abstract::getBody</a> — Retrieve a exists content</li><li><a href="yaf-response-abstract.getheader.php">Yaf_Response_Abstract::getHeader</a> — The getHeader purpose</li><li><a href="yaf-response-abstract.prependbody.php">Yaf_Response_Abstract::prependBody</a> — The prependBody purpose</li><li><a href="yaf-response-abstract.response.php">Yaf_Response_Abstract::response</a> — send response</li><li><a href="yaf-response-abstract.setallheaders.php">Yaf_Response_Abstract::setAllHeaders</a> — The setAllHeaders purpose</li><li><a href="yaf-response-abstract.setbody.php">Yaf_Response_Abstract::setBody</a> — Set content to response</li><li><a href="yaf-response-abstract.setheader.php">Yaf_Response_Abstract::setHeader</a> — The setHeader purpose</li><li><a href="yaf-response-abstract.setredirect.php">Yaf_Response_Abstract::setRedirect</a> — The setRedirect purpose</li><li><a href="yaf-response-abstract.tostring.php">Yaf_Response_Abstract::__toString</a> — The __toString purpose</li></ul></li><li><a href="class.yaf-route-interface.php">Yaf_Route_Interface</a> — The Yaf_Route_Interface class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-interface.assemble.php">Yaf_Route_Interface::assemble</a> — assemble a request</li><li><a href="yaf-route-interface.route.php">Yaf_Route_Interface::route</a> — route a request</li></ul></li><li><a href="class.yaf-route-map.php">Yaf_Route_Map</a> — The Yaf_Route_Map class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-map.assemble.php">Yaf_Route_Map::assemble</a> — Assemble a url</li><li><a href="yaf-route-map.construct.php">Yaf_Route_Map::__construct</a> — The __construct purpose</li><li><a href="yaf-route-map.route.php">Yaf_Route_Map::route</a> — The route purpose</li></ul></li><li><a href="class.yaf-route-regex.php">Yaf_Route_Regex</a> — The Yaf_Route_Regex class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-regex.assemble.php">Yaf_Route_Regex::assemble</a> — Assemble a url</li><li><a href="yaf-route-regex.construct.php">Yaf_Route_Regex::__construct</a> — Yaf_Route_Regex constructor</li><li><a href="yaf-route-regex.route.php">Yaf_Route_Regex::route</a> — The route purpose</li></ul></li><li><a href="class.yaf-route-rewrite.php">Yaf_Route_Rewrite</a> — The Yaf_Route_Rewrite class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-rewrite.assemble.php">Yaf_Route_Rewrite::assemble</a> — Assemble a url</li><li><a href="yaf-route-rewrite.construct.php">Yaf_Route_Rewrite::__construct</a> — Yaf_Route_Rewrite constructor</li><li><a href="yaf-route-rewrite.route.php">Yaf_Route_Rewrite::route</a> — The route purpose</li></ul></li><li><a href="class.yaf-router.php">Yaf_Router</a> — The Yaf_Router class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-router.addconfig.php">Yaf_Router::addConfig</a> — Add config-defined routes into Router</li><li><a href="yaf-router.addroute.php">Yaf_Router::addRoute</a> — Add new Route into Router</li><li><a href="yaf-router.construct.php">Yaf_Router::__construct</a> — Yaf_Router constructor</li><li><a href="yaf-router.getcurrentroute.php">Yaf_Router::getCurrentRoute</a> — Get the effective route name</li><li><a href="yaf-router.getroute.php">Yaf_Router::getRoute</a> — Retrieve a route by name</li><li><a href="yaf-router.getroutes.php">Yaf_Router::getRoutes</a> — Retrieve registered routes</li><li><a href="yaf-router.route.php">Yaf_Router::route</a> — The route purpose</li></ul></li><li><a href="class.yaf-route-simple.php">Yaf_Route_Simple</a> — The Yaf_Route_Simple class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-simple.assemble.php">Yaf_Route_Simple::assemble</a> — Assemble a url</li><li><a href="yaf-route-simple.construct.php">Yaf_Route_Simple::__construct</a> — Yaf_Route_Simple constructor</li><li><a href="yaf-route-simple.route.php">Yaf_Route_Simple::route</a> — Route a request</li></ul></li><li><a href="class.yaf-route-static.php">Yaf_Route_Static</a> — The Yaf_Route_Static class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-static.assemble.php">Yaf_Route_Static::assemble</a> — Assemble a url</li><li><a href="yaf-route-static.match.php">Yaf_Route_Static::match</a> — The match purpose</li><li><a href="yaf-route-static.route.php">Yaf_Route_Static::route</a> — Route a request</li></ul></li><li><a href="class.yaf-route-supervar.php">Yaf_Route_Supervar</a> — The Yaf_Route_Supervar class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-route-supervar.assemble.php">Yaf_Route_Supervar::assemble</a> — Assemble a url</li><li><a href="yaf-route-supervar.construct.php">Yaf_Route_Supervar::__construct</a> — The __construct purpose</li><li><a href="yaf-route-supervar.route.php">Yaf_Route_Supervar::route</a> — The route purpose</li></ul></li><li><a href="class.yaf-session.php">Yaf_Session</a> — The Yaf_Session class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-session.clone.php">Yaf_Session::__clone</a> — The __clone purpose</li><li><a href="yaf-session.construct.php">Yaf_Session::__construct</a> — The __construct purpose</li><li><a href="yaf-session.count.php">Yaf_Session::count</a> — The count purpose</li><li><a href="yaf-session.current.php">Yaf_Session::current</a> — The current purpose</li><li><a href="yaf-session.del.php">Yaf_Session::del</a> — The del purpose</li><li><a href="yaf-session.get.php">Yaf_Session::__get</a> — The __get purpose</li><li><a href="yaf-session.getinstance.php">Yaf_Session::getInstance</a> — The getInstance purpose</li><li><a href="yaf-session.has.php">Yaf_Session::has</a> — The has purpose</li><li><a href="yaf-session.isset.php">Yaf_Session::__isset</a> — The __isset purpose</li><li><a href="yaf-session.key.php">Yaf_Session::key</a> — The key purpose</li><li><a href="yaf-session.next.php">Yaf_Session::next</a> — The next purpose</li><li><a href="yaf-session.offsetexists.php">Yaf_Session::offsetExists</a> — The offsetExists purpose</li><li><a href="yaf-session.offsetget.php">Yaf_Session::offsetGet</a> — The offsetGet purpose</li><li><a href="yaf-session.offsetset.php">Yaf_Session::offsetSet</a> — The offsetSet purpose</li><li><a href="yaf-session.offsetunset.php">Yaf_Session::offsetUnset</a> — The offsetUnset purpose</li><li><a href="yaf-session.rewind.php">Yaf_Session::rewind</a> — The rewind purpose</li><li><a href="yaf-session.set.php">Yaf_Session::__set</a> — The __set purpose</li><li><a href="yaf-session.sleep.php">Yaf_Session::__sleep</a> — The __sleep purpose</li><li><a href="yaf-session.start.php">Yaf_Session::start</a> — The start purpose</li><li><a href="yaf-session.unset.php">Yaf_Session::__unset</a> — The __unset purpose</li><li><a href="yaf-session.valid.php">Yaf_Session::valid</a> — The valid purpose</li><li><a href="yaf-session.wakeup.php">Yaf_Session::__wakeup</a> — The __wakeup purpose</li></ul></li><li><a href="class.yaf-exception.php">Yaf_Exception</a> — The Yaf_Exception class<ul class="chunklist chunklist_book chunklist_children"><li><a href="yaf-exception.construct.php">Yaf_Exception::__construct</a> — The __construct purpose</li><li><a href="yaf-exception.getprevious.php">Yaf_Exception::getPrevious</a> — The getPrevious purpose</li></ul></li><li><a href="class.yaf-exception-typeerror.php">Yaf_Exception_TypeError</a> — The Yaf_Exception_TypeError class</li><li><a href="class.yaf-exception-startuperror.php">Yaf_Exception_StartupError</a> — The Yaf_Exception_StartupError class</li><li><a href="class.yaf-exception-dispatchfailed.php">Yaf_Exception_DispatchFailed</a> — The Yaf_Exception_DispatchFailed class</li><li><a href="class.yaf-exception-routerfailed.php">Yaf_Exception_RouterFailed</a> — The Yaf_Exception_RouterFailed class</li><li><a href="class.yaf-exception-loadfailed.php">Yaf_Exception_LoadFailed</a> — The Yaf_Exception_LoadFailed class</li><li><a href="class.yaf-exception-loadfailed-module.php">Yaf_Exception_LoadFailed_Module</a> — The Yaf_Exception_LoadFailed_Module class</li><li><a href="class.yaf-exception-loadfailed-controller.php">Yaf_Exception_LoadFailed_Controller</a> — The Yaf_Exception_LoadFailed_Controller class</li><li><a href="class.yaf-exception-loadfailed-action.php">Yaf_Exception_LoadFailed_Action</a> — The Yaf_Exception_LoadFailed_Action class</li><li><a href="class.yaf-exception-loadfailed-view.php">Yaf_Exception_LoadFailed_View</a> — The Yaf_Exception_LoadFailed_View class</li></ul></div><?php manual_footer(); ?>