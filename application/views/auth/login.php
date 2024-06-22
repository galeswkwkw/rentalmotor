 <!-- Outer Row -->
 <div class="row justify-content-center">


     <div class="col-xl-5 col-lg-5 col-md-5">

         <div class="card o-hidden border-0 shadow-lg my-5">
             <div class="card-body p-0">
                 <!-- Nested Row within Card Body -->

                 <div class="p-5">
                     <div class="text-center">
                         <h1 class="h4 text-gray-900 mb-4">Selamat Datang Kembali!</h1>
                     </div>
                     <form class="user" action="<?= base_url('auth') ?>" method="POST">
                         <div class="form-group">
                             <input type="text" class="form-control form-control-user" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Username">
                             <?= form_error('username', '<small class="text-danger pl-2">', '</small>') ?>
                         </div>
                         <div class="form-group">
                             <input type="password" class="form-control form-control-user" id="password" name="password" value="<?= set_value('password') ?>" placeholder="Password">
                             <?= form_error('password', '<small class="text-danger pl-2">', '</small>') ?>
                         </div>
                         <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                     </form>
                     <hr>
                 </div>
             </div>
         </div>

     </div>
 </div>
