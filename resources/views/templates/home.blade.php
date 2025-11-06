@extends('layouts.web')

@section('content')
    <!-- prettier-ignore -->
    <!--Home 2 Section 1-->
    @include('components.hero')
    <!--Home 2 Section 2-->
    @include('components.categories')
    <!--Home 2 Section 2-->
    @include('components.blogs-in-category')
    <!--End Home 2 Section 3-->
    @include('components.newsletter')
    <!--Home 2 Section 4-->
    @include('components.staff-picks')
    <!--Home 2 Section 5-->
    @include('components.latest-blogs')
    <!--Home 2 Section 6-->
    @include('components.for-you')
    <!--Home 2 Section 7-->
    @include('components.recommended')
    <!--Home 2 Section 8-->
    @include('components.become-an-author')
@endsection
