<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sensor App</title>
</head>
<body>

<div class="card">
    <div class="card-body">
        <div class="container mt-5">
            <div class="row">
                <h2 class="card-header mb-2">Sensor Data</h2>
                <table class="table table-bordered mb-5">
                    @if($sensorData)
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">PH_SENSOR</th>
                            <th scope="col">HUM_SENSOR</th>
                            <th scope="col">TEMP_SENSOR</th>
                            <th scope="col">LIGHT_SENSOR</th>
                            <th scope="col">MOIST_SENSOR</th>
                        </tr>
                        </thead>
                        @foreach($sensorData as $data)
                            <tbody>
                            <tr>
                                <th scope="row">{{$data->id}}</th>
                                <td>{{$data->ph_sensor}}</td>
                                <td>{{$data->hum_sensor}}</td>
                                <td>{{$data->temp_sensor}}</td>
                                <td>{{$data->light_sensor}}</td>
                                <td>{{$data->moist_sensor}}</td>
                            </tr>
                            </tbody>
                        @endforeach
                    @endif
                </table>

                <div class="pagination d-flex justify-content-center">
                    {{$sensorData->links()}}
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
