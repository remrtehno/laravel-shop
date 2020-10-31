<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
        />
        <meta name="keywords" content="{{ $meta_key }}" />
        <meta name="description" content="{{ $meta_desc }}" />

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <title>{{ $title }}</title>
        <!-- <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap"
            rel="stylesheet"
        /> -->
        <link
            rel="stylesheet"
            href="/public/assets/css/jquery-ui.css"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            href="/public/assets/css/style.min.css"
            type="text/css"
            media="all"
        />
        <style>
            .slider-range-box #slider-range{
                border: 0;
            }
           .title-company-info {
  font-size: 18px;
  font-weight: 400;
  padding-top: 20px;
  padding-bottom: 20px;
  margin-bottom: 0;
  text-transform: uppercase;

}
.product_company_info {
  background: white;
  padding: 25px;
  max-width: 217px;

}

.product-right-title {
  font-size: 13px;
  line-height: 15px;
  color: #000;
  font-weight: bold;
  display: inline-block;
  margin-bottom: 10px;
}

.mer-lname {
  color: grey;
  font-size: 13px;
}

.contacts__item {
  position: relative;
  padding-left: 0px;
  margin-bottom: 20px;
  font-size: 13px;
  line-height: 15px;
  color: #343434;
}

 .product-right .product-image {
  max-width: 180px;
/*  height: 180px;*/
  padding: 5px;
  border: 1px #C4C4C4 dashed;
  overflow: hidden;
}


            .input-group-addon {
              margin-bottom: 10px;
              font-weight: 500;
              font-size: 14px;
            }
            body > .ui-widget.ui-widget-content {
                border: 0 !important;
            }
            .product-item h4.product-title {
                  font-size: 14px;
  font-weight: 600;
            }
            .product-image {
                position: relative;
            }
            .product-image .overlay {
opacity: 0; 
              position: absolute;
              top: 0;
              left: 0;
              /* transform: translate(-50%, -50%); */
              background: rgba(16, 16, 16, 0.51);
              color: white;
              text-align: center;
              width: 85%;
              padding: 5px 5px;
              right: 0;
              font-size: 15px;
              bottom: 0;
              font-weight: 600;
              width: 100%;
              display: flex;
              align-items: center;
              justify-content: center;
            }

             .product-image  i {
                margin-right: 7px;
             }
            .product-image:hover .overlay {
                opacity: 1;
            }
            .title {
                  font-size: 16px;
  font-weight: 700;
            }
            .title-address {
                color: #2196f3;
  font-size: 14px;
  letter-spacing: -.16px;
  line-height: 18px;
  margin-bottom: 8px;
            }
            .about-shop {
  padding-left: 24px;
  padding-right: 24px;
  margin-bottom: 16px;
}
            .shop-wrap {

  border-radius: 4px;
  border: 1px solid #d9e3f3;
  background-color: #fff;
            }
            .wrapper-shop {
                padding: 100px 0;
            }
            .shop {
                padding: 100px 0;
            }
.us_drop .menu > li:first-child{
    display: none;
}
            .ui-widget.ui-widget-content {
                padding: 10px 20px;
                  border: 1px solid #c5c5c5;ч
            }
            /* Style The Dropdown Button */
.dropbtn {
padding: 10px 0;

  font-size: 14px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    color: var(--main-hover);
}

.cabinet-menu {
      min-width: 200px;
}
a.logo, .all_categories_btn {
      flex-shrink: 0;
}

.pagination a, .pagination  .page-link {
  font-size: 16px;

  display: inline-block;

}
/*.pagination .disabled{
    padding: 0;
}
.pagination li {
      margin-right: .4em;
}*/
.pagination .active { 
    padding: 0 .5em;
    }
.pagination .active {
    background: var(--main-hover);
    color: white;
}
.pagination {
      display: inline-block;
  background: white;
  border-radius: 5px;
  padding: 5px 15px;
}
.search-img, .search-img:hover, .search-img.ui-state-active {
    height: 40px;
    border-radius: 10px;
    margin-right: 5px;
    padding: 0 !important;
  border: 0;
  margin-bottom: 5px;
  background: none;

}

          form.search_form_header {
            position: relative;
          }
          form.search_form_header input {
              position: absolute;
  padding-left: 52px;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
          }
body >           .ui-widget.ui-widget-content {

  min-width: 395px;
  margin-left: -60px;
  margin-top: 15px;
  border-radius: 10px;
}
          .btn-primary:hover {
            color: white !important;
            opacity: .7;
          }
          .search-img, .search-img:hover, .search-img.ui-state-active {
            margin-right: 10px;
          }
