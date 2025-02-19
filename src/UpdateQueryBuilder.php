<?php

namespace Simplon\Mysql;

class UpdateQueryBuilder extends AbstractBuilder
{
    use ConditionsTrait;

    /**
     * @var CrudModelInterface
     */
    protected $model;
    /**
     * @var string
     */
    protected $tableName;
    /**
     * @var string
     */
    protected $query;
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
     * @return UpdateQueryBuilder
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
     * @return UpdateQueryBuilder
     */
    public function setTableName(string $tableName): self
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @param string $query
     *
     * @return UpdateQueryBuilder
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param bool $snakeCase
     * 
     * @return array
     */
    public function getData(bool $snakeCase = true): array
    {
        if ($this->getModel() instanceof CrudModelInterface)
        {
            return $this->getModel()->toArray($snakeCase);
        }

        return $this->data;
    }

    /**
     * @param array $data
     *
     * @return UpdateQueryBuilder
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}