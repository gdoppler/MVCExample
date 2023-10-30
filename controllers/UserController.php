<?php
class UserController{

    function index(){
        // will read users from database ... 
        $model=["Anton","Berta","Charly"];
        return $model; 
    }

    function edit($id){
        
    }
}