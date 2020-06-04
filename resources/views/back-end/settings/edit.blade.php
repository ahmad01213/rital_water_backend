@extends('layouts.admin')
@section('content')
    @if(session()->has('message'))
        <div  class="alert alert-success"  style="text-align: right; margin: 50px 50px 50px 50px;">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card card-primary col-7  text-right center" style="height: 500px ">
        <div class="card-header text-center">
            إعدادات
        </div>
        <div class="card-body">
            <form action="{{route('settings.update')}}" method="POST">
                @csrf
                <div class="form-group" >
                    <label for="exampleInputEmail1">من نحن</label>
                    <textarea type="text"  name="abouttext" style="height: 200px;text-align: right; " class="form-control" id="exampleInputEmail1"  placeholder="اكتب هنا ">{{$about[0]->text}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">عدد النقاط لكل 1 ريال</label>
                    <input type="number" name="pointstext" class="form-control" id="exampleInputPassword1" value="{{$pointsPerRial[0]->text}}"  placeholder="اكتب عدد النقاط لكل 1 ريال">
                </div>
                <button type="submit" class="btn btn-primary">حفظ</button>
            </form>
        </div>
    </div>
@endsection
