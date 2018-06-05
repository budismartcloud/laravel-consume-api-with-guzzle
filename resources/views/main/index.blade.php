<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Image Retrieval</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset("public/css/bootstrap.min.css")}}" />
    <script src="{{asset("public/js/jquery-3.1.1.min.js")}}"></script>
    <script src="{{asset("public/js/caman.full.min.js")}}"></script>
    <script src="{{asset("public/js/popper.min.js")}}"></script>
    <script src="{{asset("public/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("public/js/math.min.js")}}"></script>
</head>
<body>
	<div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Image Retrieval</h1>
        </div>
        <!-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih File</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
                </div><br> -->
        <div class="card">
            <div class="card-body text-capitalize">
                <!-- <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><br> -->
                <div class="card-deck">
                    <div class="card">
                        <img id="img0" src="{{asset("public/img/id.gif")}}" alt="Gambar" class="card-img-top">
                        <!-- <div class="card-body">
                            <label for="file0" class="btn btn-primary btn-disabled">Open File</label>
                            <input type="file" onchange="getImage(0)" id="file0" style="position: fixed; top: -100em">
                        </div> -->
                    </div>
                    <div class="card">
                        <img id="img1" src="{{asset("public/img/au.GIF")}}" alt="Gambar" class="card-img-top">
                        <!-- <div class="card-body">
                            <label for="file1" class="btn btn-primary btn-disabled">Open File</label>
                            <input type="file" onchange="getImage(1)" id="file1" style="position: fixed; top: -100em">
                        </div> -->
                    </div>
                    <div class="card">
                        <img id="img2" src="{{asset("public/img/us.GIF")}}" alt="Gambar" class="card-img-top">
                        <!-- <div class="card-body">
                            <label for="file2" class="btn btn-primary btn-disabled">Open File</label>
                            <input type="file" onchange="getImage(2)" id="file2" style="position: fixed; top: -100em">
                        </div> -->
                    </div>
                    <div class="card">
                        <img id="img3" src="{{asset("public/img/my.GIF")}}" alt="Gambar" class="card-img-top">
                        <!-- <div class="card-body">
                            <label for="file3" class="btn btn-primary btn-disabled">Open File</label>
                            <input type="file" onchange="getImage(3)" id="file3" style="position: fixed; top: -100em">
                        </div> -->
                    </div>
                    <div class="card">
                        <img id="img4" src="{{asset("public/img/tv.GIF")}}" alt="Gambar" class="card-img-top">
                        <!-- <div class="card-body">
                            <label for="file4" class="btn btn-primary btn-disabled">Open File</label>
                            <input type="file" onchange="getImage(4)" id="file4" style="position: fixed; top: -100em">
                        </div> -->
                    </div>
                    <div class="card">
                        <img id="img5" src="{{asset("public/img/ga.GIF")}}" alt="Gambar" class="card-img-top">
                        <!-- <div class="card-body">
                            <label for="file5" class="btn btn-primary btn-disabled">Open File</label>
                            <input type="file" onchange="getImage(5)" id="file5" style="position: fixed; top: -100em">
                        </div> -->
                    </div>
                </div>
                <br>
                <button class="btn btn-primary" id="process" onclick="process(6)">Test</button>
                <br><p class="hidden" hidden>Hasilnya adalah</p>
            </div>
        </div>
    </div>
</body>
</html>