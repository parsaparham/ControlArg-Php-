<?php

class class_parent{
	
	private $username="root";
	private $password='';
	private $dsn="mysql:host=localhost;dbname=controlArg";
   // private $attr=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	public $db;
	
	
	public function __construct(){

        //$this->db=new PDO($this->dsn,$this->username,$this->password,$this->attr);
        $this->db=new PDO($this->dsn,$this->username,$this->password);

		
		}
	
	
	
	public function connect(){

        $db=new PDO($this->dsn,$this->username,$this->password,$this->attr);
       // $db=new PDO($this->dsn,$this->username,$this->password);

		return $db;
		
		}
	
	public function select($sql,$array=array(),$style=PDO::FETCH_ASSOC){
		
		$stmt=$this->db->prepare($sql);
		
		foreach($array as $key=>$value){
	
	    $stmt->bindValue($key+1,$value);
	
	
	        }/*forach*/
			
		$stmt->execute();

        $result=$stmt->fetchAll($style);
		
		
		
		return $result;
		
		}/*select*/
		
		
		function myquery($sql,$array=array()){
			
			$stmt=$this->db->prepare($sql);
			
			foreach($array as $key=>$value){
	
	        $stmt->bindvalue($key+1,$value);
	
	
	                  }/*foreach*/
			
			$stmt->execute();
			
			}/*update*/
			
			
			
			
			function num($sql,$array=array()){
			
			$stmt=$this->db->prepare($sql);
			
			foreach($array as $key=>$value){
	
	        $stmt->bindvalue($key+1,$value);
	
	
	                  }/*foreach*/
			
			$stmt->execute();
			
			return $stmt->rowCount();
			
			}/*num*/



			
			
			
			
			
		
	
	
	}/*class*/



	function convertict($string) {
		$persian = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
		$num = range(0, 9);
		return str_replace($persian, $num, $string);
	}



function check_injection($a){
    $b=str_replace(array('\'','"','+'),'',$a);
    return $b;
}

function member($x){
    $a="مدیر سایت";
    $b="فال گیرنده";
    $c="عضو";
    if($x==3){return $a;}
    if($x==2){return $b;}
    if($x==1){return $c;}
}
function memberback($x){
    $a="3";
    $b="2";
    $c="1";
    if($x=="مدیر سایت"){return $a;}
    if($x=="فال گیرنده"){return $b;}
    if($x=="عضو"){return $c;}
}


function limitWord($string,$limit){
	$word=explode(" ",$string);
	$output=implode(" ",array_splice($word,0,$limit));
	return $output;
}

function single($a){
	if($a==0){return "مشخص نیست";}
	if($a==1){return "مجرد";}
	if($a==2){return "متاهل";}
}

function singleBack($a){
	if($a=="مجرد"){return 1;}
	if($a=="متاهل"){return 2;}
	if($a=="مشخص نیست"){return 0;}
}

function status($a){
	if($a==0){return "منتظر پرداخت";}
	if($a==1){return "منتظر تعیین نوبت";}
	if($a==2){return "منتظر پاسخ";}
	if($a==3){return "پاسخ داده شده";}
}
function statusBack($a){
	if($a=="منتظر پرداخت"){return 0 ;}
	if($a=="منتظر تعیین نوبت"){return 1;}
	if($a=="منتظر پاسخ"){return 2;}
	if($a=="پاسخ داده شده"){return 3;}
}

function sms($a){
	if($a==0){return "خوانده نشده";}
	if($a==1){return "خوانده شده";}

}
function smsBack($a){
	if($a=="خوانده نشده"){return 0 ;}
	if($a=="خوانده شده"){return 1;}

}

function active($a){
	if($a==0){return "غیرفعال";}
	if($a==1){return "فعال";}

}
function activeBack($a){
	if($a=="غیرفعال"){return 0 ;}
	if($a=="فعال"){return 1;}

}



function phpAlert($msg) {
	echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}




?>








