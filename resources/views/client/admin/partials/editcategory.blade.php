<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Chỉnh sửa danh mục</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <form method="post" action="{{ route('update', $category->id) }}">
                                    <h4>Tên danh mục</h4>
                                    @csrf
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <div class="search_inner">

                                                <div class="search_field">
                                                    <input type="text" name="name" value="{{ $category->name }}" placeholder="Add Category" style="border: none !important; padding: 19px !important">
                                                </div>

                                            </div>
                                        </div>
                                        <button type="submit" class="btn" style="background-color: #B97104; border: none; margin-left: 10px"> Cập nhật</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
            </div>
        </div>
    </div>
</div>