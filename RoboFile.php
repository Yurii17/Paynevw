<?php

require_once 'vendor/autoload.php';

class RoboFile extends \Robo\Tasks
{
    use \Codeception\Task\MergeReports;
    use \Codeception\Task\SplitTestsByGroups;

    public $num;

    public function parallelSplitTests()
    {
        // Split your tests by files
        $this->taskSplitTestFilesByGroups(5)
            ->projectRoot('.')
            ->testsFrom('tests/acceptance')
            ->groupsTo('tests/_data/paracept_')
            ->run();

        /*
        // Split your tests by single tests (alternatively)
        $this->taskSplitTestsByGroups(5)
            ->projectRoot('.')
            ->testsFrom('tests/acceptance')
            ->groupsTo('tests/_data/paracept_')
            ->run();
        */
    }

    public function parallelRun($suite, $groupName, $groupNum, $envName)
    {
        $this->num = $groupNum;
        $parallel = $this->taskParallelExec();
        for ($i = 1; $i <= $groupNum; $i++) {
            $parallel->process(
                $this->taskCodecept() // use built-in Codecept task
                ->suite($suite) // run acceptance tests
                ->group($groupName."_$i") // for all paracept_* groups
                ->env($envName)
                ->html("tests/_output/result_$i.html") // save XML results
                ->noRebuild()
            );
        }
        return $parallel->run();
    }

    public function parallelMergeResults()
    {
        $merge = $this->taskMergeHTMLReports();
        for ($i=1; $i<=$this->num; $i++) {
            $merge->from("tests/_output/result_paracept_$i.html");
        }
        $merge->into("tests/_output/result_paracept.html")->run();
    }

    public function parallelAll($suite, $groupName, $groupNum, $envName)
    {
        $result = $this->parallelRun($suite, $groupName, $groupNum, $envName);
        $this->parallelMergeResults();
        return $result;
    }
}