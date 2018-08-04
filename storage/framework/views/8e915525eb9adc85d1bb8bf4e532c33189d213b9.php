<?php $__env->startSection('title',"Institution"); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
            </div>
            <div class="card-body ">
               <div class="row">
                <div class="col-lg-3">
                    <img src="<?php echo e(asset('content/images/logo.png')); ?>" width="200px" height="200px">
                </div>
                <div class="col-lg-8">
                    <p class="text-dark"><b class="text-primary">Name:</b> Faujdarhat Collegiate School</p>
                    <p class="text-dark"><b class="text-primary">Moto:</b> <?php echo e($institution->Moto); ?></p>
                    <p class="text-dark"><b class="text-primary">Established Year:</b> <?php echo e($institution->Estd); ?></p>
                    <p class="text-dark"><b class="text-primary">EIIN:</b> <?php echo e($institution->Eiin); ?></p>
                    <p class="text-dark"><b class="text-primary">Address:</b>  <?php echo e($institution->Address); ?></p>
                    <p class="text-dark"><b class="text-primary">Headmaster:</b> <?php echo e($institution->Head); ?></p>
                    <p class="text-dark"><b class="text-primary">Chairman:</b> <?php echo e($institution->Chairman); ?></p>
                    <p class="text-dark"><b class="text-primary">Phone:</b> <?php echo e($institution->Phone); ?></p>
                    <p class="text-dark"><b class="text-primary">Email:</b> <?php echo e($institution->Email); ?></p>
                </div>
                <section class="col-lg-1" id='close'>
                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editInsttitutionDetailModal"><i class='fa fa-pencil'></i> Edit</button>
                </section>
               </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editInsttitutionDetailModal" tabindex="-1" role="dialog" aria-labelledby="editInsttitutionDetailModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="editInsttitutionDetailModalTitle">Edit Institution Details</h3>
      </div>
    <form class="form-group" method="POST" action="<?php echo e(route('edit.institution')); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

      <div class="modal-body">
            <div class="row">
                <div class="col-lg-6">
                     <div class="form-group">
                        <label for="Moto">Moto</label><br>
                        <input type="text" class="form-control" name="Moto" placeholder="Enter Moto" value="<?php echo e($institution->Moto); ?>">
                    </div>
                     <div class="form-group">
                        <label for="Address">Address</label><br>
                        <input type="text" class="form-control" name="Address" placeholder="Enter Address" required value="<?php echo e($institution->Address); ?>">
                    </div>
                     <div class="form-group">
                        <label for="Estd">Established At</label><br>
                        <input type="number" class="form-control" name="Estd" placeholder="Enter Established Year"required value="<?php echo e($institution->Estd); ?>">
                    </div>
                     <div class="form-group">
                        <label for="Eiin">EIIN Number</label><br>
                        <input type="number" class="form-control" name="Eiin" placeholder="Enter EIIN Number" required value="<?php echo e($institution->Eiin); ?>">
                    </div>
                    <div class="form-group">
                        <label for="Head">Headmaster</label><br>
                        <input type="text" class="form-control" name="Head" placeholder="Enter Headmaster's Name" required value="<?php echo e($institution->Head); ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="Chairman">Chairman</label><br>
                        <input type="text" class="form-control" name="Chairman" placeholder="Enter Chairman's Name" required value="<?php echo e($institution->Chairman); ?>">
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone</label><br>
                        <input type="text" class="form-control" name="Phone" placeholder="Enter Phone Number" required value="<?php echo e($institution->Phone); ?>">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label><br>
                        <input type="email" class="form-control" name="Email" placeholder="Enter Email" required value="<?php echo e($institution->Email); ?>">
                    </div>
                     <div class="form-group">
                        <label for="logo">Logo</label><br>
                        <img id="uploaded-logo" src="<?php echo e(asset('content/images/logo.png')); ?>" width="100px" height="100px" alt="Upload Logo" />
                        <input type="file" class="form-control" name="logo" onchange="readLogoURL(this);" accept="image/x-png">
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary" id="modal-close-button" href="<?php echo e(asset('institution')); ?>">Cancel</a>
        <input type="submit" class="btn btn-primary" value='Save changes'/>
      </div>
  </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>