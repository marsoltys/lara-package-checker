<?php
/**
 *
 * Project: ecmsl55
 * Date: 06/11/2017
 * @author Mariusz Soltys.
 * @version 1.0.0
 * @license All Rights Reserved
 *
 */

namespace marsoltys\PckgChecker;


use Symfony\Component\Process\Process;

class PckgChecker
{

    public function has($pckgName)
    {

    }

    public function getInstalled()
    {

    }

    public function getPackage($pckgName)
    {
        $process = new Process(sprintf('composer show %s', $pckgName));
        $process->run();
        $result = $process->getOutput();
    }
}