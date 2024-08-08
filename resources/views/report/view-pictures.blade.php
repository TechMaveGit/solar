@extends('layouts.main')
@section('app-title', 'View Picture')
@section('main-content')
@push('push_styles')
<style>
    .mfp-img{
        max-height: 800px !important;
    }
</style>
@endpush
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

                                        <a href="{{ route('admin.reports') }}"
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
                    @if(count($pictures)>0)
                    @foreach ($pictures as $picture)
                        <div class="col-sm-6 col-lg-4">
                            <div class="gallery card card-bordered"><a class="gallery-image popup-image"
                                    href="{{ env('STORE_FILE_URL') . $picture->document }}"><img class="w-100 rounded-top" src="{{ env('STORE_FILE_URL') . $picture->document }}"
                                        alt=""></a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">

                                        <div class="user-info"><span class="lead-text">
                                            @php
                                                $documentType = '';
                                                if(isset($picture->document_type)){
                                                    $documentType = $picture->document_type;
                                                    $documentType = str_replace('_image', '', $documentType);
                                                    $documentType = str_replace('_', ' ', $documentType);
                                                    $documentType = ucwords($documentType);
                                                }
                                            @endphp
                                            {{ $documentType }}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <div class="col-sm-12 col-lg-12 text-center">
                        <div class="col-12 pt-5"></div>
                        <div class="col-12 pt-5"></div>
                        <h5 class="text-center pt-5">No Data Found</h5>
                    </div>
                    @endif
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
