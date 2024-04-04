@extends('layout')
@section('content')
<div id="all-output" class="col-md-12 upload">
    <div id="upload">
        <div class="row">
            <div class="col-md-8">
                <h1 class="page-title">
                    <span>آپلود</span> ویدیو
                </h1>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label>عنوان</label>
                            <input type="text" class="form-control" placeholder="عنوان">
                        </div>
                        <div class="col-md-6">
                            <label>مدت زمان</label>
                            <input type="text" class="form-control" placeholder="مدت زمان">
                        </div>
                        <div class="col-md-6">
                            <label>نام یکتا</label>
                            <input type="text" class="form-control" placeholder="نام یکتا">
                        </div>
                        <div class="col-md-6">
                            <label>آدرس ویدیو</label>
                            <input type="text" class="form-control" placeholder="آدرس ویدیو">
                        </div>
                        <div class="col-md-6">
                            <label>تصویر بند‌انگشتی</label>
                            <input type="text" class="form-control" placeholder="تصویر بند انگشتی">
                        </div>
                        <div class="col-md-12">
                            <label>توضیحات</label>
                            <textarea class="form-control" rows="4" placeholder="توضیح"></textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="button" id="contact_submit" class="btn btn-dm">ذخیره</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <img src="{{ Vite::asset('resources/images/upload-adv.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection