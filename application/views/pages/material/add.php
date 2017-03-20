<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li><a href="<?=site_url('/material')?>">MATERIAL</a></li>
        <li class="active">ADD</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <span class="glyphicon glyphicon-inbox"></span>
            ADD | MATERIAL
        </h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <form action="" method="post" class="form-horizontal row-border">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            ADD NEW : MATERIAL
                        </div>

                        <div class="col-md-6 text-right">
                            <a title="BACK" href="<?=site_url('/material')?>" class="btn btn-primary">
                                <i class="fa fa-arrow-left"></i> BACK
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">            
                    <div class="form-group">
                        <label class="col-md-3 control-label">MATERIAL</label>
                        <div class="col-md-9">
                            <input class="form-control" name="material">
                        </div>
					</div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">CATEGORY</label>
                        <div class="col-md-9">
                            <select name="category" class="form-control">
                                <option></option>
                                <option>CATEGORY ITEM 1</option>
                                <option>CATEGORY ITEM 2</option>
                                <option>CATEGORY ITEM 3</option>
                            </select>
                        </div>
					</div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">DESCRIPTION</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="description" rows="5"></textarea>
                        </div>
					</div>
                </div>
                <div class="panel-footer text-right">
                    <button title="CANCEL" type="reset" name="cancel" class="btn btn-default">
                        <i class="fa fa-refresh"></i> CANCEL
                    </button>
                    <button title="SAVE" type="submit" name="save" class="btn btn-primary">
                        <i class="fa fa-save"></i> SAVE
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>