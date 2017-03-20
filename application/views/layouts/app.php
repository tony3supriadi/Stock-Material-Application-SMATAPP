<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$title?></title>

        <link href="<?=base_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet">
        <link href="<?=base_url('/assets/css/datepicker3.css')?>" rel="stylesheet">
        <link href="<?=base_url('/assets/css/styles.css')?>" rel="stylesheet">

        <link href="<?=base_url('/assets/plugins/data-tables/media/css/jquery.dataTables.min.css')?>">
        <link href="<?=base_url('/assets/plugins/data-tables/media/css/dataTables.bootstrap.min.css')?>">
        <link href="<?=base_url('/assets/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
        
        <script src="<?=base_url('/assets/js/lumino.glyphs.js')?>"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=site_url()?>"><span>SMAT</span>APP | STOCK MATERIAL</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> 
                                ADMINISTRATOR
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <ul class="nav menu">
                <li class="<?= $navigation == "dashboard" ? 'active' : '' ?>">
                    <a href="<?=site_url()?>">
                        <svg class="glyph stroked dashboard-dial">
                            <use xlink:href="#stroked-dashboard-dial"></use>
                        </svg>
                        DASHBOARD
                    </a>
                </li>
                <li class="parent <?= $navigation == "master" ? 'active' : '' ?>">
                    <a data-toggle="collapse" href="#sub-master-data">
                        <svg class="glyph stroked monitor">
                            <use xlink:href="#stroked-monitor"/>
                        </svg>
                        DATA MASTER
                    </a>
                    <ul class="children collapse <?= $navigation == "master" ? 'in' : '' ?>" id="sub-master-data">
                        <li>
                            <a class="" href="<?=site_url('/material')?>">
                                <svg class="glyph stroked chevron-right">
                                    <use xlink:href="#stroked-chevron-right"></use>
                                </svg> 
                                MATERIAL
                            </a>
                        </li>
                        <li>
                            <a class="" href="<?=site_url('categories')?>">
                                <svg class="glyph stroked chevron-right">
                                    <use xlink:href="#stroked-chevron-right"></use>
                                </svg>
                                CATEGORIES
                            </a>
                        </li>
                        <li>
                            <a class="" href="<?=site_url('unit-name')?>">
                                <svg class="glyph stroked chevron-right">
                                    <use xlink:href="#stroked-chevron-right"></use>
                                </svg>
                                UNIT NAME
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?= $navigation == "receive" ? 'active' : '' ?>">
                    <a href="<?=site_url('receive')?>">
                        <svg class="glyph stroked arrow down">
                            <use xlink:href="#stroked-arrow-down"/>
                        </svg>
                        RECEIVE
                    </a>
                </li>
                <li class="<?= $navigation == "issue" ? 'active' : '' ?>">
                    <a href="<?=site_url('issue')?>">
                        <svg class="glyph stroked arrow up">
                            <use xlink:href="#stroked-arrow-up"/>
                        </svg>
                        ISSUE
                    </a>
                </li>
                <li class="parent <?= $navigation == "report" ? 'active' : '' ?>">
                    <a data-toggle="collapse" href="#sub-laporan-data">
                        <svg class="glyph stroked line-graph">
                            <use xlink:href="#stroked-line-graph"></use>
                        </svg>
                        REPORT
                    </a>
                    <ul class="children collapse <?= $navigation == "report" ? 'in' : '' ?>" id="sub-laporan-data">
                        <li>
                            <a class="" href="<?=site_url('/report/stock-material')?>">
                                <svg class="glyph stroked chevron-right">
                                    <use xlink:href="#stroked-chevron-right"></use>
                                </svg> 
                                STOCK MATERIAL
                            </a>
                        </li>
                        <li>
                            <a class="" href="<?=site_url('/report/receive')?>">
                                <svg class="glyph stroked chevron-right">
                                    <use xlink:href="#stroked-chevron-right"></use>
                                </svg>
                                RECEIVE
                            </a>
                        </li>
                        <li>
                            <a class="" href="<?=site_url('/report/issue')?>">
                                <svg class="glyph stroked chevron-right">
                                    <use xlink:href="#stroked-chevron-right"></use>
                                </svg>
                                ISSUE
                            </a>
                        </li>
                    </ul>
                </li>
                <li role="presentation" class="divider"></li>
                <li class="<?= $navigation == "users" ? 'active' : '' ?>">
                    <a href="<?=site_url('users')?>">
                        <svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
                        USERS
                    </a>
                </li>
                <li class="<?= $navigation == "change_password" ? 'active' : '' ?>">
                    <a href="<?=site_url('change-password')?>">
                        <svg class="glyph stroked lock">
                            <use xlink:href="#stroked-lock"/>
                        </svg>
                        CHANGE PASSWORD
                    </a>
                </li>
                <li>
                    <a href="<?=site_url('logout')?>">
                        <svg class="glyph stroked cancel">
                            <use xlink:href="#stroked-cancel"/>
                        </svg>
                        LOGOUT
                    </a>
                </li>
            </ul>
        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
            <?php $this->load->view($container); ?>
        </div>	<!--/.main-->

        <script src="<?=base_url('/assets/js/jquery-1.11.1.min.js')?>"></script>
        <script src="<?=base_url('/assets/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('/assets/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('/assets/js/chart.min.js')?>"></script>
        <script src="<?=base_url('/assets/js/chart-data.js')?>"></script>
        <script src="<?=base_url('/assets/js/bootstrap-datepicker.js')?>"></script>

        <script src="<?=base_url('/assets/plugins/data-tables/media/js/jquery.dataTables.min.js')?>"></script>
        <script src="<?=base_url('/assets/plugins/data-tables/media/js/dataTables.bootstrap.min.js')?>"></script>
        
        <script>
            $('#table_data').DataTable({});

            !function($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function() {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function() {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            });
            $('.dataTables_filter').attr('class', 'dataTables_filter text-right');
            $('.dataTables_paginate').attr('class', 'dataTables_paginate paging_simple_numbers text-right');
        </script>	
    </body>

</html>
