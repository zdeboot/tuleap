<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
function autoload4a62a755034352fa653f907f65a115c0($class) {
    static $classes = null;
    if ($classes === null) {
        $classes = array(
            'pullrequestplugin' => '/pullrequestPlugin.class.php',
            'tuleap\\pullrequest\\comment\\comment' => '/PullRequest/Comment/Comment.php',
            'tuleap\\pullrequest\\comment\\dao' => '/PullRequest/Comment/Dao.php',
            'tuleap\\pullrequest\\comment\\factory' => '/PullRequest/Comment/Factory.php',
            'tuleap\\pullrequest\\comment\\paginatedcomments' => '/PullRequest/Comment/PaginatedComments.php',
            'tuleap\\pullrequest\\dao' => '/PullRequest/Dao.php',
            'tuleap\\pullrequest\\exception\\pullrequestnotcreatedexception' => '/PullRequest/Exception/PullRequestNotCreatedException.php',
            'tuleap\\pullrequest\\exception\\pullrequestnotfoundexception' => '/PullRequest/Exception/PullRequestNotFoundException.php',
            'tuleap\\pullrequest\\exception\\unknownbranchnameexception' => '/PullRequest/Exception/UnknownBranchNameException.php',
            'tuleap\\pullrequest\\exception\\unknownreferenceexception' => '/PullRequest/Exception/UnknownReferenceException.php',
            'tuleap\\pullrequest\\factory' => '/PullRequest/Factory.php',
            'tuleap\\pullrequest\\gitexec' => '/PullRequest/GitExec.php',
            'tuleap\\pullrequest\\plugindescriptor' => '/PullRequestPluginDescriptor.class.php',
            'tuleap\\pullrequest\\plugininfo' => '/PullRequestPluginInfo.class.php',
            'tuleap\\pullrequest\\pullrequest' => '/PullRequest/PullRequest.php',
            'tuleap\\pullrequest\\rest\\resourcesinjector' => '/PullRequest/REST/ResourcesInjector.class.php',
            'tuleap\\pullrequest\\rest\\v1\\commentpostrepresentation' => '/PullRequest/REST/v1/CommentPOSTRepresentation.php',
            'tuleap\\pullrequest\\rest\\v1\\commentrepresentation' => '/PullRequest/REST/v1/CommentRepresentation.php',
            'tuleap\\pullrequest\\rest\\v1\\paginatedcommentsrepresentations' => '/PullRequest/REST/v1/PaginatedCommentsRepresentations.php',
            'tuleap\\pullrequest\\rest\\v1\\paginatedcommentsrepresentationsbuilder' => '/PullRequest/REST/v1/PaginatedCommentsRepresentationsBuilder.php',
            'tuleap\\pullrequest\\rest\\v1\\pullrequestfilerepresentation' => '/PullRequest/REST/v1/PullRequestFileRepresentation.php',
            'tuleap\\pullrequest\\rest\\v1\\pullrequestfilerepresentationfactory' => '/PullRequest/REST/v1/PullRequestFileRepresentationFactory.php',
            'tuleap\\pullrequest\\rest\\v1\\pullrequestpostrepresentation' => '/PullRequest/REST/v1/PullRequestPOSTRepresentation.php',
            'tuleap\\pullrequest\\rest\\v1\\pullrequestreference' => '/PullRequest/REST/v1/PullRequestReference.php',
            'tuleap\\pullrequest\\rest\\v1\\pullrequestrepresentation' => '/PullRequest/REST/v1/PullRequestRepresentation.php',
            'tuleap\\pullrequest\\rest\\v1\\pullrequestsresource' => '/PullRequest/REST/v1/PullRequestsResource.php'
        );
    }
    $cn = strtolower($class);
    if (isset($classes[$cn])) {
        require dirname(__FILE__) . $classes[$cn];
    }
}
spl_autoload_register('autoload4a62a755034352fa653f907f65a115c0');
// @codeCoverageIgnoreEnd