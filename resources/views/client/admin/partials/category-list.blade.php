<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Category Post</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Table</h4>
                                <form method="post" action="{{ route('listCate') }}">
                                    @csrf
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <div class="search_inner">
                                                <div class="search_field">
                                                    <input type="text" name="name" placeholder="Add Category" style="border: none !important; padding: 19px !important">
                                                </div>

                                            </div>
                                        </div>
                                        <button type="submit" class="btn" style="background-color: #B97104; border: none; margin-left: 10px">Add</button>
                                    </div>
                                </form>
                            </div>
                            <div class="QA_table mb_30">
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col-2">Id</th>
                                            <th scope="col-2">Category Name</th>
                                            <th scope="col-2">Created_at</th>
                                            <th scope="col-2">Updated_at</th>
                                            <th scope="col-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cate as $render)
                                        <tr>
                                            <td>{{$render->id}}</td>
                                            <td>{{$render->name}}</td>
                                            <td>{{$render->created_at}}</td>
                                            <td>{{$render->updated_at}}</td>
                                            <td>
                                                <a href="{{ route('edit', $render->id) }}" style="color: #fff">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="{{ route('delete', $render->id) }}" onclick="return confirm('Confirm Delete')" style="color: #fff;">
                                                    <i class="bi bi-trash3-fill"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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