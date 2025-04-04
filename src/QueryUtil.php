<?php

namespace Simplon\Mysql;

class QueryUtil
{
    const OP_NOT = '!';

    /**
     * @param array $conds
     *
     * @return CondsQueryBuild
     */
    public static function buildCondsQuery(array $conds): CondsQueryBuild
    {
        $strippedConds = [];
        $pairs = [];

        foreach ($conds as $key => $data)
        {
            $value = $data['value'];
            $operator = $data['operator'];

            // handle db named columns e.g. "db.id"
            $strippedKey = str_replace('.', '', $key);

            $strippedConds[$strippedKey] = $data;

            // handle only columns (non-column conds are prepend with "_")
            if (!str_starts_with($key, '_'))
            {
                $key = str_contains($key, '.') ? $key : '`' . $key . '`';
                $query = $key . ' ' . $operator . ' :' . $strippedKey;

                if ($value === null)
                {
                    $not = ' IS NULL';

                    if ($operator === self::OP_NOT)
                    {
                        $not = ' IS NOT NULL';
                    }

                    $query = $key . $not;
                }
                elseif (is_array($value))
                {
                    $not = null;

                    if ($operator === self::OP_NOT)
                    {
                        $not = ' NOT';
                    }

                    $query = $key . $not . ' IN(:' . $strippedKey . ')';
                }

                $pairs[] = $query;
            }
        }

        return new CondsQueryBuild($strippedConds, $pairs);
    }
}