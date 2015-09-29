<?php

ini_set('display_errors',1);

require "vendor/autoload.php";


use Emeka\Evangelist\Client\GetUser;
use Emeka\Evangelist\Client\GetGithubEvents;
use Emeka\Evangelist\Client\GetStatus;

$t = new GetStatus('andela-eosuagwu');
var_dump($t->getStatus());



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