@extends('parent')
@section('title', 'Tugas Laravue')
@section('content_master')
@php

$users = [
        [
            "nama" => "Daffa",
            "foto" => "image/boboboi.jpg",
            "bio" => "aku adalah respector",
            "active" => false,
            "alamat" => "Jalan Bojong Mancung",
            "role" => "user",
            "gender" => "laki",
            "city" => "Meikartah",
            "password" => "haloword1",
            "state" => "Indonesia",
            ],

             [
            "nama" => "Daffas",
            "foto" => "image/bulan.jpg",
            "bio" => "aku adalah pemancing handal",
            "active" => false,
            "alamat" => "Jalan alamaohyea Mancung",
            "role" => "admin",
            "gender" => "laki",
            "city" => "jakartah",
            "password" => "3haloword1",
            "state" => "Malaysia",
            ],

             [
            "nama" => "udinDaffa",
            "foto" => "image/bunder.jpg",
            "bio" => "aku adalah tukang hook",
            "active" => false,
            "alamat" => "Jalan bersama mantan yang Mancung",
            "role" => "user",
            "gender" => "cewe",
            "city" => "bandung",
            "password" => "1haloword1",
            "state" => "Indonesia jaya",
            ],

             [
            "nama" => "SmilikitiwDaffa",
            "foto" => "image/emot.webp",
            "bio" => "aku adalah tukang kocok",
            "active" => false,
            "alamat" => "Jalan apa aja Mancung",
            "role" => "admin",
            "gender" => "cewe",
            "city" => "Sulsel",
            "password" => "hhaloword1",
            "state" => "Singapur",
            ],

             [
            "nama" => "DaffaUdin",
            "foto" => "image/malaikat.jpg",
            "bio" => "aku adalah tukang makan",
            "active" => false,
            "alamat" => "Jalan bagus Mancung",
            "role" => "admin",
            "gender" => "laki",
            "city" => "Meikartah",
            "password" => "7haloword1",
            "state" => "Indonesia",
            ],

             [
            "nama" => "DaffaPower ranger",
            "foto" => "image/panda.jpg",
            "bio" => "aku ranger merah",
            "active" => false,
            "alamat" => "Jalan menuju kehancuran",
            "role" => "user",
            "gender" => "cewe",
            "city" => "Suramadu",
            "password" => "haloword133",
            "state" => "Vietnam",
            ],

             [
            "nama" => "Daffa Ranger putih",
            "foto" => "image/pedang.jpg",
            "bio" => "melawan ultramen adalah jalan ninjaku",
            "active" => false,
            "alamat" => "Jalan cairan kentel",
            "role" => "user",
            "gender" => "laki",
            "city" => "suraangkeh",
            "password" => "halooeword1",
            "state" => "Amerika",
            ],

             [
            "nama" => "cakDaffa",
            "foto" => "image/pp.jpg",
            "bio" => "aku adalah juara calonya",
            "active" => false,
            "alamat" => "Jalan indah Bojong Mancung",
            "role" => "admin",
            "gender" => "laki",
            "city" => "surakarta",
            "password" => "33haloword1",
            "state" => "Indonesia",
            ],

             [
            "nama" => "slahDaffa",
            "foto" => "image/sejarah.jpg",
            "bio" => "aku adalah kutu ayan",
            "active" => false,
            "alamat" => "Jalan Bojong gede",
            "role" => "user",
            "gender" => "cewe",
            "city" => "Tangerang",
            "password" => "312haloword1",
            "state" => "Thailand",
            ],

             [
            "nama" => "DaffaShalah",
            "foto" => "image/senja.jpg",
            "bio" => "aku adalah orang biasa",
            "active" => false,
            "alamat" => "Jalan Mancung",
            "role" => "user",
            "gender" => "laki",
            "city" => "cipali",
            "password" => "123haloword1",
            "state" => "Indonesia",
            ],

        ];

        $filter = [
                "active" => true,
                "role" => "admin"
            ];


            
@endphp

@foreach($users as $u =>$user)
    @include('components.cards',$user)

@endforeach
@endsection