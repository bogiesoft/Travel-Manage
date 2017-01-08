@extends('frontend.layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ url('frontend/css/slider.css') }}">
@endsection

@section('content')
 <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="{{ url('frontend/images/slide6.jpg') }}" alt=""></li>
          <li><img src="{{ url('frontend/images/slide5.jpg') }}" alt=""></li>
          <li class="mb0"><img src="{{ url('frontend/images/slide4.jpg') }}" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="content page1">
    <div class="container_12">
    
      <div class="grid_7">
        <h2>Welcome</h2>
        <div class="page1_block col1"> <img style="border-radius: 50%;width: 150px;height: 150px;" src="{{ url('frontend/images/wel.png') }}" alt="">
          <div class="extra_wrapper">
            <p>Welcome to Hanoi Travel</p>
            Aenean nonummy hendrerit mau rellus porta. Fusce suscipit varius m sociis natoque penaibet magni parturient montes nasetur ridiculumula dui. <br>
            </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="grid_5">
        <h2>Hanoi Tour</h2>
        <ul class="list">
          <li><a href="#">Unlimited consultations and/or planning</a></li>
          <li><a href="#">Expert advice on traditions, customs, aetiquette</a></li>
          <li><a href="#">Determine and stay within budget</a></li>
          <li><a href="#">Choosing the right Wedding Venue</a></li>
          <li><a href="#">Provide preferred vendor's list</a></li>
          <li><a href="#">Assist with wedding scheme and design</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="grid_12">
        <div class="hor_separator"></div>
      </div>
      <div class="grid_5">
        <h2>Hot Tour</h2>
        <img src="images/page2_img1.jpg" alt="" class="img_inner">
        <p class="col1">Curabitur in turpisju massa. Donec et nibh non turpis pellentesque suscipit eget. </p>
        <p>Ghfgop Maecnas cursus fringilla sagittis. Donec eu felis purus, iaculis fringilla ipsum. Inte ger non nulla sem, eget volutpat augue. Curabitur in turpisju massa. Donec et nibh non turpis pellentesque suscipit eget. </p>
        Donec eu felis purus, iaculis fringilla ipsum. Integer non. nulla sem, eget volutpat augue. Curabitur in turpisju massa. Donec et nibh non turpis pellentesque suscipit eget vel odio. Sed tempus orci tempus libero suscipit elementum. Aliquam consectetur. Ghfgop Maecnas cursus. <br>
        <a href="#" class="btn m1">More</a> </div>
      <div class="grid_5 prefix_2">
        <h2>Testimonials</h2>
        <ul class="carousel2">
          <li>
            <blockquote> <img src="images/page2_img2.png" alt="">
              <div class="extra_wrapper">
                <div class="title">Sara &amp; Kevin <br>
                  Jonson</div>
              </div>
              <div class="clear"></div>
              <p class="col1"><a href="#">Euismod pellentesque in dui. Semper, enim eget eleifend faucibus, sem libero gravida erat, sit amet viverra dui nisl non nulla. Pellentesque in dui euismod. </a></p>
              <p>Curabitur felis purus, iaculis fringi. ipsum. Integer non nulla sem, eget volutpat augue. Ghfgop Maecnas cursus fringilla sagittis. Donec eu felis purus, iaculis fringilla ipsum. Inte ger non nulla sem, eget volutpat augue. Curabitur in turpisju massa. Donec et nibh non turpis pellentesque suscipit eget vel odio.  Aliquam consectetur. Fringilla ipsum. </p>
              <p>Ringilla ipsum. Donec et nibh non turpis pellentesque suscipit eget vel odio. Sed tempus orci tempus libero suscipit elementum. Aliquam consectetur. Ghfgop Maecnas cursus fringilla sagittis. Donec eu felis purus, iaculis fringi. ipsum. Integer non nulla sem, eget volutpat augue. Ghfgop pelle ntesque suscipit eget consectetur.</p>
            </blockquote>
          </li>
          <li>
            <blockquote> <img src="images/page2_img2-1.png" alt="">
              <div class="extra_wrapper">
                <div class="title">Moira &amp; Brett<br>
                  Clark</div>
              </div>
              <div class="clear"></div>
              <p class="col1">Pellentesque in dui euismod. Aliquam semper, enim eget eleifend faucibus, sem libero gravida erat, sit amet viverra dui nisl non nulla. Pellentesque in dui euismod nibh suscipi. </p>
              <p>Donec eu felis purus, iaculis fringi. ipsum. Integer non nulla sem, eget volutpat augue. Ghfgop Maecnas cursus fringilla sagittis. Donec eu felis purus, iaculis fringilla ipsum. Inte ger non nulla sem, eget volutpat augue. Curabitur in turpisju massa. Donec et nibh non turpis pellentesque suscipit eget vel odio.  Aliquam consectetur. Ghfgop Maecnas cursus frin.</p>
              <p>Curabitur in turpisju massa. Donec et nibh non turpis pellen tesque suscipit eget vel odio. Sed tempus orci tempus libero suscipit elementum. Aliquam consectetur. Ghfgop Maecnas cursus fringilla sagittis. Donec eu felis purus, iaculis fringi. ipsum. Integer non nulla sem, eget volutpat augue. Ghfgop Maecnas cursus fringilla sagittis.</p>
            </blockquote>
          </li>
        </ul>
        <a href="#" class="next1"></a> <a href="#" class="prev1"></a> </div>
      <div class="clear"></div>
      <div class="grid_12">
        <div class="hor_separator"></div>
      </div>
      <div class="grid_12">
        <div class="car_wrap">
          <h2>Best Choice</h2>
          <a href="#" class="prev"></a><a href="#" class="next"></a>
          <ul class="carousel1">
            <li>
              <div><img src="images/page1_img1.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img2.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img3.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img4.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img3.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
@endsection

@section('scripts')
  <script src="{{ url('frontend/js/jquery.carouFredSel-6.1.0-packed.js') }}"></script>
	<script src="{{ url('frontend/js/tms-0.4.1.js') }}"></script>
	<script src="{{ url('frontend/js/frontend.js') }}"></script>
@endsection