#!/usr/local/bin/php
<?php

require_once('script/load_phalcon.php');

use HWasly\Backup\BackupFactory;

$backupFact = new BackupFactory();
foreach ($backupFact->listProviders() as $classname => $provider) {
    if ($provider['handle']->isEnabled()) {
        $provider['handle']->backup();
    }
}
