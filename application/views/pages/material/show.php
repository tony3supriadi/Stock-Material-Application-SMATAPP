<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li><a href="<?=site_url('/material')?>">MATERIAL</a></li>
        <li class="active">SHOW</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <span class="glyphicon glyphicon-inbox"></span>
            SHOW | MATERIAL
        </h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        TO SHOW : MATERIAL
                    </div>

                    <div class="col-md-6 text-right">
                        <a title="EDIT" href="<?=site_url('/material/show/'.str_replace('%', '-' ,urlencode($this->encrypt->encode(1))))?>" class="btn btn-default">
                            <i class="fa fa-edit"></i> EDIT
                        </a>
                        <a title="BACK" href="<?=site_url('/material')?>" class="btn btn-primary">
                            <i class="fa fa-arrow-left"></i> BACK
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel-body no-padding">
                <table class="table table-striped table-hover">
                    <tr>
                        <td><b>NUMBER ID</b></td>
                        <td><b>:</b></td>
                        <td><?=time()?></td>
                    </tr>
                    <tr>
                        <td><b>MATERIAL</b></td>
                        <td><b>:</b></td>
                        <td>SEMEN TIGA RODA</td>
                    </tr>
                    <tr>
                        <td><b>CATEGORY</b></td>
                        <td><b>:</b></td>
                        <td>BANGUNAN</td>
                    </tr>
                    <tr>
                        <td><b>DESCRYPTION</b></td>
                        <td><b>:</b></td>
                        <td>DESKRIPSI UNTUK SEMEN TIGA RODA</td>
                    </tr>
                    <tr>
                        <td><b>CREATED AT</b></td>
                        <td><b>:</b></td>
                        <td>22 MAR 2017, 20:24:12</td>
                    </tr>
                    <tr>
                        <td><b>UPDATED AT</b></td>
                        <td><b>:</b></td>
                        <td>22 MAR 2017, 20:24:12</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>