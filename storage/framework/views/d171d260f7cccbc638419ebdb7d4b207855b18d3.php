<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lembur Pegawai</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/LemburPegawai/create')); ?>" class="btn btn-success btn-block">Tambah Lembur Pegawai</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Lembur</td>
                                <td>Nama Pegawai</td>
                                <td>Jumlah Jam</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                             ?>
                            <?php $__currentLoopData = $lemburpegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($baru->kategori_lembur->kode_lembur); ?></td>
                                    <td><?php echo e($baru->pegawai->User->name); ?></td>
                                    <td><?php echo e($baru->jumlah_jam); ?></td>
                                    <td><a href="<?php echo e(route('LemburPegawai.edit',$baru->id)); ?>" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['LemburPegawai.destroy', $baru->id]]); ?>

                                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                                    <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>