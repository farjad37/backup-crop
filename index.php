<?php
ini_set('display_errors', 1);
ob_start();
include 'db.php';

?>  


<!DOCTYPE html> 

<html lang="en">

<!-- begin::Head -->
<head>
	<base href="">
	<meta charset="utf-8"/>
	<!--		<title > (<?php //echo $numb; ?>) Central | Dashboard</title>-->
	<title id=""> Central | Dashboard </title>
	<meta name="description" content="Login page example">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

	<!--end::Fonts -->

	<!--begin::Page Custom Styles(used by this page) -->
	<link href="assets/css/pages/login/login-5.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/pages/wizard/wizard-2.css" rel="stylesheet" type="text/css"/>
	<!--end::Page Custom Styles -->
	<link href="assets/css/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css">
	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>

	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->
	<link href="assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css"/>

	<!--end::Layout Skins -->
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/cropper.css">
    <link rel="stylesheet" href="css/main.css">
		<script src="https://unpkg.com/dropzone"></script>
    <script src="https://unpkg.com/cropperjs"></script>


</head>

<!-- end::Head -->

<!-- begin::Body -->
<!--
<style>
	#kt_header, .kt-subheader, .kt-portlet,.kt-footer{
		background-image: linear-gradient(to right, #570606, #6c080c, #830a10, #9a0d13, #b11115, #b11115, #b11115, #b11115, #9a0d13, #830a10, #6c080c, #570606);
	}	
</style>
-->

<body class="">

	<!-- begin:: Page -->

	<!-- begin:: Header Mobile -->
	<?php include('header_mobile.php'); ?>

	<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

			<!-- begin:: Aside -->

			<!-- Uncomment this to display the close button of the panel
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
-->


			<!-- end:: Aside -->
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

				<!-- begin:: Header -->
				<?php include('header.php'); ?>
				<!-- end:: Header -->
				<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">



					<!-- begin:: Content -->
         
					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid"> 
					<div class="container">
          <form method="post" action="fuction.php" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-9">
                <!-- <h3>Demo:</h3> -->
                <div class="docs-demo">
                    <div class="img-container">
                        <img src="images/picture.jpg" id ="uploaded_image" alt="Picture">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- <h3>Preview:</h3> -->
                <div class="docs-preview clearfix">
                    <div class="img-preview preview-lg"></div>
                    <div class="img-preview preview-md"></div>
                    <div class="img-preview preview-sm"></div>
                    <div class="img-preview preview-xs"></div>
                </div>

                <!-- <h3>Data:</h3> -->
                <div class="docs-data">
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
              <label class="input-group-text" for="dataX">X</label>
            </span>
                        <input type="text" class="form-control" id="dataX" placeholder="x">
                        <span class="input-group-append">
              <span class="input-group-text">px</span>
                        </span>
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
              <label class="input-group-text" for="dataY">Y</label>
            </span>
                        <input type="text" class="form-control" id="dataY" placeholder="y">
                        <span class="input-group-append">
              <span class="input-group-text">px</span>
                        </span>
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
              <label class="input-group-text" for="dataWidth">Width</label>
            </span>
                        <input type="text" class="form-control" id="dataWidth" placeholder="width">
                        <span class="input-group-append">
              <span class="input-group-text">px</span>
                        </span>
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
              <label class="input-group-text" for="dataHeight">Height</label>
            </span>
                        <input type="text" class="form-control" id="dataHeight" placeholder="height">
                        <span class="input-group-append">
              <span class="input-group-text">px</span>
                        </span>
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
              <label class="input-group-text" for="dataRotate">Rotate</label>
            </span>
                        <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                        <span class="input-group-append">
              <span class="input-group-text">deg</span>
                        </span>
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
              <label class="input-group-text" for="dataScaleX">ScaleX</label>
            </span>
                        <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-prepend">
              <label class="input-group-text" for="dataScaleY">ScaleY</label>
            </span>
                        <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="actions">
            <div class="col-md-9 docs-buttons">
                <!-- <h3>Toolbar:</h3> -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;move&quot;)">
              <span class="fa fa-arrows-alt"></span>
            </span>
          </button>
                    <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;crop&quot;)">
              <span class="fa fa-crop-alt"></span>
            </span>
          </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(0.1)">
              <span class="fa fa-search-plus"></span>
            </span>
          </button>
                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(-0.1)">
              <span class="fa fa-search-minus"></span>
            </span>
          </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(-10, 0)">
              <span class="fa fa-arrow-left"></span>
            </span>
          </button>
                    <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(10, 0)">
              <span class="fa fa-arrow-right"></span>
            </span>
          </button>
                    <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(0, -10)">
              <span class="fa fa-arrow-up"></span>
            </span>
          </button>
                    <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(0, 10)">
              <span class="fa fa-arrow-down"></span>
            </span>
          </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(-45)">
              <span class="fa fa-undo-alt"></span>
            </span>
          </button>
                    <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(45)">
              <span class="fa fa-redo-alt"></span>
            </span>
          </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scaleX(-1)">
              <span class="fa fa-arrows-alt-h"></span>
            </span>
          </button>
                    <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scaleY(-1)">
              <span class="fa fa-arrows-alt-v"></span>
            </span>
          </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" id="crop" data-method="crop" title="Crop">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.crop()">
              <span class="fa fa-check"></span>
            </span>
          </button>
                    <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.clear()">
              <span class="fa fa-times"></span>
            </span>
          </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.disable()">
              <span class="fa fa-lock"></span>
            </span>
          </button>
                    <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.enable()">
              <span class="fa fa-unlock"></span>
            </span>
          </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.reset()">
              <span class="fa fa-sync-alt"></span>
            </span>
          </button>
                    <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
            <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
            <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
              <span class="fa fa-upload"></span>
            </span>
          </label>
                    <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.destroy()">
              <span class="fa fa-power-off"></span>
            </span>
          </button>
                </div>

                <div class="btn-group btn-group-crop">
                    <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCroppedCanvas({ maxWidth: 4096, maxHeight: 4096 })">
              Get Cropped Canvas
            </span>
          </button>
                    <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCroppedCanvas({ width: 160, height: 90 })">
              160&times;90
            </span>
          </button>
                    <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCroppedCanvas({ width: 320, height: 180 })">
              320&times;180
            </span>
          </button>
                </div>

                <!-- Show the cropped image in modal -->
                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" role="dialog" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                            </div>
                            <div class="modal-body">
                            <img src="" id="sample_image" />
                            </div>
                            <div class="modal-footer" id="down">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a  class="btn btn-primary download" href=""  id="download" download="cropped.jpg" >Download</a>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal -->

                <button type="button" class="btn btn-secondary" data-method="getData" data-option data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getData()">
            Get Data
          </span>
        </button>
                <button type="button" class="btn btn-secondary" data-method="setData" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setData(data)">
            Set Data
          </span>
        </button>
                <button type="button" class="btn btn-secondary" data-method="getContainerData" data-option data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getContainerData()">
            Get Container Data
          </span>
        </button>
                <button type="button" class="btn btn-secondary" data-method="getImageData" data-option data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getImageData()">
            Get Image Data
          </span>
        </button>
                <button type="button" class="btn btn-secondary" data-method="getCanvasData" data-option data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCanvasData()">
            Get Canvas Data
          </span>
        </button>
                <button type="button" class="btn btn-secondary" data-method="setCanvasData" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setCanvasData(data)">
            Set Canvas Data
          </span>
        </button>
                <button type="button" class="btn btn-secondary" data-method="getCropBoxData" data-option data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCropBoxData()">
            Get Crop Box Data
          </span>
        </button>
                <button type="button" class="btn btn-secondary" data-method="setCropBoxData" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setCropBoxData(data)">
            Set Crop Box Data
          </span>
        </button>
                <button type="button" class="btn btn-secondary" data-method="moveTo" data-option="0">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
            Move to [0,0]
          </span>
        </button>
                <button type="button" class="btn btn-secondary" data-method="zoomTo" data-option="1">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
            Zoom to 100%
          </span>
        </button>
                <button type="button" class="btn btn-secondary" data-method="rotateTo" data-option="180">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
            Rotate 180°
          </span>
        </button>
                <button type="button" class="btn btn-secondary" data-method="scale" data-option="-2" data-second-option="-1">
          <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scale(-2, -1)">
            Scale (-2, -1)
          </span>
        </button>
                <textarea class="form-control" id="putData" placeholder="Get data to here or set data with this value"></textarea>

            </div>
            <!-- /.docs-buttons -->

            <div class="col-md-3 docs-toggles">
                <!-- <h3>Toggles:</h3> -->
                <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                    <label class="btn btn-primary active">
            <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.7777777777777777">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
              16:9
            </span>
          </label>
                    <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1.3333333333333333">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
              4:3
            </span>
          </label>
                    <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="1">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
              1:1
            </span>
          </label>
                    <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="0.6666666666666666">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
              2:3
            </span>
          </label>
                    <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio5" name="aspectRatio" value="NaN">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
              Free
            </span>
          </label>
                </div>

                <div class="btn-group d-flex flex-nowrap" data-toggle="buttons">
                    <label class="btn btn-primary active">
            <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
            <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
              VM0
            </span>
          </label>
                    <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
            <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
              VM1
            </span>
          </label>
                    <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
            <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
              VM2
            </span>
          </label>
                    <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
            <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
              VM3
            </span>
          </label>
                </div>

                <div class="dropdown dropup docs-options">
                    <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
            Toggle Options
            <span class="caret"></span>
          </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="toggleOptions">
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="responsive" type="checkbox" name="responsive" checked>
                                <label class="form-check-label" for="responsive">responsive</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="restore" type="checkbox" name="restore" checked>
                                <label class="form-check-label" for="restore">restore</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="checkCrossOrigin" type="checkbox" name="checkCrossOrigin" checked>
                                <label class="form-check-label" for="checkCrossOrigin">checkCrossOrigin</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="checkOrientation" type="checkbox" name="checkOrientation" checked>
                                <label class="form-check-label" for="checkOrientation">checkOrientation</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="modal" type="checkbox" name="modal" checked>
                                <label class="form-check-label" for="modal">modal</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="guides" type="checkbox" name="guides" checked>
                                <label class="form-check-label" for="guides">guides</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="center" type="checkbox" name="center" checked>
                                <label class="form-check-label" for="center">center</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="highlight" type="checkbox" name="highlight" checked>
                                <label class="form-check-label" for="highlight">highlight</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="background" type="checkbox" name="background" checked>
                                <label class="form-check-label" for="background">background</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="autoCrop" type="checkbox" name="autoCrop" checked>
                                <label class="form-check-label" for="autoCrop">autoCrop</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="movable" type="checkbox" name="movable" checked>
                                <label class="form-check-label" for="movable">movable</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="rotatable" type="checkbox" name="rotatable" checked>
                                <label class="form-check-label" for="rotatable">rotatable</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="scalable" type="checkbox" name="scalable" checked>
                                <label class="form-check-label" for="scalable">scalable</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="zoomable" type="checkbox" name="zoomable" checked>
                                <label class="form-check-label" for="zoomable">zoomable</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="zoomOnTouch" type="checkbox" name="zoomOnTouch" checked>
                                <label class="form-check-label" for="zoomOnTouch">zoomOnTouch</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="zoomOnWheel" type="checkbox" name="zoomOnWheel" checked>
                                <label class="form-check-label" for="zoomOnWheel">zoomOnWheel</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="cropBoxMovable" type="checkbox" name="cropBoxMovable" checked>
                                <label class="form-check-label" for="cropBoxMovable">cropBoxMovable</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="cropBoxResizable" type="checkbox" name="cropBoxResizable" checked>
                                <label class="form-check-label" for="cropBoxResizable">cropBoxResizable</label>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="form-check">
                                <input class="form-check-input" id="toggleDragModeOnDblclick" type="checkbox" name="toggleDragModeOnDblclick" checked>
                                <label class="form-check-label" for="toggleDragModeOnDblclick">toggleDragModeOnDblclick</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.dropdown -->

                <a class="btn btn-success btn-block" data-toggle="tooltip" href="https://fengyuanchen.github.io/photo-editor" title="An advanced example of Cropper.js">Photo Editor</a>

            </div>
            <!-- /.docs-toggles -->
        </div>
    </div>
    </form>
					</div>
					</div>
					<!-- end:: Content -->
				</div>
				<!--<div id='all_data1'></div>-->
				<!-- begin:: Footer -->
        <!-- <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__copyright">
								2020&nbsp;©&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Mbin</a>
							</div>
							<div class="kt-footer__menu">
								<a href="" target="_blank" class="kt-footer__menu-link kt-link">About</a>
								<a href="" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
								<a href="" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
							</div>
						</div>
					</div> -->

				<!-- end:: Footer -->
			</div>
		</div>
	</div>

	<!-- end:: Page -->

	<!-- begin::Quick Panel -->


	<!-- end::Quick Panel -->

	<!-- begin::Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>

	<!-- end::Scrolltop -->

	<!-- begin::Sticky Toolbar -->


	<!-- end::Sticky Toolbar -->

	<!-- begin::Demo Panel -->


	<!-- end::Demo Panel -->

	<!--Begin:: Chat-->


	<!--ENd:: Chat-->

	<!-- begin::Global Config(global config for global JS sciprts) -->
	<script>
		var KTAppOptions = {
			"colors": {
				"state": {
					"brand": "#5d78ff",
					"dark": "#282a3c",
					"light": "#ffffff",
					"primary": "#5867dd",
					"success": "#34bfa3",
					"info": "#36a3f7",
					"warning": "#ffb822",
					"danger": "#fd3995"
				},
				"base": {
					"label": [
						"#c5cbe3",
						"#a1a8c3",
						"#3d4465",
						"#3e4466"
					],
					"shape": [
						"#f0f3ff",
						"#d9dffa",
						"#afb4d4",
						"#646c9a"
					]
				}
			}
		};
	</script>


	<!-- end::Global Config -->

	<!--begin::Global Theme Bundle(used by all pages) -->

	<!--end::Global Theme Bundle -->


	<!-- end::Body -->


  </body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="assets/js/pages/dashboard.js" type="text/javascript"></script>

<!--end::Page Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://fengyuanchen.github.io/shared/google-analytics.js" crossorigin="anonymous"></script>
    <script src="js/cropper.js"></script>
    <script src="js/main.js"></script>


    <script src="assets/js/pages/components/extended/cropper.js" type="text/javascript"></script>

    </head>

    <!-- <script>
  function path1(){
			
		var status_id = $(this).attr('href');
    //status_id = Math.random().toString(20).substr(2, 6);
        
            alert(status_id);
	$.ajax({
	type:"post",	
	url:"upload.php",
	data:{path:status_id},
	success:function(data){
	
			
	     alert("ok");
		console.log(data);
	},
	 Error:function(s){	
		alert("Failed to insert the data");
	 }
	});
            
             
			 
			 
		 }    
        
 
    </script> -->
   

<body>

</html>


