<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('template_user/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_user/assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_user/assets/style.css')}}">
    <script src="{{asset('template_user/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template_user/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template_user/assets/js/bootstrap.js')}}"></script>
    <title>Kamus</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light p-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
        <div class="container-fluid">
          <a class="navbar-brand" style="font-size: 20pt;"><strong style="color: blue;">K</strong><strong style="color: red;">a</strong><strong style="color: yellow;">m</strong><strong style="color: blue;">u</strong><strong style="color: red;">s</strong><span style="font-size: 13pt;"> translate</span></a>
          <form class="d-flex">
            <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-bars"></i></button>
          </form>
        </div>
      </nav>
      <div class="col-12 mt-4">
        <marquee scrolldelay="100"><h3>Ayo Lestarikan Bahasa Tajio</h3></marquee>
      </div>
      <div class="container-fluid">
        <a href="#" id="change"><strong id="tittle-translate">Tajio - indonesia</strong></a>
          <form action="" method="" class="mt-3">
              <div class="d-flex justify-content-between">
                    <div class="form-group col-sm-6">
                        <label for="" id="indo-label">Bahasa Indonesia</label>
                        <textarea style="border: none; font-size: 15pt;" name="indo" id="indo" rows="9" class="form-control" placeholder="Masukan kalimat"></textarea>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="" id="daerah-label">Bahasa Tajio</label>
                        <textarea style="border: none; background-color: whitesmoke; font-size: 15pt;" name="" id="hasil" rows="9" class="form-control"></textarea>
                    </div>
              </div>
          </form>
                {{-- <div class="tab mt-4">
                    <button class="tablinks" onclick="openCity(event, 'history')" id="defaultOpen"><b>History</b></button>
                    <button class="tablinks" onclick="openCity(event, 'solved')"><b>Solved</b></button>
                </div>

                <div id="history" class="tabcontent mt-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" id="square">
                                <div class="card-body">
                                    <h4>Result</h4><hr>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas sequi adipisci officia, nemo dolor suscipit inventore maxime cumque quas provident obcaecati quaerat doloremque omnis fugiat ducimus asperiores, veniam culpa sunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" id="square">
                                <div class="card-body">
                                    <h4>Result</h4><hr>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, incidunt? Doloremque recusandae minima cupiditate error est ipsum exercitationem veritatis laboriosam, amet atque repudiandae totam voluptatum cum quae, nostrum porro repellat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" id="square">
                                <div class="card-body">
                                    <h4>Result</h4><hr>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad vel nam atque id nostrum quia libero, sunt, velit repellat quas repellendus aliquid facere sed veniam, vero provident? Recusandae, blanditiis reiciendis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="solved" class="tabcontent mt-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" id="square">
                                <div class="card-body">
                                    <h4>Result</h4><hr>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, incidunt? Doloremque recusandae minima cupiditate error est ipsum exercitationem veritatis laboriosam, amet atque repudiandae totam voluptatum cum quae, nostrum porro repellat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" id="square">
                                <div class="card-body">
                                    <h4>Result</h4><hr>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, incidunt? Doloremque recusandae minima cupiditate error est ipsum exercitationem veritatis laboriosam, amet atque repudiandae totam voluptatum cum quae, nostrum porro repellat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
          </div>
        <footer class="mt-5">
            <i>Created by Yoru-Team 2022</i>
        </footer>

        <script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
        <script>
            function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
            </script>

        <script src="{{asset('template/dist/js/demo.js')}}"></script>

        <script>
          $(document).ready(function() {

            $('body').on('click','#change', function(){
                $('#indo-label').html('Bahasa Tajio');
                $('#indo').attr('name','daerah');
                $('#indo').val('');
                $('#hasil').val('');
                $('#indo').attr('id','daerah');
                $('#daerah-label').html('Bahasa Indonesia');
                $('#tittle-translate').html('Indonesia - Tajio');
                $('#change').attr('id','reverse');
            });

            $('body').on('click','#reverse', function(){
                $('#indo-label').html('Bahasa Indonesia');
                $('#daerah').attr('id','indo');
                $('#daerah').val('');
                $('#hasil').val('');
                $('#daerah').attr('name','daerah');
                $('#daerah-label').html('Bahasa Tajio');
                $('#tittle-translate').html('Tajio - Indonesia');
                $('#reverse').attr('id','change');
            });

            $("body").on('keyup', '#indo' ,function () {
                var indo = $('#indo').val();
                $('#hasil').val('Sedang Mencari Data .....');
                $.ajax({
                    url: '{{route('Sentence.search')}}',
                    data: {
                        'indo': indo
                    },
                    method: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#translateIndo').val(data[0].indonesia);
                        $('#hasil').val(data[0].daerah);
                    },
                });
            });

            $('body').on('keyup','#daerah', function () {
                var indo = $('#daerah').val();
                console.log(indo);
                $('#hasil').val('Sedang Mencari Data .....');
                $.ajax({
                    url: '{{route('Sentence.search2')}}',
                    data: {
                        'indo': indo
                    },
                    method: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#daerah').val(data[0].daerah);
                        $('#hasil').val(data[0].indonesia);
                    },
                });
            });
            });
        </script>
</body>
</html>