.search-img, .search-img:hover, .search-img.ui-state-active {
    margin-top: 0 !important;
  margin-left: 0 !important;
}
            .ui-widget.ui-widget-content {
                padding: 10px 20px;
                  border: 1px solid #c5c5c5;ч
            }
.ui-menu-item  img {
      width: 35px;
  height: auto !important;
}

            @media (max-width: 992px) {
                body,html {
                    overflow-x: hidden;
                }
                .home-slider .slick-slide img {
                    height: auto;
                }
                .home-page {
                    padding-top: 25px;
                }
                .hdr_bottom_main {
                    flex-wrap: wrap;
                    justify-content: center;
                    align-items: center;
                }
                .hdr_bottom_main_left {
                    flex-flow: wrap;
                    justify-content: center;
                    margin: auto;
                }
                form.search_form_header {
                    width: 100%;
                    flex: 1 0 100%;
                    margin-bottom: 15px;
                    margin-top: 15px;
                }
                .slider-range-box .ui-slider {
                    min-width: auto;
                    margin: auto;
                    width: auto;
                    padding: initial;
                }
                .home-slider .slick-arrow{
                    display: none !important;
                }
            }
        </style>
        
    </head>

    <body>
        @include("lib.header") 
        @yield("slider") 
        @yield("userwrap")
        @yield("content")

        <footer id="footer">
            <div class="footer_top">
                <div class="">
                    <div class="row">
                        <div class="col-md-3">
                            <div
                                id="bxdynamic_mKUqxK_start"
                                style="display: none"
                            ></div>
                            <h4>@lang('home.footer_menu_title')</h4>
                            <ul>
                                <li><a href="/company/">
                                  @lang('home.about_company')
                                </a></li>
                                <li><a href="/company/news/">@lang('home.news')</a></li>
                                <li>
                                    <a href="/company/staff/">@lang('home.employees')</a>
                                </li>
                                <li>
                                    <a href="/company/vacancy/">@lang('home.vacancy')</a>
                                </li>
                            </ul>
                            <div
                                id="bxdynamic_mKUqxK_end"
                                style="display: none"
                            ></div>
                        </div>
                        <div class="col-md-3">
                            <div
                                id="bxdynamic_QCJ7Jg_start"
                                style="display: none"
                            ></div>
                            <h4>@lang('home.footer_menu_title_2')</h4>
                            <ul>
                                <li><a href="/help/">@lang('home.footer_menu_title_2')</a></li>
                                <li>
                                    <a href="/help/payment/">@lang('home.conditions_payments')</a>
                                </li>
                                <li>
                                    <a href="/help/delivery/">
                                        @lang('home.conditions_delivery')
                                    </a>
                                </li>
                                <li>
                                    <a href="/help/warranty/">
                                        @lang('home.guarantee')
                                    </a>
                                </li>
                            </ul>
                            <div
                                id="bxdynamic_QCJ7Jg_end"
                                style="display: none"
                            ></div>
                        </div>
                        <div class="col-md-3">
                            <div
                                id="bxdynamic_6G4w5O_start"
                                style="display: none"
                            ></div>
                            <h4>@lang('home.footer_menu_title_3')</h4>
                            <ul>
                                <li><a href="/info/brands/">@lang('home.brands')</a></li>
                                <li>
                                    <a href="/info/faq/">@lang('home.faq')</a>
                                </li>
                                <li><a href="/info/advice/">@lang('home.advices')</a></li>
                                <li>
                                    <a href="/company/suppliers/">
                                        @lang('home.for_suppliers')
                                    </a>
                                </li>
                            </ul>
                            <div
                                id="bxdynamic_6G4w5O_end"
                                style="display: none"
                            ></div>
                        </div>
                        <div class="col-md-3">
                            <h4>@lang('home.footer_menu_title_4')</h4>
                            <p>
                                <a href="tel:{{$footer_contacts->phone}}">
                                    {{$footer_contacts->phone}}
                                </a>

                                <span>
                                    {{$footer_contacts->address}}
                                </span>
                                <a href="mailto:{{$footer_contacts->email}}">{{$footer_contacts->email}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <p style="float: left;" class="copy">© {{date('Y')}} {{$_SERVER['SERVER_NAME']}}. @lang('home.copyright')</p>
                    <p style="float: right;">Разработано в <a href="http://steepcoder.uz/site" target="_blank" style="color: blue;">Steepcoder</a></p>
                    <div style="clear: both;"></div>
                </div>
            </div>
        </footer>

        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
        <script src="/public/assets/js/script.js"></script>
        <script src="/public/assets/js/jquery-ui.js"></script>
        <script src="/public/assets/js/script2.js"></script>
    </body>
</html>