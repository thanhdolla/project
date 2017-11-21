@extends('masteradmin')
@section('contentadmin')

    <div id="rightSide">
        <div class="titleArea">
            <div class="wrapper">
                <div class="pageTitle">
                    <h5>Sản phẩm</h5>
                    <span>Quản lý sản phẩm</span>
                </div>

                <div class="horControlB menu_action">
                    <ul>
                        <li><a href="{{route('admin/slide/add')}}">
                                <img src="source/backend/admin/images/icons/control/16/add.png"/>
                                <span>Thêm mới</span>
                            </a></li>

                        <li><a href="{{route('admin/slide/index')}}">
                                <img src="source/backend/admin/images/icons/control/16/list.png"/>
                                <span>Danh sách</span>
                            </a></li>
                    </ul>
                </div>

                <div class="clear"></div>
            </div>
        </div>
        <div class="line"></div>

        <div class="wrapper">

            <!-- Form -->
            <form enctype="multipart/form-data" method="post" action="admin/product/edit/{{$product->id}}" id="form"
                  class="form">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                @if(count($errors) >0 )
                    <div>
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif
                @if(Session::has('thongbao'))
                    <div class="alert alert-success" style="background:#00ced1">
                        {{Session::get('thongbao')}}
                    </div>
                @endif
                @if(Session::has('loi'))
                    <div class="alert alert-success" style="background:red">
                        {{Session::get('loi')}}
                    </div>
                @endif
                <fieldset>
                    <div class="widget">
                        <div class="title">
                            <img class="titleIcon" src="source/backend/admin/images/icons/dark/add.png">
                            <h6>Cập nhật sản phẩm</h6>
                        </div>
                        <div class="tab_container">
                            <div class="tab_content pd0" id="tab1" style="display: block;">
                                <div class="formRow">
                                    <label for="param_name" class="formLeft">Tên sản phẩm<span class="req">*</span></label>
                                    <div class="formRight">
                                        <span class="oneTwo"><input type="text" _autocheck="true" id="param_name"
                                                                    value="{{$product->ten_sp}}" name="name"></span>
                                        <span class="autocheck" name="name_autocheck"></span>
                                        <div class="clear error" name="name_error"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="formRow">
                                    <label for="param_name" class="formLeft">Loại sản phẩm:<span
                                                class="req">*</span></label>
                                    <div class="formRight">
                                <span class="oneTwo">

                                    <select id="param_name" name="category">
                                        @foreach($cate as $ct)
                                            @if($ct->id == $product->loai_spID)
                                                <option selected value={{$ct->id}}>{{$ct->ten_loai_sp}}</option>
                                            @else
                                                <option value={{$ct->id}}>{{$ct->ten_loai_sp}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </span>
                                        <span class="autocheck" name="name_autocheck"></span>
                                        <div class="clear error" name="name_error"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                                <div class="formRow">
                                    <label for="param_name" class="formLeft">Mô tả:<span class="req">*</span></label>
                                    <div class="formRight">
                                <span class="oneTwo">
                                    <textarea name="description" id="param_name" value="{{$product->mo_ta_sp}}" required></textarea>

                                </span>
                                        <span class="autocheck" name="name_autocheck"></span>
                                        <div class="clear error" name="name_error"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="formRow">
                                    <label for="param_name" class="formLeft">Giá bán:<span class="req">*</span></label>
                                    <div class="formRight">
                                <span class="oneTwo">
                                    <input type="number" min="0" step="1000" id="param_name" name="price"
                                           value="{{$product->gia_sp}}" required> VNĐ

                                </span>
                                        <span class="autocheck" name="name_autocheck"></span>
                                        <div class="clear error" name="name_error"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="formRow">
                                    <label for="param_name" class="formLeft">Khuyến mãi:<span class="req">*</span></label>
                                    <div class="formRight">
                                <span class="oneTwo">
                                    <input type="number" min="0" step="1000" id="param_name" name="discount"
                                           value="{{$product->khuyen_mai}}" required> VNĐ

                                </span>
                                        <span class="autocheck" name="name_autocheck"></span>
                                        <div class="clear error" name="name_error"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="formRow">
                                    <label for="param_name" class="formLeft">Bảo hành:<span
                                                class="req">*</span></label>
                                    <div class="formRight">
                                <span class="oneTwo">
                                    <input type="text" id="param_name" name="warranty" value="{{$product->bao_hanh}}" required>
                                </span>
                                        <span class="autocheck" name="name_autocheck"></span>
                                        <div class="clear error" name="name_error"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="formRow">
                                    <label for="param_name" class="formLeft">Ngày sản xuất:<span
                                                class="req">*</span></label>
                                    <div class="formRight">
                                <span class="oneTwo">
                                    <input type="text" id="param_name" name="mfg" value="{{$product->ngay_sx}}" required>
                                </span>
                                        <span class="autocheck" name="name_autocheck"></span>
                                        <div class="clear error" name="name_error"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="formRow">
                                    <label class="formLeft">Hình ảnh:<span class="req">*</span></label>
                                    <div class="formRight">
                                        <div class="left" style="float:left">
                                            <input type="file" name="image" id="image" size="25"/>
                                        </div>
                                        <div style="float:left">
                                            <img src="upload/product/add/{{$product->anh_sp}}"
                                                 style="width:300px;">
                                        </div>
                                        <div class="clear error" name="image_error"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                                <div class="formRow hide"></div>
                            </div>


                        </div><!-- End tab_container-->

                        <div class="formSubmit">
                            <button type="submit" class="redB">Cập nhật</button>
                        </div>
                        <div class="clear"></div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="clear mt30"></div>
    </div>

@endsection