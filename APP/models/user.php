<?php
namespace MVC\models;
use MVC\core\model;
class user extends model{
    // admin sql
    public function enteradmindata($admindata){
        $admindata=model::db()->insert('admin',$admindata);
        return $admindata;
    }
    public function selectadmindata($email,$password){
         $selectadmindata=model::db()->row("SELECT * FROM  `admin` WHERE `email`=? && `password`=?" ,[$email ,$password]);
         return $selectadmindata;
        }

// professor sql

    public function enterprofessordata($data){
     $data=model::db()->insert('professors',$data);
       return $data;
    }

    public function selectprofdata(){
        $data= model::db()->rows("SELECT * FROM  `professors`");
           return $data;
    }

    public function selectprofalldata($email,$password){
        $data= model::db()->rows("SELECT * FROM  `professors` WHERE `email`=? && `password`=?",[$email,$password]);
           return $data;
    }
    public function deleteprof($id){
        $data=model::db()->delete('professors',['id'=>$id]);
        return $data;
    }
      
    public function getprofdata($id){
        $data=model::db()->row("SELECT *FROM `professors` WHERE `id`=$id");
        return $data;
    }
    public function updateprofs($id,$data){
        $data=model::db()->update('professors',$id,$data);
        return $data;
    }
    /////////////////////
    // students sql
    
    public function enterstudendata($data){
        $data=model::db()->insert('students',$data);
          return $data;
       }
   

    public function selectstudentdata($email,$password){
        $data= model::db()->rows("SELECT * FROM  `students` WHERE `email`=? && `password`=?",[$email,$password]);
           return $data;
    }
 public function selectalldatastudents(){
     $data=model::db()->rows("SELECT * FROM `students`");
     return $data;
 }

///update students
 public function getstudentdata($id){
    $data=model::db()->row("SELECT *FROM `students` WHERE `id`=$id");
    return $data;
}
public function updatestudents($id,$data){
    $data=model::db()->update('students',$id,$data);
    return $data;
}

///////////// delete students
public function deletestudent($id){
    $data=model::db()->delete('students',['id'=>$id]);
    return $data;
}

}

?>