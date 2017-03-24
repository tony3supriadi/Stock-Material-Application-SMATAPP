<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li><a href="<?=site_url('/kategori')?>">KATEGORI</a></li>
        <li class="active">EDIT</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <span class="glyphicon glyphicon-th-large"></span>
            EDIT | KATEGORI
        </h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <form action="" method="post" class="form-horizontal">
                <div class="panel-heading">
                    TO EDIT : KATEGORI

                    <a href="<?=site_url('/kategori')?>" class="btn btn-primary pull-right">
                        <i class="fa fa-plus"></i> TAMBAH
                    </a>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">KATEGORI</label>
                        <div class="col-md-6">
                            <input type="text" name="category" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <button type="reset" name="cancel" class="btn btn-default">
                        <i class="fa fa-refresh"></i> CANCEL
                    </button>
                    <button type="submit" name="save" class="btn btn-primary">
                        <i class="fa fa-save"></i> SAVE
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                TABLE DATA : KATEGORI
            </div>
            <div class="panel-body">
                <?php $this->load->view('pages/kategori/table'); ?>
            </div>
        </div>
    </div>
</div><!--/.row-->