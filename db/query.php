<?php
include 'sql.php';

class QueryResponse {
    public $result;
    public $count;

    function __construct($sql, $query_string) {
        $this->result = $sql->query($query_string);
        $this->count = $this->result->num_rows; 
    }
    function next() {
        return $this->result->fetch_assoc();
    }
}

function query($string) {
    global $sql;
    return new QueryResponse($sql, $string);
}

?>