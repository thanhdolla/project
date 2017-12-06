@extends('master')
@section('content')
    <style>
        table#cart_ccontents td {
            padding: 10px;
            border: 1px solid #ccc;
            margin: auto
        }
    </style>
    <div class="container" style="border: whitesmoke solid 2px;width: 90%">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="box-center" style="width:90%;margin:auto;margin-bottom: 200px;">
                        <!-- The box-center product-->
                        <div class="box-content-center product"><!-- The box-content-center -->
                            <?php if(Session::get('compare_qty') > 0) : ?>

                            <form method="post" action="">
                                <input name="_token" type="hidden" value="{{csrf_token()}}"/>

                                @foreach($cp as $row)
                                    <?php  $sanpham = $row['item']; ?>
                                    <div class="col-sm-3" style="padding-left: 50px;">
                                        <div class="single-item" style="margin-bottom: 40px;">
                                            <div class="single-item-header" style="height: 230px;">
                                                <a href="{{route('chitietsanpham',$sanpham->id)}}"><img
                                                            src="source/frontend/image/product/{{$sanpham->anh_sp}}"
                                                            style="text-align:center;height:230px;width: 210px;" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$sanpham->ten_sp}}</p>
                                                <a class="single-item-price">
                                                    <?php $price_new = $sanpham->gia_sp - $sanpham->khuyen_mai ?>
                                                    <?php if ($sanpham->khuyen_mai > 0): ?>
                                                    <a style="text-decoration:line-through;padding-top: 5px;font-size:15px;">
                                                        <?php echo number_format($sanpham->gia_sp); ?>Đ
                                                    </a>
                                                    <a class="ga" style="color:red;padding-top: 10px;font-size: 20px;">
                                                        <b><?php echo number_format($price_new) ?>Đ</b>
                                                    </a>
                                                    <?php else: ?>
                                                    <a style="color:red;font-size: 20px;"><b><?php echo number_format($sanpham->gia_sp); ?>
                                                            Đ</b></a>
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left"
                                                   href="{{route('addcart',$sanpham->id)}}"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                            </div>
                                            <a style="width:30px;color: black;" href="xoasanphamsosanh/{{$sanpham->id}}">
                                                <input class="btn btn-success" type="button" value="Xóa">
                                            </a>

                                        </div>
                                    </div>
                                @endforeach

                            </form>

                            <?php else: ?>
                            <h4>Hiện chưa có sản phẩm nào để so sánh</h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

