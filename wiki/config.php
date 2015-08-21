<?php /* Configuration file for LionWiki. */
$WIKI_TITLE = '1-Б класс, школа №59'; // name of the site

// SHA1 hash of password. If empty (or commented out), no password is required
$PASSWORD = sha1("temp1234");

$TEMPLATE = 'templates/minimal.html'; // presentation template

// if true, you need to fill password for reading pages too
// before setting to true, read http://lionwiki.0o.cz/index.php?page=UserGuide%3A+How+to+use+PROTECTED_READ
$PROTECTED_READ = false;

$NO_HTML = true; // XSS protection
