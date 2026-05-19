# let's use a mail template
# set the next variable to OFF in order to disable the template functionality
$g_use_mailtemplate = ON;
$g_escape_mailtemplate = OFF;
# optional: restrict HTML mail templating to specific projects (by project id).
# leave commented / empty array to enable templating for ALL projects (default).
# example: only project 98 will receive templated HTML mails, all others stay plain text.
# $g_mailtemplate_projects = array( 98 );
# here the locations for the templates, do ensure the web-user has access to the directory
$g_newbug_mailtemplate = "/var/www/html/mantis2/core/templates/newbug_mailtemplate.html";
$g_bug_mailtemplate = "/var/www/html/mantis2/core/templates/bug_mailtemplate.html";
$g_note_mailtemplate = "/var/www/html/mantis2/core/templates/note_mailtemplate.html";
