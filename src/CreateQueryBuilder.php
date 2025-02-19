<?php

namespace Simplon\Mysql;

class CreateQueryBuilder extends AbstractBuilder
{
    /**
     * @var CrudModelInterface
     */
    protected $model;
    /**
     * @var string
     */
    protected $tableName;
    /**
     * @var bool
     */
    protected $insertIgnore = false;
    /**
     * @var bool
     */
    protected $useSnakeCasing = true;
    /**
     * @var array
     */
    protected $data;

    /**
     * @return CrudModelInterface
     */
    public function getModel(): CrudModelInterface
    {
        return $this->model;
    }

    /**
     * @param CrudModelInterface $model
     *
     * @return CreateQueryBuilder
     */
    public function setModel(CrudModelInterface $model): self
    {
        $this->model = $model;

        return $this;
    }

    /**
     * @return string
     */
    public function getTableName(): string
    {
        return $this->tableName;
    }

    /**
     * @param string $tableName
     *
     * @return CreateQueryBuilder
     */
    public function setTableName(string $tableName): self
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isInsertIgnore(): bool
    {
        return $this->insertIgnore;
    }

    /**
     * @return CreateQueryBuilder
     */
    public function setInsertIgnore(): self
    {
        $this->insertIgnore = true;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isUsingSnakeCasing(): bool
    {
        return $this->useSnakeCasing;
    }

    /**
     * @param bool $useSnakeCasing
     *
     * @return CreateQueryBuilder
     */
    public function setUseSnakeCasing($useSnakeCasing): self
    {
        $this->useSnakeCasing = $useSnakeCasing;

        return $this;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        if ($this->getModel() instanceof CrudModelInterface)
        {
            return $this->getModel()->toArray($this->$useSnakeCasing);
        }

        return $this->data;
    }

    /**
     * @param array $data
     *
     * @return CreateQueryBuilder
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}