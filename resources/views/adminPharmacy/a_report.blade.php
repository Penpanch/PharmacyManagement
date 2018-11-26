<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="{{asset('frontend/images/logo2.png')}}" />
  <title>Pharmacy Management System | เพิ่มยา</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('frontend/style/960.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/style/style.css')}}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{asset('frontend/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
</head>
<body>
<!--container_12 start here-->
<div class="container_12">
  <!--grid_12 start here-->
  <div class="grid_12">
    <!--logo_container start here-->
    <div id="logo_container"> <a href="#" id="logo"></a>
      <div class="clear"></div>
      <div class="tag_line">Pharmacy Management System</div>
    </div>
    <!--logo_container end here-->
    <div id="nav_wrapper">
     <ul id="nav">
        <li><a href="{{ url('/homeAd') }}">หน้าหลัก</a></li>
        <li><a href="{{ url('/aboutAd') }}">เกี่ยวกับเรา</a></li>
        <li><a href="#">โปรโมชั่น</a>
        <ul>
            <li><a href="{{ url('/promotionAd') }}">ดูโปรโมชัน</a></li>
            <li><a href="{{ url('/addpromotionAd') }}">เพิ่มโปรโมชัน</a></li>
          </ul></li>
        <li><a href="#">รายการยา</a><ul>
            <li><a href="{{ url('/stockAd') }}">ดูรายการยา</a></li>
            <li><a href="{{ url('/addstockAd') }}">เพิ่มข้อมูลยา</a></li>
          </ul></li>
        <li><a href="#">การขาย</a><ul>
            <li><a href="{{ url('/shop') }}">แคชเชียร์</a></li>
            <li><a href="{{ url('/reportAd') }}">รายงานการขาย</a></li>
            <li><a href="{{ url('/graphAd') }}">กราฟการขาย</a></li>
          </ul></li>
        <li><a href="#">สมาชิก</a><ul>
            <li><a href="{{ url('/employAd') }}">ดูเภสัชกร</a></li>
            <li><a href="{{ url('/userAd') }}">ดูลูกค้า</a></li>
            <li><a href="{{ url('/adduserAd') }}">เพิ่มสมาชิก</a></li>
          </ul></li>
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">สวัสดี คุณ
                                    {{ Auth::user()->name }} (ADMIN)<span class="caret"></span>
                                </a>
            <ul>
            <li><a href="{{ url('/profileAd') }}">ดูโปรไฟล์</a></li>
            <li><a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            ออกจากระบบ
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
            </form>
            </li>
            </ul>
            </li>
            <!-- <li><a href="{{ url('/searchdrugAd') }}"><img src="{{asset('frontend/images/search.png')}}" width="20" height="25" alt="" /></a></li> -->

@section('content')
                    @if (session('status'))
                            {{ session('status') }}
                    @endif
@endsection

      </ul>
    </div>
  </div>
  <div class="grid_12">
    <ul id="q_nav">
      <li><a href="{{url('/homeAd')}}">หน้าหลัก</a></li>
      <li><a href="#">/</a></li>
      <li><a href="{{url('/reportAd')}}"  class="active">รายงาน</a></li>
    </ul>
    <div class="clear"></div>
    <hr />

    <div>
    <div class="panel panel-primary">
        <div class="panel-body">
            <form method="post">
                <div class="col-md-1">
                    
                </div>
                <div class="col-md-2 ">
                    <div class="form-group ">
                        <select class="form-control">
                                <option value="date">วันที่</option>
                                <option value="month">เดือน</option>
                                <option value="year">ปี</option>
                           
                        </select>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-4">
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-8">
                        <a href="#" class="btn btn-danger">ค้นหา</a>
                        <a href="#" class="btn btn-danger">PDF</a> 
                        <a href="#" class="btn btn-danger">ยกเลิก</a>
                        <!--  <a href="{{url('graph')}}" class="btn btn-success">Graph</a> -->
                        {!! csrf_field() !!}
                    </div>
                </div>
            </form>
            <!-- <input type="date" name="day">     <button type="button" class="btn btn-primary">Confirm</button> -->
            <br><br>
            <table class="table table-striped table-hover" style="font-size: 13px;">
                <thead>
                    <tr>
                        <th><center>วันที่ซื้อ</center></th>
                        <th><center>รหัสบิล</center></th>
                        <th><center>ชื่อสมาชิก</center></th>
                        <th><center>ชื่อผู้ขาย</center></th>
                        <th><center>ส่วนลด</center></th>
                        <th><center>รวมเงิน</center></th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table><center>
            <div class="pagination"> </div></center>
        </div>
    </div>
</div>

  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        
      </div>
    </div>
  </div>
</body>
</html>