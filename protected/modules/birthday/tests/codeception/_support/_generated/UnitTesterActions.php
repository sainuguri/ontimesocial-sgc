<?php  //[STAMP] 0468b7e2480518455b63a22d3aa6f7c2
namespace birthday\_generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

use tests\codeception\_support\CodeHelper;

trait UnitTesterActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \tests\codeception\_support\CodeHelper::assertContainsError()
     */
    public function assertContainsError($model, $message) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertContainsError', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \tests\codeception\_support\CodeHelper::assertNotContainsError()
     */
    public function assertNotContainsError($model, $message) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotContainsError', func_get_args()));
    }
}
