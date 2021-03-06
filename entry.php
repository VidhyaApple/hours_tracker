<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
?>
<!-- test git -->
<div class="well centering col-md-8" id="well_entry" >

  <div class="row">
    <div class="col-xs-12">
      <span class="text-center"><h3><?php echo $_SESSION["name"];?></h3></span>
     </div>
   </div>

   <div class="row">        
             <button class="col-md-4 centering btn btn-primary btn-lg no-click" id="today_record"></button>
     
  </div>
<br>
  
<div class="text-center"><h4><?php echo date('d-m-Y l') ;?></h4></div>
<form class="form-horizontal form_entry" role="form" >
  <div class="row">                 
              <div class='col-xs-12'>
                  <div class="form-group">                          
                          <input type='text' id="timepicker1" class="form-control input-lg transparent-input readonly" name="from_time" placeholder="FROM TIME" required>  
                          <span class="glyphicon glyphicon-time"></span>                                 
                  </div>
            </div>
                     
             <div class='col-xs-12'>         
                <div class="form-group">            
                     <input type='text' id="timepicker2" class="form-control input-lg transparent-input readonly" name="to_time" placeholder="TO TIME" required>
                      <span class="glyphicon glyphicon-time"></span>
                </div>
            </div>
  </div>

<div class="row">
                        
                  <div class="col-xs-12">
                      <div class="form-group">  
                      <input type="text" class="form-control input-lg transparent-input" name="journal_id" placeholder="JOURNAL/BOOK ID" required>                    
                  </div>
               </div>   
   </div>

   <div class="row">

                  <div class="text-center"><h4>Number of Pages</h4></div>
                      
                  <div class="col-xs-6">
                      <div class="form-group">     
                        <input type="number" class="form-control input-lg transparent-input" name="pro_pages" placeholder="PRODUCTION">                    
                  </div>
               </div>   

               <div class="col-xs-6">
                      <div class="form-group">     
                        <input type="number" class="form-control input-lg transparent-input" name="qc_pages" placeholder="QC">                    
                  </div>
               </div>  
     </div>           
              
      <div class="row">
        
                    <div class="col-xs-6">
                        <div class="form-group">
                             <button type="submit" class="btn btn-info btn-block btn-lg transparent-input">Submit</button>
                        </div> 

                     </div> 

                    <div class="col-xs-6">
                      <div class="form-group">
                          <button type="reset" class="btn btn-info btn-block btn-lg transparent-input" onclick="reset();"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
                      </div> 
                    </div>                               
            </div>  
  </form> 


</div>