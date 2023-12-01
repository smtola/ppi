<?php
	class myclass{
		function link(){
			$localhost = "localhost";
			$username = "root";
			$password = "";
			$dbName = "dbmusicstar";
			$connect = new mysqli($localhost,$username,$password,$dbName);
			return $connect;
		}
		function select($table){
			$sql = "select * from $table";
			return $this->link()->query($sql);
			
		}
		function insert($table,$field,$value){
		$count = count($field);
			$sql = "insert into $table(";
			for($i=0;$i<$count;$i++){
				if($i==($count-1)){
					$sql.=$field[$i];
				}else{
					$sql.= $field[$i].",";
				}
			}
			$sql.=") values(";
			for($i=0;$i<$count;$i++){
					if($i==($count-1)){
					$sql.=$value[$i].")";
				}else{
					$sql.= $value[$i].",";
				}
			}
			return $this->link()->query($sql);
	}
	function update($table,$field,$value,$con_1,$con_1_value){
		$sql = "update $table set ";
		$count = count($field);
		for($i=0;$i<$count;$i++){
			if($i == ($count-1)){
				$sql.=$field[$i]."=".$value[$i];
			}else{
				$sql.=$field[$i]."=".$value[$i].",";
			}
		}
		$sql.= " where $con_1 = $con_1_value";
		return $this->link()->query($sql);
	}
        function select_1con($table,$field,$val){
            $sql = "select * from $table where $field = '$val'";
            return $this->link()->query($sql);
        }
        function delete($table,$field,$value){
            $sql = "delete from $table where $field = $value";
            return $this->link()->query($sql);
        }
		function search($table,$col,$value){
			$sql = "select * from $table where $col like '%$value%'";
			return $this->link()->query($sql);
		}
		function login($table,$col1,$col2,$val1,$val2){
			$sql = "select * from $table where $col1 = '$val1' and $col2 = '$val2'";
			return $this->link()->query($sql);
		}

		
	}
?>