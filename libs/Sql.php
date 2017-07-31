<?php
class Sql
{
  protected $column;
  protected $table;
  protected $where;
  protected $values;
  protected $select;
  protected $delete;

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
   public function delete($column)
  {
    $this->column = 'DELETE ' . $column; 
    return $this;
  }
  
  
  
  public function exec()
  {
	  
  //echo $this->column.' '.$this->table.' '.$this->where; 
  //mysql_query($stroka) ; 
  }
  
}



class Mysql extends Sql
{
   public function __construct()
  {
    $link = mysql_connect('localhost','root','');
   if (!link)
  {
    die('Error connection: '.mysql_error());
  } else
  {
   echo "Success<br>";
  }
   mysql_select_db('user1', $link) or die(mysql_error());
  }
	public function exec()
  {
	  $delete=$this->column.' '.$this->table.' '.$this->where;
	  $select=$this->column.' '.$this->table.' '.$this->where;
	  echo $this->column.' '.$this->table.' '.$this->where;
	   $query = sprintf($select);
     $result = mysql_query($query);
     if (!$result)
     {
      $message = 'neverniy zapros: ' .mysql_error() . "\n";
      $message .= 'Zapros: ' . $query;
      die($message);
     }
	 echo "<table border=1px>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";
  }

} 
class Pgsql extends Sql
{
	/*public function __construct()
  {
    $link = pg_connect('localhost','user1','tuser1');
   if (!link)
  {
    die('Error connection');
  } else
  {
   echo "Success";
  }
   mysql_select_db('user1', $link) or die(mysql_error());
  }*/
	public function exec()
  {
	  
  echo $this->column.' '.$this->table.' '.$this->where; 
  //mysql_query($stroka) ; 
  }
}  
?>
