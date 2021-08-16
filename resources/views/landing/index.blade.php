@extends('layouts.landing')
@section('content')
<div class="page">
    <div id="section-content" class="content page-1 moto-section" data-widget="section" data-container="section">
        <div class="moto-widget moto-widget-block moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="block" data-visible-on="" data-spacing="saaa">
            <div class="container-fluid">
                <div class="row">
                    <div class="moto-cell col-sm-12" data-container="container">
                        <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="md" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                            <div class="container-fluid">
                                <div class="row" data-container="container">
                                    <div class="moto-widget moto-widget-row__column moto-cell col-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                        <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                            <div class="container-fluid">
                                                <div class="row" data-container="container" style = "justify-content: flex-end">
                                                    <div class="moto-widget moto-widget-row__column moto-cell moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="">
                                                            <div class="moto-widget-text-content moto-widget-text-editable">
                                                                <p class="moto-text_system_11" style="text-align: right;"> <span class="moto-content-image-plugin-wrapper moto-spacing-top-zero moto-spacing-right-zero moto-spacing-bottom-zero moto-spacing-left-zero">
                                                                                                                                                                <span class="moto-content-image-container">
                                                                                                                                                                        <img class="moto-content-image" data-path="2020/05/mt-2019-header-icon02.png"
                                                                                                                                                                             data-id="184" alt="" width="30" height="30" src="{{ asset('img/icons/mt-2019-header-icon02.png') }}">
                                                                                                                                                                </span> </span> &nbsp; <a data-action="call" class="moto-link" href="tel:0800210247">0-800-210-247</a> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="moto-widget moto-widget-row__column moto-cell moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="">
                                                            <div class="moto-widget-text-content moto-widget-text-editable">
                                                                <p class="moto-text_system_11" style="text-align: right;"> <span class="moto-content-image-plugin-wrapper moto-spacing-top-zero moto-spacing-right-zero moto-spacing-bottom-zero moto-spacing-left-zero">
                                                                                                                                                                <span class="moto-content-image-container">
                                                                                                                                                                        <img class="moto-content-image" data-path="2020/05/mt-2019-header-icon02.png"
                                                                                                                                                                             data-id="184" alt="" width="30" height="30" src="{{ asset('img/icons/mt-2019-header-icon02.png') }}">
                                                                                                                                                                </span> </span> &nbsp; <a data-action="call" class="moto-link" href="tel:0800212008">0-800-212-008</a> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown  moto-cell">
                                                        <div class = "moto-spacing-top-small">
                                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                                @if(LaravelLocalization::getCurrentLocale() == $localeCode)
                                                                    <span class="dropbtn dropbtn_active">{{ strtoupper($localeCode) }}</span>
                                                                @else
                                                                    <a class="dropbtn"
                                                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, []) }}">
                                                                        {{ strtoupper($localeCode) }}
                                                                    </a>
                                                                @endif
                                                            @endforeach
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="saaa" data-bg-position="bottom" data-bg-image="2020/05/mt-2019-bg-02.png">
                            <div class="container-fluid">
                                <div class="row" data-container="container">
                                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                        <div class="moto-widget moto-widget-container undefined moto-container_content_5eb04c161" data-visible-on="" data-widget="container" data-container="container" data-css-name="moto-container_content_5eb04c161" data-bg-position="left top">
                                            <div class="moto-widget moto-widget-row moto-justify-content_center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                                <div class="container-fluid">
                                                    <div class="row" data-container="container">
                                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                            <div data-widget-id="wid_1588612157_6kl91f05d" class="moto-widget moto-widget-image moto-preset-default moto-align-left moto-align-center_mobile-h moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-small  " data-widget="image">
                                                                <a href="" data-action="page" class="moto-widget-image-link moto-link"> <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-logo.png" class="moto-widget-image-picture lazyloaded" data-id="185" title="" alt="" src="{{ asset('img/service-white.png') }}"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-8 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                            <div data-widget-id="wid_1588612322_wtumcwmbu" class="moto-widget moto-widget-menu moto-preset-default moto-align-right moto-align-center_mobile-h moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-preset="default" data-widget="menu">
                                                                <a href="#" class="moto-widget-menu-toggle-btn"><i class="moto-widget-menu-toggle-btn-icon fa fa-bars"></i></a>
                                                                <ul class="moto-widget-menu-list moto-widget-menu-list_horizontal">
                                                                    <li class="moto-widget-menu-item"> <a href="" data-action="scroll_to_anchor" data-anchor="about" data-time="0.4" data-moto-widget-actions-scroll-to="" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link"> {{ __("About company") }}</a> </li>
                                                                    <li class="moto-widget-menu-item"> <a href="" data-action="scroll_to_anchor" data-anchor="brands" data-time="0.4" data-moto-widget-actions-scroll-to="" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">{{ __("Brands") }}</a> </li>
                                                                    <li class="moto-widget-menu-item"> <a href="" data-action="scroll_to_anchor" data-anchor="technicalSupport" data-time="0.4" data-moto-widget-actions-scroll-to="" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">{{ __("TecSupport") }}</a> </li>
                                                                    <li class="moto-widget-menu-item"> <a href="" data-action="scroll_to_anchor" data-anchor="servicesSupport" data-time="0.4" data-moto-widget-actions-scroll-to="" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">{{ __("Service support") }}</a> </li>
                                                                    <li class="moto-widget-menu-item"> <a href="" data-action="scroll_to_anchor" data-anchor="contacts" data-time="0.4" data-moto-widget-actions-scroll-to="" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">{{ __("Contacts") }}</a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-widget-id="wid_1588612746_qz8habo4s" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-visible-on_tablet_hidden moto-visible-on_mobile-h_hidden moto-visible-on_mobile-v_hidden" data-widget="spacer" data-preset="default" data-spacing="laaa" data-visible-on="+desktop">
                                            <div class="moto-widget-spacer-block" style="height:30px"> </div>
                                        </div>
                                        <div data-widget-id="wid_1588685047_m5arj0l81" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-visible-on_desktop_hidden" data-widget="spacer" data-preset="default" data-spacing="laaa" data-visible-on="+tablet,mobile-h,mobile-v">
                                            <div class="moto-widget-spacer-block" style="height:20px"> </div>
                                        </div>
                                        <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aama" style="" data-bg-position="left top">
                                            <div class="container-fluid">
                                                <div class="row" data-container="container">
                                                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-7 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-visible-on="-" data-animation="">
                                                            <div class="moto-widget-text-content moto-widget-text-editable">
                                                                <h1 class="moto-text_system_3">
                                                                    {{ __("Service and technical") }}
                                                                    <span class="moto-color_custom3">
                                                                                                                                                                {{ __("Support") }}
                                                                                                                                                        </span>
                                                                    {{ __("Brand") }}
                                                                </h1> </div>
                                                        </div>
                                                        <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="md" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                                            <div class="container-fluid">
                                                                <div class="row" data-container="container">
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-md-11 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="">
                                                                            <div class="moto-widget-text-content moto-widget-text-editable">
                                                                                <p class="moto-text_264"> {{ __("Description1") }} </p>
                                                                                <p class="moto-text_264"> {{ __("Description2") }} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="moto-widget moto-widget-row row-gutter-0 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                                                            <div class="container-fluid">
                                                                                <div class="row" data-container="container">
                                                                                    <div class="moto-widget moto-widget-row__column moto-cell moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="margin-right: 20px;" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                                        <div data-widget-id="wid_1588612626_1sth0fqdk" class="moto-widget moto-widget-button moto-preset-3 moto-preset-provider-default moto-align-left moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="button">
                                                                                            <a href="" data-action="scroll_to_anchor" data-anchor="technicalSupport" data-time="0.4" data-moto-widget-actions-scroll-to="" class="moto-widget-button-link moto-size-medium moto-link"> <span class="fa moto-widget-theme-icon"></span><span class="moto-widget-button-label">  {{ __("Technical Support") }}</span></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="moto-widget moto-widget-row__column moto-cell moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                                        <div data-widget-id="wid_1588612634_z6660vepx" class="moto-widget moto-widget-button moto-preset-2 moto-preset-provider-default moto-align-left moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="button">
                                                                                            <a href="" data-action="scroll_to_anchor" data-anchor="servicesSupport" data-time="0.4" data-moto-widget-actions-scroll-to="" class="moto-widget-button-link moto-size-medium moto-link"> <span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">
                                                                                                                                                                                                        {{ __("Service support") }}
                                                                                                                                                                                                        </span> </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-md-1 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="moto-widget moto-widget-text moto-preset-default moto-widget-text_blank moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-visible-on="-" data-animation="">
                                                            <div class="moto-widget-text-content moto-widget-text-editable"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-5 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-main-background" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-widget-id="wid_1588612800_l9ttaj61g" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-visible-on_desktop_hidden" data-widget="spacer" data-preset="default" data-spacing="laaa" data-visible-on="+tablet,mobile-h,mobile-v">
                                            <div class="moto-widget-spacer-block" style="height:0px"> </div>
                                        </div>
                                        <div data-widget-id="wid_1588685093_tfs3lbyn4" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-visible-on_tablet_hidden moto-visible-on_mobile-h_hidden moto-visible-on_mobile-v_hidden" data-widget="spacer" data-preset="default" data-spacing="laaa" data-visible-on="+desktop">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="moto-widget moto-widget-block moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-visible-on="" data-spacing="aala"  data-bg-position="left bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="moto-cell col-sm-12" data-container="container">
                        <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aama" style="" data-bg-position="left top">
                            <div class="container-fluid">
                                <div class="row" data-container="container">
                                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                        <div class="moto-widget moto-widget-container undefined moto-container_content_5eb3e8001" data-visible-on="" data-widget="container" data-container="container" data-css-name="moto-container_content_5eb3e8001" data-bg-position="left top">
                                            <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                                <div class="container-fluid">
                                                    <div class="row" data-container="container">
                                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                            <div class="moto-widget moto-widget-row row-gutter-0 moto-justify-content_center moto-spacing-top-auto moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="xs" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                                                <div class="container-fluid">
                                                                    <div class="row" data-container="container">
                                                                        <div class="moto-widget moto-widget-row__column moto-cell col-xs-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="right">
                                                                            <div data-widget-id="wid_1588848640_kbm4gvtg4" class="moto-widget moto-widget-image moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-small  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                        <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-icon-01.png"
                                                                                                                                                                                             class="moto-widget-image-picture lazyloaded" data-id="" title="" alt=""
                                                                                                                                                                                             src="{{ asset('img/about/informatively_wh.svg') }}">
                                                                                                                                                                                </span> </div>
                                                                        </div>
                                                                        <div class="moto-widget moto-widget-row__column moto-cell col-xs-9 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="aaas" data-visible-on="-" data-animation="">
                                                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                                                    <h3 class="moto-text_system_8">
                                                                                        {{ __("Informative") }}
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-medium moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="ssms" data-visible-on="-" data-animation="">
                                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                                    <p class="moto-text_system_2"> <span class="moto-color5_3">
                                                                                                                                                                        {{ __("Informative text") }}
                                                                                                                                                                </span> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                            <div class="moto-widget moto-widget-row row-gutter-0 moto-justify-content_center moto-spacing-top-auto moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="xs" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                                                <div class="container-fluid">
                                                                    <div class="row" data-container="container">
                                                                        <div class="moto-widget moto-widget-row__column moto-cell col-xs-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="right">
                                                                            <div data-widget-id="wid_1588848640_6qg1xrqse" class="moto-widget moto-widget-image moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-small  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                        <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-icon-02.png"
                                                                                                                                                                                             class="moto-widget-image-picture lazyloaded" data-id="" title="" alt=""
                                                                                                                                                                                             src="{{ asset('img/about/promptly_wh.svg') }}">
                                                                                                                                                                                </span> </div>
                                                                        </div>
                                                                        <div class="moto-widget moto-widget-row__column moto-cell col-xs-9 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="aaas" data-visible-on="-" data-animation="">
                                                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                                                    <h3 class="moto-text_system_8">
                                                                                        {{ __("Operationally") }}
                                                                                    </h3> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-medium moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="ssms" data-visible-on="-" data-animation="">
                                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                                    <p class="moto-text_system_2"> <span class="moto-color5_3">
                                                                                                                                                                        {{ __("Operationally text") }}
                                                                                                                                                                </span> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                            <div class="moto-widget moto-widget-row row-gutter-0 moto-justify-content_center moto-spacing-top-auto moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="xs" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                                                <div class="container-fluid">
                                                                    <div class="row" data-container="container">
                                                                        <div class="moto-widget moto-widget-row__column moto-cell col-xs-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="right">
                                                                            <div data-widget-id="wid_1588848640_wtvdotigd" class="moto-widget moto-widget-image moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-small  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                        <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-icon-03.png"
                                                                                                                                                                                             class="moto-widget-image-picture lazyloaded" data-id="" title="" alt=""
                                                                                                                                                                                             src="{{ asset('img/about/reliably_wh.svg') }}">
                                                                                                                                                                                </span> </div>
                                                                        </div>
                                                                        <div class="moto-widget moto-widget-row__column moto-cell col-xs-9 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="aaas" data-visible-on="-" data-animation="">
                                                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                                                    <h3 class="moto-text_system_8">
                                                                                      {{ __("Reliable") }}
                                                                                    </h3> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-medium moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="ssms" data-visible-on="-" data-animation="">
                                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                                    <p class="moto-text_system_2"> <span class="moto-color5_3">
                                                                                                                                                                          {{ __("Reliable text") }}
                                                                                                                                                                </span> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="moto-widget moto-widget-row row-fixed moto-bg-color5_5 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="maaa" style="" data-bg-position="left top">
            <a class="moto-anchor" name="about"></a>
            <div class="container-fluid">
                <div class="row" data-container="container">
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-7 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="maaa" data-visible-on="-" data-animation="">
                            <div class="moto-widget-text-content moto-widget-text-editable">
                                <h2 class="moto-text_system_5" style = "color: #233341">
                                      {{ __("Brand") }}
                                </h2> </div>
                        </div>
                        <div class="moto-widget moto-widget-row row-gutter-0 moto-justify-content_center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="xs" data-widget="row" data-visible-on="-" data-spacing="saaa" style="" data-bg-position="left top">
                            <div class="container-fluid">
                                <div class="row" data-container="container">
                                    <div class="moto-widget moto-widget-row__column   col-1   moto-cell moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="text-align: center" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                        <div data-widget-id="wid_1588848640_k7y13172w" class="moto-widget moto-widget-image moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-time-icon02.png"
                                                                                                                                                     class="moto-widget-image-picture lazyloaded" data-id="" title="" alt=""
                                                                                                                                                     src=" {{ asset('img/icons/mt-2019-header-icon02.png') }} ">
                                                                                                                                        </span> </div>
                                    </div>
                                    <div class="moto-widget moto-widget-row__column moto-cell col-xs-11 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="aaas" data-visible-on="-" data-animation="">
                                            <div class="moto-widget-text-content moto-widget-text-editable">
                                                <p class="moto-text_system_13"> <strong>
                                                        {{ __("Call us") }}
                                                    </strong>  <!-- <a href="tel:1234567890" data-action="call" class="moto-link"><strong>(123) 456 7890</strong> </a> --> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-5 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="maaa" data-visible-on="-" data-animation="">
                            <div class="moto-widget-text-content moto-widget-text-editable">
                                <p class="moto-text_205"> <span class="moto-color3_3">
                                                                                                                            {{ __("About text") }}
                                                                                                                        </span> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "row moto-spacing-top-medium" data-container="container">
                    <div class = "moto-cell col-12 col-sm-6 moto-spacing-top-medium">
                        <h3 class = "moto-text_system_8" style = "color: #000">{{ __("Сourse request") }} </h3>
                        <form style = "background-color: #324063; color: #fff; height: 250px; padding: 10px; border-radius: 10px">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, dolore?
                        </form>
                    </div>
                    <div class = "moto-cell col-12 col-sm-6 moto-spacing-top-medium">
                        <h3 class = "moto-text_system_8" style = "color: #000">{{ __("Launching request") }} </h3>
                        <form style = "background-color: #324063; color: #fff; height: 250px; padding: 10px; border-radius: 10px">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </form>
                    </div>
                </div>
                <div class = "row" data-container="container">
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-7 moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="row.column" data-container="container" data-spacing="lala" data-bg-position="left top">
                        <div class="moto-widget moto-widget-row moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                            <div class="container-fluid">
                                <div class="row" data-container="container">
                                </div><div class="moto-widget moto-widget-row__column col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-visible-on="-" data-animation="">
                                        <div class="moto-widget-text-content moto-widget-text-editable"><h2 class="moto-text_system_6"><span class="moto-color5_5" style = "color:#324063">{{ __("Ask a question") }}</span></h2>
                                        </div><div id="wid_1588619852_e0gjxa4me" class="moto-widget moto-widget-contact_form moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-preset="default" data-widget="contact_form" data-spacing="maaa">
                                            <div ng-controller="widget.ContactForm.Controller" ng-init="hash = '2@eyJoIjoicnpYWG13QXVnazAzME55ZXFJMVFJOGY0cWVlcXorTE5qNzYxb0RieXVTND0iLCJpIjoidGFXT3RRVk5jcWxpYXl3akdCRWxUdz09IiwidiI6IjB4a3dmTDdlNEZzZmR0dkhIMGM2TU9CQmg1dkVKXC9oUCt2dVhnb3Ywa3hERmYwSXd6dklaUlczdEowQk1sTjRVR3dRVkN1T3daQitQa0pJbW1RQlY5Zz09In0=';actionAfterSubmission={&quot;action&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;id&quot;:&quot;&quot;};resetAfterSubmission=false">
                                                <form id="wid_1588619852_e0gjxa4me__form" class="moto-widget-contact_form-form ng-pristine ng-invalid ng-invalid-required" role="form" name="contactForm" ng-submit="submit()" novalidate="">
                                                    <div ng-show="sending" class="contact-form-loading ng-hide"></div>
                                                    <div class="moto-widget-contact_form-group">
                                                        <label for="field_name_wid_1588619852_e0gjxa4me" class="moto-widget-contact_form-label" style = "color:#324063">{{ __("Name") }}</label>
                                                        <input type="text" class="moto-widget-contact_form-field moto-widget-contact_form-input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="Name *" ng-blur="validate('name')" required="" ng-model-options="{ updateOn: 'blur' }" name="name" id="field_name_wid_1588619852_e0gjxa4me" ng-model="message.name">
                                                        <!-- <span class="moto-widget-contact_form-field-error ng-hide" ng-show="contactForm.name.$invalid &amp;&amp; !contactForm.name.$pristine &amp;&amp; !contactForm.name.emailInvalid">Обязательное поле</span> -->
                                                    </div>
                                                    <div class="moto-widget-contact_form-group">
                                                        <label for="field_email_wid_1588619852_e0gjxa4me" class="moto-widget-contact_form-label" style = "color:#324063">{{ __("Phone") }}</label>
                                                        <input type="tel" class="moto-widget-contact_form-field moto-widget-contact_form-input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="Ema"  required="" ng-model-options="{ updateOn: 'blur' }" name="email" id="field_email_wid_1588619852_e0gjxa4me" ng-model="message.email">
                                                        <!-- <span class="moto-widget-contact_form-field-error ng-hide" ng-show="contactForm.email.$invalid &amp;&amp; !contactForm.email.$pristine &amp;&amp; !contactForm.email.emailInvalid">Обязательное поле</span> -->
                                                        <!-- <span class="moto-widget-contact_form-field-error ng-hide" ng-show="contactForm.email.emailInvalid &amp;&amp;">Неккоректный номер</span> -->
                                                    </div>
                                                    <div class="moto-widget-contact_form-group">
                                                        <label for="field_message_wid_1588619852_e0gjxa4me" class="moto-widget-contact_form-label" style = "color:#324063">{{ __("Message") }}</label>
                                                        <textarea class="moto-widget-contact_form-field moto-widget-contact_form-textarea ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" rows="3" placeholder="Message *" ng-blur="validate('message')" required="" ng-model-options="{ updateOn: 'blur' }" name="message" id="field_message_wid_1588619852_e0gjxa4me" ng-model="message.message"></textarea>
                                                        <!-- span class="moto-widget-contact_form-field-error ng-hide" ng-show="contactForm.message.$invalid &amp;&amp; !contactForm.message.$pristine">Обязательное поле</span> -->
                                                    </div>
                                                    <div class="moto-widget-contact_form-success ng-hide" ng-show="showSuccessMessage">
                                                        Ваше письмо успешно отправлено
                                                    </div>
                                                    <div class="moto-widget-contact_form-danger ng-hide" ng-show="emailError">
                                                        Извините, ваше письмо не было отправлено
                                                    </div>
                                                    <div class="moto-widget-contact_form-buttons">

                                                        <div class="moto-widget moto-widget-button moto-preset-3 moto-preset-provider-default moto-align-right" data-preset="3" data-align="right">
                                                            <button type="submit" class="moto-widget-button-link moto-size-medium" data-size="medium"><span class="fa moto-widget-theme-icon"></span><span class="moto-widget-button-label">{{ __("Send") }}</span></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div></div><div class="moto-widget moto-widget-row__column moto-cell col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="moto-widget moto-widget-block .moto-bg-color2 moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-visible-on="" data-spacing="lala" style="" data-bg-position="left top" data-draggable-disabled="">
            <a class="moto-anchor" name="brands"></a>
            <div class="container-fluid">
                <div class="row">
                    <div class="moto-cell col-sm-12" data-container="container">
                        <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top" data-draggable-disabled="">
                            <div class="container-fluid">
                                <div class="row" data-container="container">
                                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"  data-widget="row.column" data-container="container" data-spacing="aaaa">
                                        <div data-widget-id="wid_1588687431_rmvp24az2" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="+desktop,tablet,mobile-h,mobile-v">
                                            <div class="moto-widget-spacer-block" style="height:30px"> </div>
                                        </div>
                                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="maaa" data-visible-on="-" data-animation="">
                                            <div class="moto-widget-text-content moto-widget-text-editable">
                                                <h2 class="moto-text_system_6" style = "color: #fff">
                                                    {{ __("Brand which") }}
                                                    <span class="moto-color1_3">
                                                                                                                              {{ __("Serve") }}
                                                                                                                       </span>
                                                </h2> </div>
                                        </div>
                                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="" data-draggable-disabled="">
                                            <div class="moto-widget-text-content moto-widget-text-editable" aria-multiline="true">
                                                <p class="moto-text_228" style = "color: #fff"> {{ __("Brand text") }} </p>
                                            </div>
                                        </div>
                                        <!--div data-widget-id="wid_1588687431_oxj8npgag" class="moto-widget moto-widget-image
                                                                                            moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-medium
                                                                                            moto-spacing-left-auto " data-widget="image">
                                                                                            <span class="moto-widget-image-link">
                                                                                            <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-arrow.png" class="moto-widget-image-picture lazyloaded" data-id="191" title="" alt="" src="./res/mt-2019-arrow.png">
                                                                                            </span>
                                                                                            </div-->
                                        <div data-widget-id="wid_1588618778_iiiih8s3w" class="moto-widget moto-widget-button moto-preset-2 moto-preset-provider-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto  " data-widget="button">
                                            <a href="" data-action="url" class="moto-widget-button-link moto-size-medium moto-link"> <span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">{{ __("Download price") }}</span></a>
                                        </div>
                                    </div>
                                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                        <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="md" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                            <div class="container-fluid">
                                                <div class="row" data-container="container">
                                                    <div class="moto-widget moto-widget-row__column moto-cell col-md-2 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top"> </div>
                                                    <div class="moto-widget moto-widget-row__column moto-cell col-md-10 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                        <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-grid-type="xs" data-widget="row" data-visible-on="-" data-spacing="aama" style="" data-bg-position="left top">
                                                            <div class="container-fluid">
                                                                <div class="row" data-container="container">
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-xs-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                        <div data-widget-id="wid_1588687431_d5ay1m2l1" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-serv-icon-01.png"
                                                                                                                                                                                     class="moto-widget-image-picture lazyloaded" data-id="205" title="" alt=""
                                                                                                                                                                                     src=" {{ asset('img/brands/Airfel.png') }} ">
                                                                                                                                                                        </span> </div>
                                                                    </div>
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-xs-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                        <div data-widget-id="wid_1588687553_if9kmlbjv" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-serv-icon-02.png"
                                                                                                                                                                                     class="moto-widget-image-picture lazyloaded" data-id="206" title="" alt=""
                                                                                                                                                                                     src="{{ asset('img/brands/ICMA.png') }} ">
                                                                                                                                                                        </span> </div>
                                                                    </div>
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-xs-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                        <div data-widget-id="wid_1588687567_71yvrkxaf" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-serv-icon-03.png"
                                                                                                                                                                                     class="moto-widget-image-picture lazyloaded" data-id="207" title="" alt=""
                                                                                                                                                                                     src="{{ asset('img/brands/Lidz.png') }}">
                                                                                                                                                                        </span> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-grid-type="xs" data-widget="row" data-visible-on="-" data-spacing="aama" style="" data-bg-position="left top">
                                                            <div class="container-fluid">
                                                                <div class="row" data-container="container">
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-xs-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                        <div data-widget-id="wid_1588687603_q6lyqpbwi" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-serv-icon-04.png"
                                                                                                                                                                                     class="moto-widget-image-picture lazyloaded" data-id="208" title="" alt=""
                                                                                                                                                                                     src=" {{ asset('img/brands/QTAP_logo.svg') }}">
                                                                                                                                                                        </span> </div>
                                                                    </div>
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-xs-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                        <div data-widget-id="wid_1588687603_daswouei2" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-serv-icon-05.png"
                                                                                                                                                                                     class="moto-widget-image-picture lazyloaded" data-id="209" title="" alt=""
                                                                                                                                                                                     src="{{ asset('img/brands/SD+.png') }}">
                                                                                                                                                                        </span> </div>
                                                                    </div>
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-xs-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                        <div data-widget-id="wid_1588687603_kwu7vdf71" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-serv-icon-06.png"
                                                                                                                                                                                     class="moto-widget-image-picture lazyloaded" data-id="210" title="" alt=""
                                                                                                                                                                                     src=" {{ asset('img/brands/SD%20Forte.png') }} ">
                                                                                                                                                                        </span> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="xs" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                                            <div class="container-fluid">
                                                                <div class="row" data-container="container">
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-xs-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                        <div data-widget-id="wid_1588687656_gidblyxto" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-serv-icon-07.png"
                                                                                                                                                                                     class="moto-widget-image-picture lazyloaded" data-id="211" title="" alt=""
                                                                                                                                                                                     src="{{ asset('img/brands/SharkBite.png') }}">
                                                                                                                                                                        </span> </div>
                                                                    </div>
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-xs-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                        <div data-widget-id="wid_1588687656_iu5flnftk" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-serv-icon-08.png"
                                                                                                                                                                                     class="moto-widget-image-picture lazyloaded" data-id="212" title="" alt=""
                                                                                                                                                                                     src="{{ asset('img/brands/Sime.png') }}">
                                                                                                                                                                        </span> </div>
                                                                    </div>
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-xs-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                        <div data-widget-id="wid_1588687656_m0ecxjzb7" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-serv-icon-09.png"
                                                                                                                                                                                     class="moto-widget-image-picture lazyloaded" data-id="213" title="" alt=""
                                                                                                                                                                                     src="{{ asset('img/brands/Taifu.png') }}">
                                                                                                                                                                        </span> </div>
                                                                    </div>
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-xs-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                        <div data-widget-id="wid_1588687656_iu5flnftk" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-serv-icon-08.png"
                                                                                                                                                                                     class="moto-widget-image-picture lazyloaded" data-id="212" title="" alt=""
                                                                                                                                                                                     src="{{ asset('img/brands/Thermoalliance.png') }}">
                                                                                                                                                                        </span> </div>
                                                                    </div>
                                                                    <div class="moto-widget moto-widget-row__column moto-cell col-xs-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                        <div data-widget-id="wid_1588687656_iu5flnftk" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-serv-icon-08.png"
                                                                                                                                                                                     class="moto-widget-image-picture lazyloaded" data-id="212" title="" alt=""
                                                                                                                                                                                     src="{{ asset('img/brands/Womar.png') }}">
                                                                                                                                                                        </span> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="moto-widget moto-bg-color5_5 moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-visible-on="" data-spacing="lala" style="" data-bg-position="left top" data-draggable-disabled="">
    <a class="moto-anchor" name="technicalSupport"></a>
    <div class="container-fluid">
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="lama" style="" data-bg-position="left top" data-draggable-disabled="">
                    <div class="container-fluid">
                        <div class="row" data-container="container">
                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-visible-on="-" data-animation="">
                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                        <h2 class="moto-text_system_6 black" style = "text-transform: uppercase">
                                            {{ __("Technical Support") }}
                                        </h2> </div>
                                </div>
                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="" data-draggable-disabled="">
                                    <div class="moto-widget-text-content moto-widget-text-editable" aria-multiline="true">
                                        <p class="moto-text_228">
                                        <p class="moto-text_228 black"> {{ __("Monday through Friday") }} </p>
                                        <p class="moto-text_228 black"> {{ __("Time") }} </p>
                                        <p class="moto-text_228 black"> {{ __("Call") }} </p>
                                        </p>
                                    </div>
                                </div>
                                <!--div data-widget-id="wid_1588687431_oxj8npgag" class="moto-widget moto-widget-image
                                                                            moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-medium
                                                                            moto-spacing-left-auto " data-widget="image">
                                                                            <span class="moto-widget-image-link">
                                                                            <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-arrow.png" class="moto-widget-image-picture lazyloaded" data-id="191" title="" alt="" src="./res/mt-2019-arrow.png">
                                                                            </span>
                                                                            </div-->
                                <div data-widget-id="wid_1588618778_iiiih8s3w" class="moto-widget moto-widget-button moto-preset-2 moto-preset-provider-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto  " data-widget="button">
                                    <a href="tel:0800212008" data-action="url" class="moto-widget-button-link moto-size-medium moto-link"> <span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">0-800-212-008</span></a>
                                </div>
                            </div>
                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-8 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-visible-on="-" data-animation="">
                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                        <h3 class="moto-text_202 black">
                                            {{ __("Technical support service") }}
                                        </h3> </div>
                                </div>
                                <!--div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small
                                                                            moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                                                            data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-"
                                                                            data-animation="" data-draggable-disabled="">
                                                                            <div class="moto-widget-text-content moto-widget-text-editable" aria-multiline="true">
                                                                            <p class="moto-text_normal">
                                                                            Служба технической поддержки SANDI SERVICE предоставляет всю необходимую для клиента информацию по продукту:
                                                                            </p>
                                                                            </div>
                                                                            </div-->
                                <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="">
                                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                                        <ul>
                                                            <li class="moto-text_228 black"> {{ __("Product characteristics") }} </li>
                                                            <li class="moto-text_228 black"> {{ __("Complete set of goods") }} </li>
                                                            <li class="moto-text_228 black"> {{ __("Installation and connection") }} </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="">
                                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                                        <ul>
                                                            <li class="moto-text_228 black"> {{ __("Assistance of consultants") }} </li>
                                                            <li class="moto-text_228 black"> {{ __("Provision of documentation") }} </li>
                                                            <li class="moto-text_228 black"> {{ __("More") }} </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--FAQ-->
                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-visible-on="-" data-animation="">
                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                        <h3 class="moto-text_202 black">
                                            {{ __("FAQ") }}
                                        </h3> </div>
                                </div>
                                <!--div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small
                                                                            moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                                                            data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-"
                                                                            data-animation="" data-draggable-disabled="">
                                                                            <div class="moto-widget-text-content moto-widget-text-editable" aria-multiline="true">
                                                                            <p class="moto-text_normal">
                                                                            Служба технической поддержки SANDI SERVICE предоставляет всю необходимую для клиента информацию по продукту:
                                                                            </p>
                                                                            </div>
                                                                            </div-->
                                <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="">
                                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                                        <ul>
                                                            <li class="moto-text_228 black"> <strong>
                                                                    {{ __("FAQ(q)1") }}
                                                                </strong>
                                                                <ol>
                                                                    <li> {{ __("FAQ(a)2") }} </li>
                                                                </ol>
                                                            </li>
                                                            <li class="moto-text_228 black"> <strong>
                                                                    {{ __("FAQ(q)2") }}
                                                                </strong>
                                                                <ol>
                                                                    <li> {{ __("FAQ(a)2") }} </li>
                                                                </ol>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--FAQ-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aama" style="" data-bg-position="left top">
                    <div class="container-fluid">
                        <div class="row" data-container="container">
                            <div class="moto-widget moto-widget-row__column moto-cell col-6 col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div data-widget-id="wid_1588620661_vpt19564c" class="moto-widget moto-widget-completion_bar_circular moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-align-center" data-widget="completion_bar_circular" data-moto-completion-bar-circular-options="{&quot;progress&quot;:{&quot;value&quot;:75,&quot;custom&quot;:false,&quot;customValue&quot;:0,&quot;align&quot;:&quot;center&quot;,&quot;textStyle&quot;:&quot;moto-text_system_7&quot;,&quot;animation&quot;:false,&quot;animationDuration&quot;:2},&quot;progressBar&quot;:{&quot;width&quot;:2.4,&quot;color&quot;:&quot;#f3c600&quot;,&quot;animation&quot;:true,&quot;animationDuration&quot;:2.6,&quot;corners&quot;:false}}">
                                                    <div class="moto-widget-completion_bar_circular__wrapper">
                                                        <div class="moto-widget-completion_bar_circular__bar-wrapper">
                                                            <div class="moto-widget-completion_bar_circular__values-wrapper">
                                                                <div class="moto-widget-completion_bar_circular__progress moto-align-items_center"> <span class="moto-widget-completion_bar_circular__progress-value moto-text_system_7 black">
                                                                                                                                                                40
                                                                                                                                                        </span> <span class="moto-widget-completion_bar_circular__progress-unit moto-text_system_7 moto-spacing-left-auto black">
                                                                                                                                                                %
                                                                                                                                                        </span> </div>
                                                            </div>
                                                            <svg viewBox="0 0 36 36" class="moto-widget-completion_bar_circular__svg">
                                                                <circle cx="18" cy="18" r="15.92" stroke="#d6e3ea" stroke-width="2.5" fill="none"> </circle>
                                                                <circle class="moto-widget-completion_bar_circular__svg-progress_circle" cx="18" cy="18" r="15.92" stroke="#f3c600" stroke-width="2.4" stroke-dasharray="40, 100" fill="none" style="animation-duration: 2.6s;"> </circle>
                                                            </svg>
                                                        </div> <span class="moto-widget-completion_bar_circular__title moto-spacing-top-small moto-spacing-bottom-auto moto-text_226 black">
                                                                                                                                        {{ __("Technical statistic1") }}
                                                                                                                                </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="moto-widget moto-widget-row__column moto-cell col-6 col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div data-widget-id="wid_1588621394_v518sphtu" class="moto-widget moto-widget-completion_bar_circular moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-align-center" data-widget="completion_bar_circular" data-moto-completion-bar-circular-options="{&quot;progress&quot;:{&quot;value&quot;:88,&quot;custom&quot;:false,&quot;customValue&quot;:0,&quot;align&quot;:&quot;center&quot;,&quot;textStyle&quot;:&quot;moto-text_system_7&quot;,&quot;animation&quot;:false,&quot;animationDuration&quot;:2},&quot;progressBar&quot;:{&quot;width&quot;:2.4,&quot;color&quot;:&quot;#f3c600&quot;,&quot;animation&quot;:true,&quot;animationDuration&quot;:2.6,&quot;corners&quot;:false}}">
                                                    <div class="moto-widget-completion_bar_circular__wrapper">
                                                        <div class="moto-widget-completion_bar_circular__bar-wrapper">
                                                            <div class="moto-widget-completion_bar_circular__values-wrapper">
                                                                <div class="moto-widget-completion_bar_circular__progress moto-align-items_center"> <span class="moto-widget-completion_bar_circular__progress-value moto-text_system_7 black">
                                                                                                                                                                100
                                                                                                                                                        </span> <span class="moto-widget-completion_bar_circular__progress-unit moto-text_system_7 moto-spacing-left-auto black">
                                                                                                                                                                %
                                                                                                                                                        </span> </div>
                                                            </div>
                                                            <svg viewBox="0 0 36 36" class="moto-widget-completion_bar_circular__svg">
                                                                <circle cx="18" cy="18" r="15.92" stroke="#d6e3ea" stroke-width="2.5" fill="none"> </circle>
                                                                <circle class="moto-widget-completion_bar_circular__svg-progress_circle" cx="18" cy="18" r="15.92" stroke="#f3c600" stroke-width="2.4" stroke-dasharray="100, 100" fill="none" style="animation-duration: 2.6s;"> </circle>
                                                            </svg>
                                                        </div> <span class="moto-widget-completion_bar_circular__title moto-spacing-top-small moto-spacing-bottom-auto moto-text_226 black">
                                                                                                                                        {{ __("Technical statistic2") }}
                                                                                                                                </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="moto-widget moto-widget-row__column moto-cell col-6 col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div data-widget-id="wid_1588621420_d7xwy2mqs" class="moto-widget moto-widget-completion_bar_circular moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-align-center" data-widget="completion_bar_circular" data-moto-completion-bar-circular-options="{&quot;progress&quot;:{&quot;value&quot;:65,&quot;custom&quot;:false,&quot;customValue&quot;:0,&quot;align&quot;:&quot;center&quot;,&quot;textStyle&quot;:&quot;moto-text_system_7&quot;,&quot;animation&quot;:false,&quot;animationDuration&quot;:2},&quot;progressBar&quot;:{&quot;width&quot;:2.4,&quot;color&quot;:&quot;#f3c600&quot;,&quot;animation&quot;:true,&quot;animationDuration&quot;:2.6,&quot;corners&quot;:false}}">
                                                    <div class="moto-widget-completion_bar_circular__wrapper">
                                                        <div class="moto-widget-completion_bar_circular__bar-wrapper">
                                                            <div class="moto-widget-completion_bar_circular__values-wrapper">
                                                                <div class="moto-widget-completion_bar_circular__progress moto-align-items_center"> <span class="moto-widget-completion_bar_circular__progress-value moto-text_system_7 black">
                                                                                                                                                                95
                                                                                                                                                        </span> <span class="moto-widget-completion_bar_circular__progress-unit moto-text_system_7 moto-spacing-left-auto black">
                                                                                                                                                                %
                                                                                                                                                        </span> </div>
                                                            </div>
                                                            <svg viewBox="0 0 36 36" class="moto-widget-completion_bar_circular__svg">
                                                                <circle cx="18" cy="18" r="15.92" stroke="#d6e3ea" stroke-width="2.5" fill="none"> </circle>
                                                                <circle class="moto-widget-completion_bar_circular__svg-progress_circle" cx="18" cy="18" r="15.92" stroke="#f3c600" stroke-width="2.4" stroke-dasharray="95, 100" fill="none" style="animation-duration: 2.6s;"> </circle>
                                                            </svg>
                                                        </div> <span class="moto-widget-completion_bar_circular__title moto-spacing-top-small moto-spacing-bottom-auto moto-text_226 black">
                                                                                                                                        {{ __("Technical statistic3") }}
                                                                                                                                </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="moto-widget moto-widget-row__column moto-cell col-6 col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div data-widget-id="wid_1588621439_pys4i4o5v" class="moto-widget moto-widget-completion_bar_circular moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-align-center" data-widget="completion_bar_circular" data-moto-completion-bar-circular-options="{&quot;progress&quot;:{&quot;value&quot;:75,&quot;custom&quot;:false,&quot;customValue&quot;:0,&quot;align&quot;:&quot;center&quot;,&quot;textStyle&quot;:&quot;moto-text_system_7&quot;,&quot;animation&quot;:false,&quot;animationDuration&quot;:2},&quot;progressBar&quot;:{&quot;width&quot;:2.4,&quot;color&quot;:&quot;#f3c600&quot;,&quot;animation&quot;:true,&quot;animationDuration&quot;:2.6,&quot;corners&quot;:false}}">
                                                    <div class="moto-widget-completion_bar_circular__wrapper">
                                                        <div class="moto-widget-completion_bar_circular__bar-wrapper">
                                                            <div class="moto-widget-completion_bar_circular__values-wrapper">
                                                                <div class="moto-widget-completion_bar_circular__progress moto-align-items_center"> <span class="moto-widget-completion_bar_circular__progress-value moto-text_system_7 black">
                                                                                                                                                                91
                                                                                                                                                        </span> <span class="moto-widget-completion_bar_circular__progress-unit moto-text_system_7 moto-spacing-left-auto black">
                                                                                                                                                                %
                                                                                                                                                        </span> </div>
                                                            </div>
                                                            <svg viewBox="0 0 36 36" class="moto-widget-completion_bar_circular__svg">
                                                                <circle cx="18" cy="18" r="15.92" stroke="#d6e3ea" stroke-width="2.5" fill="none"> </circle>
                                                                <circle class="moto-widget-completion_bar_circular__svg-progress_circle" cx="18" cy="18" r="15.92" stroke="#f3c600" stroke-width="2.4" stroke-dasharray="91, 100" fill="none" style="animation-duration: 2.6s;"> </circle>
                                                            </svg>
                                                        </div> <span class="moto-widget-completion_bar_circular__title moto-spacing-top-small moto-spacing-bottom-auto moto-text_226 black">
                                                                                                                                        {{ __("Technical statistic4") }}
                                                                                                                                </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="moto-widget moto-widget-block moto-bg-color2 moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-visible-on="" data-spacing="lala" style="" data-bg-position="left top" data-draggable-disabled="">
    <a class="moto-anchor" name="servicesSupport"></a>
    <div class="container-fluid">
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="lama" style="" data-bg-position="left top" data-draggable-disabled="">
                    <div class="container-fluid">
                        <div class="row" data-container="container">
                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-visible-on="-" data-animation="">
                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                        <h2 class="moto-text_system_6 white" style = "text-transform: uppercase">
                                            {{ __("Service support") }}
                                        </h2> </div>
                                </div>
                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="" data-draggable-disabled="">
                                    <div class="moto-widget-text-content moto-widget-text-editable" aria-multiline="true">
                                        <p class="moto-text_228">
                                        <p class="moto-text_228 white"> {{ __("Monday through Friday") }} </p>
                                        <p class="moto-text_228 white"> {{ __("Time") }} </p>
                                        <p class="moto-text_228 white"> {{ __("Call") }} </p>
                                        </p>
                                    </div>
                                </div>
                                <!--div data-widget-id="wid_1588687431_oxj8npgag" class="moto-widget moto-widget-image
                                                                            moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-medium
                                                                            moto-spacing-left-auto " data-widget="image">
                                                                            <span class="moto-widget-image-link">
                                                                            <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-arrow.png" class="moto-widget-image-picture lazyloaded" data-id="191" title="" alt="" src="./res/mt-2019-arrow.png">
                                                                            </span>
                                                                            </div-->
                                <div data-widget-id="wid_1588618778_iiiih8s3w" class="moto-widget moto-widget-button moto-preset-2 moto-preset-provider-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto  " data-widget="button">
                                    <a href="tel:0800210247" data-action="url" class="moto-widget-button-link moto-size-medium moto-link"> <span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">0-800-210-247</span></a>
                                </div>
                            </div>
                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-8 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-visible-on="-" data-animation="">
                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                        <h3 class="moto-text_202 white">
                                            {{ __("Support service") }}
                                        </h3> </div>
                                </div>
                                <!--div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small
                                                                            moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                                                            data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-"
                                                                            data-animation="" data-draggable-disabled="">
                                                                            <div class="moto-widget-text-content moto-widget-text-editable" aria-multiline="true">
                                                                            <p class="moto-text_normal">
                                                                            Сервисная поддержка SANDI SERVICE – это мгновенная реакция на запрос потребителя. 100-  процентное решение таких запросов, как:
                                                                            </p>
                                                                            </div>
                                                                            </div-->
                                <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="">
                                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                                        <ul>
                                                            <li class="moto-text_228 white"> {{ __("Warranty service") }} </li>
                                                            <li class="moto-text_228 white"> {{ __("Service") }} </li>
                                                            <li class="moto-text_228 white"> {{ __("First start") }} </li>
                                                            <li class="moto-text_228 white"> {{ __("Undercomplete products") }} </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="">
                                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                                        <ul>
                                                            <li class="moto-text_228 white"> {{ __("Repair") }} </li>
                                                            <li class="moto-text_228 white"> {{ __("Replacement") }}</li>
                                                            <li class="moto-text_228 white"> {{ __("Providing contacts") }} </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--FAQ-->
                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-visible-on="-" data-animation="">
                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                        <h3 class="moto-text_202 white">
                                            {{ __("FAQ") }}
                                        </h3> </div>
                                </div>
                                <!--div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small
                                                                            moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
                                                                            data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-"
                                                                            data-animation="" data-draggable-disabled="">
                                                                            <div class="moto-widget-text-content moto-widget-text-editable" aria-multiline="true">
                                                                            <p class="moto-text_normal">
                                                                            Служба технической поддержки SANDI SERVICE предоставляет всю необходимую для клиента информацию по продукту:
                                                                            </p>
                                                                            </div>
                                                                            </div-->
                                <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="">
                                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                                        <ul>
                                                            <li class="moto-text_228 white"> <strong>
                                                                  {{ __("FAQ(q)1") }}
                                                                </strong>
                                                                <ol>
                                                                    <li> {{ __("FAQ(a)1") }} </li>
                                                                </ol>
                                                            </li>
                                                            <li class="moto-text_228 white"> <strong>
                                                                  {{ __("FAQ(q)2") }}
                                                                </strong>
                                                                <ol>
                                                                    <li>   {{ __("FAQ(a)2") }} </li>
                                                                </ol>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--FAQ-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aama" style="" data-bg-position="left top">
                    <div class="container-fluid">
                        <div class="row" data-container="container">
                            <div class="moto-widget moto-widget-row__column moto-cell col-6 col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div data-widget-id="wid_1588620661_vpt19564c" class="moto-widget moto-widget-completion_bar_circular moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-align-center" data-widget="completion_bar_circular" data-moto-completion-bar-circular-options="{&quot;progress&quot;:{&quot;value&quot;:75,&quot;custom&quot;:false,&quot;customValue&quot;:0,&quot;align&quot;:&quot;center&quot;,&quot;textStyle&quot;:&quot;moto-text_system_7&quot;,&quot;animation&quot;:false,&quot;animationDuration&quot;:2},&quot;progressBar&quot;:{&quot;width&quot;:2.4,&quot;color&quot;:&quot;#f3c600&quot;,&quot;animation&quot;:true,&quot;animationDuration&quot;:2.6,&quot;corners&quot;:false}}">
                                                    <div class="moto-widget-completion_bar_circular__wrapper">
                                                        <div class="moto-widget-completion_bar_circular__bar-wrapper">
                                                            <div class="moto-widget-completion_bar_circular__values-wrapper">
                                                                <div class="moto-widget-completion_bar_circular__progress moto-align-items_center"> <span class="moto-widget-completion_bar_circular__progress-value moto-text_system_7 white">
                                                                                                                                                                68
                                                                                                                                                        </span> <span class="moto-widget-completion_bar_circular__progress-unit moto-text_system_7 moto-spacing-left-auto white">
                                                                                                                                                                %
                                                                                                                                                        </span> </div>
                                                            </div>
                                                            <svg viewBox="0 0 36 36" class="moto-widget-completion_bar_circular__svg">
                                                                <circle cx="18" cy="18" r="15.92" stroke="#d6e3ea" stroke-width="2.5" fill="none"> </circle>
                                                                <circle class="moto-widget-completion_bar_circular__svg-progress_circle" cx="18" cy="18" r="15.92" stroke="#f3c600" stroke-width="2.4" stroke-dasharray="68, 100" fill="none" style="animation-duration: 2.6s;"> </circle>
                                                            </svg>
                                                        </div> <span class="moto-widget-completion_bar_circular__title moto-spacing-top-small moto-spacing-bottom-auto moto-text_226 white">
                                                                                                                                        {{ __("Service statistic1") }}
                                                                                                                                </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="moto-widget moto-widget-row__column moto-cell col-6 col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div data-widget-id="wid_1588621394_v518sphtu" class="moto-widget moto-widget-completion_bar_circular moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-align-center" data-widget="completion_bar_circular" data-moto-completion-bar-circular-options="{&quot;progress&quot;:{&quot;value&quot;:88,&quot;custom&quot;:false,&quot;customValue&quot;:0,&quot;align&quot;:&quot;center&quot;,&quot;textStyle&quot;:&quot;moto-text_system_7&quot;,&quot;animation&quot;:false,&quot;animationDuration&quot;:2},&quot;progressBar&quot;:{&quot;width&quot;:2.4,&quot;color&quot;:&quot;#f3c600&quot;,&quot;animation&quot;:true,&quot;animationDuration&quot;:2.6,&quot;corners&quot;:false}}">
                                                    <div class="moto-widget-completion_bar_circular__wrapper">
                                                        <div class="moto-widget-completion_bar_circular__bar-wrapper">
                                                            <div class="moto-widget-completion_bar_circular__values-wrapper">
                                                                <div class="moto-widget-completion_bar_circular__progress moto-align-items_center"> <span class="moto-widget-completion_bar_circular__progress-value moto-text_system_7 white">
                                                                                                                                                                100
                                                                                                                                                        </span> <span class="moto-widget-completion_bar_circular__progress-unit moto-text_system_7 moto-spacing-left-auto white">
                                                                                                                                                                %
                                                                                                                                                        </span> </div>
                                                            </div>
                                                            <svg viewBox="0 0 36 36" class="moto-widget-completion_bar_circular__svg">
                                                                <circle cx="18" cy="18" r="15.92" stroke="#d6e3ea" stroke-width="2.5" fill="none"> </circle>
                                                                <circle class="moto-widget-completion_bar_circular__svg-progress_circle" cx="18" cy="18" r="15.92" stroke="#f3c600" stroke-width="2.4" stroke-dasharray="100, 100" fill="none" style="animation-duration: 2.6s;"> </circle>
                                                            </svg>
                                                        </div> <span class="moto-widget-completion_bar_circular__title moto-spacing-top-small moto-spacing-bottom-auto moto-text_226 white">
                                                                                                                                        {{ __("Service statistic2") }}
                                                                                                                                </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="moto-widget moto-widget-row__column moto-cell col-6 col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div data-widget-id="wid_1588621420_d7xwy2mqs" class="moto-widget moto-widget-completion_bar_circular moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-align-center" data-widget="completion_bar_circular" data-moto-completion-bar-circular-options="{&quot;progress&quot;:{&quot;value&quot;:65,&quot;custom&quot;:false,&quot;customValue&quot;:0,&quot;align&quot;:&quot;center&quot;,&quot;textStyle&quot;:&quot;moto-text_system_7&quot;,&quot;animation&quot;:false,&quot;animationDuration&quot;:2},&quot;progressBar&quot;:{&quot;width&quot;:2.4,&quot;color&quot;:&quot;#f3c600&quot;,&quot;animation&quot;:true,&quot;animationDuration&quot;:2.6,&quot;corners&quot;:false}}">
                                                    <div class="moto-widget-completion_bar_circular__wrapper">
                                                        <div class="moto-widget-completion_bar_circular__bar-wrapper">
                                                            <div class="moto-widget-completion_bar_circular__values-wrapper">
                                                                <div class="moto-widget-completion_bar_circular__progress moto-align-items_center"> <span class="moto-widget-completion_bar_circular__progress-value moto-text_system_7 white">
                                                                                                                                                                97
                                                                                                                                                        </span> <span class="moto-widget-completion_bar_circular__progress-unit moto-text_system_7 moto-spacing-left-auto white">
                                                                                                                                                                %
                                                                                                                                                        </span> </div>
                                                            </div>
                                                            <svg viewBox="0 0 36 36" class="moto-widget-completion_bar_circular__svg">
                                                                <circle cx="18" cy="18" r="15.92" stroke="#d6e3ea" stroke-width="2.5" fill="none"> </circle>
                                                                <circle class="moto-widget-completion_bar_circular__svg-progress_circle" cx="18" cy="18" r="15.92" stroke="#f3c600" stroke-width="2.4" stroke-dasharray="97, 100" fill="none" style="animation-duration: 2.6s;"> </circle>
                                                            </svg>
                                                        </div> <span class="moto-widget-completion_bar_circular__title moto-spacing-top-small moto-spacing-bottom-auto moto-text_226 white">
                                                                                                                                      {{ __("Service statistic3") }}
                                                                                                                                </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="moto-widget moto-widget-row__column moto-cell col-6 col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                <div data-widget-id="wid_1588621439_pys4i4o5v" class="moto-widget moto-widget-completion_bar_circular moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-align-center" data-widget="completion_bar_circular" data-moto-completion-bar-circular-options="{&quot;progress&quot;:{&quot;value&quot;:75,&quot;custom&quot;:false,&quot;customValue&quot;:0,&quot;align&quot;:&quot;center&quot;,&quot;textStyle&quot;:&quot;moto-text_system_7&quot;,&quot;animation&quot;:false,&quot;animationDuration&quot;:2},&quot;progressBar&quot;:{&quot;width&quot;:2.4,&quot;color&quot;:&quot;#f3c600&quot;,&quot;animation&quot;:true,&quot;animationDuration&quot;:2.6,&quot;corners&quot;:false}}">
                                                    <div class="moto-widget-completion_bar_circular__wrapper">
                                                        <div class="moto-widget-completion_bar_circular__bar-wrapper">
                                                            <div class="moto-widget-completion_bar_circular__values-wrapper">
                                                                <div class="moto-widget-completion_bar_circular__progress moto-align-items_center"> <span class="moto-widget-completion_bar_circular__progress-value moto-text_system_7 white">
                                                                                                                                                                85
                                                                                                                                                        </span> <span class="moto-widget-completion_bar_circular__progress-unit moto-text_system_7 moto-spacing-left-auto white">
                                                                                                                                                                %
                                                                                                                                                        </span> </div>
                                                            </div>
                                                            <svg viewBox="0 0 36 36" class="moto-widget-completion_bar_circular__svg">
                                                                <circle cx="18" cy="18" r="15.92" stroke="#d6e3ea" stroke-width="2.5" fill="none"> </circle>
                                                                <circle class="moto-widget-completion_bar_circular__svg-progress_circle" cx="18" cy="18" r="15.92" stroke="#f3c600" stroke-width="2.4" stroke-dasharray="85, 100" fill="none" style="animation-duration: 2.6s;"> </circle>
                                                            </svg>
                                                        </div> <span class="moto-widget-completion_bar_circular__title moto-spacing-top-small moto-spacing-bottom-auto moto-text_226 white">
                                                                                                                                        {{ __("Service statistic4") }}
                                                                                                                                </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid moto-bg-color5_5">
    <div class="row">
        <div class="moto-cell col-sm-12" data-container="container">
            <div class="moto-widget moto-widget-row  row-gutter-0 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top" data-draggable-disabled="">
                <a class="moto-anchor" name="contacts"></a>
                <div class="container-fluid">
                    <div class="row" data-container="container">
                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                            <div class="moto-widget moto-widget-row moto-spacing-top-large  moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-grid-type="md" data-widget="row" data-visible-on="-" data-spacing="laaa" style="" data-bg-position="left top" data-draggable-disabled="">
                                <div class="container-fluid" style = "max-width: 1200px">
                                    <div class="row" data-container="container">
                                        <div class="moto-widget moto-widget-row__column moto-cell col-md-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                            <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="xs" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top" data-draggable-disabled="">
                                                <div class="container-fluid">
                                                    <div class="row" data-container="container">
                                                        <div class="moto-widget moto-widget-row__column moto-cell col-xs-11 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aama" data-visible-on="-" data-animation="">
                                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                                    <h2 class="moto-text_system_5" style = "color: #324063">
                                                                        {{ __("Contact us") }}
                                                                    </h2>
                                                                    <p class="moto-text_system_12"> <span class="moto-color_custom3">
                                                                                                                                                                        <strong>
                                                                                                                                                                                {{ __("In one click") }}
                                                                                                                                                                        </strong>
                                                                                                                                                                </span> </p>
                                                                </div>
                                                            </div>
                                                            <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="md" data-widget="row" data-visible-on="-" data-spacing="aaaa" style="" data-bg-position="left top">
                                                                <div class="container-fluid">
                                                                    <div class="row" data-container="container">
                                                                        <div class="moto-widget moto-widget-row__column moto-cell col-md-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                            <div class="moto-widget moto-widget-row moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="xs" data-widget="row" data-visible-on="-" data-spacing="maaa" style="" data-bg-position="left top">
                                                                                <div class="container-fluid">
                                                                                    <div class="row" data-container="container">
                                                                                        <div class="moto-widget moto-widget-row__column moto-cell col-12 col-sm-1 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                                            <div data-widget-id="wid_1588677742_j6kb0ty0z" class="moto-widget moto-widget-image moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                                                        <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-contact-icon01.png"
                                                                                                                                                                                                                             class="moto-widget-image-picture lazyloaded" data-id="202" title="" alt=""
                                                                                                                                                                                                                             src="{{ asset('img/icons/mt-2019-contact-icon01.png') }}">
                                                                                                                                                                                                                </span> </div>
                                                                                        </div>
                                                                                        <div class="moto-widget moto-widget-row__column moto-cell col-12 col-sm-11 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="sasa" data-visible-on="-" data-animation="">
                                                                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                                                                    <p class="moto-text_264"> <strong>
                                                                                                            &nbsp;
                                                                                                        </strong> <a data-action="call" class="moto-link" href="tel:0800212008" style = "color: #324063"><strong>0-800-212-008</strong></a> </p>
                                                                                                    <p class="moto-text_264"> <strong>
                                                                                                            &nbsp;
                                                                                                        </strong> <a data-action="call" class="moto-link" href="tel:0800210247" style = "color: #324063"><strong>0-800-210-247</strong></a> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="moto-widget moto-widget-row__column moto-cell col-md-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                            <div class="moto-widget moto-widget-row moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="xs" data-widget="row" data-visible-on="-" data-spacing="maaa" style="" data-bg-position="left top">
                                                                                <div class="container-fluid">
                                                                                    <div class="row" data-container="container">
                                                                                        <div class="moto-widget moto-widget-row__column moto-cell col-12 col-sm-1 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                                            <div data-widget-id="wid_1588682266_3wj8dorsc" class="moto-widget moto-widget-image moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image"> <span class="moto-widget-image-link">
                                                                                                                                                                                                                        <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-contact-icon02.png"
                                                                                                                                                                                                                             class="moto-widget-image-picture lazyloaded" data-id="201" title="" alt=""
                                                                                                                                                                                                                             src="{{ asset('img/icons/mt-2019-contact-icon02.png') }}">
                                                                                                                                                                                                                </span> </div>
                                                                                        </div>
                                                                                        <div class="moto-widget moto-widget-row__column moto-cell col-12 col-sm-11 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa" data-bg-position="left top">
                                                                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="sasa" data-visible-on="-" data-animation="">
                                                                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                                                                    <p class="moto-text_264" style = "color: #324063"> <strong>
                                                                                                            {{ __("Monday through Friday") }}
                                                                                                            <br>
                                                                                                            {{ __("Time") }}
                                                                                                            <br>
                                                                                                            {{ __("Call") }}
                                                                                                        </strong> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="moto-widget moto-widget-block moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="block" data-visible-on="" data-spacing="mama" style="background-color:#192835;" data-bg-position="left top">
    <div class="container-fluid">
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                <div data-widget-id="wid_1588683072_80ol35b63" class="moto-widget moto-widget-image moto-preset-default moto-align-center align-center mw-200 moto-spacing-right-auto moto-spacing-left-auto  " data-widget="image">
                    <a href = "#" data-action="page" class="moto-widget-image-link moto-link"> <img data-src="/mt-demo/101300/101386/mt-content/uploads/2020/05/mt-2019-logo.png" class="moto-widget-image-picture lazyloaded" data-id="185" title="" alt="" src="{{ asset('img/service-white.png') }}"> </a>
                </div>
                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="saaa" data-visible-on="-" data-animation="">
                    <div class="moto-widget-text-content moto-widget-text-editable">
                        <p class="moto-text_205" style="text-align: center;"> © 2020 All Rights Reserved Terms of Use and Privacy Policy. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
<div data-moto-back-to-top-button="" class="moto-back-to-top-button animated">
    <a href = "#" class="moto-back-to-top-button-link"> <span class="moto-back-to-top-button-icon fa"></span> </a>
</div>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="{{ asset('./js/script.js') }}"></script>
<script>
    (function(w,d,u){
        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://sandi.com.ua/upload/crm/site_button/loader_2_s7bdpb.js');
</script>


@endsection
