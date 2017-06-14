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
              <div class="panel-heading text-center">LOGIN</div>
              <div class="panel-body">
              <?php echo validation_errors(); ?>
               <?php echo form_open_multipart('login/log_in'); ?>
                <label>Username</label>
                <input type="text" class="form-control" name="username" required="">
              <br>
                <label>Password</label>
                <input type="password" class="form-control" name="password" required="">
              <br>
                <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
                <a href="<?php echo base_url(); ?>index.php/signup">Sign Up</a>
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