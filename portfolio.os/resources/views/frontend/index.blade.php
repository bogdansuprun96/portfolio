@extends('frontend.layout.temp')

@section('content')
    <div class="row">

        <div class="col-md-6 ">
            <div class="panel-group" id="accordion">
                @foreach($info as $item)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $item->id }}">
                                    {{ $item->title }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse{{ $item->id }}" class="panel-collapse collapse in">
                            <div class="panel-body">
                                {{ $item->content }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-6" id="content">
            @foreach($results as $result)
                <div class="panel panel-default panel-news">
                    <div class="panel-heading">{{ $result->id }}|{{ $result->title }}</div>
                    <div class="panel-body">{{ $result->text }}</div>
                </div>
            @endforeach
            <a href="{{ $results->nextPageUrl() }}" class="nextPage">Next</a>
            <script>
                $(function () {
                    $('#content').AutoPagination({
                        nextPageSelector: 'a.nextPage',
                        panelSelector: 'div.panel-news'
                    });
                });
            </script>
        </div>

    </div>
@endsection