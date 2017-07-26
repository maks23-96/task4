<?php
class Sql
{
  protected $column;
  protected $table;
  protected $where;

  public function setColumn($column)
  {
    $this->column = $column;
  }
  public function setTable($table)
  {
    $this ->table = $table;
  }
  public function setWhere($where)
  {
    $this ->where = $where;
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

  public function select()
  {
    
    return $this;
  }  
  public function from()
  {
    
    return $this;
  }  
  public function where()
  {
    
    return $this;
  }
  public function exec()
  {
    
    return $this;
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
