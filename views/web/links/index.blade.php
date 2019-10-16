@extends('web.layouts.layout')

@section('content')
    <section class="result text-center">
        <div class="container">
            <h1  class="pb-2 ">Result</h1>
            <div class="row">
                <div class="col-md-12">
                    @if(session('message'))
                        <div class="alert alert-danger">{{ flash('message') }}</div>
                    @endif
                    <table class="table">
                        <tr>
                            <th>Full utl</th>
                            <th>Shorten Link</th>
                            <th>Clicks Count</th>
                            <th>Copy</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($links['data'] as $link)
                            <tr>
                                <td>{{ $link->full_url }}</td>
                                <td>{{ url('link/'.$link->short_url) }}</td>
                                <td>{{ $link->click }}</td>
                                <td> <button class="btn text-white" onclick="copy('{{ url('link/'.$link->short_url) }}')">Copy</button> </td>
                                <td>
                                    <a href="#" data-action="{{ url('link/'. $link->id . '/delete') }}" class="btn btn-danger delete_confirmation" data-toggle="modal" data-target="#deleteModal">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            {!! links($links['current_page'], $links['pages']) !!}
        </div>
    </section>

    @include('web.layouts.delete_modal')
@endsection

@section('js')
    <script>
        function copy(text) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(text).select();
            document.execCommand("copy");
            $temp.remove();
        }
    </script>
@endsection