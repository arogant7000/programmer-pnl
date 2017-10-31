@extends('admin.master')

@section('page_title')
Edit Kategori
@endsection

@section('content')
  {{ Form::model($category, ['route' => ['categories.update', $category->id], 'method' => "PUT" ]) }}
       {{ Form::label('name', "Kategori:") }}
       {{ Form::text('name',null, ['class'=> 'form-control']) }}

       {{ Form::submit('Save Changes', ['class'=> 'btn btn-success', 'style' => 'margin-top:20px;']) }}
  {{ Form::close() }}
@endsection
