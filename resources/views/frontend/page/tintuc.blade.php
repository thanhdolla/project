@extends('master')
@section('content')
    <div class="container" style="border: whitesmoke solid 2px;width: 95%">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="col-sm-9" style="boder:whitesmoke solid thin">
                    <div class="box-center">
                        <div class="tittle-box-center">
                            <h1><?php echo $tin->tieu_de_tb ?></h1>
                        </div>
                        <hr>

                        <table>
                            <tr>
                                <td style="margin-left: 50px;">

                                    <img  src="upload/tintuc/add/{{$tin->anh_tb}}"
                                         style="text-align: center;width:850px;height: 400px;">
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="nd"
                                         style="padding-left: 20px;padding-top:20px;text-align:center;width:850px;margin:auto;font-size: 16px;">
                                        <p style="line-height: 200%;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tin->noi_dung_tb ?> </p>
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>

                <div class="col-sm-3" style="border:whitesmoke solid thin;">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="text-align:center;">Thông báo mới </h3>
                        </div>
                        <div>
                            <ul>
                                <!--bien list1 này lấy từ core- MY_controller-->
                                <?php foreach ($tintuc as $row): ?>
                                <li style="list-style-type: none;padding-top: 10px;background: window;">
                                    <a href='tintuc/{{$row->id }}'>
                                        <table>
                                            <tr>
                                                <td style="height:70px;width:120px;">
                                                    <img style="padding-right: 15px;height:70px;width:120px;"
                                                         src="upload/tintuc/add/{{$row->anh_tb}}">
                                                </td>
                                                <td>
                                                            <span style="font-size:14px;color:#003399;">
                                                                <?php echo $row->tieu_de_tb ?>
                                                            </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div> <!-- end section with sidebar and main content -->

    </div> <!-- .main-content -->
    </div> <!-- #content -->
    </div> <!-- .container -->

@endsection
