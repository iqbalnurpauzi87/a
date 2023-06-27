
<?php $__env->startSection('Content'); ?>



<a href="#" onclick="ModalTambahProfile()"  class="btn btn-success"> + Add New Data</a>

<table class="table table-bordered">
    <tr>
        <th>Kode Profile</th>
        <th>Nama Profile</th>
        <th>Opsi</th>
    </tr>
    <?php $__currentLoopData = $profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($Get->kd_profile); ?></td>
        <td><?php echo e($Get->nama_profile); ?></td>
        <td>
            <a href="#" onclick="ModalEditProfile(<?php echo e($Get->kd_profile); ?>, '<?php echo e($Get->nama_profile); ?>')" class="btn btn-info">Update</a>
            |
            <a href="#" onclick="ModalHapusProfile(<?php echo e($Get->kd_profile); ?>)" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>




<!-- Form Modal Tambah Profile -->
<form action="profile/tambah" method="post">
    <?php echo csrf_field(); ?>
<div class="modal fade" id="ModalTambahProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Tambah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Profile</label>
               <input type="text" class="form-control" name="kd_profile" value="<?php echo e($kdmax); ?>" required readonly>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Profile</label>
                <textarea name="nama_profile" class="form-control" required></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
        </div>
        </div>
    </div>
</div>
</form>
<!-- Form Modal Tambah Profile -->



<!-- Form Modal Hapus Profile-->
<form action="profile/hapus" method="post">
    <?php echo csrf_field(); ?>
<div class="modal fade" id="ModalHapusProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="kd_profile">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="simpan" value="Hapus">
          </div>
      </div>
    </div>
  </div>
</form>
  <!-- Form Modal Hapus Profile-->

 <!-- Form Modal Edit Profile -->
 <form action="profile/edit" method="post">
    <?php echo csrf_field(); ?>
<div class="modal fade" id="ModalEditProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Ubah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Profile</label>
                <input type="text" class="form-control" name="kd_profile" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Profile</label>
                <input type="text" class="form-control" name="nama_profile" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="ubah" value="Ubah">
        </div>
        </div>
    </div>
</div>
</form>
<!-- Form Modal Edit Profile -->


<script>


    // Modal Tambah Profile
    function ModalTambahProfile () {
           $('#ModalTambahProfile').modal('show');
       }
    // Modal Tambah Profile


 // Modal Hapus Profile
 function ModalHapusProfile ($id) {
            $('[name="kd_profile"]').val($id);
           $('#ModalHapusProfile').modal('show');
       }
    // Modal Hapus Profile
          
            
    // Modal Edit Berita
    function ModalEditProfile (id,nama) {
    
    $('[name="kd_profile"]').val(id);
    $('[name="nama_profile"]').val(nama);
   $('#ModalEditProfile').modal('show');
}
// Modal Edit Profile
 
          
   </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\IPAT\beginner\resources\views/Vprofile.blade.php ENDPATH**/ ?>