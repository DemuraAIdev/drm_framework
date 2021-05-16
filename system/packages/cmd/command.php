<?php

namespace packages\cmd;


use PDO;
use Drm\Core\classes\cli\CLI;
use Drm\Core\classes\cli\Options;
use Drm\Core\classes\cli\TableFormatter;
use Drm\Core\classes\cli\Colors;

class command extends CLI
{


    /**
     * Register options and arguments on the given $options object
     *
     * @param Options $options
     * @return void
     */


    protected function setup(Options $options)
    {
        $logo = '
        _____________________________
        |       \ |       \ |  \     /  \
        | $$$$$$$\| $$$$$$$\| $$\   /  $$
        | $$  | $$| $$__| $$| $$$\ /  $$$
        | $$  | $$| $$    $$| $$$$\  $$$$
        | $$  | $$| $$$$$$$\| $$\$$ $$ $$
        | $$__/ $$| $$  | $$| $$ \$$$| $$
        | $$    $$| $$  | $$| $$  \$ | $$
         \$$$$$$$  \$$   \$$ \$$      \$$
                                         
         © Copyright 2021 DRMDev
        
        
        ';

        $options->setHelp($logo);
        $options->registerOption('longflag', 'This is a global flag that applies to all subcommands', 'l');
        $options->registerOption('drmascii', 'show DRM LOGO ASCII', 'd');

        $options->registerCommand('system', 'The System Command');
        $options->registerCommand('database', 'The database command');
        $options->registerOption('version', 'Show Version DRM', 'v', false, 'system');
        $options->registerOption('show', 'Show Database', 's', false, 'database');
        $options->registerOption('table', 'show table database', 't', false, 'database');

        $options->registerCommand('compact', 'Display the help text in a more compact manner');
    }

    /**
     * Your main program
     *
     * Arguments and options have been parsed when this is run
     *
     * @param Options $options
     * @return void
     */

    protected function main(Options $options)
    {
        $host = dbhost;
        $user = dbuser;
        $pass = dbpass;
        $db_name = dbname;
        $dbdrive = dbdriver;
        $dbport = dbport;
        $pdo = new PDO("$dbdrive:host=$host;port=$dbport", $user, $pass);
        $dbh = new PDO("$dbdrive:host=$host;dbname=$db_name", $user, $pass);

        $tf = new TableFormatter($this->colors);
        $tf->setBorder(' | '); // nice border between colmns

        if ($options->getOpt('drmascii')) {
            $this->success('
            _____________________________
            |       \ |       \ |  \     /  \
            | $$$$$$$\| $$$$$$$\| $$\   /  $$
            | $$  | $$| $$__| $$| $$$\ /  $$$
            | $$  | $$| $$    $$| $$$$\  $$$$
            | $$  | $$| $$$$$$$\| $$\$$ $$ $$
            | $$__/ $$| $$  | $$| $$ \$$$| $$
            | $$    $$| $$  | $$| $$  \$ | $$
             \$$$$$$$  \$$   \$$ \$$      \$$
                                             
             © Copyright 2021 DRMDev
            
            ');
            exit;
        }

        switch ($options->getCmd()) {
            case 'system':
                if ($options->getOpt('version')) {
                    $this->success('v.1.2.2');
                }
                break;
            case 'database':
                if ($options->getOpt('show')) {
                    // show a header
                    echo $tf->format(
                        array('*'),
                        array('Name Database', 'size')
                    );
                    // a line across the whole width
                    echo str_pad('', $tf->getMaxWidth(), '-') . "\n";
                    $stmt = $pdo->query('SHOW DATABASES');

                    $table = $stmt->fetchAll(PDO::FETCH_COLUMN);
                    foreach ($table as $val) {
                        echo $tf->format(
                            array('*'),
                            array($val),
                            array(Colors::C_CYAN)
                        );
                    }
                }
                if ($options->getOpt('table')) {
                    // show a header
                    echo $tf->format(
                        array('80%', '20%'),
                        array('Name Table', 'size')
                    );
                    // a line across the whole width
                    echo str_pad('', $tf->getMaxWidth(), '-') . "\n";
                    $sth = $dbh->query('SHOW TABLE STATUS');
                    $stmt = $pdo->query("SHOW TABLES from $db_name");

                    $table = $stmt->fetchAll(PDO::FETCH_COLUMN);
                    $size = $sth->fetch(PDO::FETCH_ASSOC)["Data_length"];
                    foreach ($table as $val) {
                        echo $tf->format(
                            array('80%', '20%'),
                            array($val, $size),
                            array(Colors::C_CYAN)
                        );
                    }
                }

                break;
            case 'compact':
                $options->useCompactHelp();
                echo $options->help();
                exit;
            default:
                $this->error('No known command was called, we show the default help instead:');
                echo $options->help();
                exit;
        }
    }
}

$cli = new command();
$cli->run();