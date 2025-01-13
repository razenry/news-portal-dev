<?php

$judul = 'Ini Title Dari Class Component';

?>

<x-halaman-layout :title="$judul">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quasi ea esse earum sit voluptate nobis dolorum aperiam possimus autem!z</p>

    <x-slot name="tanggal">13 Januari</x-slot>
    <x-slot name="penulis">Razenry</x-slot>
</x-halaman-layout>
