@extends('templates.master')
@section('content')
          <!-- inner page section -->
          <section class="inner_page_head">
            <div class="container_fuild">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <h3>Product {{ $title }}</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end inner page section -->
         <!-- product section -->
         <section class="product_section layout_padding">
            <div class="container">
               <div class="heading_container heading_center">
                  <h2>
                     Our <span>products</span>
                  </h2>
               </div>
              
                <div class="row">
                  @foreach ($products as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                     
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                              <form action="/add_to_cart" method="POST">
                                 @csrf
                                 <input type="hidden" name="product_id" value="{{$item['id']}}">
                                 <button style="transition: all .3s; padding: 8px 15px; border-radius: 30px; width: 165px; text-align: center; margin: 5px 0;"  class="option1">
                                    Add to Cart
                                  </button>
                                  
                             </form>
                                {{-- <a href="" class="option2">
                                Buy Now
                                </a> --}}
                            </div>
                        </div>
                        
                        <div class="img-box">
                            <img src="/{{ $item->gallery }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{ $item->name }}
                            </h5>
                            <h6>
                                {{ $item->price }}
                            </h6>
                        </div>
                     </div>
                     
                  </div>
                  @endforeach
                </div>
               
               
               <div class="btn-box">
                  <a href="">
                  View All products
                  </a>
               </div>
            </div>
         </section>
         <!-- end product section -->
         <!-- footer section -->
         <footer class="footer_section">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 footer-col">
                     <div class="footer_contact">
                        <h4>
                           Reach at..
                        </h4>
                        <div class="contact_link_box">
                           <a href="">
                           <i class="fa fa-map-marker" aria-hidden="true"></i>
                           <span>
                           Location
                           </span>
                           </a>
                           <a href="">
                           <i class="fa fa-phone" aria-hidden="true"></i>
                           <span>
                           Call +01 1234567890
                           </span>
                           </a>
                           <a href="">
                           <i class="fa fa-envelope" aria-hidden="true"></i>
                           <span>
                           demo@gmail.com
                           </span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 footer-col">
                     <div class="footer_detail">
                        <a href="index.html" class="footer-logo">
                        Famms
                        </a>
                        <p>
                           Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                        </p>
                        <div class="footer_social">
                           <a href="">
                           <i class="fa fa-facebook" aria-hidden="true"></i>
                           </a>
                           <a href="">
                           <i class="fa fa-twitter" aria-hidden="true"></i>
                           </a>
                           <a href="">
                           <i class="fa fa-linkedin" aria-hidden="true"></i>
                           </a>
                           <a href="">
                           <i class="fa fa-instagram" aria-hidden="true"></i>
                           </a>
                           <a href="">
                           <i class="fa fa-pinterest" aria-hidden="true"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 footer-col">
                     <div class="map_container">
                        <div class="map">
                           <div id="googleMap"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="footer-info">
                  <div class="col-lg-7 mx-auto px-0">
                     <p>
                        &copy; <span id="displayYear"></span> All Rights Reserved By
                        <a href="https://html.design/">Free Html Templates</a>
                     </p>
                  </div>
               </div>
            </div>
         </footer>
         <!-- footer section -->
@endsection