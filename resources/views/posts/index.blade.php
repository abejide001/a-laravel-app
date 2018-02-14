@extends('layout')
@section('css')
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    @endsection
<style>
    .head{
        color:green;
    }
</style>
@section('content')

    <main role="main" class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
            {{--@foreach($post as $pos)--}}
            {{--<a href="/posts/{{$pos->id}}"><h1>{{$pos->title}}</h1></a>--}}
                {{--{{$pos->user->name}} on--}}
            {{--<small>{{$pos->created_at->diffForHumans()}}</small>--}}
                        {{--<p>{{$pos->body}}</p>--}}
                        {{--<hr>--}}

                {{--@endforeach--}}
        <table id="blogs" class="table table-bordered table-hover" cellspacing="5" width="100%">
            <thead class="head">
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                    <th>User_id</th>
            </tr>
            </thead>
            {{--<tbody>--}}

            {{--</tbody>--}}
        </table>

    </main><!-- /.container -->

@endsection
@section('scripts')
    <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
 {{--<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>--}}
    <script>
        $(document).ready(function(){
            $('#blogs').DataTable({
                'proccessing':true,
                'serverSide': true,
                'ajax': '{!! route('posts.data')  !!}',
                'columns':[{'data':'title'},{'data':'body'}, {'data':'user_id'}]
            });
        });
    </script>
    @endsection