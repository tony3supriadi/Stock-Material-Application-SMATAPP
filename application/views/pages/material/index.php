<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">MATERIAL</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <span class="glyphicon glyphicon-inbox"></span>
            MATERIAL
        </h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                TABLE DATA : MATERIAL

                <a title="ADD NEW" href="<?=site_url('/material/add')?>" class="btn btn-primary pull-right">
                    <i class="fa fa-plus"></i> ADD NEW
                </a>
            </div>
            <div class="panel-body">
                <table id="table_data" class="table table-striped table-hover" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NUMBER ID</th>
                            <th>MATERIAL</th>
                            <th>CATEGORY</th>
                            <th>DESCRIPTION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>NUMBER ID</th>
                            <th>MATERIAL</th>
                            <th>CATEGORY</th>
                            <th>DESCRIPTION</th>
                            <th>ACTION</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td><?=time()?></td>
                            <td>SEMEN TIGA RODA</td>
                            <td>BANGUNAN</td>
                            <td>DESKRIPSI UNTUK SEMEN TIGA RODA</td>
                            <td>
                                <a title="SHOW" href="<?=site_url('/material/show/'.str_replace('%', '-' ,urlencode($this->encrypt->encode(1))))?>" class="btn btn-info btn-xs">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a title="EDIT" href="<?=site_url('/material/edit/'.str_replace('%', '-' ,urlencode($this->encrypt->encode(1))))?>" class="btn btn-default btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a title="DELETE" href="<?=site_url('/material/delete/'.str_replace('%', '-' ,urlencode($this->encrypt->encode(1))))?>" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!--/.row-->