<!doctype html>
<html lang="en">
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-
Gn5384xqQlaoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJISAwiGgFAW/dALS6JXm" crossorigin="anonymous">

<title>LOGIN KE DATABASE BIODATA KARYAWAN DINAS PERHUBUNGAN KABUPATEN KUANSING</title>
<style>
 .main{
         position: fixed;
         width: 100%;
         height : 100%;
         padding: 0;
         margin:0; 
         top:0;
         bottom: 0;
         right :0;
         left:0;
         display: flex;
         justify-content: center;
         align-items: center;
 }   
 .frame-login{
    width:500px;

}
    </style>
</head>
<body>
    <div class="jumbotron main">
     <div class=" py-3">
        <div class="container">
            <div class="frame-login">
                <form action="<?=base_url("Login/proses_login")?>" method="post">
                 <div class="card">
                    <?php if(!empty($this->session) ):?>
                        <div class="mt-2 mb-2">
                            <div class="alert alert-danger" role="alert">
                                <?=$this->session->flashdata("pesan")?> 
                                    </div>
                                </div>
                    <?php endif ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control"
                placeholder="username">
                            </div>
                            <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control"
                placeholder="password">
                           
                            </div>
                            <div class="from-group text-right">
                                <button class="btn btn-primary">Login</button>
                         </div>
                     </div>
                    </div> 
                 </from>
             </div>
         </div>
     </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper. js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min. js" integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min . js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQSAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
    <script src="https://cdn. jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min. js" 
    integrity="sha384-JZR6Spejh4082d8jOt6vLEHfe/JQGiRRSQQxSfFWpi 1MquVdAyjUar 5+76PVCmYL"
crossorigin="anonymous"></script>
    </body>
</html>