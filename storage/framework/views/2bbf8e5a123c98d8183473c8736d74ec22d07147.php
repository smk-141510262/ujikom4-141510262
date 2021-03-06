<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Jabatan</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/Jabatan')); ?>" class="btn btn-success btn-block">Kembali</a><br>

                    <?php if(!empty($errors->first())): ?>
                        <div class='alert alert-warning'><?php echo $errors->first(); ?></div>
                    <?php endif; ?>
                    
                    <?php echo Form::open(['url'=>'Jabatan']); ?>

                    <div class="form-group">
                        <?php echo Form::label('Kode Jabatan','Kode Jabatan'); ?>

                        <?php echo Form::text('kode_jabatan',null,['class'=>'form-control','placeholder'=>'Contoh: koja-100','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Nama Jabatan','Nama Jabatan'); ?>

                        <?php echo Form::text('nama_jabatan',null,['class'=>'form-control','placeholder'=>'Contoh: BOS','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Besaran Uang','Besaran Uang'); ?>

                        <?php echo Form::number('besaran_uang',null,['class'=>'form-control','placeholder'=>'Contoh: Rp. 1.000.000.000,-','required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::submit('save',['class'=>'btn btn-success form-control']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>