@extends('layouts.resttemp')
@section('content')
<!--=== Slider ===-->
<div class="slider-inner">
  <div id="da-slider" class="da-slider">
    <div class="da-slide">
      <h2><i>DỊCH VỤ NẤU ĂN <br> TẠI ĐÀ NẴNG</i></h2>
      <p><i>Giá cả hợp lý</i> <br /> <i>chất lượng tuyệt hảo</i></p>
    </div>
    <div class="da-slide">
      <h2><i>SỰ HÀI LÒNG CỦA KHÁCH HÀNG</i> <br /> <i>LÀ MỤC TIÊU DUY NHẤT CỦA CHÚNG TÔI</h2>
      </div>
      <div class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
      </div>
    </div>
  </div><!--/slider-->
  <!--=== End Slider ===-->

  <!--=== Purchase Block ===-->
  <div class="purchase">
    <div class="container overflow-h">
      <div class="row">
        <div class="col-md-9 animated fadeInLeft">
          <span>Dịch vụ nấu ăn Thủy Bộ.</span>
          <p>Chuyên cung cấp dịch vụ nấu ăn với chất lượng hàng đầu tại Đà Nẵng.</p>
        </div>
        <div class="col-md-3 btn-buy animated fadeInRight">
          <a href="{{route('lien-he')}}" class="btn-u btn-u-lg"><i class="fa fa-phone"></i> LIÊN HỆ</a>
        </div>
      </div>
    </div>
  </div><!--/row-->
  <!-- End Purchase Block -->

  <!--=== Content Part ===-->
  <div class="container content-sm">
    <!-- Recent Works -->
    <div class="headline"><h2>DỊCH VỤ CỦA CHÚNG TÔI</h2></div>
    <div class="row margin-bottom-20">
      <div class="col-md-4 col-sm-6">
        <div class="thumbnails thumbnail-style thumbnail-kenburn">
          <div class="thumbnail-img">
            <div class="overflow-hidden">
              <img class="img-responsive" src="assets/theme/img/services/to-chuc-tiec.jpg" alt="">
            </div>
          </div>
          <div class="caption">
            <h3><a class="hover-effect" href="#">ĐẶT TIỆC TẠI NHÀ</a></h3>
            <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="thumbnails thumbnail-style thumbnail-kenburn">
          <div class="thumbnail-img">
            <div class="overflow-hidden">
              <img class="img-responsive" src="assets/theme/img/services/dich-vu-nau-an.jpg" alt="">
            </div>
          </div>
          <div class="caption">
            <h3><a class="hover-effect" href="#">DỊCH VỤ NẤU ĂN</a></h3>
            <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p> -->
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="thumbnails thumbnail-style thumbnail-kenburn">
          <div class="thumbnail-img">
            <div class="overflow-hidden">
              <img class="img-responsive" src="assets/theme/img/services/cho-thue-rap.png" alt="">
            </div>
          </div>
          <div class="caption">
            <h3><a class="hover-effect" href="#">TRANG TRÍ TIỆC</a></h3>
            <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p> -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Recent Works -->
    <div class="headline"><h2>Thực Đơn Tham Khảo</h2></div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <a href="{{route('thuc-don-90')}}">
          <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-menu">
              <div class="overflow-hidden">
                <img class="img-responsive" src="/assets/theme/img/menu/menu-90.jpg" alt="">
              </div>
            </div>
            <div class="caption">
              <h3> <a href="{{route('thuc-don-90')}}" class="hover-effect">Set Thực Đơn 90.000VNĐ</a></h3>
              <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p> -->
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a class="hover-effect" href="{{route('thuc-don-95')}}">
          <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-menu">
              <div class="overflow-hidden">
                <img class="img-responsive" src="/assets/theme/img/menu/menu-95.jpg" alt="">
              </div>
            </div>
            <div class="caption">
              <h3> <a href="{{route('thuc-don-90')}}" class="hover-effect">Set Thực Đơn 95.000VNĐ</a></h3>
              <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p> -->
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a class="hover-effect" href="{{route('thuc-don-100')}}">
          <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-menu">
              <div class="overflow-hidden">
                <img class="img-responsive" src="/assets/theme/img/menu/menu-100.jpg" alt="">
              </div>
            </div>
            <div class="caption">
              <h3> <a class="hover-effect" href="{{route('thuc-don-100')}}">Set Thực Đơn 100.000VNĐ</a></h3>
              <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p> -->
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a class="hover-effect" href="{{route('thuc-don-105')}}">
          <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-menu">
              <div class="overflow-hidden">
                <img class="img-responsive" src="/assets/theme/img/menu/menu-105.jpg" alt="">
              </div>
            </div>
            <div class="caption">
              <h3> <a href="{{route('thuc-don-105')}}" class="hover-effect">Set Thực Đơn 105.000VNĐ</a></h3>
              <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p> -->
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a class="hover-effect" href="{{route('thuc-don-110')}}">
          <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-menu">
              <div class="overflow-hidden">
                <img class="img-responsive" src="/assets/theme/img/menu/menu-110.jpg" alt="">
              </div>
            </div>
            <div class="caption">
              <h3> <a href="{{route('thuc-don-110')}}" class="hover-effect">Set Thực Đơn 110.000VNĐ</a></h3>
              <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p> -->
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a class="hover-effect" href="{{route('thuc-don-105')}}">
          <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-menu">
              <div class="overflow-hidden">
                <img class="img-responsive" src="/assets/theme/img/menu/menu-115.jpg" alt="">
              </div>
            </div>
            <div class="caption">
              <h3> <a href="{{route('thuc-don-115')}}" class="hover-effect">Set Thực Đơn 115.000VNĐ</a></h3>
              <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p> -->
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a class="hover-effect" href="{{route('thuc-don-125')}}">
          <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-menu">
              <div class="overflow-hidden">
                <img class="img-responsive" src="/assets/theme/img/menu/menu-125.jpg" alt="">
              </div>
            </div>
            <div class="caption">
              <h3> <a href="{{route('thuc-don-125')}}" class="hover-effect">Set Thực Đơn 125.000VNĐ</a></h3>
              <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p> -->
            </div>
          </div>
        </a>
      </div>
    </div>
  </div><!--/container-->
  <!-- End Content Part -->
  @stop
