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
<style type="text/css">
div.iBannerFix{
    height:50px;
    position:fixed;
    left:0px;
    bottom:50px;
    width:100%;
    z-index: 99;
}
</style>
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



      </ul>
    </div>
  </div>
  <div class="grid_12">
    <ul id="q_nav">
      <li><a href="#">หน้าหลัก</a></li>
      <li><a href="#">/</a></li>
      <li><a href="{{ url('/shop') }}">แคชเชียร์</a></li>
    </ul>
    <div class="clear"></div>
    <hr />

    <div>
    <div class="panel panel-default " >
  <!-- <div class="panel-heading">

  </div> -->
        <div class="panel-body">
            <div class="col-md-12">
                <div class="col-md-9">
                    <div class="row"></div></div>
                    <div class="col-md-3">
                        <div class="row">
                            <table class="table table-hover ">
                                <tr>
                                <th bgcolor="#bcbcbc">เลขที่บิล</td>
                                <td><input type="text" name="bill_id" value="{{$bill->id}}"></td>
                            </tr>
                            <tr>
                                <th bgcolor="#bcbcbc">วันที่</th>
                                <td><input type="text" value="{{substr($bill->updated_at, 0, 10)}}"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>



            <div class="col-md-12">
                <div class="row">
                    <form action="user" method="POST" role="form">
                        <br>
                        <div class="col-md-1">
                            <div class="form-group col-md-offset-5">
                                <label>ค้นหา</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select name="cat" id="input" class="form-control" required="required">
                                    @if(isset($cat))
                                    <option value="code_user"
                                        @if($cat == 'name') selected=""
                                        @endif
                                    >รหัสลูกค้า</option>
                                    <option value="tel"
                                        @if($cat == 'code') selected=""
                                        @endif
                                    >เบอร์โทร</option>
                                    @else
                                    <option value="code_user">รหัสลูกค้า</option>
                                    <option value="tel">เบอร์โทร</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-4">
                                <input type="text" name="keyword" class="form-control"
                                @if(isset($keyword))
                                value="{{$keyword}}"
                                @endif
                                >
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-send ">ค้นหาสมาชิก</button>
                            </div>
                            {!! csrf_field() !!}
                        </div>
                    </form>
                </div>
            </div>


           
            <div class="col-md-12">
                <div class="row">
                    <form action="shop" method="POST" role="form">
                        <br>
                        <div class="col-md-1">
                            <div class="form-group col-md-offset-5">
                                <label>ค้นหา</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select name="cat" id="input" class="form-control" required="required">
                                    @if(isset($cat))
                                    <option value="code"
                                        @if($cat == 'code') selected=""
                                        @endif
                                    >รหัสยา</option>
                                    <option value="name"
                                        @if($cat == 'name') selected=""
                                        @endif
                                    >ชื่อยา</option>
                                    
                                    @else
                                    <option value="code">รหัสยา</option>
                                    <option value="name">ชื่อยา</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-4">
                                <input type="text" name="keyword" class="form-control"
                                @if(isset($keyword))
                                value="{{$keyword}}"
                                @endif
                                >
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-send ">ค้นหายา</button>
                            </div>
                            {!! csrf_field() !!}
                        </div>
                    </form>
                </div>
            </div>
            <form>
                <div class="col-md-12">
                    <br><br>
                    <div class="col-md-6">
                         <div class="row">
                            <label class="col-sm-3">ชื่อสมาชิก</label>
                            <input type="text" name="" class="col-sm-5" id="rec">
                        </div>
                        <div class="row">
                            <label class="col-sm-3">รับมา</label>
                            <input type="text" name="" class="col-sm-5" id="rec">
                            <label class="col-sm-1">บาท</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label class="col-sm-3">ราคารวม</label>
                            <input value="{{$total}}" type="text" name="total" class="col-sm-5" id="total">
                            <label class="col-sm-1">บาท</label>
                            <label class="col-md-offset-2 col-md-8"></label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3">เงินทอน</label>
                            <input type="text" name="" class="col-sm-5" id="change">
                            <label class="col-sm-1">บาท</label>
                        </div>
                        <div class="row">
                            <label class="col-sm-3">คะแนนครั้งนี้</label>
                            <input type="text" name="" class="col-sm-5" id="score">
                            <label class="col-sm-1">คะแนน</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <br><br>
                    <table class="table table-striped table-hover">
                        <thead bgcolor="#bcbcbc">
                            <tr>
                                <th ><center>ลำดับที่</center></th>
                                <th ><center>รหัสยา</center></th>
                                <th ><center>ชื่อ</center></th>
                                <th ><center>ขนาด</center></th>
                                <th ><center>ราคา</center></th>
                                <th class="col-md-3"><center>จำนวนที่ซื้อ</center></th>
                                <th><center>ราคารวม</center></th>
                                <th><center>ยกเลิก</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $n=1; $sum=0; $count=0; ?>
                            @foreach($bill_details as $i)
                            <tr>
                                <td><center>{{$n}}</center><input type="hidden" name="id[]" value="{{$i->id}}"></td>
                                <td><center>{{$i->code}}</center></td>
                                <td><center>{{$i->name}}</center></td>
                                <td><center>{{$i->size}}</center></td>
                                <td><center name="price[]">{{$i->price}}</center></td>
                                <td><div class="col-md-4 col-md-offset-4"><input name="amount[]" type="text" class="form-control" value="{{$i->amout}}"></div></td>
                                <td><center name="subtotal[]">{{$i->amout*$i->price}}</center></td>
                                <td><center><a href="shop/delete/{{$i->id}}"onclick="return confirm('Are you sure to delete')" class="glyphicon glyphicon-trash"></a></center></td>
                            </tr>
                            <?php $n++; $sum+=($i->amout*$i->price); $count+=($i->amout)?>
                            @endforeach
                           <tr>
                                <td colspan="4" class="blank"> </td>
                                <td colspan="1" class="total-line"><center><b>ราคารวม</b></center></td>
                                <td class="total-value"><div id="total"></div><center><b name="total_piece">{{$count}}</b><b>&nbsp;&nbsp;ชิ้น</b></center></td>
                                <td class="total-value"><div id="total"></div><center><b name="grand_total">{{$sum}}</b><b>&nbsp;&nbsp;บาท </b></center></td>
                                <input type="hidden" name="grand_total" value="{{$sum}}">
                                <input type="hidden" name="staff" value="{{Auth::user()->name}}">
                                <input type="hidden" name="bill_id" value="{{$bill->id}}">
                                <td class="total-value"><div id="total"></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <center>
                {!! csrf_field() !!}
                <!-- <button class="btn btn-cs" id="btnUpdate">Update</button> -->
                <button class="btn btn-success" id="btnSave">ชำระเงิน</button>
                <a href="{{Url('bill/clear')}}" class="btn btn-primary" >ยกเลิก</a>
                </center>
            </form>
        </div>
    </div>
