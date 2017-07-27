<?php
class Sql
{
  protected $column;
  protected $table;
  protected $where;
  protected $values;
  //protected $stroka;

  public function __construct()
  {
    $this -> column = $column;
    $this -> table = $table;
    $this -> where = $where;
	$this -> value = $value;
  }

  public function select($column)
  {
    $this->column = 'SELECT ' . $column; 
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
  public function insert($table)
  {
	  $this->table = 'INSERT INTO'.$table;
	  return $this;
  }
  public function values($values)
  {
	  $this->values = $values;
	  return $this;
  }
  /*public function prepare()
  {
	  $stroka=$this->column.' '.$this->table.' '.$this->where;
	  return $this;
  }*/
  /*public function exec()
  {
	  
  //echo $this->column.' '.$this->table.' '.$this->where; 
  //mysql_query($stroka) ; 
  }*/
  
}



class Mysql extends Sql
{
   public function Mysqlconn()
     {
    //$link = mysql_connect('user1', 'user-1', 'tuser-1');
    $link = mysql_connect('localhost', 'root', '');
	mysql_select_db('bd1', $link);
    if (!$link)
    {
    die ('Error connection: '.mysql_error());
    }  else
    {
     echo "Success";
    }
    mysql_close($link);
    }
	
	public function exec()
  {
	  //echo $this->column.' '.$this->table.' '.$this->where;
  $stroka=$this->column.' '.$this->table.' '.$this->where; 
  //mysql_query($stroka) ; 
  }

} 
class Pgsql extends Sql
{
	public function Pgconn()
     {
    $link = pg_connect('dbname=user1 user=user-1 password=tuser-1');
    
    if (!$link)
    {
    die ('Error connection');
    }  else
    {
     echo "Success";
    }
    pg_close($link);
    }
	
	public function exec()
  {
	  
  echo $this->column.' '.$this->table.' '.$this->where; 
  //mysql_query($stroka) ; 
  }
}  
?>
