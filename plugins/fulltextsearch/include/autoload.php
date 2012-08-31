<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
function autoload4478aac8c1a4855c732fe25ddcf7b109($class) {
    static $classes = null;
    if ($classes === null) {
        $classes = array(
            'elasticsearch_clientfacade' => '/ElasticSearch/ClientFacade.class.php',
            'elasticsearch_clientfactory' => '/ElasticSearch/ClientFactory.class.php',
            'elasticsearch_indexclientfacade' => '/ElasticSearch/IndexClientFacade.class.php',
            'elasticsearch_searchclientfacade' => '/ElasticSearch/SearchClientFacade.class.php',
            'elasticsearch_searchresult' => '/ElasticSearch/SearchResult.class.php',
            'elasticsearch_searchresultcollection' => '/ElasticSearch/SearchResultCollection.class.php',
            'elasticsearch_transporthttpbasicauth' => '/ElasticSearch/TransportHTTPBasicAuth.class.php',
            'fulltextsearch_controller_search' => '/FullTextSearch/Controller/Search.class.php',
            'fulltextsearch_iindexdocuments' => '/FullTextSearch/IIndexDocuments.class.php',
            'fulltextsearch_isearchdocuments' => '/FullTextSearch/ISearchDocuments.class.php',
            'fulltextsearch_presenter_adminsearch' => '/FullTextSearch/Presenter/AdminSearch.class.php',
            'fulltextsearch_presenter_errornosearch' => '/FullTextSearch/Presenter/ErrorNoSearch.class.php',
            'fulltextsearch_presenter_index' => '/FullTextSearch/Presenter/Index.class.php',
            'fulltextsearch_presenter_search' => '/FullTextSearch/Presenter/Search.class.php',
            'fulltextsearch_searchresultcollection' => '/FullTextSearch/SearchResultCollection.class.php',
            'fulltextsearchactions' => '/FullTextSearchActions.class.php',
            'fulltextsearchplugin' => '/fulltextsearchPlugin.class.php',
            'fulltextsearchplugindescriptor' => '/FulltextsearchPluginDescriptor.class.php',
            'fulltextsearchplugininfo' => '/FulltextsearchPluginInfo.class.php',
            'systemevent_fulltextsearch_docman' => '/SystemEvent_FULLTEXTSEARCH_DOCMAN.class.php',
            'systemevent_fulltextsearch_docman_delete' => '/SystemEvent_FULLTEXTSEARCH_DOCMAN_DELETE.class.php',
            'systemevent_fulltextsearch_docman_index' => '/SystemEvent_FULLTEXTSEARCH_DOCMAN_INDEX.class.php',
            'systemevent_fulltextsearch_docman_update_metadata' => '/SystemEvent_FULLTEXTSEARCH_DOCMAN_UPDATE_METADATA.class.php',
            'systemevent_fulltextsearch_docman_update_permissions' => '/SystemEvent_FULLTEXTSEARCH_DOCMAN_UPDATE_PERMISSIONS.class.php'
        );
    }
    $cn = strtolower($class);
    if (isset($classes[$cn])) {
        require dirname(__FILE__) . $classes[$cn];
    }
}
spl_autoload_register('autoload4478aac8c1a4855c732fe25ddcf7b109');
// @codeCoverageIgnoreEnd