</div>
<br>


    </div>
    
</body>
</html>

<script type="text/javascript">
    $('input[name^="amount"]').keyup(function(){
        var total_price = 0;
        var total_piece = 0;
        var sub_total_price = 0;
        var i = 0;
        $('input[name^="amount"]').each(function() {
            total_piece += Number($(this).val());
            sub_total_price =  Number($(this).val()) * Number($('center[name^="price"]:eq('+i+')').text());
            $('center[name^="subtotal"]:eq('+i+')').text(sub_total_price);
            total_price += sub_total_price;
            i++;
        });
        $('b[name^="grand_total"]').text(total_price);
        $('input[name^="grand_total"]').val(total_price);
        $('input[name^="total"]').val(total_price);
        $('b[name^="total_piece"]').text(total_piece);
        billUpdate();
    });
    $('#rec').keyup(function () {
        $('#change').val( $('#rec').val() - $('#total').val());
    });
    $('#btnSave').click(function (e) {
        e.preventDefault();
        $.ajax({
            type:'post',
            url:"billsave",
            data:$('form:eq(1)').serialize(),
            success:function(resp){
                console.log(resp);
                if(resp.match("not enought.$")=="not enought.") {
                    alert(resp);
                } else {
                    alert(" You Save Sucess !! ");
                    location.reload();    
                }
                 
            },
            fail:function(resp){
                alert('couldn\'t save bill');
            }
        });
    });
    function billUpdate() {
        $.ajax({
            type:'post',
            url:"billupdate",
            data:$('form:eq(1)').serialize(),
            success:function(resp){
                //location.reload();
            },
            fail:function(resp){
                alert('couldn\'t update bill');
            }
        });
    }
    
</script>