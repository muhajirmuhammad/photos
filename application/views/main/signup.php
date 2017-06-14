<?php $this->load->view('main/header'); ?>
<body>

  <div class="row">
    <div class="container">
    <div class="col-md-12 col-sm-12 text-center">
      <br><br><br><br><br>
    </div>
    <div class="row">
    <div class="col-md-4">      
    </div>
      
    <div class="col-md-4">      
          <div class="panel panel-default">
              <div class="panel-heading text-center">SIGN UP</div>
              <div class="panel-body">
              <?php echo validation_errors(); ?>
               <?php echo form_open_multipart('signup/create'); ?>
                <label>Username</label>
                <input type="text" class="form-control" name="username" required="">
              <br>
                <label>Email</label>
                <input type="email" class="form-control" name="email" required="">
              <br>
                <label>Password</label>
                <input type="password" class="form-control" name="password" required="">
              <br>
                <label>Password Confirm</label>
                <input type="password" class="form-control" name="password2" required="">
              <br>
                <button type="submit" name="submit" class="btn btn-primary">SIGN UP</button>
                <a href="<?php echo base_url(); ?>index.php/login"><button class="btn btn-default">Back</button></a>
                </form>
              </div>
            </div>  
    </div>

    <div class="col-md-4">      
    </div>
    </div>
    <div class="col-md-12 col-sm-12">
      <br><br>
    </div>
    </div>
  </div>

</body>
<?php $this->load->view('home/footer'); ?>