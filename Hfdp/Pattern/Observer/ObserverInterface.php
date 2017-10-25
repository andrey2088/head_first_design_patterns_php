<?php

namespace Hfdp\Pattern\Observer;

interface ObserverInterface
{
    /**
     * Update
     * @param SubjectInterface $subj
     * @param mixed $arg
     */
    public function update(SubjectInterface $subj, $arg): void;
}
