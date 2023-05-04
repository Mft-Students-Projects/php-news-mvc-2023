<?php
class BaseModel {

    public $table = "";

    public $columns = [];

    function findById($id){
        $sql = "SELECT  * FROM `".$this->table."` WHERE `id` = ?";

        $preparedSql = $GLOBALS["connection"]->prepare($sql);

        $preparedSql->bind_param("i",$id);

        $preparedSql->execute();

        return $preparedSql->get_result()->fetch_assoc();
    }

    function getAll($options=null,$columns="*"){
        $sql = "SELECT ".$columns."  FROM `".$this->table."`";
        if($options){
            $sql = $sql." ".$options;
        }
        $result = $GLOBALS["connection"]->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    private function generateSqlColumnNames(){
        $columnNamesInSql = "";

        foreach ($this->columns as $column) {
            $column = "`".$column."`";
            if(empty($columnNamesInSql)){
                $columnNamesInSql = $column; // `name`
            }else{
                $columnNamesInSql = $columnNamesInSql . "," . $column; // "`name`" . "" . "`enname`"
            }
        }

        return $columnNamesInSql; // "`name`,`enname`,`parent_id`"
    }

    private function generateSqlColumnQuestionMark(){
        $columnNamesInSql = "";

        foreach ($this->columns as $column) {
            if(empty($columnNamesInSql)){
                $columnNamesInSql = "?";
            }else{
                $columnNamesInSql = $columnNamesInSql . ",?";
            }
        }

        return $columnNamesInSql;
    }

    function create(){

        $sql = "INSERT INTO `".$this->table."` (".$this->generateSqlColumnNames().") VALUES (".$this->generateSqlColumnQuestionMark().")"; //column

        $preparedSql = $GLOBALS["connection"]->prepare($sql); // ساخت یک آبجکت از روی دستور sql

        return $preparedSql;
    }

    function delete($id){
        $sql = "DELETE FROM `".$this->table."` WHERE `id` = ?";

        $preparedSql = $GLOBALS["connection"]->prepare($sql);

        $preparedSql->bind_param("i",$id);

        return  $preparedSql->execute();
    }

    private function generateUpdateColumnNames(){
        $columnNamesInSql = "";

        foreach ($this->columns as $column) {
            $column = "`".$column."`";
            if(empty($columnNamesInSql)){
                $columnNamesInSql = $column . " = ?";
            }else{
                $columnNamesInSql = $columnNamesInSql . " , " . $column . " = ?";
            }
        }

        return $columnNamesInSql;
    }

    function update(){

        $sql = "UPDATE `".$this->table."` SET ".$this->generateUpdateColumnNames()." WHERE `id` = ?";//column

        $preparedSql = $GLOBALS["connection"]->prepare($sql);

        return $preparedSql;

    }

    function where($condition,$columns="*",$limit=null){
        $sql = "SELECT ".$columns." FROM `".$this->table."` WHERE ".$condition;

        if($limit){
            $sql = $sql." LIMIT ".$limit;
        }

        if(str_contains($condition,"?")){
            $preparedSql = $GLOBALS["connection"]->prepare($sql);

            return $preparedSql;
        }

        $result = $GLOBALS["connection"]->query($sql);

        if($result){
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        return [];

    }

    function whereDelete($condition){
        $sql = "DELETE FROM `".$this->table."` WHERE ".$condition;

        $preparedSql = $GLOBALS["connection"]->prepare($sql);

        return $preparedSql;
    }

    function min($field){
        $sql = "SELECT MIN(".$field.") as minPrice FROM ".$this->table;
        $result = $GLOBALS["connection"]->query($sql);
        if($result){
            return $result->fetch_assoc();
        }
        return ["minPrice"=>0];
    }

    function max($field){
        $sql = "SELECT MAX(".$field.") as maxPrice FROM ".$this->table;
        $result = $GLOBALS["connection"]->query($sql);
        if($result){
            return $result->fetch_assoc();
        }
        return ["maxPrice"=>0];
    }

    function whereIn($column,$array){
        $arrayAsString = implode(',',$array);
        $sql = "SELECT * FROM `".$this->table."` WHERE `${column}` IN (${arrayAsString})";

//        debug($sql);

        $result = $GLOBALS["connection"]->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}