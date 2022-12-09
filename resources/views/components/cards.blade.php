<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<div class="card" style="width: 18rem;">
  <img src="{{ asset($user['foto']) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$user['nama']}}</h5>
    <p class="card-text"><b>Bio = </b> {{$user['bio']}}</p>
    <p class="card-text"><b>Alamat = </b> {{$user['alamat']}}</p>
    <p class="card-text"><b>Status = </b> {{$user['active']}}</p>
    <p class="card-text"><b>Role = </b> {{$user['role']}}</p>
    <p class="card-text"><b>gender = </b> {{$user['gender']}}</p>
    <p class="card-text"><b>City = </b> {{$user['city']}}</p>
    <p class="card-text"><b>password = </b> {{$user['active']}}</p>
    <p class="card-text"><b>state = </b> {{$user['state']}}</p>
  </div>
</div>