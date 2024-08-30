<?php

namespace Simplon\Mysql;

abstract class CrudModel extends Data implements CrudModelInterface
{
    /**
     * @return static
     */
    public function beforeSave()
    {
        return $this;
    }

    /**
     * @return static
     */
    public function beforeUpdate()
    {
        return $this;
    }
}