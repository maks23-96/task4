<?php
class Sql
{
  protected $column;
  protected $table;
  protected $where;

  public function setColumn($column)
  {
    $this->column = $column;
    return $this;
  }
  public function setTable($table)
  {
    $this ->table = $table;
    return $this;
  }
  public function setWhere($where)
  {
    $this ->where = $where;
    return $this;
  }
  public function getColumn()
  {
    return $this -> column;
  }
  public function getTable()
  {
    return $this -> table;
  }
  public function getWhere()
  {
    return $this -> where;
  }
  public function __construct()
  {
    $this -> column = $$column;
    $this -> table = $table;
    $this -> where = $where;
  }

  public function select($column)
  {
    $this->colum = 'SELECT ' . $column; 
    return $this;
  }  
  public function from($table)
  {
    $this->table = 'FROM ' . $table;
    return $this;
  }  
  public function where($where)
  {
    $this->where = 'WHERE '.$where;
    return $this;
  }
  public function exec()
  {
  echo $this->colum.' '.$this->table.' '.$this->where;  
  }
}



class Mysql extends Sql
{
   public function Mysqlconn()
     {
    $link = mysql_connect('user1', 'user-1', 'tuser-1');
    
    if (!$link)
    {
    die ('Error connection: '.mysql_error());
    }  else
    {
     echo "Success";
    }
    mysql_close($link);
    }

} 
class Pgsql extends Sql
{

}  
?>
