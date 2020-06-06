<form role="form" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-12"> 
                            <div class="form-group">
                                <label for="ps_name">Tên bài viết <span class="text-danger">(Bắt buộc)</span></label>
                                <input required="" type="text" class="form-control" id="ps_name" name="ps_name" placeholder="Tên bài viết" value="{{ isset($pageStatic->ps_name) ? $pageStatic->ps_name : old('ps_name')}}">
                            </div>                           
                            <div class="form-group">
                                  <label for="ps_content">Nội dung bài viết:<span class="text-danger">(Bắt buộc)</span></label>
                                  <textarea  required="" id="ckeditor2" cols="12" rows="5" class="form-control" name="ps_content" placeholder="Nội dung sản phẩm">{{ isset($pageStatic->ps_content) ? $pageStatic->ps_content : old('ps_content')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="ps_sort">Thứ tự:</label>
                                <input type="number" name="ps_sort" value="{{ isset($pageStatic->ps_sort) ? $pageStatic->ps_sort : old('ps_sort')}}">
                            </div>
                        </div>
                        <div class="box-footer col-sm-12">
                                <button type="submit" class="btn btn-primary">{{ isset($pageStatic) ? "Lưu dữ liệu" : "Thêm mới" }}<i class="fa fa-save"></i></button>
                        </div>
</form>