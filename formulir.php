<!DOCTYPE html>
<html>
<?php require 'head.php'
       ?>
<body>
<?php require 'navigator.php'
       ?>
<body>
<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
            <fieldset><br><br><br>

                    <!-- Form Name -->
                    <h2 align="center">Formulir Pesenanan</h2><br>    
                        <!-- Text input Name-->

                    <div class="form-group">
                      <label class="col-md-4 control-label">Name</label>  
                      <div class="col-md-4 inputGroupContainer">
                          <input  name="first_name" placeholder="Name" class="form-control"  type="text">
                      </div>
                    </div>

                    

                    <!-- Text input Email-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">E-Mail</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                        </div>
                    </div>


                    <!-- Text input Phone-->
                           
                    <div class="form-group">
                      <label class="col-md-4 control-label">Phone</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <input name="phone" placeholder="(+62) 812-2544-5000" class="form-control" type="text">
                        </div>
                    </div>


                    <!-- Text input Date-->
                           
                    <div class="form-group" method="post">
                      <label class="col-md-4 control-label">Date</label>  
                        <div class="col-md-4 inputGroupContainer">
                             <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                        </div>
                    </div>

                    <!-- Text input Address-->
                    <div class="form-group">
                      <label class="col-md-4 control-label">Address</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <input name="address" placeholder="Address" class="form-control" type="text">
                        </div>
                    </div>

                    <!-- Text input City-->
                     
                    <div class="form-group">
                      <label class="col-md-4 control-label">City</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <input name="city" placeholder="city" class="form-control"  type="text">
                        </div>
                    </div>

                    <!-- radio checks -->
                     <div class="form-group">
                                            <label class="col-md-4 control-label">Jenis Kelamin</label>
                                            <div class="col-md-4">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="hosting" value="yes" /> Laki-laki
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="hosting" value="no" /> Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                    <!-- Text area -->
                      
                    <div class="form-group">
                      <label class="col-md-4 control-label">Project Description</label>
                        <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
                      </div>
                      </div>
                    </div>

                    <!-- Success message -->
                    <p class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</p>

                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label"></label>
                      <div class="col-md-4">
                        <button type="submit" class="btn btn-success" >Send <span class="glyphicon glyphicon-send"></span></button>
                      </div>
                    </div>

            </fieldset>
      </form>
        <?php require 'footer.php'
       ?>
</div><!-- /.container -->


    <!-- memanggil file js --> 
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/scrollup.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
</body>
</html>
