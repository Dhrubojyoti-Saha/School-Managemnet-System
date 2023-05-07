<?php

   function __getCountryName($flatConn){
      $CountryArray = array(); 
      $Country = $flatConn ->  query("SELECT * FROM `country_tbl`");
      while($fetchCountry = $Country -> fetch_assoc()){
          $CountryArray[$fetchCountry['id']] = $fetchCountry['name'];
      }
      
      return $CountryArray;
   }
   
     function __getStateName($flatConn, $countryid = ''){
      $StateArray = array(); 
      if($countryid != ''){
      $State = $flatConn ->  query("SELECT * FROM `state_tbl` where `country_id`= '".$countryid."'");
      }else{
      $State = $flatConn ->  query("SELECT * FROM `state_tbl`");    
      }
      while($fetchState = $State -> fetch_assoc()){
          $StateArray[$fetchState['id']] = $fetchState['name'];
      }
      
      return $StateArray;
   }
   
      function __getDistrictName($flatConn, $StateId = ''){
      $DistrictArray = array(); 
      if($StateId != ''){
      $District = $flatConn ->  query("SELECT * FROM `district_tbl` where `state_id`= '".$StateId."'");
      }else{
      $District = $flatConn ->  query("SELECT * FROM `district_tbl`");    
      }
      while($fetchDistrict = $District -> fetch_assoc()){
          $DistrictArray[$fetchDistrict['id']] = $fetchDistrict['name'];
      }
      
      return $DistrictArray;
   }
   
      function __getCityName($flatConn, $StateId = ''){
      $DistrictArray = array(); 
      if($StateId != ''){
      $District = $flatConn ->  query("SELECT * FROM `city_tbl` where `state_id`= '".$StateId."'");
      }else{
      $District = $flatConn ->  query("SELECT * FROM `city_tbl`");    
      }
      while($fetchDistrict = $District -> fetch_assoc()){
          $DistrictArray[$fetchDistrict['id']] = $fetchDistrict['name'];
      }
      
      return $DistrictArray;
   }
   
     function __getSchoolName($flatConn, $SchoolId = ''){
      $DistrictArray = array(); 
      if($SchoolId != ''){
      $District = $flatConn ->  query("SELECT * FROM `school_tbl` where `id`= '".$SchoolId."'");
      }else{
      $District = $flatConn ->  query("SELECT * FROM `school_tbl`");    
      }
      while($fetchDistrict = $District -> fetch_assoc()){
          $DistrictArray[$fetchDistrict['id']] = $fetchDistrict['name'];
      }
      
      return $DistrictArray;
   }
?>

