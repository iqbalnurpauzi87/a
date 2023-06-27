
<?php $__env->startSection('Content'); ?>

    <a href="#" onclick="ModalTambahBerita()"  class="btn btn-success"> + Add New Data</a>           

<table class="table table-bordered">
    <tr>
        <th>Kode Berita</th>
        <th>Nama Berita</th>
        <th>Opsi</th>
    </tr>
    <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($Get->kd_berita); ?></td>
        <td><?php echo e($Get->nama_berita); ?></td>
        <td>
            <a href="#" onclick="ModalEditBerita(<?php echo e($Get->kd_berita); ?> ,'<?php echo e($Get->nama_berita); ?>')" class="btn btn-info" >Update</a>
            |
            <a href="#" onclick="ModalHapusBerita(<?php echo e($Get->kd_berita); ?>)" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


<!-- Form Modal Tambah Berita -->
<form action="berita/tambah" method="post">
    <?php echo csrf_field(); ?>
<div class="modal fade" id="ModalTambahBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Tambah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Berita</label>
                <input type="text" class="form-control" name="kd_berita" value="<?php echo e($kdmax); ?>" required readonly>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Berita</label>
                <textarea name="nama_berita" class="form-control" required></textarea>
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
<!-- Form Modal Tambah Berita -->


<!-- Form Modal Hapus Berita-->
<form action="berita/hapus" method="post">
    <?php echo csrf_field(); ?>
<div class="modal fade" id="ModalHapusBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="kd_berita">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="simpan" value="Hapus">
          </div>
      </div>
    </div>
  </div>
</form>
  <!-- Form Modal Hapus Berita-->


  <!-- Form Modal Edit Berita -->
<form action="berita/edit" method="post">
    <?php echo csrf_field(); ?>
<div class="modal fade" id="ModalEditBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Ubah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Berita</label>
                <input type="text" class="form-control" name="kd_berita" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Berita</label>
                <input type="text" class="form-control" name="nama_berita"  required>
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
<!-- Form Modal Edit Berita -->

<script>

    // Modal Tambah Berita
    function ModalTambahBerita () {
           $('#ModalTambahBerita').modal('show');
       }
    // Modal Tambah Berita

    
 // Modal Hapus Berita
 function ModalHapusBerita ($id) {
            $('[name="kd_berita"]').val($id);
           $('#ModalHapusBerita').modal('show');
       }
    // Modal Hapus Berita
          
    // Modal Edit Berita
    function ModalEditBerita (id,nama) {
    
    $('[name="kd_berita"]').val(id);
    $('[name="nama_berita"]').val(nama);
   $('#ModalEditBerita').modal('show');
}
// Modal Edit Berita
   </script>

   


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\IPAT\beginner\resources\views/Vberita.blade.php ENDPATH**/ ?>