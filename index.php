<?php

ini_set('display_errors',1);

require "vendor/autoload.php";


use Emeka\Evangelist\Client\GetUser;
use Emeka\Evangelist\Client\GetGithubEvents;

$t = new GetUser('andela-ftchirou');
var_dump($t->getId());

//echo $t->getGithubEvents();
//echo $t->getGithubUserRepoEvent( 'andela-eosuagwu', 'Evangelist');
//echo $t->getGithubUserRepoIssues( 'andela-eosuagwu', 'Evangelist');
//echo $t->getGithubUserNetworkEventsIssues( 'andela-eosuagwu', 'Evangelist');
//echo $t->getGithubUserNetworkEventsIssues( 'andela-eosuagwu', 'Evangelist');
//echo $t->getGithubOrgEvents('andela');
//echo $t->getGithubUserLastEvent('andela-eosuagwu');
//echo $t->getGithubUserLastReceivedEvent('andela-eosuagwu');
//echo $t->getGithubUserLastEventPerformed('andela-eosuagwu');
//echo $t->getGithubUserLastPublicEventPerformed('andela-eosuagwu');
//echo $t->getGithubUserOrgLastEvent('andela-eosuagwu', 'andela');




?>