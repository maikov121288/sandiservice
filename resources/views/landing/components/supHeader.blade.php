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
                                                                                                                                                                        <img class="moto-content-image" 
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
                                                                                                                                                                        <img class="moto-content-image"
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