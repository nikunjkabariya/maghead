<?php
namespace LazyRecord\Command;
use CLIFramework\Command;
use LazyRecord\Migration\MigrationGenerator;
use LazyRecord\Migration\MigrationRunner;
use LazyRecord\TableParser\TableParser;
use LazyRecord\Command\BaseCommand;
use LazyRecord\Schema\SchemaFinder;

class MigrateUpgradeCommand extends BaseCommand
{
    public function brief() { return 'Run upgrade migration scripts.'; }

    public function aliases() {
        return array('u', 'up');
    }

    public function options($opts) 
    {
        parent::options($opts);
    }

    public function execute() {
        $dsId = $this->getCurrentDataSourceId();
        $runner = new MigrationRunner($dsId);
        $runner->load('db/migrations');
        $this->logger->info('Running migration scripts to upgrade...');
        $runner->runUpgrade();
        $this->logger->info('Done.');
    }

}


