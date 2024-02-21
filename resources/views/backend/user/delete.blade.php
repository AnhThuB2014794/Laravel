@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])

<form action="{{ route('user.destroy', $user->id) }}" method="post" class="box">
    @csrf
    @method('DELETE')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">
                        Thông tin chung
                    </div>
                    <div class="panel-description">
                        <p>Bạn đang muốn xóa thành viên có email là: {{ $user->email}}</p>
                        <p>Lưu ý: Không thể khôi phục thành viên sau khi đã xóa. Hãy chắc chắn bạn muốn thực hiện chức
                            năng này</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-right">Email <span
                                            class="text-danger">(*)</span></label>

                                    <input type="text" name="email" value="{{ old('email',($user->email) ?? '')}}"
                                        class="form-control" placeholder="" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-right">Họ Tên <span
                                            class="text-danger">(*)</span></label>

                                    <input type="text" name="name" value="{{ old('name',($user->name) ?? '')}}"
                                        class="form-control" placeholder="" autocomplete="off" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="form-container">

            <button class="save-button" style="background-color: red">Xóa dữ liệu</button>
        </div>

    </div>
</form>
<div class="container-fluid py-4">
    @include('backend.dashboard.component.footer')
</div>