@extends('layouts.main')
@section('app-title', 'View Picture')
@section('main-content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal customtitleBTMargin titlemargin_0">Uploded Pictures</h2>

                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle"><a href="#"
                                class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                    class="icon ni ni-menu-alt-r"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">

                                    <div class="rportFilter">


    <button type="button" class="me-1 btn btn-primary download_report_pictures"> <em class="icon ni ni-download-cloud"></em><span>Download All</span></button>

                                        <a href="reports.php"
                                            class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                                class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                    </div>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block">
                <div class="row g-gs jobreport_images">
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery card card-bordered"><a class="gallery-image popup-image"
                                href="images/stock/rail.jpg"><img class="w-100 rounded-top" src="images/stock/rail.jpg"
                                    alt=""></a>
                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                <div class="user-card">

                                    <div class="user-info"><span class="lead-text">Rail as installed</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery card card-bordered"><a class="gallery-image popup-image"
                                href="images/stock/solar-panellabel.webp"><img class="w-100 rounded-top" src="images/stock/solar-panellabel.webp"
                                    alt=""></a>
                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                <div class="user-card">

                                    <div class="user-info"><span class="lead-text">Panel Label</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery card card-bordered"><a class="gallery-image popup-image"
                                href="images/stock/solarinstallroof.jpg"><img class="w-100 rounded-top" src="images/stock/solarinstallroof.jpg"
                                    alt=""></a>
                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                <div class="user-card">

                                    <div class="user-info"><span class="lead-text">Panels installed on roof</span></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery card card-bordered"><a class="gallery-image popup-image"
                                href="images/stock/solarsqitch.jpg"><img class="w-100 rounded-top" src="images/stock/solarsqitch.jpg"
                                    alt=""></a>
                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                <div class="user-card">

                                    <div class="user-info"><span class="lead-text">Fireman's switch</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery card card-bordered"><a class="gallery-image popup-image"
                                href="images/stock/inverterlabel.png"><img class="w-100 rounded-top" src="images/stock/inverterlabel.png"
                                    alt=""></a>
                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                <div class="user-card">

                                    <div class="user-info"><span class="lead-text">Inverter label</span></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery card card-bordered"><a class="gallery-image popup-image"
                                href="images/stock/inverterinstall_picture.jpg"><img class="w-100 rounded-top" src="images/stock/inverterinstall_picture.jpg"
                                    alt=""></a>
                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                <div class="user-card">

                                    <div class="user-info"><span class="lead-text">Inverter installed</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery card card-bordered"><a class="gallery-image popup-image"
                                href="images/stock/solar-fuse-box.webp"><img class="w-100 rounded-top" src="images/stock/solar-fuse-box.webp"
                                    alt=""></a>
                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                <div class="user-card">

                                    <div class="user-info"><span class="lead-text">Fuseboard</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery card card-bordered"><a class="gallery-image popup-image"
                                href="images/stock/solarNet-Meter-3-Phase.jpg"><img class="w-100 rounded-top" src="images/stock/solarNet-Meter-3-Phase.jpg"
                                    alt=""></a>
                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                <div class="user-card">

                                    <div class="user-info"><span class="lead-text">Meter</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery card card-bordered"><a class="gallery-image popup-image"
                                href="images/stock/Solar_Batteries.jpg"><img class="w-100 rounded-top" src="images/stock/Solar_Batteries.jpg"
                                    alt=""></a>
                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                <div class="user-card">

                                    <div class="user-info"><span class="lead-text">Battery</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery card card-bordered"><a class="gallery-image popup-image"
                                href="images/stock/solarbattery-label.png"><img class="w-100 rounded-top" src="images/stock/solarbattery-label.png"
                                    alt=""></a>
                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                <div class="user-card">

                                    <div class="user-info"><span class="lead-text">Battery Label</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery card card-bordered"><a class="gallery-image popup-image"
                                href="images/stock/solar-diverter.jpg"><img class="w-100 rounded-top" src="images/stock/solar-diverter.jpg"
                                    alt=""></a>
                            <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                <div class="user-card">

                                    <div class="user-info"><span class="lead-text">Diverter </span>
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

@endsection

@push('push_script')

<!-- download all images in a zip file js start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.download_report_pictures').on('click', function() {
                var zip = new JSZip();
                var imgFolder = zip.folder("images");

                var totalImages = $('.jobreport_images .gallery').length;
                var imagesProcessed = 0;

                $('.jobreport_images .gallery').each(function() {
                    var imgURL = $(this).find('a.gallery-image').attr('href');
                    var imgName = $(this).find('.user-info .lead-text').text().trim().replace(/\s+/g, '_') + '.' + imgURL.split('.').pop();

                    fetch(imgURL)
                        .then(response => response.blob())
                        .then(blob => {
                            imgFolder.file(imgName, blob);
                            imagesProcessed++;
                            if (imagesProcessed === totalImages) {
                                zip.generateAsync({ type: "blob" })
                                    .then(function(content) {
                                        saveAs(content, "images.zip");
                                    });
                            }
                        })
                        .catch(console.error);
                });
            });
        });
    </script>
    <!-- download all images in a zip file js start end-->
    @endpush
