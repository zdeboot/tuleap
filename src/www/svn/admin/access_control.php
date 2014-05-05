<?php
//
// Codendi
// Copyright (c) Xerox Corporation, Codendi Team, 2001-2009. All rights reserved
// http://www.codendi.com
//
// 
//
//	Originally written by Laurent Julliard 2004, Codendi Team, Xerox
//

$project_manager = ProjectManager::instance();
$project         = $project_manager->getProject($group_id);
$gname           = $project->getUnixName(false);  // don't return a lower case group name
$dao             = new SVN_AccessFile_DAO();
$path            = realpath(dirname(__FILE__) . '/../../../templates/svn/');
$renderer        = TemplateRendererFactory::build()->getRenderer($path);


$request->valid(new Valid_String('post_changes'));
$request->valid(new Valid_String('SUBMIT'));
if ($request->isPost() && $request->existAndNonEmpty('post_changes')) {
    $vAccessFile = new Valid_Text('form_accessfile');
    $vAccessFile->setErrorMessage($Language->getText('svn_admin_access_control','upd_fail'));
    if($request->valid($vAccessFile)) {
        $saf = new SVNAccessFile();
        $form_accessfile = $saf->parseGroupLines($project, $request->get('form_accessfile'), true);
        //store the custom access file in db
        $dao->updateAccessFileVersionInProject($group_id, $form_accessfile);
        $buffer = svn_utils_read_svn_access_file_defaults($gname);
        $buffer .= $form_accessfile;
        $ret = svn_utils_write_svn_access_file($gname,$buffer);
        if ($ret) {
            $GLOBALS['Response']->addFeedback('info', $Language->getText('svn_admin_access_control','upd_success'));
        } else {
            $GLOBALS['Response']->addFeedback('error', $Language->getText('svn_admin_access_control','upd_fail'));
        }
    }
}

$hp =& Codendi_HTMLPurifier::instance();

// Display the form
svn_header_admin(array ('title'=>$Language->getText('svn_admin_access_control','access_ctrl'),
                        'help' => 'svn.html#subversion-access-control'));

$select_options = array();
foreach ($dao->getAllVersions($group_id) as $row) {
    $select_options[] = array(
        'id'      => $row['id'],
        'version' => $row['version_number']
    );
}

$version_number = $dao->getCurrentVersionNumber($group_id);

$renderer->renderToPage(
    'access-file-form',
    new SVN_AccessFile_Presenter(
        $project,
        svn_utils_read_svn_access_file($gname),
        svn_utils_read_svn_access_file_defaults($gname, true),
        $select_options,
        $version_number
    )
);

svn_footer(array());
