<?php
class MyDataBase
{
    private $tableName = false;

    public function __construct($tableName)
    {
        global $wpdb;
        $this->tableName = $wpdb->prefix.$tableName;
    }
    public function insert(array $data)
    {
        global $wpdb;

        if(empty($data))
        {
            return false;
        }
        $wpdb->insert($this->tableName, $data);

        return $wpdb->insert_id;
    }
    public function get_all( $orderBy = NULL )
    {
        global $wpdb;

        $sql = 'SELECT * FROM `'.$this->tableName.'`';

        if(!empty($orderBy))
        {
            $sql .= ' ORDER BY ' . $orderBy;
        }
        $all = $wpdb->get_results($sql);

        return $all;
    }
    public function get_by(array $conditionValue, $condition = '=', $returnSingleRow = FALSE)
    {
        global $wpdb;

        try
        {
            $sql = 'SELECT * FROM `'.$this->tableName.'` WHERE ';

            $conditionCounter = 1;
            foreach ($conditionValue as $field => $value)
            {
                if($conditionCounter > 1)
                {
                    $sql .= ' AND ';
                }
                switch(strtolower($condition))
                {
                    case 'in':
                        if(!is_array($value))
                        {
                            throw new Exception("Values for IN query must be an array.", 1);
                        }

                        $sql .= $wpdb->prepare('`%s` IN (%s)', $field, implode(',', $value));
                        break;

                    default:
                        $sql .= $wpdb->prepare('`'.$field.'` '.$condition.' %s', $value);
                        break;
                }

                $conditionCounter++;
            }

            $result = $wpdb->get_results($sql);

            // As this will always return an array of results if you only want to return one record make $returnSingleRow TRUE
            if(count($result) == 1 && $returnSingleRow)
            {
                $result = $result[0];
            }

            return $result;
        }
        catch(Exception $ex)
        {
            return false;
        }
    }
    public function update(array $data, array $conditionValue)
    {
        global $wpdb;

        if(empty($data))
        {
            return false;
        }

        $updated = $wpdb->update( $this->tableName, $data, $conditionValue);

        return $updated;
    }
    public function delete(array $conditionValue)
    {
        global $wpdb;

        $deleted = $wpdb->delete( $this->tableName, $conditionValue );

        return $deleted;
    }
}
?>