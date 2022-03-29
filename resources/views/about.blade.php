@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3><?php echo $name; ?></h3>
    <p><?php echo $email; ?></p>
    <img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="200">
@endsection
        