<table id="table_data" class="table table-striped table-hover" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th>KATEGORI</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>#</th>
            <th>KATEGORI</th>
            <th>ACTION</th>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>1.</td>
            <td>NAMA KATEGORI</td>
            <td>
                <a title="EDIT" href="<?=site_url('/kategori/edit/'.str_replace('%', '-' ,urlencode($this->encrypt->encode(1))))?>" class="btn btn-default btn-xs">
                    <i class="fa fa-edit"></i>
                </a>
                <a title="DELETE" href="<?=site_url('/kategori/delete/'.str_replace('%', '-' ,urlencode($this->encrypt->encode(1))))?>" class="btn btn-danger btn-xs">
                    <i class="fa fa-trash-o"></i>
                </a>
            </td>
        </tr>
    </tbody>
</table>