#!/usr/bin/php
<?php


use Drm\Core\classes\cli\CLI;
use Drm\Core\classes\cli\Options;

class Complex extends CLI
{

    /**
     * Register options and arguments on the given $options object
     *
     * @param Options $options
     * @return void
     */
    protected function setup(Options $options)
    {
        $options->setHelp('Welcome To PHP DRM CLI');
        $options->registerOption('longflag', 'This is a global flag that applies to all subcommands', 'l');

        $options->registerCommand('system', 'The System Command');
        $options->registerCommand('bar', 'The bar command');

        $options->registerOption('someflag', 'This is a flag only valid for the foo command', 's', false, 'system');
        $options->registerArgument('file', 'This argument is only required for the foo command', true, 'system');

        $options->registerOption(
            'load',
            'Another flag only for the bar command, requiring an argument',
            'l',
            'input',
            'bar'
        );

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

        switch ($options->getCmd()) {
            case 'system':
                $this->success('The foo command was called');
                break;
            case 'bar':
                $this->success('The bar command was called');
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

        $this->info('$options->getArgs():');
        var_dump($options->getArgs());
    }
}

$cli = new Complex();
$cli->run();