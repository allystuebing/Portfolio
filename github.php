<?php

// Init vars
$LOCAL_ROOT         = "/public_html/kanemontreuil.com/subdomains/";
$LOCAL_REPO_NAME    = "dev";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "git@github.com:kanemontreuil/personal-portfolio.git";
$DESIRED_BRANCH     = "master";

// Delete local repo if it exists
if (file_exists($LOCAL_REPO)) {
    shell_exec("rm -rf {$LOCAL_REPO}");
}

// Clone fresh repo from github using desired local repo name and checkout the desired branch
echo shell_exec("cd {$LOCAL_ROOT} && git clone {$REMOTE_REPO} {$LOCAL_REPO_NAME} && cd {$LOCAL_REPO} && git checkout {$BRANCH}");

die("done " . mktime());
