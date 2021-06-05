<?php
namespace MVC\models;
use MVC\core\model;
class material extends model{

public function insertmaterial($materialdata){
    $materialdata=model::db()->insert('subjects',$materialdata);
    return $materialdata;
}

public function selectmaterial(){
    $data=model::db()->rows("SELECT * FROM `subjects`");
    return $data;
}

public function deletematerial($id){
    $data=model::db()->delete('subjects',['id'=>$id]);
    return $data;
}
  
public function getmaterialdata($id){
    $data=model::db()->row("SELECT *FROM `subjects` WHERE `id`=$id");
    return $data;
}
public function updatematerial($id,$data){
    $data=model::db()->update('subjects',$id,$data);
    return $data;
}
/////////////////////////////////////////////////// ADD Questions For subjects

// operating system subject
public function addquestionos($data){
    $data=model::db()->insert('examos',$data);
    return $data;
} 
public function selectquestionos(){
    $data=model::db()->rows("SELECT * FROM `examos`");
    return $data;
}

public function deleteos($id){
    $data=model::db()->delete('examos',['id'=>$id]);
    return $data;
}
  
public function getsubjectos($id){
    $data=model::db()->row("SELECT * FROM `examos` WHERE `id`=$id");
    return $data;
}
public function updatesubjectos($id,$data){
    $data=model::db()->update('examos',$id,$data);
    return $data;
}


//////////////////////////////////////////////////////////
// simulation and modeling subject
public function addquestionmodeling($data){
    $data=model::db()->insert('exammodeling',$data);
    return $data;
} 

public function selectquestionmodeling(){
    $data=model::db()->rows("SELECT * FROM `exammodeling`");
    return $data;
}

public function deletemodeling($id){
    $data=model::db()->delete('exammodeling',['id'=>$id]);
    return $data;
}
  
public function getsubjectmodeling($id){
    $data=model::db()->row("SELECT *FROM `exammodeling` WHERE `id`=$id");
    return $data;
}
public function updatesubjectmodeling($id,$data){
    $data=model::db()->update('exammodeling',$id,$data);
    return $data;
}

///////////////////////////////////////////////
//  computer networks
public function addquestioncn($data){
    $data=model::db()->insert('examcn',$data);
    return $data;
} 

public function selectquestioncn(){
    $data=model::db()->rows("SELECT * FROM `examcn`");
    return $data;
}

public function deletecn($id){
    $data=model::db()->delete('examcn',['id'=>$id]);
    return $data;
}
  
public function getsubjectcn($id){
    $data=model::db()->row("SELECT *FROM `examcn` WHERE `id`=$id");
    return $data;
}
public function updatesubjectcn($id,$data){
    $data=model::db()->update('examcn',$id,$data);
    return $data;
}

//////////////////////////////////////////////////////////////////
//system construction


public function addquestionsc($data){
    $data=model::db()->insert('examsc',$data);
    return $data;
} 
public function selectquestionsc(){
    $data=model::db()->rows("SELECT * FROM `examsc`");
    return $data;
}

public function deletesc($id){
    $data=model::db()->delete('examsc',['id'=>$id]);
    return $data;
}
  
public function getsubjectsc($id){
    $data=model::db()->row("SELECT *FROM `examsc` WHERE `id`=$id");
    return $data;
}
public function updatesubjectsc($id,$data){
    $data=model::db()->update('examsc',$id,$data);
    return $data;
}

//////////////////////////////////////////////////////////////////
// opensource 
public function addquestionopensource($data){
    $data=model::db()->insert('examopensource',$data);
    return $data;
} 

public function selectquestionopensource(){
    $data=model::db()->rows("SELECT * FROM `examopensource`");
    return $data;
}

public function deleteopensource($id){
    $data=model::db()->delete('examopensource',['id'=>$id]);
    return $data;
}
  
public function getsubjectopensource($id){
    $data=model::db()->row("SELECT *FROM `examopensource` WHERE `id`=$id");
    return $data;
}
public function updatesubjectopensource($id,$data){
    $data=model::db()->update('examopensource',$id,$data);
    return $data;
}

///////////////////////////////////////////////////////////
// software requirements
public function addquestionrequirements($data){
    $data=model::db()->insert('examrequirements',$data);
    return $data;
} 
public function selectquestionrequirements(){
    $data=model::db()->rows("SELECT * FROM `examrequirements`");
    return $data;
}

public function deleterequirements($id){
    $data=model::db()->delete('examrequirements',['id'=>$id]);
    return $data;
}
  
public function getsubjectrequirements($id){
    $data=model::db()->row("SELECT *FROM `examrequirements` WHERE `id`=$id");
    return $data;
}
public function updatesubjectrequirements($id,$data){
    $data=model::db()->update('examrequirements',$id,$data);
    return $data;
}
///////////////////////////////////////////////////////////////////////////

public function selectresultsos(){
    $data=model::db()->rows("SELECT * FROM `results`");
    return $data;
}
public function selectresultsopen(){
    $data=model::db()->rows("SELECT * FROM `resultopen`");
    return $data;
}
public function selectresultssc(){
    $data=model::db()->rows("SELECT * FROM `resultsc`");
    return $data;
}

}
?>