<?php
/**
 * Default English Lexicon Entries for GitPackageManagement
 *
 * @package gitpackagemanagement
 * @subpackage lexicon
 */

$_lang['gitpackagemanagement'] = 'Git Package Management';
$_lang['gitpackagemanagement.menu_desc'] = 'Manage packages from GIT. Packages can be stored outside modx folder.';
$_lang['gitpackagemanagement.search'] = 'Search';
$_lang['gitpackagemanagement.packages'] = 'Packages';
$_lang['gitpackagemanagement.intro_msg'] = 'Manage packages downloaded from GIT.';

//Packages
$_lang['gitpackagemanagement.folder'] = 'Folder';
$_lang['gitpackagemanagement.name'] = 'Name';
$_lang['gitpackagemanagement.description'] = 'Description';
$_lang['gitpackagemanagement.author'] = 'Author';
$_lang['gitpackagemanagement.version'] = 'Version';
$_lang['gitpackagemanagement.add_package'] = 'Add package';
$_lang['gitpackagemanagement.remove_package'] = 'Remove package';
$_lang['gitpackagemanagement.remove_package_confirm'] = 'Do you really want to remove this package?';
$_lang['gitpackagemanagement.update_package'] = 'Update package';
$_lang['gitpackagemanagement.update_package_database'] = 'Update package and recreate database';
$_lang['gitpackagemanagement.update_package_alter_database'] = 'Update package and alter database';
$_lang['gitpackagemanagement.update_package_success'] = 'The package was successfully updated.';
$_lang['gitpackagemanagement.delete_package_folder'] = 'Delete package folder';
$_lang['gitpackagemanagement.key'] = 'Key';
$_lang['gitpackagemanagement.updatedon'] = 'Last Update';
$_lang['gitpackagemanagement.build_schema'] = 'Build classes from schema';
$_lang['gitpackagemanagement.update_mask'] = 'Updating package';
$_lang['gitpackagemanagement.preserve_package'] = 'Preserve package';
$_lang['gitpackagemanagement.build_package'] = 'Build package';
$_lang['gitpackagemanagement.check_lexicon'] = 'Check Lexicon';

//Errors
$_lang['gitpackagemanagement.package_err_ns_folder_name'] = 'You have to enter folder name.';
$_lang['gitpackagemanagement.package_err_ns_packages_dir'] = 'Folder for packages is not set. Set package folder in system settings.';
$_lang['gitpackagemanagement.package_err_url_config_nf'] = 'This package folder does not contain config file.';
$_lang['gitpackagemanagement.package_err_url_config_nfif'] = 'Folder with cloned repository doesn\'t contain config file.';
$_lang['gitpackagemanagement.package_err_nvil'] = 'Version of new package is lower that currently installed package.';
$_lang['gitpackagemanagement.package_err_ccn'] = 'You can not update your package because you changed package\'s name. Please remove package and install it again.';
$_lang['gitpackagemanagement.package_err_ccln'] = 'You can not update your package because you changed package\'s lowercase name. Please remove package and install it again.';
$_lang['gitpackagemanagement.package_err_cc_nw'] = 'Core config is not writable. Please make [[+package]]/config.core.php writable to continue.';
$_lang['gitpackagemanagement.package_err_dependencies'] = 'Dependencies check failed!';

